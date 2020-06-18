<?php


Route::view('/','home')->name('home');
Route::get('/servicio', 'servicioController')->name('servicio');

Route::resource('ayuda', 'ProjectController')
->names('projects')
->parameters(['ayuda'=> 'project']);
//->middleware('auth');

Route::get('/contactos','homeController')->name('contactos');
Route::post('contactos', 'mensajeController@store')->name('messages.store');

Auth::routes(['register' => false]); 

//Route::resource('proyectos', 'ayudaController');

//Route::get('/ayuda','ProjectController@index')->name('projects.index');
//Route::get('/ayuda/crear', 'ProjectController@create')->name('projects.create');
//Route::get('/ayuda/{project}/editar', 'ProjectController@edit')->name('projects.edit');
//Route::patch('/ayuda/{project}', 'ProjectController@update')->name('projects.update');
//Route::post('/ayuda','ProjectController@store')->name('projects.store');
//Route::get('/ayuda/{id}', 'ProjectController@show')->name('projects.show');
//Route::delete('/ayuda/{project}', 'ProjectController@destroy')->name('projects.destroy');



