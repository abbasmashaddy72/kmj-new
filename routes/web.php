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

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth', 'namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('homepage', 'HomePageController@index')->name('homepage');
    Route::get('contact-us', 'ContactUsController@index')->name('contactUs');
    Route::get('about-us', 'AboutUsController@index')->name('aboutUs');
    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => 'auth'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
    Route::resource('blog', 'BlogController');
});

require __DIR__ . '/auth.php';
