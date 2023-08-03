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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
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
$routes->get('/', 'Home::index');

//$routes->setDefaultController('DatatableController');
$routes->setDefaultController('UsersController');
//$routes->get('list', 'DatatableController::index');
$routes->get('ajax-datatable', 'DatatableController::ajaxDataTables');
//$routes->get('userlist', 'UsersController::index');
$routes->get('admin/customers', 'Examples::customers_management');
$routes->get('admin/customers/(:any)', 'Examples::customers_management/$1');
$routes->post('admin/customers/(:any)', 'Examples::customers_management/$1');


$routes->group('user', static function ($routes) {
    $routes->get('home', 'UsersController::index', ['as' => 'user.home']);
    $routes->get('profile', 'UsersController::profile', ['as' => 'user.profile']);
    $routes->get('list', 'UsersController::list', ['as' => 'user.list']);
    $routes->get('ajaxUser', 'UsersController::ajaxUser', ['as' => 'user.ajaxUser']);
});

$routes->get('districts', 'Districts::index', ['as' => 'districts']);
$routes->get('divisions', 'Divisions::index', ['as' => 'divisions']);

// $routes->group('districts', static function ($routes) {
//     $routes->get('districts', 'Districts::index', ['as' => 'districts']);
// });

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
