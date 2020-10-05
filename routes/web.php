<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'GuestController@index') -> name('emp_index');
Route::get('/show/{id}', 'GuestController@show') -> name('emp_show');

Route::get('/emp/create', 'LoggedController@create') -> name('emp_create');
Route::post('/emp/store', 'LoggedController@store') -> name('emp_store');

Route::get('/destroy/{id}', 'LoggedController@destroy') -> name('emp_destroy');
