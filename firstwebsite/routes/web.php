<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/portfolio/{firstName}/{second}', function ($firstName, $lastName) {
    // return view('portfolio');
    return $firstName .  ' ' . $lastName;
});

//named routes
Route::get('/test', function () {
    return 'this is a test';
})->name('testpage');


//grouped routes
Route::get('/portfolio', function () {
    return view("portfolio");
})->name("portfolio");

Route::prefix('portfolio')->group(function () {
    Route::get('/company', function () {
        return view("company");
    })->name("company");

    Route::get('/organization', function () {
        return view("organization");
    })->name("organization");
});
