<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->set404Override();
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
