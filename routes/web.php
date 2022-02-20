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

Route::view('/contact', 'contact');

Route::view('/about', 'about');

Route::view('/pricing', 'pricing');

Route::view('/blog-grids', 'blog-grids');

Route::view('/blog-details', 'blog-details');

Route::view('/sign-up', 'sign-up');

Route::view('/sign-in', 'sign-in');

Route::view('/404', '404');
