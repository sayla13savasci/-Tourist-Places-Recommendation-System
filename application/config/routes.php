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
$route['default_controller'] = 'tourist/touristSpot';
$route['spot/(:any)'] = 'tourist/getTouristSpotBy/$1';
$route['tourist/login'] = 'tourist/getLogin';
$route['tourist/check/login'] = 'tourist/postLogin';
$route['tourist/signup'] = 'tourist/getSignup';
$route['tourist/add'] = 'tourist/createTourist';
$route['tourist/account'] = 'tourist/editTourist';
$route['tourist/update'] = 'tourist/updateTourist';
$route['tourist/logout'] = 'tourist/logout';
$route['hotel/(:any)'] = 'tourist/getTouristHotelBy/$1';
$route['tourist/hotel'] = 'tourist/getTouristHotels';
$route['tourist/book/hotel/(:num)'] = 'tourist/touristBookHotel/$1';
$route['tourist/book/hotel/room/(:num)'] = 'tourist/touristBookHotelRoom/$1';
$route['tourist/hotel/booking/history'] = 'tourist/getTouristHotelBookHistory';
$route['tourist/hotel/cancel/booking/(:num)/(:num)'] = 'tourist/cancelTouristHotelRoomBook/$1/$2';

//===================== admin =============================//
$route['admin'] = 'admin/dashboard';
$route['admin/tourist/add'] = 'admin/createTourist';
$route['admin/tourist/edit/(:num)'] = 'admin/editTourist/$1';
$route['admin/tourist/update'] = 'admin/updateTourist';
$route['admin/tourist/delete/(:num)'] = 'admin/deleteTourist/$1';

$route['admin/tourist-spot'] = 'admin/touristSpot';
$route['admin/tourist-spot/add'] = 'admin/createTouristSpot';
$route['admin/tourist-spot/edit/(:num)'] = 'admin/editTouristSpot/$1';
$route['admin/tourist-spot/update'] = 'admin/updateTouristSpot';
$route['admin/tourist-spot/delete/(:num)'] = 'admin/deleteTouristSpot/$1';

$route['admin/tourist-hotel'] = 'admin/touristHotel';
$route['admin/tourist-hotel/add'] = 'admin/createTouristHotel';
$route['admin/tourist-hotel/edit/(:num)'] = 'admin/editTouristHotel/$1';
$route['admin/tourist-hotel/update'] = 'admin/updateTouristHotel';
$route['admin/tourist-hotel/delete/(:num)'] = 'admin/deleteTouristHotel/$1';
$route['admin/tourist-hotel-booking-history'] = 'admin/touristHotelBookingHistory';

$route['admin/hotel/create/room/(:num)'] = 'admin/createHotelRoom/$1';
$route['admin/hotel/insert/room'] = 'admin/insertHotelRoom';
$route['admin/hotel/edit/room/(:num)'] = 'admin/editHotelRoom/$1';
$route['admin/hotel/update/room/(:num)'] = 'admin/updateHotelRoom/$1';
$route['admin/hotel/delete/room/(:num)'] = 'admin/deleteHotelRoom/$1';

$route['admin/login'] = 'admin/getLogin';
$route['admin/check/login'] = 'admin/postLogin';
$route['admin/logout'] = 'admin/logout';
//===================== end admin ==========================//

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
