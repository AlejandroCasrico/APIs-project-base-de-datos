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
$router->get('/api', function ()  {
    return 'API de northwindmx';
});
$router->get('/api/articulos', function ()  {
    return app('db')->select('SELECT*FROM articulos');
});
$router->get('/api/articulos{id}', function ($id)  {
    return app('db')->select('SELECT*FROM articulos WHERE id='.$id);
});
$router->get('/api/articulos/categorias/1', function ()  {
    return app('db')->select('SELECT*FROM articulos WHERE idcategoria=1');
});