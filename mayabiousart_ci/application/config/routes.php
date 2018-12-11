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
$route['admin'] = 'admin/allcontroller';
$route['check_user'] = 'admin/allcontroller/check_user';
$route['logout'] = 'admin/allcontroller/logout';
$route['dashboard'] = 'admin/allcontroller/dashboard';
$route['contact_content'] = 'admin/allcontroller/contact';
$route['edit_contact_content/(:any)'] = 'admin/allcontroller/edit_contact';
$route['update_contact'] = 'admin/allcontroller/update_contact';
$route['creative_approach_content'] = 'admin/allcontroller/creative_approach_content';
$route['edit_creative_approach_content/(:any)'] = 'admin/allcontroller/edit_creative_approach_content';
$route['update_approach_content'] = 'admin/allcontroller/update_approach_content';
$route['work_list_content'] = 'admin/allcontroller/work_list_content';
$route['edit_work_content/(:any)'] = 'admin/allcontroller/edit_work_content';
$route['update_work_content'] = 'admin/allcontroller/update_work_content';
$route['add_news'] = 'admin/allcontroller/add_news';
$route['add_news_code'] = 'admin/allcontroller/add_news_code';
$route['all_news'] = 'admin/allcontroller/all_news';
$route['edit_news_image/(:any)'] = 'admin/allcontroller/edit_news';
$route['edit_news_code'] = 'admin/allcontroller/update_news';
$route['delete_news_image'] = 'admin/allcontroller/delete_news_image';
$route['add_new_publication'] = 'admin/allcontroller/add_new_publication';
$route['add_publication_code'] = 'admin/allcontroller/add_publication_code';
$route['all_publication'] = 'admin/allcontroller/all_publication';
$route['edit_publication/(:any)'] = 'admin/allcontroller/edit_publication';
$route['edit_publication_code'] = 'admin/allcontroller/update_publication';
$route['delete_publication_image'] = 'admin/allcontroller/delete_publication_image';
$route['add_new_team'] = 'admin/allcontroller/add_new_team';
$route['add_team_code'] = 'admin/allcontroller/add_team_code';
$route['all_team'] = 'admin/allcontroller/all_team';
$route['edit_team/(:any)'] = 'admin/allcontroller/edit_team';
$route['edit_team_code'] = 'admin/allcontroller/update_team';
$route['delete_team'] = 'admin/allcontroller/delete_team';
$route['add_new_awards'] = 'admin/allcontroller/add_new_awards';
$route['add_award_code'] = 'admin/allcontroller/add_award_code';
$route['all_awards'] = 'admin/allcontroller/all_awards';
$route['edit_awards/(:any)'] = 'admin/allcontroller/edit_awards';
$route['edit_awards_code'] = 'admin/allcontroller/update_code';
$route['delete_awards'] = 'admin/allcontroller/delete_awards';
$route['add_media'] = 'admin/allcontroller/add_media';
$route['add_media_code'] = 'admin/allcontroller/add_media_code';
$route['all_media'] = 'admin/allcontroller/all_media';
$route['edit_media/(:any)'] = 'admin/allcontroller/edit_media';
$route['edit_media_code'] = 'admin/allcontroller/update_media';
$route['delete_media'] = 'admin/allcontroller/delete_media';
$route['add_new_clients'] = 'admin/allcontroller/add_new_clients';
$route['add_clients_code'] = 'admin/allcontroller/add_clients_code';
$route['all_clients'] = 'admin/allcontroller/all_clients';
$route['edit_clients/(:any)'] = 'admin/allcontroller/edit_clients';
$route['edit_clients_code'] = 'admin/allcontroller/update_clients';
$route['delete_clients'] = 'admin/allcontroller/delete_clients';
$route['add_image_type_category'] = 'admin/allcontroller/add_image_type_category';
$route['edit_category'] = 'admin/allcontroller/edit_category';
$route['add_type_image'] = 'admin/allcontroller/add_type_image';
$route['add_type_code'] = 'admin/allcontroller/add_type_code';
$route['all_type_image'] = 'admin/allcontroller/all_type_image';
$route['edit_type_image/(:any)'] = 'admin/allcontroller/edit_type_image';
$route['edit_type_code'] = 'admin/allcontroller/update_type_code';
$route['delete_type_image'] = 'admin/allcontroller/delete_type_image';
$route['add_video'] = 'admin/allcontroller/add_video';
$route['add_type_video_code'] = 'admin/allcontroller/add_type_video_code';
$route['all_video'] = 'admin/allcontroller/all_video';
$route['edit_type_video/(:any)'] = 'admin/allcontroller/edit_type_video';
$route['edit_type_video_code'] = 'admin/allcontroller/update_type_video';
$route['delete_type_video'] = 'admin/allcontroller/delete_type_video';
$route['add_location_image'] = 'admin/allcontroller/add_location_image';
$route['add_location_image_code'] = 'admin/allcontroller/add_location_image_code';
$route['all_location_image'] = 'admin/allcontroller/all_location_image';
$route['edit_location_image/(:any)'] = 'admin/allcontroller/edit_location_image';
$route['edit_location_image_code'] = 'admin/allcontroller/update_location_image';
$route['delete_location_image'] = 'admin/allcontroller/delete_location_image';
$route['change_position'] = 'admin/allcontroller/change_position';
//$route['delete_location_image'] = 'admin/allcontroller/delete_location_image';
$route['edit_image_category/(:any)'] = 'admin/allcontroller/edit_image_category';
$route['edit_icategory_code'] = 'admin/allcontroller/edit_icategory_code';
$route['delete_icategory'] = 'admin/allcontroller/delete_icategory';

$route['add_video_category'] = 'admin/allcontroller/add_video_category';
$route['all_category'] = 'admin/allcontroller/all_category';
$route['add_vcategory_code'] = 'admin/allcontroller/add_vcategory_code';
$route['edit_video_category/(:any)'] = 'admin/allcontroller/edit_video_category';
$route['edit_vcategory_code'] = 'admin/allcontroller/edit_vcategory_code';
$route['delete_vcategory'] = 'admin/allcontroller/delete_vcategory';
$route['add_icategory_code'] = 'admin/allcontroller/add_icategory_code';
$route['all_image_category'] = 'admin/allcontroller/all_image_category';

$route['default_controller'] = 'all_frontend_controller/type_image';
$route['video'] = 'all_frontend_controller/video_page';
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
$route['cachecontroller'] = 'all_frontend_controller/delete_file_cache';

$route['countrywise/(:any)'] = 'showcountrywise/funcname/$1';

$route['show_cat_image'] = 'all_frontend_controller/show_cat_image';
$route['delete_selected_type_image'] = 'admin/allcontroller/delete_selected_type_image';



