<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/r', 'login::index');

$routes->get('/a', 'Daftar::index');
