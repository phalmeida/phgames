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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/teste', function (){
    return response(\App\Models\Categories::all());
});

$app->post('/auth/login', 'Auth\AuthController@loginPost');

$app->group(['prefix'=>'api'], function () use ($app) {

    $app->get('versions','Api\VersionsController@index');
    $app->post('versions','Api\VersionsController@store');
    $app->get('versions/{id}','Api\VersionsController@show');
    $app->put('versions/{id}','Api\VersionsController@update');
    $app->patch('versions/{id}','Api\VersionsController@update');
    $app->delete('versions/{id}','Api\VersionsController@destroy');


    $app->get('ligas','Api\LigasController@index');
    $app->post('ligas','Api\LigasController@store');
    $app->get('ligas/{id}','Api\LigasController@show');
    $app->put('ligas/{id}','Api\LigasController@update');
    $app->patch('ligas/{id}','Api\LigasController@update');
    $app->delete('ligas/{id}','Api\LigasController@destroy');

    $app->get('/users', 'Api\UsersController@index');
    $app->get('/users/{id}', 'Api\UsersController@show');
    $app->post('/users', 'Api\UsersController@store');
    $app->put('/users/{id}', 'Api\UsersController@update');
    $app->delete('/users/{id}', 'Api\UsersController@destroy');
});
