<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');

$routes->get('sign-in', 'Auth::index');
$routes->post('sign-in', 'Auth::attemptSign-in');
$routes->get('sign-up', 'Auth::sign-up');
$routes->post('sign-up', 'Auth::attemptSign-up');
$routes->get('sing-out', 'Auth::sing-out');

