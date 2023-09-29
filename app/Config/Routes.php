<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->setDefaultController('Item');
$routes->setDefaultController('GColumnChartController');
$routes->match(['get', 'post'], 'initChart', 'GColumnChartController::initChart');

$routes->setDefaultMethod('index');
$routes->setAutoRoute(true);

$routes->group('', ['filter'=>'AuthAdmin'], function($routes)
{
$routes->get('/', 'Home::graph');
$routes->get('/item', 'Item::index');
$routes->get('/item/graph', 'Item::graph');
$routes->get('/item/index', 'Item::index');
$routes->get('/item/add', 'Item::add');
$routes->get('/item/edit', 'Item::edit');
$routes->get('/item/edit/(:num)', 'Item::edit/$1');
$routes->get('/item/delete', 'Item::delete');
$routes->get('/item/delete/(:num)', 'Item::delete/$1');
$routes->get('/item/destroy/(:num)', 'Item::destroy/$1');

$routes->get('/item/myform', 'Item::myform');

});