<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index',[
        // 'name' => 'Sam'
    ]);
});

Route::get('/hello', function () {
    return 'Hello World';
})->name('hello');

Route::get('/hellotest', function () {
    return redirect()->route('hello');
});

Route::get('/greet/{name}', function ($name) {
    return 'Hello ' . $name;
});

Route::fallback(function () {
    return 'This is a fallback route';
});