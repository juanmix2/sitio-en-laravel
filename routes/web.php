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

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/cursos', function () {
    return view('cursos');
});
Route::get('/instructores', function () {
    return view('instructores');
});
Route::get('/promos', function () {
    return view('promos');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/inscribete', function () {
    return view('inscribete');
});
Route::get('/ubicacion', function () {
    return view('ubicacion');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rutas de client
Route::get('/client', 'ClientController@index')->name('index');
Route::get('/agregarcliente', 'ClientController@create')->name('create');
Route::post('/guardarcliente', 'ClientController@store')->name('store');
Route::delete('/borrarcliente/{id}','ClientController@destroy')->name('destroy');
Route::get('/editarcliente/{id}/edit','ClientController@edit')->name('edit');
Route::patch('/editarcliente/{id}','ClientController@update')->name('update');


//rutas de instructor
Route::get('/instructor', 'InstructorController@index')->name('index');
Route::get('/agregarinstructor', 'InstructorController@create')->name('create');
Route::post('/guardarinstructor', 'InstructorController@store')->name('store');
Route::delete('/borrarinstructor/{id}','InstructorController@destroy')->name('destroy');
Route::get('/editarinstructor/{id}/edit','InstructorController@edit')->name('edit');
Route::patch('/editarinstructor/{id}','InstructorController@update')->name('update');

//rutas de course 
Route::get('/course', 'CourseController@index')->name('index');
Route::get('/agregarcurso', 'CourseController@create')->name('create');
Route::post('/guardarcurso', 'CourseController@store')->name('store');
Route::delete('/borrarcourse/{id}','CourseController@destroy')->name('destroy');
Route::get('/editarcourse/{id}/edit','CourseController@edit')->name('edit');
Route::patch('/editarcourse/{id}','CourseController@update')->name('update');

//rutas de subscription
Route::get('/subscription', 'SubscriptionController@index')->name('index');
Route::get('/agregarsubscripcion', 'SubscriptionController@create')->name('create');
Route::post('/guardarsubscripcion', 'SubscriptionController@store')->name('store');
Route::delete('/borrarsubscripcion/{id}','SubscriptionController@destroy')->name('destroy');
Route::get('/editarsubscripcion/{id}/edit','SubscriptionController@edit')->name('edit');
Route::patch('/editarsubscripcion/{id}','SubscripcionController@update')->name('update');