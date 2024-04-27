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

$routes->get('districts', 'DistrictsController::index', ['filter' => ['authGuard', 'isAdmin']]);
$routes->get('districts/(:any)', 'DistrictsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('districts/(:any)', 'DistrictsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);

$routes->get('divisions', 'DivisionsController::index', ['filter' => ['authGuard', 'isAdmin']]);
$routes->get('divisions/(:any)', 'DivisionsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('divisions/(:any)', 'DivisionsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);

$routes->get('projects', 'ProjectsController::index', ['filter' => ['authGuard', 'isAdmin']]);
$routes->get('projects/(:any)', 'ProjectsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('projects/(:any)', 'ProjectsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);

$routes->get('projectsbill', 'ProjectsBillController::index', ['filter' => ['authGuard', 'isAdmin']]);
$routes->get('projectsbill/(:any)', 'ProjectsBillController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('projectsbill/(:any)', 'ProjectsBillController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);

$routes->get('items', 'ItemsController::index', ['filter' => ['authGuard', 'isAdmin']]);
$routes->get('items/(:any)', 'ItemsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('items/(:any)', 'ItemsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);

$routes->get('categories', 'CategoriesController::index', ['filter' => ['authGuard', 'isAdmin']]);
$routes->get('categories/(:any)', 'CategoriesController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('categories/(:any)', 'CategoriesController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);

$routes->get('units', 'UnitsController::index', ['filter' => ['authGuard', 'isAdmin']]);
$routes->get('units/(:any)', 'UnitsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('units/(:any)', 'UnitsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);

$routes->get('sizes', 'SizesController::index', ['filter' => ['authGuard', 'isAdmin']]);
$routes->get('sizes/(:any)', 'SizesController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('sizes/(:any)', 'SizesController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);

$routes->get('brands', 'BrandsController::index', ['filter' => ['authGuard', 'isAdmin']]);
$routes->get('brands/(:any)', 'BrandsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('brands/(:any)', 'BrandsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);

$routes->get('models', 'ModelsController::index', ['filter' => ['authGuard', 'isAdmin']]);
$routes->get('models/(:any)', 'ModelsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('models/(:any)', 'ModelsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);

$routes->get('expenseheads', 'ExpenseHeadsController::index', ['filter' => ['authGuard', 'isAdmin']]);
$routes->get('expenseheads/(:any)', 'ExpenseHeadsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('expenseheads/(:any)', 'ExpenseHeadsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);

$routes->get('user', 'UserController::index', ['filter' => ['authGuard', 'isAdmin']]);
$routes->get('user/(:any)', 'UserController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('user/(:any)', 'UserController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);

$routes->get('userprojects', 'UserProjectsController::index', ['filter' => ['authGuard', 'isAdmin']]);
$routes->get('userprojects/(:any)', 'UserProjectsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('userprojects/(:any)', 'UserProjectsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);

//$routes->get('subcontractor', 'SubcontractorController::index');
//$routes->get('subcontractor/(:any)', 'SubcontractorController::index/$1');
//$routes->post('subcontractor/(:any)', 'SubcontractorController::index/$1');

$routes->get('subcontractor', 'Subcontractors::index', ['filter' => ['authGuard', 'isAdmin']]);

$routes->get('requisition', 'Requisition::index', ['filter' => ['authGuard', 'isUser']]);
$routes->post('requisition/add', 'Requisition::add', ['filter' => ['authGuard', 'isUser']]);
$routes->get('requisition/getall', 'Requisition::getAll', ['filter' => ['authGuard', 'isUser']]);
$routes->get('requisition/admin', 'Requisition::admin', ['filter' => ['authGuard', 'isAdmin']]);

$routes->get('subcontract', 'ProjectSubcontractsController::index', ['filter' => ['authGuard', 'isAdmin']]);
$routes->get('subcontract/(:any)', 'ProjectSubcontractsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('subcontract/(:any)', 'ProjectSubcontractsController::index/$1', ['filter' => ['authGuard', 'isAdmin']]);

$routes->get('deed', 'Deed::index', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('deed/add', 'Deed::add', ['filter' => ['authGuard', 'isAdmin']]);

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

$routes->get('projectfilesupload', 'ProjectFilesUpload::index', ['filter' => 'authGuard']);
$routes->post('projectfilesupload', 'ProjectFilesUpload::index', ['filter' => 'authGuard']);
$routes->get('projectfilesupload/(:any)', 'ProjectFilesUpload::index/$1', ['filter' => 'authGuard']);
$routes->post('projectfilesupload/doupload', 'ProjectFilesUpload::doupload', ['filter' => 'authGuard']);
$routes->post('projectfilesupload/getOne', 'ProjectFilesUpload::getOne', ['filter' => 'authGuard']);

$routes->get('voucher', 'UploadVoucher::index', ['filter' => ['authGuard', 'isUser']]);
$routes->get('voucher/voucherList', 'UploadVoucher::voucherList', ['filter' => ['authGuard', 'isUser']]);
$routes->get('voucher/admin', 'UploadVoucher::voucherListAdmin', ['filter' => ['authGuard', 'isAdmin']]);
// $routes->post('voucher', 'UploadVoucher::index', ['filter' => 'authGuard']);
$routes->get('voucher/(:any)', 'UploadVoucher::index/$1', ['filter' => ['authGuard', 'isUser']]);
$routes->get('showVouchers/(:any)', 'UploadVoucher::showVouchers/$1', ['filter' => ['authGuard', 'isUser']]);
$routes->get('showVouchersAdmin/(:any)', 'UploadVoucher::showVouchersAdmin/$1', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('voucherupload', 'UploadVoucher::doupload', ['filter' => 'authGuard']);
$routes->post('voucher/getOne', 'UploadVoucher::getOne', ['filter' => 'authGuard']);

$routes->get('projectfiles', 'ProjectFiles::index', ['filter' => 'authGuard']);

$routes->get('/', 'Login::index');
$routes->post('save', 'Login::save');
$routes->get('login', 'Login::login');
$routes->get('changepassword', 'Login::changePassword',['filter' => ['authGuard', 'isAdmin']]);
$routes->get('changepass', 'Login::changePasswordUser',['filter' => ['authGuard', 'isUser']]);
$routes->post('postLogin', 'Login::auth');
$routes->post('passchange', 'Login::passChange');
$routes->post('passchangeUser', 'Login::passchangeUser');
$routes->get('logout', 'Login::logout');

//Reports
$routes->get('reports', 'Reports::index', ['filter' => ['authGuard', 'isAdmin']]);
$routes->post('reports/requisition', 'Reports::RequisitionReport', ['filter' => ['authGuard', 'isAdmin']]);
// $routes->post('requisition/add', 'Requisition::add', ['filter' => ['authGuard', 'isUser']]);
// $routes->get('requisition/getall', 'Requisition::getAll', ['filter' => ['authGuard', 'isUser']]);
// $routes->get('requisition/admin', 'Requisition::admin', ['filter' => ['authGuard', 'isAdmin']]);

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