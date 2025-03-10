<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('upload', 'Archivos::index');
$routes->post('upload', 'Archivos::upload');
$routes->get('visualizar', 'Archivos::visualizar');
$routes->get('/csv/eliminar/(:num)', 'Archivos::eliminar/$1');
$routes->get('nuevo', 'Archivos::nuevo');
$routes->post('nuevo', 'Archivos::nuevo');
$routes->post('crear', 'Archivos::crear');
$routes->get('ver/(:num)', 'Archivos::ver/$1');
$routes->get('api/descargar/(:num)/(:num)/(:num)', 'Api::descargarImagenes/$1/$2/$3');
$routes->get('api/descargar', 'Api::descargarImagenes/75/200/300'); // ruta por defecto
$routes->get('imagenes/convertir', 'Archivos::convertir');