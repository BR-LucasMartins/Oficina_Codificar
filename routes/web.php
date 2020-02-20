<?php


//rotas de views 
Route::get('/', 'clienteController@index');
Route::get('/novo_cliente', 'clienteController@novoCliente');


//rotas para crud

//inserir novo registro no BD
Route::post('/executar_novo_cliente', 'clienteController@executarNovoCliente');

//editar registro e atualizar registro
Route::get('/editar_cliente/{id}', 'clienteController@editar');
Route::post('/atualizar_cliente/{id}', 'clienteController@update');

//delete registro
Route::get('/delete_cliente/{id}', 'clienteController@delete');

Route::post('/buscar_data', 'clienteController@getData');

