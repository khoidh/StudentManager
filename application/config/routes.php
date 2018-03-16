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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Class
$route['quan-ly-lop'] = 'classmanager';
// $route['edit_lop/(:num)'] = "classmanager/edit/$1";
// $route['delete_lop/(:num)'] = 'classmanagerdelete/$1';
// $route['add_lop'] = "add";

//$route['add_lop']['post'] = "classmanager/add";

//Student
$route['edit_student/(:num)'] = "student/edit/$1";
$route['delete_student/(:num)'] = "student/delete/$1";
$route['update_student/(:num)'] = "student/update/$1";
$route['add_student'] = "student/add";
//$route['add_student/(:num)'] = "student/add/$1";

//Subject
$route['edit_subject/(:num)'] = "subject/edit/$1";
$route['delete_subject/(:num)'] = "subject/delete/$1";
$route['update_subject/(:num)'] = "subject/update/$1";
$route['add_subject'] = "subject/add";

//point
$route['edit_point/(:num)'] = "point/edit/$1";
$route['delete_point/(:num)'] = "point/delete/$1";
$route['update_point/(:num)'] = "point/update/$1";
$route['add_point'] = "point/add";

//point_type
$route['edit_point_type/(:num)'] = "point_type/edit/$1";
$route['delete_point_type/(:num)'] = "point_type/delete/$1";
$route['update_point_type/(:num)'] = "point_type/update/$1";
$route['add_point_type'] = "point_type/add";

$route['admin'] = 'admin/dashboard';