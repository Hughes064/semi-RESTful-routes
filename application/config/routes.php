<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
$route['default_controller'] = 'products';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['show/(:num)'] = 'products/show/$1';
$route['edit/(:num)'] = 'products/edit/$1';
$route['addProduct'] = 'products/addProduct';
$route['create'] = 'products/create';
$route['update'] = 'products/update';
$route['destroy/(:num)'] = 'products/destroy/$1';