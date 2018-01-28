<?php 
Route::get('/', 'con_login@index');
Route::get('inicio', 'con_inicio@index');
Route::get('reguser', 'con_user@index');
Route::get('sesion', 'con_user@index_sesion');
Route::get('error', 'con_error@index');
Route::get('trabajos', 'con_trabajo@index');
Route::get('alquileres', 'con_alquiler@index');
Route::get('migrar', 'con_migrar@index');
Route::get('noticia', 'con_noticia@index');
Route::get('configuracion', 'con_configuracion@index');
Route::get('seguridad', 'con_configuracion@seguridad');
Route::get('privacidad', 'con_configuracion@privacidad');
Route::get('alertas', 'con_configuracion@alertas');
//Peticiones POST
Route::post('reguser', 'con_user@create'); //registrar usuario 
Route::post('isu', 'con_login@log'); //iniciar sesion usuario
Route::post('sposts', 'con_inicio@listar'); //iniciar sesion usuario
Route::group(['middleware' =>'test'], function () {
Route::post('test', 'con_inicio@create');
Route::get('close', 'con_login@close'); //Cierra la sesion
Route::get('perfil', 'con_user@perfil'); //Perfil del usuario 
});
