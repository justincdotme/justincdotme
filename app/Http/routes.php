<?php

Route::get('/', function () {
    return view('home');
});

//Import Dingo API router.
use Dingo\Api\Facade\Route;

