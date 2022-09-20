<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route["convert/cmtofeet/".'(:num)'] = 'convert/cmtofeet/$1';

$route['default_controller'] = 'convert';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

