<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Create user with multiple roles
Route::post('/users', [UserController::class, 'store']);

// Get all users (optional filter by ?role=Author)
Route::get('/users', [UserController::class, 'index']);

// Get single user (with roles)
// Route::get('/users/{id}', [UserController::class, 'show']);

// Update user + roles
// Route::put('/users/{id}', [UserController::class, 'update']);

// Delete user
// Route::delete('/users/{id}', [UserController::class, 'destroy']);
