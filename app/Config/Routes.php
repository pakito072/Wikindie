<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Rutas principales
$routes->get('/', 'Home::index');

//Rutas de autenticación Auth\
$routes->get('signUp', 'Auth\AuthController::signUp');
$routes->post('signUp', 'Auth\AuthController::processSignUp');

$routes->get('signIn', 'Auth\AuthController::signIn');
$routes->post('signIn', 'Auth\AuthController::processSignIn');

$routes->get('signOut', 'Auth\AuthController::signOut');

//Rutas de eventos
$routes->get('calendar', 'EventController::fetchEvents');
$routes->post('addEvent', 'EventController::addEvent');
$routes->delete('deleteEvent/(:num)', 'EventController::deleteEvent/$1');

//Rutas de usuario 
$routes->get('viewCats', 'userController\vcController::view');
$routes->post('viewCats', 'userController\vcController::create');
$routes->post('cats/update/(:num)', 'userController\vcController::update/$1');
$routes->get('cats/disable/(:num)', 'userController\vcController::disable/$1');

$routes->get('favorites', 'userController\fController::');
$routes->get('myAdoptions', 'userController\maController::');

$routes->get('profile', 'userController\PController::view');
$routes->post('profile/update', 'userController\PController::update');

//Rutas de catigo (Nivel 1 y 2 de seguridad)
$routes->group('', ['filter' => 'auth:1,2'], function ($routes) {
  $routes->get('manageCats', 'CatigoController\McController::index');
  $routes->post('cats/create', 'CatigoController\McController::create');
  $routes->post('cats/update/(:num)', 'CatigoController\McController::update/$1');
  $routes->get('cats/disable/(:num)', 'CatigoController\McController::disable/$1');


  $routes->get('manageAdoptions', 'CatigoController\MaController::index');
});

//Rutas de admin (Nivel 1 de seguridad)
$routes->group('', ['filter' => 'auth:1'], function ($routes) {
  $routes->get('manageUsers', 'adminController\muController::view');
  $routes->post('manageUsers', 'adminController\muController::create');
  $routes->post('manageUsers/update', 'adminController\muController::update');
  $routes->get('manageUsers/disable/(:num)', 'adminController\muController::disable/$1');
  $routes->get('manageUsers/restore/(:num)', 'adminController\muController::restore/$1');
  $routes->get('manageUsers/export', 'adminController\muController::export');


  $routes->get('manageRoles', 'adminController\mrController::view');
  $routes->post('manageRoles', 'adminController\mrController::create');
  $routes->post('manageRoles', 'adminController\mrController::update');
  $routes->get('manageRoles/disable/(:num)', 'adminController\mrController::disable/$1');
  $routes->get('manageRoles/restore/(:num)', 'adminController\mrController::restore/$1');
  $routes->get('manageRoles/export', 'adminController\mrController::export');
});
