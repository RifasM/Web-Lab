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

Route::get('/program1', function () {
    return view('program1');
});

Route::get('/program2', function () {
    return view('program2');
});

Route::get('/program3', function () {
    return view('program3');
});

Route::get('/program4', function () {
    return view('program4');
});

Route::get('/program5', function () {
    return view('program5');
});

Route::get('/program6', function () {
    return view('program6');
});

Route::get('/program7', function () {
    return view('program7');
});

Route::any('/program8', function () {
    return view('program8');
});

Route::any('/program9', function () {
    return view('program9');
});

Route::any('/program10', function () {
    return view('program10');
});
