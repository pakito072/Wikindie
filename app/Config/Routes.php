<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Rutas principales
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');

//Rutas de autenticación
$routes->get('signIn', 'AuthController::signIn');
$routes->post('signIn', 'AuthController::attemptSign-in');
$routes->get('signUp', 'AuthController::signUp');
$routes->post('signUp', 'AuthController::attemptSign-up');
$routes->get('forgotPassword', 'AuthController::forgotPassword');
$routes->post('forgotPassword', 'AuthController::attemptForgotPassword');
$routes->get('signOut', 'AuthController::signOut');

//Rutas de usuario
$routes->get('viewProfile', 'UserController::viewProfile');
$routes->get('users','UserController::user');

//Rutas de creador

//Rutas de administrador
$routes->get('userList', 'Classes\AdminController::userList');
$routes->get('rolesList', 'Classes\AdminController::rolesList');
