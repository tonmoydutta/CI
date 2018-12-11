<?php
/**
* 
*/
class Showcountrywise extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent ::__construct();
		$this->load->model('all_frontend_model');
	}
	function funcname($a)
	{
		//echo $a;
   $all_location_image=array();

   $all_location_image['category']=$this->all_frontend_model->show_category();

   //$all_location_image['country']=$this->all_frontend_model->all_images_country();
   $all_location_image['continent']=$this->all_frontend_model->all_images_continent();
		
	$all_location_image['location_image']=$this->all_frontend_model->show_all_location_image($a);
	

	

	$this->load->view('country_city_image',$all_location_image);

	}
}