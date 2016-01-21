<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return Redirect::route('user.login');
});
   
Route::get('login',                     ['as' => 'user.login',                  'uses' => 'UserController@login']);
Route::post('doLogin',                  ['as' => 'user.doLogin',                'uses' => 'UserController@doLogin']);

Route::get('domain',                    ['as' => 'domain',                      'uses' => 'DomainController@index']);
Route::get('domain/create',             ['as' => 'domain.create',               'uses' => 'DomainController@create']);
Route::post('domain/store',             ['as' => 'domain.store',                'uses' => 'DomainController@store']);
Route::get('domain/delete/{id}',        ['as' => 'domain.delete',               'uses' => 'DomainController@delete']);
Route::get('domain/edit/{id}',          ['as' => 'domain.edit',                 'uses' => 'DomainController@edit']);

Route::get('language',                  ['as' => 'language',                    'uses' => 'LanguageController@index']);
Route::get('language/create',           ['as' => 'language.create',             'uses' => 'LanguageController@create']);
Route::post('language/store',           ['as' => 'language.store',              'uses' => 'LanguageController@store']);
Route::get('language/edit/{id}',        ['as' => 'language.edit',               'uses' => 'LanguageController@edit']);
Route::get('language/delete/{id}',      ['as' => 'language.delete',             'uses' => 'LanguageController@delete']);

Route::get('template',                  ['as' => 'template',                    'uses' => 'TemplateController@index']);
Route::get('template/create',           ['as' => 'template.create',             'uses' => 'TemplateController@create']);
Route::post('template/store',           ['as' => 'template.store',              'uses' => 'TemplateController@store']);
Route::get('template/delete/{id}',      ['as' => 'template.delete',             'uses' => 'TemplateController@delete']);
Route::get('template/edit/{id}',        ['as' => 'template.edit',               'uses' => 'TemplateController@edit']);
