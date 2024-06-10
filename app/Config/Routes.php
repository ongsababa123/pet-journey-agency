<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard_edit_cover::index');
$routes->group("dashboard", function ($routes) {
    $routes->match(['get', 'post'], 'index/cover', 'Dashboard_edit_cover::index');

});