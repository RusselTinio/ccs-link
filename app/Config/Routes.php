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
$routes->get('/', 'Home');


$routes->group('',['filter' =>'AuthCheck'], function($routes){
    $routes->get('Dashboard', 'Dash\Dash::index');
    $routes->get('News', 'Dash\Dash::news');
    $routes->get('Events', 'Dash\Dash::events');
    $routes->get('Jobs', 'Dash\Dash::job');
    $routes->get('Mentorship', 'Dash\mentorship::index');
    $routes->get('Profile', 'Dash\ProfileController::index');
    

});
    
//for admin filter
$routes->group('',['filter' =>'AdminCheckFilter'], function($routes){
    $routes->get('Admin','adminController\AdminFolder\Admin::adminView');
    $routes->get('admin/user_list','adminController\AdminFolder\ListofUserController::index');
    $routes->get('admin/mentor_list','adminController\AdminFolder\ListofUserController::mentoring');
    $routes->get('admin/job_list','adminController\AdminFolder\JobController::index');
    $routes->get('admin/news_and_events','adminController\AdminFolder\NewsController::index');
    $routes->get('admin/donation','adminController\AdminFolder\DonationController::index');
    $routes->get('admin/audit_trail','AdminController\AdminFolder\AuditTrailController::display');

    
    //for superAdmin

   
    $routes->get('superadmin/job_list','adminController\SuperAdminFolder\PartnerController::index');
    $routes->get('superadmin/applicant_list','Dash\ApplicantController::index');
   
    


     

});

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
