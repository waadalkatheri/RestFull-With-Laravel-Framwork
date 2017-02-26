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
Route::post('account/insert','AcountsControlat@insert');
Route::get('account/getAll','AcountsControlat@getAll');
Route::get('account/getByID/{id}','AcountsControlat@getByID');