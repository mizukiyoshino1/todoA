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

Auth::routes();

// homeの遷移
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// メイン画面遷移
Route::get('/index', 'App\Http\Controllers\TaskController@index')->name('tasks.index');

//新規投稿画面遷移
Route::get('/tasks/create', 'App\Http\Controllers\TaskController@create')->name('tasks.create');

Route::post('/tasks', 'App\Http\Controllers\TaskController@store')->name('tasks.store');

//edit画面を表示させる
Route::get('/tasks/{id}/edit', 'App\Http\Controllers\TaskController@edit')->name('tasks.edit');

Route::patch('/tasks/{id}', 'App\Http\Controllers\TaskController@update')->name('tasks.update');

Route::get('/tasks/{id}', 'App\Http\Controllers\TaskController@destroy')->name('tasks.destroy');