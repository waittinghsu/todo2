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

Route::get('/',["as"=>"index.index","uses"=>"MainController@index"]);

Route::delete('{id}/delete',["as"=>"delete.todo","uses"=>"TasksController@delete"]);

Route::put('{id}/update',["as"=>"update.todo","uses"=>"TasksController@update"]);

Route::post('create',["as"=>"create.todo","uses"=>"TasksController@create"]);

