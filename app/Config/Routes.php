<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Rutas principales
$routes->get('/', 'Home::index');

//Rutas de autenticación
$routes->get('signIn', 'AuthController::signInLoad');
  $routes->post('signIn', 'AuthController::signIn');

$routes->get('signUp', 'AuthController::signUp');
  $routes->post('signUp', 'AuthController::signUp');

$routes->get('forgotPassword', 'AuthController::forgotPassword');
  $routes->post('forgotPassword', 'AuthController::forgotPassword');

$routes->get('signOut', 'AuthController::signOut');

//Rutas de usuario
$routes->get('viewProfile', 'UserController::viewProfile');
$routes->get('users','UserController::user');

//Rutas de autor
$routes->get('viewArticles', 'Articles\ViewArticles::viewArticles');

//Rutas de administrador
$routes->get('userList', 'Users::userList');
$routes->get('rolesList', 'Classes\AdminController::rolesList');

