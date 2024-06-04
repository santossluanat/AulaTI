<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// htto://localhost/zero/public


$routes->get('/', 'Home::index');

$routes->get('/teste', 'Home::teste');
//-> view teste