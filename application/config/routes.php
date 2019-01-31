<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['admin/(:any)'] = 'admin/view/$1';
$route['view/(:any)'] = 'post/view/$1';
$route['default_controller'] = 'page/view';	
$route['(:any)'] = 'page/view/$1';	
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
