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
Route::get('/sharePass', 'SharepassController@index');
//Route::post('sharePass', 'SharepassController@Get_password');
Route::get('sharePass', 'SharepassController@Show_password');
Route::resource('/sharePass', 'SharepassController');
Route::post('/sharePass', 'SharepassController@store');
Route::get('/sharePass', 'SharepassController@show');