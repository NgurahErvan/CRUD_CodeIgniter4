<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Halaman
$routes->get('/', 'pegawai');
$routes->get('/tambah', 'pegawai::tambah');
$routes->get('/edit/(:any)', 'pegawai::edit/$1');

// Proses CRUD
$routes->post('tambah_proses', 'pegawai::tambah_proses');
$routes->post('edit_proses', 'pegawai::edit_proses');
$routes->get('hapus/(:any)', 'pegawai::hapus/$1');