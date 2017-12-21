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


$route['(:any)'] = "MainController/index";
$route['main/perumahan/(:any)'] = "MainController/lihatPerumahan/$1";
$route['main/perumahan/(:any)/(:any)'] = "MainController/lihatPerumahan/$1/$2";
$route['main/tanah'] = 'MainController/lihatTanah/';
$route['main/tanah/(:any)'] = 'MainController/lihatTanah/$1';
$route['main/tanah/(:any)/(:any)'] = 'MainController/lihatTanah/$1/$2';

$route['default_controller'] = 'maincontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

