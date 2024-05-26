<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'login::index');

$routes->get('/index', 'Index::index');

$routes->get('/daftar', 'Daftar::index');

$routes->get('/', 'index::index');

$routes->get('/cart', 'Cart::index');

$routes->get('/checkout', 'checkout::index');

$routes->get('/shop', 'shop::index');
$routes->get('/jsgrid', 'jsgrid::index');

$routes->get('/single', 'single-product::index');
$routes->setAutoroute(true);








