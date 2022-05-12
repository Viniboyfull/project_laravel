<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/quem-somos', function () {
    return view('quem-somos');
});

Route::get('/framework', function () {
    return view('framework');
});

Route::get('/vantagens_framework', function () {
    return view('vantagens_framework');
});

Route::get('/serve_composer', function () {
    return view('serve_composer');
});

Route::get('/serve_artisan_laravel', function () {
    return view('serve_artisan_laravel');
});

Route::get('/para_que_serve_blade', function () {
    return view('para_que_serve_blade');
});
