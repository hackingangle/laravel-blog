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

Route::get('about', function () {
   return view('about');
});

/**
 * view with data
 */
Route::get('tasks', function () {
    $tasks = [
        '超时买菜',
        '完成代码极限挑战',
        '看书',
    ];
    return view('tasks.index', compact('tasks'));
});