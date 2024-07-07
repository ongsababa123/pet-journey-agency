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


$routes->group('/', ['namespace' => 'App\Controllers\FrontPage'], function ($routes) {
    $routes->get('', 'HomePage::index_redirect');
});
$routes->group('th', ['namespace' => 'App\Controllers\FrontPage'], function ($routes) {
    $routes->get('homepage', 'HomePage::index');
    $routes->get('reviewpage', 'ReviewPage::index');
    $routes->get('contactpage', 'ContactPage::index');
    $routes->get('aboutuspage', 'AboutUsPage::index');
    $routes->get('servicepage/(:num)', 'ServicePage::index/$1');
    $routes->get('servicepage/buysale/(:num)', 'ServiceSellPage::index/$1');
    $routes->get('error', 'ErrorController::index');
});
$routes->group('en', ['namespace' => 'App\Controllers\FrontPage'], function ($routes) {
    $routes->get('homepage', 'HomePage::index');
    $routes->get('reviewpage', 'ReviewPage::index');
    $routes->get('contactpage', 'ContactPage::index');
    $routes->get('aboutuspage', 'AboutUsPage::index');
    $routes->get('servicepage/(:num)', 'ServicePage::index/$1');
    $routes->get('servicepage/buysale/(:num)', 'ServiceSellPage::index/$1');
    $routes->get('error', 'ErrorController::index');
});


$routes->group('dashboard/',  ['namespace' => 'App\Controllers\Dashboard'], function ($routes) {
    $routes->get('send-email',  'EmailController::sendEmail'); // ตั้งค่าเส้นทางให้เรียกฟังก์ชัน sendEmail ใน EmailController
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('login', 'UserAdminController::index_login'); //index login
    $routes->post('login/auth', 'UserAdminController::auth'); //auth
    $routes->get('logout', 'UserAdminController::logout'); //logout
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->post('quotation/create/withuser/(:num)', 'QuotationDataController::create_quotation/$1'); // create a new Quotation with user
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->post('message_contact/create', 'MessageContactController::create_message_contact'); //create message contact
});
// Grouped routes with a common namespace
$routes->group('dashboard/',  ['namespace' => 'App\Controllers\Dashboard', 'filter' => 'AuthGuard'], function ($routes) {
    $routes->get('dashboardhome', 'HomeDashboardController::index');
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('review', 'ReviewDataController::index'); //index review
    $routes->get('review/getdata', 'ReviewDataController::getData_review'); //getdata review
    $routes->get('review/changestatus/(:num)/(:num)', 'ReviewDataController::change_status_review/$1/$2'); //change status review
    $routes->get('review/delete/(:num)/(:segment)', 'ReviewDataController::delete_cover/$1/$2'); //delete review
    $routes->post('review/create', 'ReviewDataController::create_review'); // create review
    $routes->post('review/update/(:num)/(:segment)', 'ReviewDataController::update_review/$1/$2'); //update review
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('contact', 'ContactDataController::index'); //index contact
    $routes->post('contact/update/(:num)/(:segment)', 'ContactDataController::update_contact/$1/$2'); //update contact
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('partner', 'PartnerDataController::index');
    $routes->get('partner/getdata/(:num)', 'PartnerDataController::getData_partner/$1'); //get data for partner
    $routes->get('partner/changestatus/(:num)/(:num)', 'PartnerDataController::change_status_partner/$1/$2'); //change status partner
    $routes->get('partner/delete/(:num)/(:segment)', 'PartnerDataController::delete_partner/$1/$2'); //delete partner
    $routes->post('partner/create/(:num)', 'PartnerDataController::create_partner/$1'); //create partner data
    $routes->post('partner/update/(:num)/(:segment)', 'PartnerDataController::update_partner/$1/$2'); //update partner data
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('quotation', 'QuotationDataController::index');
    $routes->get('quotation/getdata', 'QuotationDataController::getData_quotation'); //create quotation
    $routes->get('quotation/changestatus/(:num)/(:num)', 'QuotationDataController::changestatus_quotation/$1/$2'); //change status quotation
    $routes->get('quotation/delete/(:num)', 'QuotationDataController::delete_quotation/$1'); //delete quotation
    $routes->post('quotation/create/(:num)', 'QuotationDataController::create_quotation/$1'); //create quotation
    $routes->post('quotation/update/(:num)/(:num)', 'QuotationDataController::update_quotation/$1/$2'); //create quotation
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('service', 'ServiceDataController::index');
    $routes->get('service/getdata', 'ServiceDataController::getData_service'); //get data for service
    $routes->get('service/changestatus/(:num)/(:num)', 'ServiceDataController::change_status_service/$1/$2'); //change status service
    $routes->post('service/create', 'ServiceDataController::create_service'); //create service data
    $routes->post('service/update/(:num)/(:segment)', 'ServiceDataController::update_service/$1/$2'); //update service data
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('animal/(:num)', 'ServiceDataController::index_service_content_buy_sale/$1'); //index animal
    $routes->get('animal/getdata/(:num)', 'ServiceDataController::getData_animal/$1'); //getdata animal
    $routes->post('animal/create/(:num)', 'ServiceDataController::create_animal/$1'); //create animal
    $routes->post('animal/update/(:num)/(:segment)', 'ServiceDataController::update_animal/$1/$2'); //update animal
    $routes->get('animal/changestatus/(:num)/(:num)', 'ServiceDataController::change_status_animal/$1/$2'); //change status animal
    $routes->get('animal/delete/(:num)/(:segment)', 'ServiceDataController::delete_animal/$1/$2'); //delete animal
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('service_content/(:num)/(:segment)', 'ServiceDataController::index_service_content/$1/$2'); //index service content
    $routes->post('service_content/update/(:num)', 'ServiceDataController::update_service_content/$1'); //update service content
    $routes->post('service_content/create/(:num)', 'ServiceDataController::create_service_content/$1'); //create service content
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('performanceteam', 'PerformanceTeamController::index'); //index performance team
    $routes->post('performanceteam/update/(:num)/(:segment)', 'PerformanceTeamController::update_performance/$1/$2'); //update performance
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('useradmin', 'UserAdminController::index'); //index useradmin
    $routes->get('useradmin/getdata', 'UserAdminController::getData_useradmin'); //getdata useradmin
    $routes->get('useradmin/changestatus/(:num)/(:num)', 'UserAdminController::change_status_useradmin/$1/$2'); //change status useradmin
    $routes->get('useradmin/delete/(:num)', 'UserAdminController::delete_useradmin/$1'); //delete useradmin
    $routes->post('useradmin/create', 'UserAdminController::create_useradmin'); //create useradmin
    $routes->post('useradmin/update/(:num)', 'UserAdminController::update_useradmin/$1'); //update useradmin
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('message_contact', 'MessageContactController::index'); // index message contact
    $routes->get('message_contact/getdata', 'MessageContactController::getData_message'); // getdata message contact
    $routes->get('message_contact/changestatus/(:num)/(:num)', 'MessageContactController::change_status_message/$1/$2'); //change status message contact
    $routes->get('message_contact/delete/(:num)', 'MessageContactController::delete_message/$1'); //delete message contact
    $routes->post('message_contact/create', 'MessageContactController::create_message_contact'); //create message contact
    $routes->post('message_contact/update/(:num)', 'MessageContactController::update_message_contact/$1'); //update message contact

});

$routes->group('dashboard/homepage/', ['namespace' => 'App\Controllers\Dashboard\Homepage', 'filter' => 'AuthGuard'], function ($routes) {
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('cover', 'HomePage_ConverController::index'); //index cover
    $routes->get('cover/getdata', 'HomePage_ConverController::getData_cover'); //getdata cover
    $routes->get('cover/changestatus/(:num)/(:num)', 'HomePage_ConverController::change_status_cover/$1/$2'); //change status cover
    $routes->get('cover/delete/(:num)/(:segment)', 'HomePage_ConverController::delete_cover/$1/$2'); //delete cover
    $routes->post('cover/create', 'HomePage_ConverController::create_cover'); //create cover
    $routes->post('cover/update/(:num)/(:segment)', 'HomePage_ConverController::update_cover/$1/$2'); //update cover
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('about', 'HomePage_AboutController::index'); //index about
    $routes->post('about/update/(:num)/(:segment)', 'HomePage_AboutController::update_about_homepage/$1/$2'); //update about
    //------------------------------------------------------------------------------------------------------------------------------------//
});

$routes->group('dashboard/aboutpage/', ['namespace' => 'App\Controllers\Dashboard\Aboutpage', 'filter' => 'AuthGuard'], function ($routes) {
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('abouthead', 'AboutPage_HeadController::index'); //index about head
    $routes->post('abouthead/update/(:num)/(:segment)', 'AboutPage_HeadController::update_about_head/$1/$2'); //update about head
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('aboutteam', 'AboutPage_TeamController::index'); //index about team
    $routes->get('aboutteam/getdata', 'AboutPage_TeamController::getData_team'); //getdata about team
    $routes->get('aboutteam/delete/(:num)/(:segment)', 'AboutPage_TeamController::delete_team/$1/$2'); //delete team
    $routes->get('aboutteam/changestatus/(:num)/(:num)', 'AboutPage_TeamController::change_status_team/$1/$2'); //change status team
    $routes->post('aboutteam/update/(:num)/(:segment)', 'AboutPage_TeamController::update_about_team/$1/$2'); //update about team
    $routes->post('aboutteam/create', 'AboutPage_TeamController::create_about_team'); //create about team
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('aboutmore', 'AboutPage_MoreController::index'); //index about more create_about_more
    $routes->get('aboutmore/getdata', 'AboutPage_MoreController::getData_more'); //getdata about more
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->get('aboutmore/changestatus/(:num)/(:num)', 'AboutPage_MoreController::change_status_more/$1/$2'); //change status more
    $routes->get('aboutmore/delete/(:num)/(:segment)', 'AboutPage_MoreController::delete_more/$1/$2'); //delete more
    //------------------------------------------------------------------------------------------------------------------------------------//
    $routes->post('aboutmore/create', 'AboutPage_MoreController::create_about_more'); //create about more
    $routes->post('aboutmore/update/(:num)/(:segment)', 'AboutPage_MoreController::update_about_more/$1/$2'); //update about more
    //------------------------------------------------------------------------------------------------------------------------------------//
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
