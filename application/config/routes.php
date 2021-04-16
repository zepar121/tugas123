<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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

# Version 2
$route['v2'] = 'v2/Page';
$route['v2/Data/(:any)'] = 'v2/Data/$1';
$route['v2/(:any)'] = 'v2/Page/main/$1';
$route['v2/(:any)/process_create'] = 'v2/Process/sub_main_add';
$route['v2/(:any)/process_delete'] = 'v2/Process/sub_main_delete';
$route['v2/(:any)/(:any)'] = 'v2/Page/sub/$1/$2';
$route['v2/(:any)/(:any)/update'] = 'v2/Page/sub_update/$1/$2';
$route['v2/(:any)/(:any)/process_update'] = 'v2/Process/sub_main_update';

# Version 3
$route['v3'] = 'v3/Page';
$route['v3/Data/(:any)'] = 'v3/Data/$1';
$route['v3/(:any)'] = 'v3/Page/main/$1';
$route['v3/(:any)/process_create'] = 'v3/Process/sub_main_add';
$route['v3/(:any)/process_delete'] = 'v3/Process/sub_main_delete';
$route['v3/(:any)/(:any)'] = 'v3/Page/sub/$1/$2';
$route['v3/(:any)/(:any)/update'] = 'v3/Page/sub_update/$1/$2';
$route['v3/(:any)/(:any)/process_update'] = 'v3/Process/sub_main_update';

# Version 1
$route['Data/(:any)'] = 'v1/Data/$1';
$route['(:any)'] = 'v1/Page/main/$1';
$route['(:any)/process_create'] = 'v1/Process/sub_main_add';
$route['(:any)/process_delete'] = 'v1/Process/sub_main_delete';
$route['(:any)/(:any)'] = 'v1/Page/sub/$1/$2';
$route['(:any)/(:any)/update'] = 'v1/Page/sub_update/$1/$2';
$route['(:any)/(:any)/process_update'] = 'v1/Process/sub_main_update';


$route['default_controller'] = 'v1/Page';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
