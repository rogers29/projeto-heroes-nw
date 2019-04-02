<?php

Route::get('/', function () {
    return redirect()->route('hero.index');
});


Route::get('/heroes', ['uses'=>'HeroController@index', 'as'=>'hero.index']);
Route::get('/heroes/add', ['uses'=>'HeroController@add', 'as'=>'hero.add']);
Route::post('/heroes/save', ['uses'=>'HeroController@save', 'as'=>'hero.save']);
Route::get('/heroes/edit/{id}', ['uses'=>'HeroController@edit', 'as'=>'hero.edit']);
Route::post('/heroes/update/{id}', ['uses'=>'HeroController@update', 'as'=>'hero.update']);
Route::get('/heroes/delete/{id}', ['uses'=>'HeroController@delete', 'as'=>'hero.delete']);
Route::put('/heroes/search', ['uses'=>'HeroController@search', 'as'=>'hero.search']);
