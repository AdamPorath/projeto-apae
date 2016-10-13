<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/** Associados */
$route['associated'] = "AssociatedController";
$route['associated-detail/(:num)'] = "AssociatedController/detailedAssociate/$1";
$route['associated/new'] = "AssociatedController/newAssociate";
$route['associated/create'] = "AssociatedController/createAssociate";
$route['associated/edit/(:num)'] = "AssociatedController/editAssociate/$1";
$route['associated/update'] = "AssociatedController/updateAssociate";
$route['associated/delete/(:num)'] = "AssociatedController/deleteAssociate/$1";
/** Fim Associados */
