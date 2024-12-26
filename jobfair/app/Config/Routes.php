<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');


$routes->get('/register', 'Auth::register'); // Route untuk halaman registrasi (GET)
$routes->post('/register', 'Auth::attemptRegister'); // Route untuk proses registrasi (POST)
$routes->get('/login', 'Auth::login'); // Route untuk halaman login (GET)
$routes->post('/login', 'Auth::attemptLogin'); // Route untuk proses login (POST)
$routes->get('/logout', 'Auth::logout'); // Route untuk logout



$routes->group('job', function ($r) {
    $r->get('/', 'Job::index');
    $r->get('about', 'Job::about');
    $r->get('category', 'Job::category');
    $r->get('testimonial', 'Job::testimonial');
    $r->get('create', 'Job::create');
    $r->post('create', 'Job::save');
    $r->get('(:num)', 'Job::detail/$1');
    $r->get('edit/(:any)', 'Job::edit/$1');
    $r->post('edit/(:any)', 'Job::update/$1');
    $r->delete('(:num)', 'Job::delete/$1');
    $r->get('listapply', 'Job::listapply');
    $r->get('apply', 'Job::apply');
    $r->post('apply', 'Job::submit');
    $r->get('detailapply/(:num)', 'Job::detailApply/$1');
    $r->get('downloadCVPDF/(:any)', 'Job::downloadCVPDF/$1');
});






$routes->get('/pesan', 'Pesan::index');
$routes->get('/pesan/contact', 'Pesan::contact');
$routes->get('/pesan/create', 'Pesan::create');
$routes->post('/pesan/create', 'Pesan::save');
$routes->get('/pesan/(:num)', 'Pesan::detail/$1');


// Rute untuk halaman registrasi




$routes->get('/coba', function () {
    echo 'Hello World' ;
});

$routes->get('/users', 'Admin\Users::index');