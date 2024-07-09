<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// htto://localhost/zero/public


$routes->get('/', 'Home::index');

$routes->get('/login', 'Home::login');

$routes->get('/teste', 'Home::teste');
//-> view teste

$routes->get('/quemsomos', 'Home::quemsomos');

$routes->get('/apresentacao', 'Home::apresentacao');
