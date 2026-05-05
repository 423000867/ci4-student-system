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
$routes->get('/students/edit/(:num)', 'Students::edit/$1');
$routes->post('/students/update/(:num)', 'Students::update/$1');
// API ROUTES
$routes->group('api', function($routes) {
    $routes->get('students', 'Api\StudentApi::index');
    $routes->get('students/(:num)', 'Api\StudentApi::show/$1');
    $routes->post('students', 'Api\StudentApi::create');
    $routes->put('students/(:num)', 'Api\StudentApi::update/$1');
    $routes->delete('students/(:num)', 'Api\StudentApi::delete/$1');
});