<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

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
//$routes->get('/', 'Home::index');

//contacts
//$routes->get('/', 'HomeController::index');

$routes->get('/home', 'Home::index');

$routes->get('login','Login::index');

$routes->get('register','Register::index');
$routes->post('/register','Register::do_register');

$routes->post('/','Login::do_login');



$routes->get('book','Book::index');
$routes->get('facilities','Facilities::index');



$routes->group("user",function($routes){
    $routes->get('home','Admin::index',['as'=>'user.home']);
    $routes->get('profile','Admin::profile',['as'=>'user.profile']);

});

$routes->get('cbook', 'cbook::cbook');



$routes->get('/contacts','Contacts::index');

$routes->post('/contacts/message','Contacts::message');
$routes->get('/contacts','Contacts::index');

$routes->post('/contacts','Contacts::message');



$routes->get('/book', 'Book::index');

$routes->get('/book', 'Book::book');
$routes->post('/book', 'Book::book');
$routes->post('/book/store', 'Book::store');
$routes->get('/book/store', 'Book::store');

$routes->get('/cbook', 'Cbook::cbook');
$routes->post('/cbook', 'Cbook::cbook');
$routes->post('/cbook/store', 'Cbook::store');
$routes->get('/cbook/store', 'Cbook::store');



$routes->get('/index', 'Dashboards::index');

$routes->get('/index/edit/(:num)', 'Dashboards::edit/$1');
$routes->post('/index/updatee/(:num)','Dashboards::update/$1');


//$routes->get('/index/confirm-delete/(:num)', 'Dashboards::delete/$1');
//$routes->post('/index/confirm-delete/(:num)', 'Dashboards::delete/$1');
//$routes->get('/index/confirm-delete/(num','Dashboard::confirmmethod/$1')
$routes->get('/index/delete/(:num)', 'Dashboards::delete/$1');
$routes->get('index/confirm-delete/(:num)','index/confirmdelete/$1');

//$routes->get('/index/cdelete/(:num)', 'Dashboards::cdelete/$1');
//$routes->post('/index/delete/(:num)', 'Dashboards::delete/$1');


//$route['index'] = 'Dashboards::index';
//$route['index/(:any)']['delete'] = "Dashboards/delete/$1";

$routes->get('/index/delete/(:num)', 'Dashboards::delete/$1');

$routes->get('Login/logout', 'Login::logout');

$routes->get('index/(:num)','Viewmore::viewindex/$1');

$routes->get('/index/editt/(:num)', 'Viewmore::editt/$1');
$routes->post('/index/update/(:num)','Viewmore::update/$1');
$routes->get('/index/deletee/(:num)', 'Viewmore::delete/$1');


$routes->get('/cafe', 'Facilities::cafe');
$routes->get('/croom', 'Facilities::croom');
$routes->get('services', 'Services::index');

//$routes->get('/fees', 'Services::index');


$routes->get('/cafe','Cafe::index');



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
