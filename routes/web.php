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

Route::get('/tasks', 'TasksController@index')->name('tasks.index');

Route::post('/tasks', 'TasksController@store')->name('tasks.store');
Route::delete('/tasks/view/{task}', 'TasksController@destroy')->name('tasks.destroy');

// view task route
Route::get('/tasks/view', 'TasksController@tasks')->name('tasks.view');

Route::post('/tasks/sub/{task}', 'SubTasksController@store')->name('subtasks.add');
Route::patch('/tasks/view/sub/{subtask}', 'SubTasksController@update')->name('subtasks.update');
