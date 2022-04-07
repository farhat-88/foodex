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
$routes->setDefaultController('Home');
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

$routes->get('/', 'User::index');
$routes->match(['get','post'],'/login', 'User::userLogin',['filter'=>'isNotLoggedIn:dual,noreturn']);
$routes->match(['get','post'],'/user_profile', 'User::user_profile',['filter'=>'isLoggedIn:dual,noreturn']);

$routes->match(['get','post'],'/register_to_donate', 'Register::d_registration',['filter'=>'isNotLoggedIn:dual,noreturn']);
$routes->match(['get','post'],'/register_to_receive', 'Register::s_registration',['filter'=>'isNotLoggedIn:dual,noreturn']);

$routes->get('/home', 'Home::index',['filter'=>'isLoggedIn:dual,noreturn']);

$routes->get('/donate', 'Donate::index',['filter'=>'isLoggedIn:dual,noreturn']);
$routes->match(['get','post'],'/donate/donate_meal', 'Donate::donate_meal',['filter'=>'isLoggedIn:dual,noreturn']);

$routes->match(['get','post'],'/receive', 'Receive::meals_listing',['filter'=>'isLoggedIn:dual,noreturn']);
$routes->match(['get','post'],'/receive/(:num)', 'Receive::meals_delete/$1',['filter'=>'isLoggedIn:dual,noreturn']);
$routes->match(['get','post'],'/receive/update/(:num)', 'Receive::meals_update/$1',['filter'=>'isLoggedIn:dual,noreturn']);
$routes->match(['get','post'],'/receive/book-meal/(:num)', 'Receive::book_meal/$1',['filter'=>'isLoggedIn:dual,noreturn']);


$routes->match(['get','post'],'/confirmation/(:num)', 'Receive::confirmation/$1',['filter'=>'isLoggedIn:dual,noreturn']);
$routes->match(['get','post'],'/confirmation/status/(:num)', 'Receive::status/$1',['filter'=>'isLoggedIn:dual,noreturn']);
$routes->match(['get','post'],'/confirmation/delivery/(:num)', 'Receive::delivered/$1',['filter'=>'isLoggedIn:dual,noreturn']);
$routes->match(['get','post'],'/confirmation/cancel/(:num)', 'Receive::cancelled/$1',['filter'=>'isLoggedIn:dual,noreturn']);

$routes->match(['get','post'],'/contact', 'Sendmail_Controller::sendmail',['filter'=>'isLoggedIn:dual,noreturn']);

$routes->get('/about', 'About::index',['filter'=>'isLoggedIn:dual,noreturn']);
$routes->get('/faqs', 'Faq::index',['filter'=>'isLoggedIn:dual,noreturn']);

$routes->get('/logout', 'Logout::logout',['filter'=>'isLoggedIn:dual,noreturn']);





/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
