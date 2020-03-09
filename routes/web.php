<?php

Route::get('/', function () {
    return view('auth/register');
});

Route::group(['prefix' => 'admin'], function() {
  Route::get('todo/create', 'Admin\TodoController@add')->middleware('auth');
  Route::post('todo/create', 'Admin\TodoController@create')->middleware('auth');
  Route::get('todo', 'Admin\TodoController@index')->middleware('auth');
  Route::get('todo/edit', 'Admin\TodoController@edit')->middleware('auth');
  Route::post('todo/edit', 'Admin\TodoController@update')->middleware('auth');
  Route::get('todo/delete', 'Admin\TodoController@delete')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
