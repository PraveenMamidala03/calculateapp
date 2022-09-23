<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route["height/redirect"] = 'height/redirect/';
$route["height/(:any)/(:any)"] = 'height/result/$2';
$route["height/(:any)"] = 'height/convert/$1';

$route['default_controller'] = 'height';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

