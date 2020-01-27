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
Route::get('/', 'PageController@welcome');
Route::get('about', 'PageController@about');
Route::get('test', 'TestController@test');
Route::get('pricing', 'PageController@pricing');
Route::get('profile', 'PageController@profile');
Route::get('profile/update', 'PageController@profileupdate');
Route::get('terms', 'PageController@terms');
Route::get('policy', 'PageController@policy');
Route::get('status', 'PageController@status');

// Post Controller
Route::resource('posts', 'PostController');

// Profile Pages
Route::get('profile', 'ProfileController@show');

// Plugin Pages
Route::prefix('plugins')->group(function () {
    Route::get('shopify', 'PageController@shopify');
    Route::get('wordpress', 'PageController@wordpress');
    Route::get('mybb', 'PageController@mybb');
    Route::get('phpbb', 'PageController@phpbb');
    Route::get('prestashop', 'PageController@prestashop');
});

Route::get('/login', function() {
    return view('auth/login');
});

Route::get('/register', function() {
    return view('auth/register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
