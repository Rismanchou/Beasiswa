<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('mahasiswa', function ($routes) {
    $routes->get('/', 'Mahasiswa::index');
    $routes->add('tambah', 'Mahasiswa::tambah');
    $routes->add('ubah/(:any)', 'Mahasiswa::ubah/$1');
    $routes->get('hapus/(:any)', 'Mahasiswa::hapus/$1');
});

$routes->group('pendidikan', function ($routes) {
    $routes->add('tambah/(:any)', 'Pendidikan::tambah/$1');
    $routes->add('ubah/(:any)', 'Pendidikan::ubah/$1');
    $routes->get('hapus/(:any)', 'Pendidikan::hapus/$1');
});
