<?php

Route::get('/', function () {
    return view('home');
});

//Import Dingo API router.
use Dingo\Api\Facade\Route;

Route::version('v1', function()
{
    Route::get('/', [
        'as' => 'api.index',
        function()
        {
            //Redirect to app home page when user hits /api path.
            return redirect('/');
        }
    ]);

    Route::get('home', [
        'as'    => 'api.home.index',
        'uses'  => '\App\Http\Controllers\HomeController@index'
    ]);
    Route::get('about', [
        'as'    => 'api.about.index',
        'uses'  => '\App\Http\Controllers\AboutController@index'
    ]);
    Route::get('contact', [
        'as'    => 'api.contact.index',
        'uses'  => '\App\Http\Controllers\LeadController@index'
    ]);
    Route::get('portfolio', [
        'as'    => 'api.portfolio.index',
        'uses'  => '\App\Http\Controllers\PortfolioController@index'
    ]);
    Route::get('portfolio/{project}', [
        'as'    => 'api.portfolio.show',
        'uses'  => '\App\Http\Controllers\PortfolioController@show'
    ]);

    //Protected routes
    Route::group(['middleware' => 'api.auth'], function()
    {
        Route::resource('home','App\Http\Controllers\HomeController', [
            'except' => ['index']
        ]);
        Route::resource('about','App\Http\Controllers\AboutController', [
            'except' => ['index']
        ]);
        Route::resource('contact','App\Http\Controllers\LeadController', [
            'except' => ['index']
        ]);
        Route::resource('portfolio','App\Http\Controllers\PortfolioController', [
            'except' => ['index', 'show']
        ]);
    });
});