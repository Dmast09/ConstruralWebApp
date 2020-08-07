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

Route::get('/', 'ProjectController@home')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Admin Route to Projects

// index
Route::get('/admin/projects/index', 'ProjectController@Index')->name('projectindex');

// Create View and  Route to the controller
Route::get('/admin/projects/create', function(){
    return view('/admin/projects/create');
});
Route::post('/admin/projects/create', 'ProjectController@create')->name('projectcreate');

// Project details 
Route::get('/admin/projects/details/{id}' , 'ProjectController@details')->name('projectdetails');

// Delete project

Route::get('/admin/projects/delete/{id}','ProjectController@delete')->name('projectdelete');

Route::delete('/admin/projects/delete/{id}','ProjectController@remove')->name('projectremove');


// Edit project
Route::get('/admin/projects/edit/{id}', 'ProjectController@show')->name('projecteditfind');

Route::post('/admin/projects/edit/{id}','ProjectController@update')->name('projectedit');


// Workers  Routes 

Route::get('/admin/workers/index' ,'WorkerController@index')->name('workerindex');

Route::get('/admin/workers/list', 'WorkerController@list')->name('workerlist');



// Ruta prueba

Route::get('/prueba', 'ProjectController@prueba');



