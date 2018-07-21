<?php


Route::get('/categoria/{id}','Site\SiteController@categoria');


Route::get('/categoria2/{id?}','Site\SiteController@categoriaOp');

Route::get('/contato','Site\SiteController@contato');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/','Site\SiteController@index');