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
    return view('welcome');
});

// メイン画面遷移
Route::get('/index', 'App\Http\Controllers\TaskController@index')->name('tasks.index');

//新規投稿画面遷移
Route::get('/tasks/create', 'App\Http\Controllers\TaskController@create')->name('tasks.create');

Route::post('/tasks', 'App\Http\Controllers\TaskController@store')->name('tasks.store');