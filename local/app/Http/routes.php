<?php 
Route::get('/', 'con_login@index');
Route::get('inicio', 'con_login@index');
Route::get('reguser', 'con_reguser@index');
Route::get('sesion', 'con_reguser@index_sesion');
Route::get('error', 'con_error@index');
 
//Peticiones POST
Route::post('reguser', 'con_reguser@create');
