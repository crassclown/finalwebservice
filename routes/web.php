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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['namespace' => 'App\Http\Controllers'], function ($api) {
    $api->get('mahasiswas',  'MahasiswaController@index');

    $api->get('mahasiswas/{id}',  'MahasiswaController@showOneMahasiswa');

    $api->post('mahasiswas',  'MahasiswaController@store');

    $api->delete('mahasiswas/{id}',  'MahasiswaController@delete');

    $api->put('mahasiswas/{id}',  'MahasiswaController@update');
});
