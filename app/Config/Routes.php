<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Site');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Site::index');
$routes->get('/home', 'Site::view/home');
$routes->get('/about', 'Site::view/about');
$routes->get('/contact', 'Site::view/contact');
$routes->get('/products', 'Site::view/products');

$routes->get('/customers/(:num)', 'Customers::details/$1');

//routes /admin
$routes->add('/admin', 'Admin\Admin::index');

//admin/login
$routes->add('/admin/logout', 'Admin\Admin::logout');
$routes->add('/admin/validate-login', 'Admin\Users::validateLogin');

//admin/customers
$routes->add('/admin/customers', 'Admin\Customers::index');
$routes->add('/admin/customers/(:num)', 'Admin\Customers::details/$1');
$routes->add('/admin/customers/insert', 'Admin\Customers::insert');
$routes->add('/admin/customers/insert-action', 'Admin\Customers::insertAction');
$routes->add('/admin/customers/update/(:num)', 'Admin\Customers::update/$1');
$routes->add('/admin/customers/update-action/(:num)', 'Admin\Customers::updateAction/$1');
$routes->add('/admin/customers/delete/(:num)', 'Admin\Customers::delete/$1');
$routes->add('/admin/customers/search', 'Admin\Customers::search');

//api/clients
$routes->add('/api/clients', 'Api\Customers::index');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
