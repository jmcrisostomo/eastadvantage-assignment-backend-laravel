# Eastvantage Assignment – Backend API

#### Tech Stack

-   Laravel 8
-   MySQL
-   Eloquent ORM

#### Clone the repository and install dependencies:

```bash
git clone https://github.com/jmcrisostomo/eastadvantage-assignment-backend-laravel.git
cd backend
composer install
cp .env.example .env
php artisan key:generate
```

#### Configure .env for database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_eastvantage_assignment
DB_USERNAME=root
DB_PASSWORD=
```

#### Run migrations and seed roles:

```bash
php artisan migrate --seed
```

#### This seeds the roles table with:

-   Author
-   Editor
-   Subscriber
-   Administrator

#### Start the server:

```bash
php artisan serve
```
