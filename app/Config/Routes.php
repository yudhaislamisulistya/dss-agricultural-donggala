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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'AuthController::login', ['as' => 'login']);
$routes->post('/', 'AuthController::login_post', ['as' => 'login_post']);
$routes->get('/logout', 'AuthController::logout', ['as' => 'logout']);


$routes->group('admin', function($routes){
    $routes->get('dashboard', 'UserController::dashboard_admin', ['as' => 'dashboard_admin_index']);

    // Manajemen Untuk Data Alternatif
    $routes->group('data-alternatif', function($routes){
        $routes->get('/', 'AlternatifController::index', ['as' => 'alternatif_admin_index']);
        $routes->post('save', 'AlternatifController::save', ['as' => 'alternatif_admin_save']);
        $routes->post('update', 'AlternatifController::update', ['as' => 'alternatif_admin_update']);
        $routes->post('delete', 'AlternatifController::delete', ['as' => 'alternatif_admin_delete']);
    });

    // Manajemen Untuk Data Kriteria
    $routes->group('data-kriteria', function($routes){
        $routes->get('/', 'KriteriaController::index', ['as' => 'kriteria_admin_index']);
        $routes->post('save', 'KriteriaController::save', ['as' => 'kriteria_admin_save']);
        $routes->post('update', 'KriteriaController::update', ['as' => 'kriteria_admin_update']);
        $routes->post('delete', 'KriteriaController::delete', ['as' => 'kriteria_admin_delete']);
    });

    // Manajemen Untuk Data Sub Kriteria
    $routes->group('data-sub-kriteria', function($routes){
        $routes->get('/', 'SubKriteriaController::index', ['as' => 'sub_kriteria_admin_index']);
        $routes->post('save', 'SubKriteriaController::save', ['as' => 'sub_kriteria_admin_save']);
        $routes->post('update', 'SubKriteriaController::update', ['as' => 'sub_kriteria_admin_update']);
        $routes->post('delete', 'SubKriteriaController::delete', ['as' => 'sub_kriteria_admin_delete']);
    });

    // Manajamen Untuk Perhitungan Topsis
    $routes->group('perhitungan-topsis', function($routes){
        $routes->get('/', 'PerhitunganTopsisController::index', ['as' => 'perhitungan_topsis_admin_index']);
    });

    // Manajemen Untuk Hasil Akhir
    $routes->group('hasil-akhir', function($routes){
        $routes->get('/', 'HasilAkhirController::index', ['as' => 'hasil_akhir_admin_index']);
    });

    // Manajemen Data Pengepul
    $routes->group('data-pengepul', function($routes){
        $routes->get('/', 'PengepulController::index', ['as' => 'pengepul_admin_index']);
    });
});

$routes->group('collector', function($routes){
    $routes->get('dashboard', 'UserController::dashboard_collector', ['as' => 'dashboard_collector_index']);

    // Manajemen Penentuan Hasil Panen
    $routes->group('hasil-panen', function($routes){
        $routes->get('/', 'HasilPanenController::index', ['as' => 'hasil_panen_collector_index']);
    });

    // Manajemen Histori
    $routes->group('histori', function($routes){
        $routes->get('/', 'HistoriController::index', ['as' => 'histori_collector_index']);
    });

    // Manajemen Profil
    $routes->group('profil', function($routes){
        $routes->get('/', 'UserController::profil', ['as' => 'profil_collector_index']);
    });
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
