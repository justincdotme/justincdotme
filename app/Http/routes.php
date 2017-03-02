<?php

Route::get('/', [
   'as'     => 'home.index',
    'uses'  => 'HomeController@index'
]);

Route::post('/contact', [
    'as'    => 'lead.store',
    'uses'  => 'LeadController@store'
]);