<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/index', function () {
//     return view('index'); // merujuk ke file welcome.blade.php di folder
// });

Route::get('/', function () {
    return view('welcome'); // merujuk ke file welcome.blade.php di folder
});


// Route::get('/about', function () {
//     return view ('about'); 
// });

// Route::get('/login', function () {
//     return view('login'); // merujuk ke file welcome.blade.php di folder
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/login', [HomeController::class, 'login'])->name('login');