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
 
Route::get('/situations', 'SituationsController@index')->name('audit.situations.index');
Route::get('/situations/new', 'SituationsController@create')->name('audit.situations.create');
Route::post('/situations/store', 'SituationsController@store')->name('audit.situations.store');
Route::get('/situations/show/{uuid}', 'SituationsController@show')->name('audit.situations.show');
Route::put('/situations/update/{uuid}', 'SituationsController@update')->name('audit.situations.update');
Route::get('/situations/destroy/{uuid}', 'SituationsController@destroy')->name('audit.situations.destroy');

Route::get('/companies', 'CompaniesController@index')->name('companies.index');
Route::get('/companies/new', 'CompaniesController@create')->name('companies.create');
Route::post('/companies/store', 'CompaniesController@store')->name('companies.store');
Route::get('/companies/show/{uuid}', 'CompaniesController@show')->name('companies.show');
Route::put('/companies/update/{uuid}', 'CompaniesController@update')->name('companies.update');
Route::get('/companies/destroy/{uuid}', 'CompaniesController@destroy')->name('companies.destroy');

Route::get('/companies/{company_uuid}/sectors', 'SectorsController@index')->name('companies.sectors.index');
Route::get('/companies/{company_uuid}/sectors/new', 'SectorsController@create')->name('companies.sectors.create');
Route::post('/companies/{company_uuid}/sectors/store', 'SectorsController@store')->name('companies.sectors.store');
Route::get('/companies/{company_uuid}/sectors/show/{uuid}', 'SectorsController@show')->name('companies.sectors.show');
Route::put('/companies/{company_uuid}/sectors/update/{uuid}', 'SectorsController@update')->name('companies.sectors.update');
Route::get('/companies/{company_uuid}/sectors/destroy/{uuid}', 'SectorsController@destroy')->name('companies.sectors.destroy');

Route::get('/companies/{company_uuid}/sectors/{sector_uuid}/user', 'UsersController@index')->name('companies.sectors.users.index');
Route::get('/companies/{company_uuid}/sectors/{sector_uuid}/user/new', 'UsersController@create')->name('companies.sectors.users.create');
Route::post('/companies/{company_uuid}/sectors/{sector_uuid}/user/store', 'UsersController@store')->name('companies.sectors.users.store');
Route::get('/companies/{company_uuid}/sectors/{sector_uuid}/user/show/{uuid}', 'UsersController@show')->name('companies.sectors.users.show');
Route::put('/companies/{company_uuid}/sectors/{sector_uuid}/user/update/{uuid}', 'UsersController@update')->name('companies.sectors.users.update');
Route::get('/companies/{company_uuid}/sectors/{sector_uuid}/user/destroy/{uuid}', 'UsersController@destroy')->name('companies.sectors.users.destroy');
 
Route::get('/audit', 'AuditController@index')->name('audit.index');
Route::get('/audit/new', 'AuditController@create')->name('audit.create');
Route::post('/audit/store', 'AuditController@store')->name('audit.store');
Route::get('/audit/show/{uuid}', 'AuditController@show')->name('audit.show');
Route::put('/audit/update/{uuid}', 'AuditController@update')->name('audit.update');
Route::get('/audit/destroy/{uuid}', 'AuditController@destroy')->name('audit.destroy');
Route::put('/audit/show/{uuid}/edit', 'AuditController@edit')->name('audit.requirements.edit');

Route::get('/audit/references', 'ReferenceController@index')->name('audit.references.index');
Route::get('/audit/references/new', 'ReferenceController@create')->name('audit.references.create');
Route::post('/audit/references/store', 'ReferenceController@store')->name('audit.references.store');
Route::get('/audit/references/show/{uuid}', 'ReferenceController@show')->name('audit.references.show');
Route::put('/audit/references/update/{uuid}', 'ReferenceController@update')->name('audit.references.update');
Route::get('/audit/references/destroy/{uuid}', 'ReferenceController@destroy')->name('audit.references.destroy');

Route::get('/audit/requirements', 'RequirementController@index')->name('audit.requirements.index');
Route::get('/audit/requirements/new', 'RequirementController@create')->name('audit.requirements.create');
Route::post('/audit/requirements/store', 'RequirementController@store')->name('audit.requirements.store');
Route::get('/audit/requirements/show/{uuid}', 'RequirementController@show')->name('audit.requirements.show');
Route::put('/audit/requirements/update/{uuid}', 'RequirementController@update')->name('audit.requirements.update');
Route::get('/audit/requirements/destroy/{uuid}', 'RequirementController@destroy')->name('audit.requirements.destroy');

Route::get('/audit/requirements/evidences', 'EvidencesController@index')->name('audit.requirements.evidences.index');
Route::get('/audit/requirements/evidences/new', 'EvidencesController@create')->name('audit.requirements.evidences.create');
Route::post('/audit/requirements/evidences/store', 'EvidencesController@store')->name('audit.requirements.evidences.store');
Route::get('/audit/requirements/evidences/show/{uuid}', 'EvidencesController@show')->name('audit.requirements.evidences.show');
Route::get('/audit/requirements/evidences/destroy/{uuid}', 'EvidencesController@destroy')->name('audit.requirements.evidences.destroy');





