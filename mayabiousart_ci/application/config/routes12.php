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
$route['default_controller'] = 'all_frontend_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'allcontroller';
$route['check_user'] = 'allcontroller/check_user';
$route['logout'] = 'allcontroller/logout';
$route['dashboard'] = 'allcontroller/dashboard';
$route['contact_content'] = 'allcontroller/contact';
$route['edit_contact_content/(:any)'] = 'allcontroller/edit_contact';
$route['update_contact'] = 'allcontroller/update_contact';
$route['creative_approach_content'] = 'allcontroller/creative_approach_content';
$route['edit_creative_approach_content/(:any)'] = 'allcontroller/edit_creative_approach_content';
$route['update_approach_content'] = 'allcontroller/update_approach_content';
$route['work_list_content'] = 'allcontroller/work_list_content';
$route['edit_work_content/(:any)'] = 'allcontroller/edit_work_content';
$route['update_work_content'] = 'allcontroller/update_work_content';
$route['add_news'] = 'allcontroller/add_news';
$route['add_news_code'] = 'allcontroller/add_news_code';
$route['all_news'] = 'allcontroller/all_news';
$route['edit_news_image/(:any)'] = 'allcontroller/edit_news';
$route['edit_news_code'] = 'allcontroller/update_news';
$route['delete_news_image'] = 'allcontroller/delete_news_image';
$route['add_new_publication'] = 'allcontroller/add_new_publication';
$route['add_publication_code'] = 'allcontroller/add_publication_code';
$route['all_publication'] = 'allcontroller/all_publication';
$route['edit_publication/(:any)'] = 'allcontroller/edit_publication';
$route['edit_publication_code'] = 'allcontroller/update_publication';
$route['delete_publication_image'] = 'allcontroller/delete_publication_image';
$route['add_new_team'] = 'allcontroller/add_new_team';
$route['add_team_code'] = 'allcontroller/add_team_code';
$route['all_team'] = 'allcontroller/all_team';
$route['edit_team/(:any)'] = 'allcontroller/edit_team';
$route['edit_team_code'] = 'allcontroller/update_team';
$route['delete_team'] = 'allcontroller/delete_team';
$route['add_new_awards'] = 'allcontroller/add_new_awards';
$route['add_award_code'] = 'allcontroller/add_award_code';
$route['all_awards'] = 'allcontroller/all_awards';
$route['edit_awards/(:any)'] = 'allcontroller/edit_awards';
$route['edit_awards_code'] = 'allcontroller/update_code';
$route['delete_awards'] = 'allcontroller/delete_awards';
$route['add_media'] = 'allcontroller/add_media';
$route['add_media_code'] = 'allcontroller/add_media_code';
$route['all_media'] = 'allcontroller/all_media';
$route['edit_media/(:any)'] = 'allcontroller/edit_media';
$route['edit_media_code'] = 'allcontroller/update_media';
$route['delete_media'] = 'allcontroller/delete_media';
$route['add_new_clients'] = 'allcontroller/add_new_clients';
$route['add_clients_code'] = 'allcontroller/add_clients_code';
$route['all_clients'] = 'allcontroller/all_clients';
$route['edit_clients/(:any)'] = 'allcontroller/edit_clients';
$route['edit_clients_code'] = 'allcontroller/update_clients';
$route['delete_clients'] = 'allcontroller/delete_clients';
$route['add_image_type_category'] = 'allcontroller/add_image_type_category';
$route['edit_category'] = 'allcontroller/edit_category';
$route['add_type_image'] = 'allcontroller/add_type_image';
$route['add_type_code'] = 'allcontroller/add_type_code';
$route['all_type_image'] = 'allcontroller/all_type_image';
$route['edit_type_image/(:any)'] = 'allcontroller/edit_type_image';
$route['edit_type_code'] = 'allcontroller/update_type_code';
$route['delete_type_image'] = 'allcontroller/delete_type_image';
$route['add_video'] = 'allcontroller/add_video';
$route['add_type_video_code'] = 'allcontroller/add_type_video_code';
$route['all_video'] = 'allcontroller/all_video';
$route['edit_type_video/(:any)'] = 'allcontroller/edit_type_video';
$route['edit_type_video_code'] = 'allcontroller/update_type_video';
$route['delete_type_video'] = 'allcontroller/delete_type_video';
$route['add_location_image'] = 'allcontroller/add_location_image';
$route['add_location_image_code'] = 'allcontroller/add_location_image_code';
$route['all_location_image'] = 'allcontroller/all_location_image';
$route['edit_location_image/(:any)'] = 'allcontroller/edit_location_image';
$route['edit_location_image_code'] = 'allcontroller/update_location_image';
$route['delete_location_image'] = 'allcontroller/delete_location_image';
$route['delete_location_image'] = 'allcontroller/delete_location_image';
$route['default_controller'] = 'all_frontend_controller/type_image';
$route['show_video_image'] = 'all_frontend_controller/show_video_image';
$route['contact'] = 'all_frontend_controller/contact';
$route['creative-aproach'] = 'all_frontend_controller/creative_aproach';
$route['worklist'] = 'all_frontend_controller/worklist';
$route['news'] = 'all_frontend_controller/news';
$route['publications'] = 'all_frontend_controller/publications';
$route['team'] = 'all_frontend_controller/team';
$route['awards'] = 'all_frontend_controller/awards';
$route['media'] = 'all_frontend_controller/media';
$route['client'] = 'all_frontend_controller/client';
$route['show_location_image'] = 'all_frontend_controller/show_location_image';


$route['countrywise/(:any)'] = 'showcountrywise/funcname/$1';

