<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
$route['default_controller'] = 'products/index';
$route['products/index'] = 'products/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// $route['(:any)'] = 'pages/view/$1';