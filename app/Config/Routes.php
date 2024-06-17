<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// Default route
$routes->group('/', ['namespace' => 'App\Controllers\Dashboard'], function ($routes) {
    $routes->get('', 'HomePage_edit_cover::index');
});

// Grouped routes with a common namespace
$routes->group('dashboard/', ['namespace' => 'App\Controllers\Dashboard'], function ($routes) {
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('review', 'ReviewDataController::index'); //index review
    $routes->get('review/getdata', 'ReviewDataController::getData_review'); //getdata review
    $routes->get('review/changestatus/(:num)/(:num)', 'ReviewDataController::change_status_review/$1/$2'); //change status review
    $routes->get('review/delete/(:num)/(:segment)', 'ReviewDataController::delete_cover/$1/$2'); //delete review
    $routes->post('review/create', 'ReviewDataController::create_review'); // create review
    $routes->post('review/update/(:num)', 'ReviewDataController::update_review/$1'); //update review
//------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('contact', 'ContactDataController::index'); //index contact
    $routes->post('contact/update/(:num)/(:segment)', 'ContactDataController::update_contact/$1/$2'); //update contact
//------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('service', 'ServiceDataController::index');
});

$routes->group('dashboard/homepage/', ['namespace' => 'App\Controllers\Dashboard\Homepage'], function ($routes) {
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('cover', 'HomePage_ConverController::index'); //index cover
    $routes->get('cover/getdata', 'HomePage_ConverController::getData_cover'); //getdata cover
    $routes->get('cover/changestatus/(:num)/(:num)', 'HomePage_ConverController::change_status_cover/$1/$2'); //change status cover
    $routes->get('cover/delete/(:num)/(:segment)', 'HomePage_ConverController::delete_cover/$1/$2'); //delete cover
    $routes->post('cover/create', 'HomePage_ConverController::create_cover'); //create cover
    $routes->post('cover/update/(:num)', 'HomePage_ConverController::update_cover/$1'); //update cover
//------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('about', 'HomePage_AboutController::index'); //index about
    $routes->post('about/update/(:num)/(:segment)', 'HomePage_AboutController::update_about_homepage/$1/$2'); //update about
});


// Another group with a different namespace
// $routes->group('api', ['namespace' => 'App\Controllers\Api'], function($routes) {
//     $routes->get('users', 'Users::index');
//     $routes->post('users', 'Users::create');
//     $routes->put('users/(:segment)', 'Users::update/$1');
//     $routes->delete('users/(:segment)', 'Users::delete/$1');
// });

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. The
 * following file allows you to do that.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
