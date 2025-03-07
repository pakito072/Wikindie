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
$routes->get('viewCats', 'userController\vcController::view');
$routes->post('viewCats', 'userController\vcController::create');
$routes->post('cats/update/(:num)', 'userController\vcController::update/$1');
$routes->get('cats/disable/(:num)', 'userController\vcController::disable/$1');

$routes->get('favorites', 'userController\fController::');
$routes->get('myAdoptions', 'userController\maController::');

$routes->get('profile', 'userController\PController::view');
$routes->post('profile/update', 'userController\PController::update');


$routes->group('', ['filter' => 'auth:1,2'], function ($routes) {
  // Rutas accesibles solo para roles 1 (Admin) y 2 (Manager)
  $routes->get('manageCats', 'CatigoController\McController::index');
  $routes->post('cats/create', 'CatigoController\McController::create');
  $routes->post('cats/update/(:num)', 'CatigoController\McController::update/$1');
  $routes->get('cats/disable/(:num)', 'CatigoController\McController::disable/$1');


  $routes->get('manageAdoptions', 'CatigoController\MaController::index');
});

$routes->group('', ['filter' => 'auth:1'], function ($routes) {
  // Rutas accesibles solo para el rol 1 (Admin)
  $routes->get('manageUsers', 'adminController\muController::view'); // Lista de usuarios
  $routes->get('manageUsers/edit(:num)', 'adminController\muController::edit/$1'); // Lista de usuarios
    $routes->post('manageUsers', 'adminController\muController::create'); // Crear usuario
    $routes->post('manageUsers/update/(:num)', 'adminController\muController::update/$1'); // Actualizar usuario
    $routes->get('manageUsers/disable/(:num)', 'adminController\muController::disable/$1');


  $routes->get('manageRoles', 'AdminController\mrController::index');
});

//Rutas de eventos
$routes->get('calendar', 'EventController::fetchEvents');
$routes->post('addEvent', 'EventController::addEvent');
$routes->delete('deleteEvent/(:num)', 'EventController::deleteEvent/$1');