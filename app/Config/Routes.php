<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Pages::index');
 $routes->get('/menupelanggan', 'Pages::menupelanggan');
 $routes->get('/home', 'Pages::index');
 $routes->get('/about', 'Pages::about');
 $routes->get('/contact', 'Pages::contact');
 

$routes->get('login', 'Login::index'); # Menampilkan Halaman Login
$routes->post('login', 'Login::action'); # Untuk handle form login
$routes->get('logout', 'Login::logout');
$routes->get('homekaryawan', 'HomeKaryawan::index');
$routes->get('menu', 'PagesKaryawan::menu');
$routes->get('/menu/tambahmenu', 'PagesKaryawan::tambahMenu');
$routes->get('datapelanggan','PagesKaryawan::pelanggan');
$routes->get('laporan', 'PagesKaryawan::keuangan');

$routes->get('/qrcode', 'QRCodeController::index');
$routes->get('/qrcode/generate', 'QRCodeController::generateQRCode');
$routes->get('tambahdata', 'PagesKaryawan::create');
$routes->post('datapelanggan', 'PagesKaryawan::store');
$routes->get('editdata/(:segment)', 'PagesKaryawan::edit/$1');