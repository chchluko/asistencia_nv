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

Route::resource('emails', EmailController::class)->middleware('auth');
Route::get('searchemail', 'EmailController@searchEmail')->name('buscarmail')->middleware('auth');
Route::resource('trackingemails', TrackingEmailController::class)->middleware('auth');
Route::resource('cat_emails', EmailTypeController::class)->middleware('auth');
Route::get('searchtrackingemail', 'TrackingEmailController@searchTrackingEmail')->name('auditaremail')->middleware('auth');
Route::get('reporttrackingemailbyuser/{user}', 'TrackingEmailController@reportTrackingByUser')->name('trackingreport')->middleware('auth');
Route::get('reporttrackingemail/{email}', 'TrackingEmailController@reportTrackingEmailByEmail')->name('trackingreportemail')->middleware('auth');


