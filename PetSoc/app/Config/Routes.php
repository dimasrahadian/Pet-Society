<?php

namespace Config;

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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('logout', 'Login::logout');
$routes->match(['get', 'post'], 'register', 'Login::register');
$routes->get('dashboard', 'Home::Admin', ['filter' => 'auth']);
$routes->get('/homepage', 'Home::Admin');
$routes->get('/about', 'Home::About');
$routes->get('/viewcontact', 'Home::Contact');
$routes->get('/viewpetsitting', 'Home::Petsitting');
$routes->get('/viewstore', 'Home::Store');
$routes->get('/viewstoree', 'Home::Storee');
$routes->get('/viewvetservice', 'Home::Veterinary');
$routes->get('/viewvetservicee', 'Home::Veterinaryy');
$routes->get('/viewvetserviceee', 'Home::Veterinaryyy');
$routes->get('/viewvetserviceeee', 'Home::Veterinaryyyy');
$routes->get('/viewpetsittingg', 'Home::Petsittingg');
$routes->get('/viewpetsittinggg', 'Home::Petsittinggg');
$routes->get('/viewpetsittingggg', 'Home::Petsittingggg');
$routes->get('/mitrapro', 'Mitrapro::index');
$routes->get('/mitrapet', 'Mitrapet::index');
$routes->get('/doctor', 'Doctor::index');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
