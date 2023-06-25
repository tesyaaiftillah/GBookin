<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Route Auth
$route['Login|login'] = 'Auth/Login';
$route['Register|register'] = 'Auth/Register';

// Route Nav
$route['default_controller'] = 'home';
$route['Books|books'] = 'books';
$route['Collection|collection'] = 'collection';
$route['About|about'] = 'about';

// Routes for Membership Controller
$route['membership'] = 'membership/index';
$route['membership/create'] = 'membership/create';
$route['membership/edit/(:num)'] = 'membership/edit/$1';
$route['membership/delete/(:num)'] = 'membership/delete/$1';

// Routes for Book Controller
$route['book'] = 'book/index';
$route['book/create'] = 'book/create';
$route['book/edit/(:num)'] = 'book/edit/$1';
$route['book/delete/(:num)'] = 'book/delete/$1';

// Routes for AudioContent Controller
$route['audio_content'] = 'audiocontent/index';
$route['audio_content/create'] = 'audiocontent/create';
$route['audio_content/edit/(:num)'] = 'audiocontent/edit/$1';
$route['audio_content/delete/(:num)'] = 'audiocontent/delete/$1';

// Routes for Categories Controller
$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/edit/(:num)'] = 'categories/edit/$1';
$route['categories/delete/(:num)'] = 'categories/delete/$1';


// Dropdown
$route['Account|account'] = 'account';
