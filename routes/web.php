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
Route::get('/pessoa', 'Cadastro\PessoaController@index')->name('pessoa');
Route::get('/user', 'Cadastro\UserController@index')->name('user');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('roles-permissions', 'HomeController@rolespermissions')->name('perfil');

