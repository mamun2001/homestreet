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
    $routes->get('profile', 'UsersController::profile', ['as' => 'user.profile']);
    $routes->get('list', 'UsersController::list', ['as' => 'user.list']);
    $routes->get('ajaxUser', 'UsersController::ajaxUser', ['as' => 'user.ajaxUser']);
});

$routes->get('districts-adel', 'Districts::index');

$routes->get('districts', 'DistrictsController::index');
$routes->get('districts/(:any)', 'DistrictsController::index/$1');
$routes->post('districts/(:any)', 'DistrictsController::index/$1');

$routes->get('divisions', 'DivisionsController::index');
$routes->get('divisions/(:any)', 'DivisionsController::index/$1');
$routes->post('divisions/(:any)', 'DivisionsController::index/$1');

$routes->get('projects', 'ProjectsController::index');
$routes->get('projects/(:any)', 'ProjectsController::index/$1');
$routes->post('projects/(:any)', 'ProjectsController::index/$1');

$routes->get('projectsbill', 'ProjectsBillController::index');
$routes->get('projectsbill/(:any)', 'ProjectsBillController::index/$1');
$routes->post('projectsbill/(:any)', 'ProjectsBillController::index/$1');

$routes->get('items', 'ItemsController::index');
$routes->get('items/(:any)', 'ItemsController::index/$1');
$routes->post('items/(:any)', 'ItemsController::index/$1');

$routes->get('categories', 'CategoriesController::index');
$routes->get('categories/(:any)', 'CategoriesController::index/$1');
$routes->post('categories/(:any)', 'CategoriesController::index/$1');

$routes->get('units', 'UnitsController::index');
$routes->get('units/(:any)', 'UnitsController::index/$1');
$routes->post('units/(:any)', 'UnitsController::index/$1');

$routes->get('sizes', 'SizesController::index');
$routes->get('sizes/(:any)', 'SizesController::index/$1');
$routes->post('sizes/(:any)', 'SizesController::index/$1');

$routes->get('brands', 'BrandsController::index');
$routes->get('brands/(:any)', 'BrandsController::index/$1');
$routes->post('brands/(:any)', 'BrandsController::index/$1');

$routes->get('models', 'ModelsController::index');
$routes->get('models/(:any)', 'ModelsController::index/$1');
$routes->post('models/(:any)', 'ModelsController::index/$1');

$routes->get('expenseheads', 'ExpenseHeadsController::index');
$routes->get('expenseheads/(:any)', 'ExpenseHeadsController::index/$1');
$routes->post('expenseheads/(:any)', 'ExpenseHeadsController::index/$1');

$routes->get('user', 'UserController::index');
$routes->get('user/(:any)', 'UserController::index/$1');
$routes->post('user/(:any)', 'UserController::index/$1');

$routes->get('userprojects', 'UserProjectsController::index');
$routes->get('userprojects/(:any)', 'UserProjectsController::index/$1');
$routes->post('userprojects/(:any)', 'UserProjectsController::index/$1');

//$routes->get('subcontractor', 'SubcontractorController::index');
//$routes->get('subcontractor/(:any)', 'SubcontractorController::index/$1');
//$routes->post('subcontractor/(:any)', 'SubcontractorController::index/$1');

$routes->get('subcontractor', 'Subcontractors::index');

$routes->get('requisition', 'Requisition::index');

$routes->get('subcontract', 'ProjectSubcontractsController::index');
$routes->get('subcontract/(:any)', 'ProjectSubcontractsController::index/$1');
$routes->post('subcontract/(:any)', 'ProjectSubcontractsController::index/$1');

$routes->get('deed', 'Deed::index');
$routes->post('deed/add', 'Deed::add');

// $routes->get('deed', 'DeedController::index');
// $routes->get('deed/(:any)', 'DeedController::index/$1');
// $routes->post('deed/(:any)', 'DeedController::index/$1');

$routes->get('file-upload', 'FileUpload::index');
$routes->post('multiple-file-upload', 'FileUpload::multipleUpload');

$routes->get('upload', 'Upload::index');
$routes->post('upload', 'Upload::index');
$routes->get('upload/(:any)', 'Upload::index/$1');
$routes->post('doupload', 'Upload::doupload');
$routes->post('upload/getOne', 'Upload::getOne');

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