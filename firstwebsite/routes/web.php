<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

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

Route::get('/form', function () {
    return view("form");
})->name("form");

// POST routes
Route::post("/formsubmitted", function (Request $request) {
    $request->validate([
        'fullname' => 'required|min:3|max:30',
        'email' => 'required|min:6|email'
    ]);

    $fullname = $request->input('fullname');
    $email = $request->input('email');

    return "Form was submitted! full name=$fullname , email=$email";
})->name("formsubmitted");
