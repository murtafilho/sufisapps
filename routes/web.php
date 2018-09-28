<?php


Auth::routes();

Route::get('/categories', 'CategoryController@index');

Route::get('/', 'HomeController@index');

Route::get('itens','ItensController@index');
Route::get('componente/{id}','ItensController@show')->name('componente');