<?php

Route::get('/','DisciplinaController@index');
Route::get('/disciplinas/create','DisciplinaController@create');

Route::post('/disciplinas','DisciplinaController@store');

Route::get('/disciplinas/{disciplina}','DisciplinaController@show');
