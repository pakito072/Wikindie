<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Rutas principales
$routes->get('/', 'Home::index');

//Rutas de autenticación Auth\
$routes->get('signIn', 'Auth\AuthController::signIn');
  $routes->post('signIn', 'Auth\AuthController::processSignIn');

$routes->get('signUp', 'Auth\AuthController::signUp');
  $routes->post('signUp', 'Auth\AuthController::processSignUp');

$routes->get('forgotPassword', 'Auth\AuthController::forgotPassword');
  $routes->post('forgotPassword', 'Auth\AuthController::forgotPassword');

$routes->get('signOut', 'Auth\AuthController::signOut');

//Rutas de lector UserSection\Reader
$routes->get('viewProfile', 'UserController::viewProfile');
$routes->get('users','UserController::user');

//Rutas de autor UserSection\Author
$routes->get('viewArticles', 'UserSection\Author\Articles\ViewArticles::viewArticles');
$routes->get('guides', 'UserSection\Author\Articles\Guides::guides');
$routes->get('news', 'UserSection\Author\Articles\News::news');
$routes->get('reviews', 'UserSection\Author\Articles\Reviews::reviews');
$routes->get('recommendations', 'UserSection\Author\Articles\Recommendations::recommendations');
$routes->get('tags', 'UserSection\Author\Articles\Tags::tags');

//Rutas de administrador UserSection\Admin
$routes->get('userList', 'UserSection\Admin\UserList::userList');
$routes->get('rolesList', 'Classes\AdminController::rolesList');

