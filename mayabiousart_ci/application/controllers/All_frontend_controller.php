<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_frontend_controller extends CI_Controller{

	public function __construct()
	{
		 parent::__construct();

		 $this->load->model('all_frontend_model');
 
	}

	public function index(){
		
	//$this->load->view('index');
	
		
	}


	public function type_image(){

    $data=array();

	$data['category']=$this->all_frontend_model->show_category();

	//$data['country']=$this->all_frontend_model->all_images_country();
	$data['continent']=$this->all_frontend_model->all_images_continent();

	// $n=240;

	// $this->output->cache($n);
	
	$this->load->view('index',$data);
  
	}


	public function video_page(){

	$data1['vcategory']=$this->all_frontend_model->all_video_category_list();

	//$data['country']=$this->all_frontend_model->all_images_country();
	$data1['continent']=$this->all_frontend_model->all_images_continent();	

	$this->load->view('video',$data1);

	  }


	public function contact(){

		$contact_data=array();

		$contact_data['category']=$this->all_frontend_model->show_category();
		//$contact_data['country']=$this->all_frontend_model->all_images_country();
        $contact_data['continent']=$this->all_frontend_model->all_images_continent();
		$contact_data['show_contact']=$this->all_frontend_model->show_contact();
		$this->load->view('contact',$contact_data);
	}


	public function creative_aproach(){

		$creative_data=array();

		$creative_data['category']=$this->all_frontend_model->show_category();

		//$creative_data['country']=$this->all_frontend_model->all_images_country();
		$creative_data['continent']=$this->all_frontend_model->all_images_continent();

		$this->load->view('creative-aproach',$creative_data);


	}


	public function worklist(){

		$worklist_data=array();
	$worklist_data['category']=$this->all_frontend_model->show_category();

	//$worklist_data['country']=$this->all_frontend_model->all_images_country();
	$worklist_data['continent']=$this->all_frontend_model->all_images_continent();

	$worklist_data['show_worklist']=$this->all_frontend_model->show_worklist();	

		$this->load->view('worklist',$worklist_data);
	}


	public function news(){

		$news_data=array();

        $news_data['category']=$this->all_frontend_model->show_category();

        //$news_data['country']=$this->all_frontend_model->all_images_country();
        $news_data['continent']=$this->all_frontend_model->all_images_continent();
		$news_data['show_news']=$this->all_frontend_model->show_all_news();	

		$this->load->view('news',$news_data);
	}


	public function publications(){

		$publication_data=array();
    $publication_data['category']=$this->all_frontend_model->show_category();
    //$publication_data['country']=$this->all_frontend_model->all_images_country();
    $publication_data['continent']=$this->all_frontend_model->all_images_continent();
    $publication_data['show_publication']=$this->all_frontend_model->show_all_publications();	

		$this->load->view('publications',$publication_data);

	}


	public function team(){

		$team_data=array();
        $team_data['category']=$this->all_frontend_model->show_category();
        //$team_data['country']=$this->all_frontend_model->all_images_country();
        $team_data['continent']=$this->all_frontend_model->all_images_continent();
		$team_data['show_team']=$this->all_frontend_model->show_all_team();	

		$this->load->view('team',$team_data);
	}

	public function awards(){

		$awards_data=array();

        $awards_data['category']=$this->all_frontend_model->show_category();
        //$awards_data['country']=$this->all_frontend_model->all_images_country();
        $awards_data['continent']=$this->all_frontend_model->all_images_continent();
		$awards_data['show_awards']=$this->all_frontend_model->show_all_awards();	

		$this->load->view('award',$awards_data);
	}


	public function media(){

		$media_data=array();

        $media_data['category']=$this->all_frontend_model->show_category();
       // $media_data['country']=$this->all_frontend_model->all_images_country();
        $media_data['continent']=$this->all_frontend_model->all_images_continent();
		$media_data['show_media']=$this->all_frontend_model->show_all_media();	

		$this->load->view('media',$media_data);
	}


	public function client(){

	$client_data=array();

	$client_data['category']=$this->all_frontend_model->show_category();
	//$client_data['country']=$this->all_frontend_model->all_images_country();
    $client_data['continent']=$this->all_frontend_model->all_images_continent();
     $client_data['show_client']=$this->all_frontend_model->show_all_client();	

	 $this->load->view('client',$client_data);

	}


	public function show_location_image(){
		
	// $last_id=$this->input->post('new_country');

	

	// $all_image_cat=$this->db->query("select * from tbl_image_category limit ".$last_id.",1");
	//  $cat_result=$all_image_cat->row();


	// $category_id= $cat_result->slno;
 //    $image_exist=image_exist($cat_result->category_name);
 //    $allimages_video=$image_exist;
 //    $cat_slno=imageloop($cat_result->category_name);

	// $video_html ='<section class="maSec" id="category'.$category_id.'" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="center-bottom">
	// 			<h5 class="secHeading"><span>'.$cat_result->category_name.'</span> <font>
	// 			'.$allimages_video.' Item </font></h5>
	// 			<div class="swiper-container" id="cats'.$last_id.'">
	// 			<div class="progress"  role="progressbar"> </div>

	// 			<div class="swiper-wrapper swiperProgress">';
	// 			foreach ($cat_slno as $value) {
	// 			        if($value['image']!=""){
	// 	$video_html .='<a class="proBox swiper-slide" href="uploads/'.$value['image'].'" data-fancybox="'.$value['type'].'">
	// 			<img src="uploads-new/'.$value['small_image'].'" />
	// 			<div class="caption">
	// 			'.$value['description'].'
	// 			</div>
	// 			</a>';

 //     }
 //  }

	// 	$video_html .='</div>
	// 			<!-- Add Arrows -->
	// 			    <div class="swiper-button-next"></div>
	// 			    <div class="swiper-button-prev"></div>
	// 			    <div class="swiper-pagination"></div>
	// 			</div>
	// 			</section>';

 //       echo $video_html;
	
       }



       public function show_cat_image(){


       	$last_id=$this->input->post('new_country');

	

	$all_image_cat=$this->db->query("select * from tbl_image_category limit ".$last_id.",1");
	 $cat_result=$all_image_cat->row();


	$category_id= $cat_result->slno;
    $image_exist=image_exist($cat_result->category_name);
    $allimages_video=$image_exist;
    $cat_slno=imageloop($cat_result->category_name);

	$video_html ='<section class="maSec" id="category'.$category_id.'" data-aos="fade-up" data-aos-duration="2000" data-aos-anchor-placement="center-bottom">
				<h5 class="secHeading"><span>'.$cat_result->category_name.'</span> <font>
				'.$allimages_video.' Item </font></h5>
				<div class="swiper-container">
				<div class="progress"  role="progressbar"> </div>

				<div class="swiper-wrapper swiperProgress">';
				foreach ($cat_slno as $value) {
				        if($value['image']!=""){
		$video_html .='<a class="proBox swiper-slide" href="uploads/'.$value['image'].'" data-fancybox="'.$value['type'].'">
				<img src="uploads-new/'.$value['small_image'].'" />
				<div class="caption">
				'.$value['description'].'
				</div>
				</a>';

     }
  }

		$video_html .='</div>
				<!-- Add Arrows -->
				    <div class="swiper-button-next"></div>
				    <div class="swiper-button-prev"></div>
				    <div class="swiper-pagination"></div>
				</div>
				</section>';

       echo $video_html;

       }

  
       
  }
?>

