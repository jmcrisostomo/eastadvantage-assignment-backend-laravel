<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // GET /api/users
    public function index(Request $request)
    {
        $role = $request->query('role');

        $query = User::with('roles');

        if ($role) {
            $query->whereHas('roles', fn($q) => $q->where('name', $role));
        }

        return response()->json($query->get());
    }

    // POST /api/users
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email',
            'roles'     => 'required|array',
            'roles.*'   => 'exists:roles,id',
        ]);

        $user = User::create([
            'full_name' => $validated['full_name'],
            'email'     => $validated['email'],
        ]);

        $user->roles()->sync($validated['roles']);

        $user->load('roles');

        return response()->json($user, 201);
    }
}
