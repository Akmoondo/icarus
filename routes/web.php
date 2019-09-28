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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('auditoria/requisitos/{id}', 'RequisitosController@show')->name("requisito.show");
Route::get('/auditoria', 'RequisitosController@index')->name('auditoria.index');
Route::get('/dashboard', 'DashboardsController@index')->name('dashboard.index');