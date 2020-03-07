<?php
use JasperPHP\JasperPHP;
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

Route::get('/lista', 'AlunoController@index')->name('lis');
Route::get('/t', 'AlunoController@create')->name('cas');
Route::post('/t', 'AlunoController@store');
Route::get('/relatorio', 'RelatorioController@index')->name('relator');



