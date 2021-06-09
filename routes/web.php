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

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/


Route::get('/tareas', 'TaskController@index');
Route::put('/tareas/actualizar', 'TaskController@update');
Route::post('/tareas/guardar', 'TaskController@store');
Route::delete('/tareas/borrar/{id}', 'TaskController@destroy');
Route::get('/tareas/buscar', 'TaskController@show');


Route::get('adminlte/', function () {
    return view('adminlte');
});

/*Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');*/

Route::get('notes', 'NotesController@index');
Route::get('notes/{id}/destroy', 'NotesController@destroy')->name('notes.destroy');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('justificar', 'ReceiptController')->middleware('auth');
Route::resource('checar', 'MarcajeController')->middleware('auth');

Route::name('admin')->resource('roles', Admin\RoleController::class)->names('roles');
Route::name('admin')->resource('users', Admin\UserController::class)->only('index','edit','update')->names('users');
