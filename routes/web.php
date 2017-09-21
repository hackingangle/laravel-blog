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
 * view with data(from the db build query)
 */
Route::get('tasks', function () {
    $tasks = DB::table('tasks')->get();
    return view('tasks.index', compact('tasks'));
});

// db query
Route::get('tasks/{task}', function($id) {
    $task = DB::table('tasks')
        ->where('id', $id)
        ->first();
    return view('tasks.show', compact('task'));
});
