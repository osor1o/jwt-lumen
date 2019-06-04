<?php

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

$router->post('auth/login', ['uses' => 'AuthController@authenticate']);

$router->group(['middleware' => ['jwt.auth', 'admin.auth']], function() use ($router) {
    $router->get('users', 'TesteController@index');
    $router->get('teste', 'TesteController@index');
});