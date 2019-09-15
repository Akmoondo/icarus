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
Route::get('/requisitos/{id}', 'RequisitosController@show');
Route::get('/auditoria', 'AuditoriasController@show');
Route::get('/dashboard', 'DashboardsController@index')->name('dashboard.index');
Route::get('/avisos', 'AvisosController@index')->name('aviso.index');
Route::get('/logs', 'logsController@index')->name('logs.index');