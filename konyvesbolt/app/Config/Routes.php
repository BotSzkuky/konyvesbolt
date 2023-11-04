<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/udv', 'Home::udv');
$routes->get('/regisztracio', 'Home::regisztracio');