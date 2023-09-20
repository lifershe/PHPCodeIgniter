<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->setDefaultController('Item');
$routes->setDefaultMethod('index');
$routes->setAutoRoute(true);

// $routes->get('/', 'Home::index');
// $routes->get('/item', 'Item::index');