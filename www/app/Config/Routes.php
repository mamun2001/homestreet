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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ['filter' => 'authGuard']);
$routes->get('/home', 'Home::index', ['filter' => 'authGuard']);

//$routes->setDefaultController('DatatableController');
//$routes->setDefaultController('UsersController');
//$routes->get('list', 'DatatableController::index');
$routes->get('ajax-datatable', 'DatatableController::ajaxDataTables');
//$routes->get('userlist', 'UsersController::index');
$routes->get('admin/customers', 'Examples::customers_management');
$routes->get('admin/customers/(:any)', 'Examples::customers_management/$1');
$routes->post('admin/customers/(:any)', 'Examples::customers_management/$1');


$routes->group('user', static function ($routes) {
    //$routes->get('home', 'UsersController::index', ['as' => 'user.home']);
    $routes->get('profile', 'UsersController::profile', ['filter' => 'authGuard', 'as' => 'user.profile']);
    $routes->get('list', 'UsersController::list', ['filter' => 'authGuard', 'as' => 'user.list']);
    $routes->get('ajaxUser', 'UsersController::ajaxUser', ['filter' => 'authGuard', 'as' => 'user.ajaxUser']);
});

// $routes->get('districts-adel', 'Districts::index');

$routes->get('districts', 'DistrictsController::index', ['filter' => 'authGuard']);
$routes->get('districts/(:any)', 'DistrictsController::index/$1', ['filter' => 'authGuard']);
$routes->post('districts/(:any)', 'DistrictsController::index/$1', ['filter' => 'authGuard']);

$routes->get('divisions', 'DivisionsController::index', ['filter' => 'authGuard']);
$routes->get('divisions/(:any)', 'DivisionsController::index/$1', ['filter' => 'authGuard']);
$routes->post('divisions/(:any)', 'DivisionsController::index/$1', ['filter' => 'authGuard']);

$routes->get('projects', 'ProjectsController::index', ['filter' => 'authGuard']);
$routes->get('projects/(:any)', 'ProjectsController::index/$1', ['filter' => 'authGuard']);
$routes->post('projects/(:any)', 'ProjectsController::index/$1', ['filter' => 'authGuard']);

$routes->get('projectsbill', 'ProjectsBillController::index', ['filter' => 'authGuard']);
$routes->get('projectsbill/(:any)', 'ProjectsBillController::index/$1', ['filter' => 'authGuard']);
$routes->post('projectsbill/(:any)', 'ProjectsBillController::index/$1', ['filter' => 'authGuard']);

$routes->get('items', 'ItemsController::index', ['filter' => 'authGuard']);
$routes->get('items/(:any)', 'ItemsController::index/$1', ['filter' => 'authGuard']);
$routes->post('items/(:any)', 'ItemsController::index/$1', ['filter' => 'authGuard']);

$routes->get('categories', 'CategoriesController::index', ['filter' => 'authGuard']);
$routes->get('categories/(:any)', 'CategoriesController::index/$1', ['filter' => 'authGuard']);
$routes->post('categories/(:any)', 'CategoriesController::index/$1', ['filter' => 'authGuard']);

$routes->get('units', 'UnitsController::index', ['filter' => 'authGuard']);
$routes->get('units/(:any)', 'UnitsController::index/$1', ['filter' => 'authGuard']);
$routes->post('units/(:any)', 'UnitsController::index/$1', ['filter' => 'authGuard']);

$routes->get('sizes', 'SizesController::index', ['filter' => 'authGuard']);
$routes->get('sizes/(:any)', 'SizesController::index/$1', ['filter' => 'authGuard']);
$routes->post('sizes/(:any)', 'SizesController::index/$1', ['filter' => 'authGuard']);

$routes->get('brands', 'BrandsController::index', ['filter' => 'authGuard']);
$routes->get('brands/(:any)', 'BrandsController::index/$1', ['filter' => 'authGuard']);
$routes->post('brands/(:any)', 'BrandsController::index/$1', ['filter' => 'authGuard']);

$routes->get('models', 'ModelsController::index', ['filter' => 'authGuard']);
$routes->get('models/(:any)', 'ModelsController::index/$1', ['filter' => 'authGuard']);
$routes->post('models/(:any)', 'ModelsController::index/$1', ['filter' => 'authGuard']);

$routes->get('expenseheads', 'ExpenseHeadsController::index', ['filter' => 'authGuard']);
$routes->get('expenseheads/(:any)', 'ExpenseHeadsController::index/$1', ['filter' => 'authGuard']);
$routes->post('expenseheads/(:any)', 'ExpenseHeadsController::index/$1', ['filter' => 'authGuard']);

$routes->get('user', 'UserController::index', ['filter' => 'authGuard']);
$routes->get('user/(:any)', 'UserController::index/$1', ['filter' => 'authGuard']);
$routes->post('user/(:any)', 'UserController::index/$1', ['filter' => 'authGuard']);

$routes->get('userprojects', 'UserProjectsController::index', ['filter' => 'authGuard']);
$routes->get('userprojects/(:any)', 'UserProjectsController::index/$1', ['filter' => 'authGuard']);
$routes->post('userprojects/(:any)', 'UserProjectsController::index/$1', ['filter' => 'authGuard']);

//$routes->get('subcontractor', 'SubcontractorController::index');
//$routes->get('subcontractor/(:any)', 'SubcontractorController::index/$1');
//$routes->post('subcontractor/(:any)', 'SubcontractorController::index/$1');

$routes->get('subcontractor', 'Subcontractors::index', ['filter' => 'authGuard']);

$routes->get('requisition', 'Requisition::index', ['filter' => 'authGuard']);

$routes->get('subcontract', 'ProjectSubcontractsController::index', ['filter' => 'authGuard']);
$routes->get('subcontract/(:any)', 'ProjectSubcontractsController::index/$1', ['filter' => 'authGuard']);
$routes->post('subcontract/(:any)', 'ProjectSubcontractsController::index/$1', ['filter' => 'authGuard']);

$routes->get('deed', 'Deed::index', ['filter' => 'authGuard']);
$routes->post('deed/add', 'Deed::add', ['filter' => 'authGuard']);

// $routes->get('deed', 'DeedController::index');
// $routes->get('deed/(:any)', 'DeedController::index/$1');
// $routes->post('deed/(:any)', 'DeedController::index/$1');

$routes->get('file-upload', 'FileUpload::index', ['filter' => 'authGuard']);
$routes->post('multiple-file-upload', 'FileUpload::multipleUpload', ['filter' => 'authGuard']);

$routes->get('upload', 'Upload::index', ['filter' => 'authGuard']);
$routes->post('upload', 'Upload::index', ['filter' => 'authGuard']);
$routes->get('upload/(:any)', 'Upload::index/$1', ['filter' => 'authGuard']);
$routes->post('doupload', 'Upload::doupload', ['filter' => 'authGuard']);
$routes->post('upload/getOne', 'Upload::getOne', ['filter' => 'authGuard']);

$routes->get('/', 'Login::index');
$routes->post('save', 'Login::save');
$routes->get('login', 'Login::login');
$routes->post('postLogin', 'Login::auth');
$routes->get('logout', 'Login::logout');

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