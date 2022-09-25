<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['sitemap\.xml'] = "Sitemap/index";
$route['height.xml'] = "Sitemap/height";
$route["height/redirect"] = 'height/redirect/';
$route["height/(:any)/(:any)"] = 'height/result/$2';
$route["height/(:any)"] = 'height/convert/$1';

$route['default_controller'] = 'height';
$route['404']             = "height/my_404";
$route['404_override']    = 'height/my_404';
$route['translate_uri_dashes'] = FALSE;

