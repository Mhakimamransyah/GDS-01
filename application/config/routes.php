<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/edit'] = 'posts/edit/$1';
$route['posts/view'] = 'posts/view/$1';
$route['posts'] = 'posts/index';

$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/post/(:any)'] = 'categories/post/$1';

$route['users/login'] = 'users/login';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'maincontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
