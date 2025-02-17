<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Rutas principales
$routes->get('/', 'Home::index');

//Rutas de autenticación Auth\
$routes->get('signIn', 'Auth\AuthController::signInLoad');
  $routes->post('signIn', 'Auth\AuthController::signIn');

$routes->get('signUp', 'Auth\AuthController::signUpLoad');
  $routes->post('signUp', 'Auth\AuthController::signUp');

$routes->get('forgotPassword', 'Auth\AuthController::forgotPassword');
  $routes->post('forgotPassword', 'Auth\AuthController::forgotPassword');

$routes->get('signOut', 'Auth\AuthController::signOut');

//Rutas de lector UserSection\Reader
$routes->get('viewProfile', 'UserController::viewProfile');
$routes->get('users','UserController::user');

//Rutas de autor UserSection\Author
$routes->get('viewArticles', 'Articles\ViewArticles::viewArticles');

//Rutas de administrador UserSection\Admin
$routes->get('userList', 'UserSection\Admin\UserList::userList');
$routes->get('rolesList', 'Classes\AdminController::rolesList');

