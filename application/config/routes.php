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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Welcome';
$route['translate_uri_dashes'] = FALSE;
$route['404_override'] = 'error/error_404';
//$route['default_controller'] = 'pages/view';
$route['welcome'] = 'welcome/login';
$route['template1'] = 'pages/theme-1';
$route['admin_login_success'] = 'social/admin_login_success';
$route['fb_share'] = 'social/fb_share';
$route['business_signup'] = 'business/business_signup';
$route['business_signup2'] = 'business/business_signup2';
$route['business_thank_you'] = 'business/business_thank_you';
$route['login'] = 'user/login';
$route['myaccount'] = 'user/myaccount';
$route['recover_password'] = 'user/recover_password';
$route['professioanl_profile'] = 'Professional/professioanl_profile';
$route['professioanl_awards'] = 'Professional/professioanl_awards';
$route['professioanl_reviews']='Professional/professioanl_reviews';
$route['professional_ideas']='Professional/professional_ideas';
$route['professional_promotions']='Professional/professional_promotions';
$route['professional_aboutus']='Professional/professional_aboutus';
$route['promotions']='Professional/promotions';
$route['marriage_demo'] = 'Marriage/marriage_demo';
$route['professioanl_category'] = 'Professional/professioanl_find';
$route['professional_find'] = 'Professional/professional_find_pros_category';
$route['upload_csv'] = 'Newsletter/upload_csv';
$route['create_email_template'] = 'Newsletter/create_email_template';
$route['admin'] = 'admin/login';
$route['dashboard'] = 'admin/dashboard';
$route['newuser'] = 'admin/add_newUser';
$route['viewProfile'] = 'admin/viewProfile';
$route['editProfile'] = 'admin/editProfile';
$route['allusers'] = 'User/allusers';
$route['signup_step1'] = 'user/business_signup';
$route['signup_step2'] = 'user/business_signup2';
$route['signup_step2'] = 'user/business_thankyou';
$route['coustomer-signup'] = 'user/coustomer_signup';
$route['coustomer-signup-thankyou'] = 'user/coustomer_signup_thankyou';
$route['login-business-user'] = 'user/login_business_user';

