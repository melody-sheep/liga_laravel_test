<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## 🚀 Successfully Installed Laravel 12.48.1

### Student Information
- **Name:** Alther Adrian P. Liga
- **Course:** BSIT
- **Year:** 3rd Year
- **Project:** Laravel Application for Integrative Programming & Tech

### Project Screenshots

#### 1. Laravel Welcome Page (Successfully Running)
![Laravel Welcome Page](screenshots/ss1.png)

#### 2. Custom API Route Working
![API Route Success](screenshots/ss2.png)

#### 3. Web Route Working
![Web Route Success](screenshots/ss3.png)

#### 4. Project Structure
![Project Structure](screenshots/ss4.png)

### Installation Success Details
✅ **PHP Version:** 8.5.1  
✅ **Laravel Version:** 12.48.1  
✅ **Database:** SQLite (configured)  
✅ **Routes Working:** `/`, `/api/user`, custom routes  
✅ **Server Running:** `php artisan serve`  

### Custom Routes Implemented
```php
// Web Routes (routes/web.php)
Route::get('/alther', function () {
    return 'Hello World! My name is Alther Adrian P. Liga';
});

Route::get('/profile', function () {
    return '<h1>Alther Adrian P. Liga</h1><p>3rd Year BSIT</p>';
});

// API Routes (routes/api.php)  
Route::get('/user', function (Request $request) {
    return response()->json([
        'message' => 'Hello World! My name is Alther Adrian P. Liga',
        'data' => $request->user()
    ]);
});
