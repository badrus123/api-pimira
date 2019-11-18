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
$router->group(['prefix'=>'api/v1'], function() use($router){
    $router->get('/get-paslon-bem', 'PaslonController@getPaslonBem');
    $router->get('/get-count-bem', 'AdminController@getCountBem');
    $router->get('/get-count-dpm', 'AdminController@getCountDpm');
    $router->get('/get-count-himpunan', 'AdminController@getCountBem');
    $router->get('/get-paslon-dpm', 'PaslonController@getPaslonDpm');
    $router->get('/get-paslon-sr', 'PaslonController@getPaslonSr');
    $router->get('/get-paslon-dkv', 'PaslonController@getPaslonDkv');
    $router->get('/get-paslon-ktm', 'PaslonController@getPaslonKtm');    
    $router->get('/get-paslon-di', 'PaslonController@getPaslonDi');
    $router->post('/login', 'UserController@findUser');
    $router->put('/{username}/vote', 'UserController@updateUser');

});