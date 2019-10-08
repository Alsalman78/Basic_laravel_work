<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('about-us/{name}/{number}','HomeController@about');

route::get('add', 'HomeController@add');
route::post('store', 'HomeController@store');
route::get('all', 'HomeController@get');
    
route::get('edit/{id}', 'HomeController@edit');
route::post('update/{id}', 'HomeController@update');
route::get('delete/{id}', 'HomeController@delete');  




