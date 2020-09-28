<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PagamentiController@index') -> name('pagamenti.index');

Route::get('/pagamenti/delete/{id}', 'PagamentiController@destroy') -> name('pagamento.destroy');

Route::get('/pagamenti/edit/{id}', 'PagamentiController@edit')-> name('pagamento.edit');

Route::post('/pagamenti/update/{id}', 'PagamentiController@update')-> name('pagamento.update');
