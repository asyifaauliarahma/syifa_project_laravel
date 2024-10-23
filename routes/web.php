<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index'); // merujuk ke file welcome.blade.php di folder
});

Route::get('/', function () {
    return view('welcome'); // merujuk ke file welcome.blade.php di folder
});


Route::get('/about', function () {
    return view ('about'); 
});

Route::get('/login', function () {
    return view('login'); // merujuk ke file welcome.blade.php di folder
});