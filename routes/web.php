<?php

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

use Illuminate\Support\Facades\Route;



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'DashboardController@index');

Route::get('/roles', 'RolesController@index')->name('roles.index');
Route::post('/roles', 'RolesController@save')->name('roles.save');
Route::get('/roles/{uuid}', 'RolesController@show')->name('roles.show');
Route::put('/roles/{uuid}', 'RolesController@update')->name('roles.update');
Route::delete('/routes/{uuid}', 'RolesController@destroy')->name('roles.destroy');

Route::get('companies', 'CompaniesController@index')->name('companies.index');
