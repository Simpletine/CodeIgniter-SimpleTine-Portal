<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('MainController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(true);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->group('/', ['namespace' => 'App\Controllers'], function ($route) {
    $route->get('', 'MainController::index');
});

$routes->group('auth', ['namespace' => 'App\Controllers'], function ($route) {
    $route->add('login', 'Auth::login');
    $route->get('logout', 'Auth::logout');
    $route->get('/', 'Auth::index');
    $route->add('forgot-password', 'Auth::forgot_password');
    $route->add('create-user', 'Auth::create_user');
    $route->add('edit-user/(:num)', 'Auth::edit_user/$1');
    $route->add('create-group', 'Auth::create_group');
    $route->add('edit-group/(:num)', 'Auth::edit_group/$1');
    $route->get('activate/(:num)', 'Auth::activate/$1');
    $route->get('activate/(:num)/(:hash)', 'Auth::activate/$1/$2');
    $route->add('deactivate/(:num)', 'Auth::deactivate/$1');
    $route->get('reset-password/(:hash)', 'Auth::reset_password/$1');
    $route->post('reset-password/(:hash)', 'Auth::reset_password/$1'); 
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
