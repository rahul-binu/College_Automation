<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Index::index');
// $routes->get('/', 'FeeManController::index');

$routes->setAutoRoute(true);

