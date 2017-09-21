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

use App\Task;

/**
 * view with data(from the db build query)
 */
Route::get('tasks', function () {
    $tasks = Task::all();
    return view('tasks.index', compact('tasks'));
});

// db query
Route::get('tasks/{task}', function($id) {
    DB::listen(function ($query) {
       echo "$query->sql\n";
    });
    $task = Task::where('id', $id)
        ->notCompleted()
        ->first();
    return view('tasks.show', compact('task'));
});
