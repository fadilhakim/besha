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
$route['default_controller'] = 'home/view_2';
$route['home'] = 'home/view_2';
$route['home-2'] = 'home/view_2';
$route['about'] = 'about/view';
$route['event'] = 'event/view';
$route['product'] = 'product/view';
$route['career'] = 'career/view';
$route['info'] = 'info';

$route['product/(:num)/(:any)/(:any)']['get'] = 'product/detail/$1/$2/$3';
$route['product/(:num)'] = 'product/view/$1';
$route['product/(:any)']['get'] = 'product/category/$1/$2';
$route['product/manufacturer/(:num)']= 'product/manufacturer/$1';
$route['product/search/(:any)']['get'] = 'product/search/$1';

$route['event/detail/(:num)'] = 'event/detail/$1';
$route['news/detail/(:num)'] = 'event/detail_news/$1';


$route['product_category/(:any)']['get'] = 'product_category/index/$1';
$route['product_detail/(:any)/(:any)']['get'] = 'product_detail/view/$1/$2';
$route['contact'] = 'contact/index';
$route['manufacturer'] = 'manufacturer/view';
$route['client'] = 'manufacturer/client';
$route['404_override'] = 'home/besha404';
$route['translate_uri_dashes'] = FALSE;


//sparepart side
$route['sparepart'] = 'sparepart';
$route['sparepart/contact'] = 'sparepart/contact';
$route['sparepart/contact_post'] = 'sparepart/contact_post';

$route['sparepart/signup'] = 'sparepart/signup';
$route['sparepart/login'] = 'sparepart/login';
$route['login-action'] = 'sparepart/login_action';
$route['login-action-2'] = 'sparepart/login_action_2';
$route['verify'] = 'sparepart/verify';
$route['success'] = 'sparepart/success';

$route['spareparts/detail/(:any)/(:num)'] = 'sparepart/detail/$1/$2';

//Sparepart All Manufacturer & Category
$route['spareparts/all/(:num)'] = 'sparepart/list_view';
$route['sparepart/all/(:num)'] = 'sparepart/grid_view';
//Sparepart By Manufacturer
$route['spareparts/manufacturer/(:num)'] = 'sparepart/list_view_manufacturer/$1';
$route['sparepart/manufacturer/(:num)'] = 'sparepart/list_grid_manufacturer/$1';
//Sparepart By Manufacturer Pagination
$route['spareparts/manufacturer/(:num)/(:num)'] = 'sparepart/list_view_manufacturer/$1/$2';
$route['sparepart/manufacturer/(:num)/(:num)'] = 'sparepart/list_grid_manufacturer/$1/$2';
//Sparepart By Search
$route['sparepart/search/(:any)']= 'sparepart/search/$1';
$route['sparepart/search_grid/(:any)']= 'sparepart/search_grid/$1';
//Sparepart By Subcategory (like PUMP)
$route['spareparts/category/(:num)/(:any)/(:num)'] = 'sparepart/list_view/$1/$2';
$route['sparepart/category/(:num)/(:any)/(:num)'] = 'sparepart/grid_view/$1/$2';

//Sparepart Cart
$route['cart/add_cart_item'] = 'cart/add_cart_item';
$route['cart/remove_item/(:any)'] = 'cart/removeCartItem/$1';
$route['cart/empty'] = 'cart/empty_cart';
$route['cart/update_cart'] = 'cart/update_cart';


//admin route
$route['admin'] = 'admin/index';
$route['admin/slider'] = 'admin/slider';

$route['admin/product'] = 'admin/product';
$route['admin/product-list'] = 'admin/list_product';
$route['admin/product-category'] = 'admin/category_product';

$route['admin/sparepart'] = 'admin/sparepart';
$route['admin/list_sparepart'] = 'admin/list_sparepart';
$route['admin/sparepart_category'] = 'admin/sparepart_category';

$route['admin/client'] = 'admin/clients';
$route['admin/manufacturer'] = 'admin/manufacturer';
$route['admin/event'] = 'admin/event';
$route['admin/news'] = 'admin/news';
$route['admin/susbscriber'] = 'admin/subscriber';
$route['admin/discount'] = 'admin/discount';
$route['admin/users_admin'] = 'admin/users_admin';
$route['admin/members'] = 'admin/members';
$route['admin/order_history'] = 'admin/order_history';

//insert
$route['admin/add/product'] = 'insert/insert_product';
$route['admin/add/slider'] = 'insert/insert_slider';
$route['admin/add/client'] = 'insert/insert_client';
$route['admin/add/manufacturer'] = 'insert/insert_manufacturer';
$route['admin/add/event'] = 'insert/insert_event';
$route['admin/add/news'] = 'insert/insert_news';
$route['admin/add/discount'] = 'insert/insert_discount';
$route['admin/add/users'] = 'insert/insert_admin';
$route['admin/add/sparepart'] = 'insert/insert_sparepart';
$route['admin/add/category_product'] = 'insert/insert_category_product';
$route['admin/add/category_sparepart'] = 'insert/insert_category_sparepart';
$route['admin/add/category_to_manu'] = 'insert/category_to_manu';
$route['contact/input_subs'] = 'contact/input_subs';

//delete
$route['admin/delete/slider/(:num)/(:any)'] = 'delete/delete_slider';
$route['admin/delete/event/(:num)/(:any)'] = 'delete/delete_event';
$route['admin/delete/news/(:num)'] = 'delete/delete_news';
$route['admin/delete/client/(:num)/(:any)'] = 'delete/delete_client';
$route['admin/delete/manufacturer/(:num)/(:any)'] = 'delete/delete_manufacturer';
$route['admin/delete/category/(:any)'] = 'delete/delete_category';
$route['admin/delete/sparepart_category/(:any)'] = 'delete/delete_sparepart_category';
$route['admin/delete/product/(:num)'] = 'delete/delete_product';
$route['admin/delete/discount/(:num)'] = 'delete/delete_voucher';
$route['admin/delete/sparepart/(:num)/(:any)'] = 'delete/delete_sparepart';
$route['admin/delete/users/(:num)'] = 'delete/delete_admin';
$route['admin/delete/category_to_manu/(:num)/(:num)'] = 'delete/category_to_manu/$1/$2';
$route['admin/delete/member/(:num)'] = 'delete/delete_member';
//edit view
$route['admin/edit/slider/(:num)'] = 'admin/edit_slider/$1';
$route['admin/edit/manufacturer/(:num)'] = 'admin/edit_manu/$1';
$route['admin/edit/event/(:num)'] = 'admin/edit_event/$1';
$route['admin/edit/news/(:num)'] = 'admin/edit_news/$1';
$route['admin/edit/product/(:num)'] = 'admin/edit_product/$1';
$route['admin/edit/(:num)/(:any)/(:any)']['get'] = 'admin/edit_product/$1/$2/$3';
$route['admin/edit/discount/(:num)'] = 'admin/edit_voucher/$1';
$route['admin/edit/sparepart/(:num)'] = 'admin/edit_sparepart/$1';
$route['admin/edit/admin/(:num)'] = 'admin/edit_admin/$1';
$route['admin/edit/member/(:num)'] = 'admin/edit_member/$1';
$route['admin/edit/order/(:num)'] = 'admin/edit_order/$1';

//edit function
$route['admin/edit/slider_f'] = 'update/update_slider';
$route['admin/edit/manu_f'] = 'update/update_manufacturer';
$route['admin/edit/product_f'] = 'update/update_product';
$route['admin/edit/event_f'] = 'update/update_event';
$route['admin/edit/news_f'] = 'update/update_news';
$route['admin/edit/discount_f'] = 'update/update_discount';
$route['admin/edit/sparepart_f'] = 'update/update_sparepart';
$route['admin/edit/admin_f'] = 'update/update_admin';
$route['admin/edit/member_f'] = 'update/update_member';



//others 

$route['login/verify/admin/(:any)'] = 'admin_users/verify';
$route['login/verify/submit'] = 'admin_users/verify_submit';

//users confirm email
$route['registration/success'] = 'sparepart/user_registration_sucess';
$route['verify/users/(:any)'] = 'sparepart/user_registration_after_confirm';

$route['verify_email/(:any)'] = 'sparepart/verify/$1';

$route['sparepart/thankyou_for_confirm'] = 'sparepart/thankyou_for_confirm';

