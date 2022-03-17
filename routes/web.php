<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Recaudation;
use Illuminate\Support\Facades\View;

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mapa', 'HomeController@mapa')->name('mapa');
Route::get('/mapa2', 'HomeController@mapaComplete')->name('mapa2');
Route::get('/create-user', 'UserController@formUser')->name('create.user');
Route::post('/store-user', 'UserController@store')->name('create.store');
Route::post('/update-user', 'UserController@update')->name('user.update');
Route::post('/update-user-save', 'UserController@updateUser')->name('user.update.save');


Route::group(['prefix' => 'data'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('data.dashboard');
});
