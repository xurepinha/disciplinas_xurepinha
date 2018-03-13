<?php

Route::get('/','DisciplinaController@index');

# rotas para criação de disciplina
#Route::get('/disciplinas/create','DisciplinaController@create');
#Route::post('/disciplinas','DisciplinaController@store');

# rotas para edição
#Route::get('/disciplinas/{disciplina}/edit','DisciplinaController@edit');
#Route::patch('/disciplinas/{disciplina}','DisciplinaController@update');

Route::resource('disciplinas','DisciplinaController');
