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

Route::get('/init', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/', 'AuditController@getCompany')->name('dashboard.index');

    Route::get('/roles', 'RolesController@index')->name('roles.index');
    Route::get('/roles/create', 'RolesController@create')->name('roles.create');
    Route::post('/roles', 'RolesController@save')->name('roles.save');
    Route::get('/roles/{uuid}', 'RolesController@show')->name('roles.show');
    Route::put('/roles/{uuid}', 'RolesController@update')->name('roles.update');
    Route::get('/roles/{uuid}/delete', 'RolesController@destroy')->name('roles.destroy');

    Route::get('/roles/{role_uuid}/privileges', 'PrivilegesController@index')->name('roles.privileges.index');
    Route::post('/roles/{role_uuid}/privileges', 'PrivilegesController@saveRolesPrivileges')->name('roles.privileges.save');
    // Route::get('/roles/{role_uuid}/privileges/{uuid}', 'PrivilegesController@show')->name('roles.privileges.show');
    // Route::put('/roles/{role_uuid}/privileges/{uuid}', 'PrivilegesController@update')->name('roles.privileges.update');
    // Route::delete('/roles/{role_uuid}/privileges/{uuid}', 'PrivilegesController@destroy')->name('roles.privileges.destroy');

    Route::get('privileges', 'PrivilegesController@create')->name('privileges.create');
    Route::post('privileges/new', 'PrivilegesController@store')->name('privileges.store');

    Route::get('/situations', 'SituationsController@index')->name('audit.situations.index');
    Route::get('/situations/new', 'SituationsController@create')->name('audit.situations.create');
    Route::post('/situations/store', 'SituationsController@store')->name('audit.situations.store');
    Route::get('/situations/show/{uuid}', 'SituationsController@show')->name('audit.situations.show');
    Route::put('/situations/update/{uuid}', 'SituationsController@update')->name('audit.situations.update');
    Route::get('/situations/destroy/{uuid}', 'SituationsController@destroy')->name('audit.situations.destroy');

    Route::get('/validations', 'ValidationsController@index')->name('audit.validations.index');
    Route::get('/validations/new', 'ValidationsController@create')->name('audit.validations.create');
    Route::post('/validations/store', 'ValidationsController@store')->name('audit.validations.store');
    Route::get('/validations/show/{uuid}', 'ValidationsController@show')->name('audit.validations.show');
    Route::put('/validations/update/{uuid}', 'ValidationsController@update')->name('audit.validations.update');
    Route::get('/validations/destroy/{uuid}', 'ValidationsController@destroy')->name('audit.validations.destroy');

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

    Route::get('/audit', 'AuditController@getCompany')->name('audit.getCompany');
    Route::get('/audit/{company_uuid}', 'AuditController@getSector')->name('audit.getSector');
    Route::get('/audit/{company_uuid}/{sector_uuid}', 'AuditController@audit')->name('audit.audit');
    Route::get('/audit/{company_uuid}/{sector_uuid}/requirements/new', 'RequirementController@create')->name('audit.requirements.create');
    Route::get('/audit/show/{company_uuid}/{sector_uuid}/{requirement_uuid}', 'AuditController@show')->name('audit.show');

    Route::get('/audit/new', 'AuditController@create')->name('audit.create');
    Route::post('/audit/store', 'AuditController@store')->name('audit.store');
    Route::put('/audit/update/{uuid}', 'AuditController@update')->name('audit.update');
    Route::get('/audit/destroy/{uuid}', 'AuditController@destroy')->name('audit.destroy');
    Route::put('/audit/show/{uuid}/edit', 'AuditController@edit')->name('audit.requirements.edit');
    Route::put('/audit/show/{uuid}/editValidation', 'AuditController@editValidation')->name('audit.requirements.editValidation');

    Route::get('/references', 'ReferenceController@index')->name('references.index');
    Route::get('/references/new', 'ReferenceController@create')->name('references.create');
    Route::post('/references/store', 'ReferenceController@store')->name('references.store');
    Route::get('/references/show/{uuid}', 'ReferenceController@show')->name('references.show');
    Route::put('/references/update/{uuid}', 'ReferenceController@update')->name('references.update');
    Route::get('/references/destroy/{uuid}', 'ReferenceController@destroy')->name('references.destroy');

    Route::get('/audit/requirements', 'RequirementController@index')->name('audit.requirements.index');

    Route::post('/audit/requirements/store', 'RequirementController@store')->name('audit.requirements.store');
    Route::get('/audit/requirements/show/{uuid}', 'RequirementController@show')->name('audit.requirements.show');
    Route::put('/audit/requirements/update/{uuid}', 'RequirementController@update')->name('audit.requirements.update');
    Route::get('/audit/requirements/destroy/{uuid}', 'RequirementController@destroy')->name('audit.requirements.destroy');

    Route::get('/audit/requirements/evidences', 'EvidencesController@index')->name('audit.requirements.evidences.index');
    Route::get('/audit/requirements/{requirement_uuid}/evidences/new', 'EvidencesController@create')->name('audit.requirements.evidences.create');
    Route::post('/audit/requirements/{requirement_uuid}/evidences/store', 'EvidencesController@store')->name('audit.requirements.evidences.store');
    Route::get('/audit/requirements/evidences/show/{uuid}', 'EvidencesController@show')->name('audit.requirements.evidences.show');
    Route::get('/audit/requirements/evidences/download/{uuid}', 'EvidencesController@download')->name('audit.requirements.evidences.download');
    //Route::get('/audit/requirements/evidences/edit/{uuid}', 'EvidencesController@edit')->name('audit.requirements.evidences.edit');
    Route::get('/audit/requirements/evidences/destroy/{uuid}', 'EvidencesController@destroy')->name('audit.requirements.evidences.destroy');
});
