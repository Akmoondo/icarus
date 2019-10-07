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

Route::get('/', 'DashboardController@index')->name('dashboard.index');

Route::get('/roles', 'RolesController@index')->name('roles.index');
Route::post('/roles', 'RolesController@save')->name('roles.save');
Route::get('/roles/{uuid}', 'RolesController@show')->name('roles.show');
Route::put('/roles/{uuid}', 'RolesController@update')->name('roles.update');
Route::delete('/roles/{uuid}', 'RolesController@destroy')->name('roles.destroy');

Route::get('/privileges', 'PrivilegesController@index')->name('privileges.index');
Route::post('/privileges', 'PrivilegesController@save')->name('privileges.save');
Route::get('/privileges/{uuid}', 'PrivilegesController@show')->name('privileges.show');
Route::put('/privileges/{uuid}', 'PrivilegesController@update')->name('privileges.update');
Route::delete('/privileges/{uuid}', 'PrivilegesController@destroy')->name('privileges.destroy');

Route::get('/situations', 'SituationsController@index')->name('situations.index');
Route::get('/situations/new', 'SituationsController@create')->name('situations.create');
Route::post('/situations/store', 'SituationsController@store')->name('situations.store');
Route::get('/situations/show/{uuid}', 'SituationsController@show')->name('situations.show');
Route::put('/situations/update/{uuid}', 'SituationsController@update')->name('situations.update');
Route::get('/situations/destroy/{uuid}', 'SituationsController@destroy')->name('situations.destroy');

Route::get('/evidences', 'EvidencesController@index')->name('evidences.index');
Route::get('/evidences/new', 'EvidencesController@create')->name('evidences.create');
Route::post('/evidences/store', 'EvidencesController@store')->name('evidences.store');
Route::get('/evidences/show/{uuid}', 'EvidencesController@show')->name('evidences.show');
Route::get('/evidences/destroy/{uuid}', 'EvidencesController@destroy')->name('evidences.destroy');

Route::get('/companies', 'CompaniesController@index')->name('companies.index');
Route::get('/companies/new', 'CompaniesController@create')->name('companies.create');
Route::post('/companies/store', 'CompaniesController@store')->name('companies.store');
Route::get('/companies/show/{uuid}', 'CompaniesController@show')->name('companies.show');
Route::put('/companies/update/{uuid}', 'CompaniesController@update')->name('companies.update');
Route::get('/companies/destroy/{uuid}', 'CompaniesController@destroy')->name('companies.destroy');

Route::get('/sectors', 'SectorsController@index')->name('sectors.index');
Route::get('/sectors/new', 'SectorsController@create')->name('sectors.create');
Route::post('/sectors/store', 'SectorsController@store')->name('sectors.store');
Route::get('/sectors/show/{uuid}', 'SectorsController@show')->name('sectors.show');
Route::put('/sectors/update/{uuid}', 'SectorsController@update')->name('sectors.update');
Route::get('/sectors/destroy/{uuid}', 'SectorsController@destroy')->name('sectors.destroy');

Route::get('/references', 'ReferenceController@index')->name('references.index');
Route::get('/references/new', 'ReferenceController@create')->name('references.create');
Route::post('/references/store', 'ReferenceController@store')->name('references.store');
Route::get('/references/show/{uuid}', 'ReferenceController@show')->name('references.show');
Route::put('/references/update/{uuid}', 'ReferenceController@update')->name('references.update');
Route::get('/references/destroy/{uuid}', 'ReferenceController@destroy')->name('references.destroy');

Route::get('/requirements', 'RequirementController@index')->name('requirements.index');
Route::get('/requirements/new', 'RequirementController@create')->name('requirements.create');
Route::post('/requirements/store', 'RequirementController@store')->name('requirements.store');
Route::get('/requirements/show/{uuid}', 'RequirementController@show')->name('requirements.show');
Route::put('/requirements/update/{uuid}', 'RequirementController@update')->name('requirements.update');
Route::get('/requirements/destroy/{uuid}', 'RequirementController@destroy')->name('requirements.destroy');


Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/users/new', 'UsersController@create')->name('users.create');
Route::post('/users/store', 'UsersController@store')->name('users.store');
Route::get('/users/show/{uuid}', 'UsersController@show')->name('users.show');
Route::put('/users/update/{uuid}', 'UsersController@update')->name('users.update');
Route::get('/users/destroy/{uuid}', 'UsersController@destroy')->name('users.destroy');
