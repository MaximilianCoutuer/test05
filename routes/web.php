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
	$name = 'World2';
	$tasks = ['Task1', 'Task2', 'Task3'];
	$tasks = DB::table('tasks')->where('created_on', '>= 1')->get();
    return view('welcome', compact('tasks'));
    //compact('name')
    // ('welcome')->with('name', 'World');
});
