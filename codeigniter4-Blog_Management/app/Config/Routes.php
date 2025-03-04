<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('blog', 'BlogController::index');
$routes->get('blog/(:num)', 'BlogController::view/$1');
 

// Admin Panel Routes
$routes->get('admin/blogs', 'AdminBlogController::index');
$routes->get('admin/blogs/add', 'AdminBlogController::add');
$routes->post('admin/blogs/create', 'AdminBlogController::create');
$routes->get('admin/blogs/edit/(:num)', 'AdminBlogController::edit/$1');
$routes->post('admin/blogs/update/(:num)', 'AdminBlogController::update/$1');
$routes->get('admin/blogs/delete/(:num)', 'AdminBlogController::delete/$1');