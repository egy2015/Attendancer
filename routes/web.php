<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.dashboard');
});

Route::get('/absener', 'AbsenerController@classAtt')->name('classAtt');
Route::post('/qr', 'AbsenerController@showQR')->name('showQR');
Route::get('/list/{id}', 'AbsenerController@addList')->name('addList');
Route::post('/list/{id}/save', 'AbsenerController@saveList')->name('saveList');
Route::get('/list/show/', 'AbsenerController@index')->name('index');
Route::get('test', fn () => phpinfo());