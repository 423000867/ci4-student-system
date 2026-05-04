<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/students', 'Students::index');
$routes->get('/students/create', 'Students::create');
$routes->post('/students/store', 'Students::store');
$routes->get('/students/delete/(:num)', 'Students::delete/$1');