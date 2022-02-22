<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get("/","UserController@index");

$router->get('/', [
    'as' => '/', 'uses' => 'UserController@index'
]);

$router->get('/create', [
    'as' => '/create', 'uses' => 'UserController@create'
]);

$router->post('/create', [
    'as' => '/create', 'uses' => 'UserController@store'
]);

$router->get('/edit/{id}', [
    'as' => '/edit/{id}', 'uses' => 'UserController@edit'
]);

$router->post('/edit/{id}', [
    'as' => '/edit/{id}', 'uses' => 'UserController@update'
]);

$router->get('/destroy/{id}', [
    'as' => '/destroy/{id}', 'uses' => 'UserController@destroy'
]);

$router->get('/search', [
    'as' => '/search', 'uses' => 'UserController@searchUser'
]);