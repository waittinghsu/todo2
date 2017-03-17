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


Route::delete('/',["as"=>"delete.todo","uses"=>"MainController@delete"]);

Route::put('/',["as"=>"update.todo","uses"=>"MainController@update"]);

Route::post('/',["as"=>"create.todo","uses"=>"MainController@create"]);

