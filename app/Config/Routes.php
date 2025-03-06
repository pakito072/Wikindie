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

//Rutas de usuario 
$routes->get('viewCats','userController\vcController::view');
$routes->post('cats/create', 'userController\vcController::create');
$routes->post('cats/update/(:num)', 'userController\vcController::update/$1');
$routes->get('cats/disable/(:num)', 'userController\vcController::disable/$1');

$routes->get('favorites','userController\fController::' );
$routes->get('myAdoptions','userController\maController::' );
$routes->get('profile','userController\pController::' );

//Rutas de catigo
$routes->get('manageCats', 'catigoController\mcController::');
$routes->get('manageAdoptions', 'catigoController\maController::');

//Rutas de admin
$routes->get('manageUsers', 'adminController\muController::');
$routes->get('manageRoles', 'adminController\mrController::');

//Rutas de eventos
$routes->get('calendar', 'EventController::fetchEvents');
$routes->post('addEvent', 'EventController::addEvent');
$routes->delete('deleteEvent/(:num)', 'EventController::deleteEvent/$1');