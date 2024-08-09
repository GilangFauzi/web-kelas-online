<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Installation

1. Clone this repository.
     ```bash
     git clone https://github.com/GilangFauzi/web-kelas-online.git
     
2. Install dependencies.
     ```bash
     composer install
   
4. Copy the **.env.example** file into **.env** and configure the **.env** file.
     ```bash
     php artisan key:generate

5. Run the database migration.
     ```bash
     php artisan migrate
     
6. Run Seeder
      ```bash
   php artisan db:seed --class=UserSeeder
   php artisan db:seed --class=MentorSeeder
   php artisan db:seed --class=ClassesSeeder
   php artisan db:seed --class=SubscriptionSeeder

7. Run the Laravel development server.
     ```bash
     php artisan serve  
     The project is now accessible at [http://localhost:8000](http://localhost:8000).

8. Open Postman & Paste URL
   ```bash
   http://localhost:8000/api/calculate-revenue [Method: GET]
   http://localhost:8000/api/watch-time [Method: POST | Body form-data: user_id, class_id, minutes]
   
9. Alternatively, if you want to enter watch time data directly, run this seed (Optional)
   ```bash
   php artisan db:seed --class=WatchTimeSeed
## Directory Structure

Here is the main directory structure in the project:

- app: Contains the business logic and application model.
- public: Public access directory, including static files and application entry points.
- resources: Resource files such as views and blade files.
- routes: Route definition and route settings.
