<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');

$routes->get('sign-in', 'Auth::login');
$routes->post('sign-in', 'Auth::attemptSign-in');
$routes->get('sign-up', 'Auth::register');
$routes->post('sign-up', 'Auth::attemptSign-up');
$routes->get('new-password', 'Auth::forgotPassword');
$routes->post('new-password', 'Auth::attemptForgotPassword');
$routes->get('sing-out', 'Auth::sing-out');

$routes->get('overview', 'UserController::overview');
$routes->get('users','UserController::user');
