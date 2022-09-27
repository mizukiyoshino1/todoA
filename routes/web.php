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
