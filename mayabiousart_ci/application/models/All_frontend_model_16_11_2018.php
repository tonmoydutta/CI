<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class All_frontend_model extends CI_model{

public function show_category(){

//     $this->db->select('*');
//     $this->db->from('tbl_image_category');
//     $this->db->join('tbl_type_image', 'tbl_type_image.type = tbl_image_category.category_name');
// 	$show_all_category=$this->db->get();

// 	if($show_all_category->num_rows()>0)	{

// 	return $show_all_category;
//     return true;
// }

// else{

// 	return false;
// }

$show_all_category=$this->db->get('tbl_image_category');

return $show_all_category;
}

public function fetch_cat_type($catslno){

    $this->db->select('*');
    $this->db->from('tbl_type_image');
	$this->db->where('type',$catslno);

	$fetch_type=$this->db->get();

	// if($fetch_type->num_rows()>0)
	// {
		return $fetch_type->result_array(); 
	//}

}


public function fetch_video_type($catslno){

    $this->db->select('*');
    $this->db->from('tbl_video');
	$this->db->where('type',$catslno);

	$fetch_video=$this->db->get();

	// if($fetch_type->num_rows()>0)
	// {
		return $fetch_video->result_array();

}
	
public function show_contact(){

		$all_contact_data=$this->db->get('tbl_contact');

		return $all_contact_data;
	}


	public function show_worklist(){

     $all_worklist_data=$this->db->get('tbl_work');

		return $all_worklist_data;

	}


	public function show_all_news(){

		$all_news=$this->db->get('tbl_news');

		return $all_news;
	}


	public function show_all_publications(){

		$all_publications=$this->db->get('tbl_publication');

		return $all_publications;
	}


	public function show_all_team(){

		$all_team=$this->db->get('tbl_team');

		return $all_team;
	}


	public function show_all_awards(){

		$all_awards=$this->db->get('tbl_award');

		return $all_awards;
	}



	public function show_all_media(){

		$all_media=$this->db->get('tbl_media');

		return $all_media;
	
	}


	public function show_all_client(){

	$all_client=$this->db->query('select * from tbl_clients order by position ASC');

		return $all_client;
	}

	public function fetchallimages($catname)
	{
       $this->db->select('count(*) imagecount');
       $this->db->from('tbl_type_image ');
       $this->db->where('type', $catname);
       $sql=$this->db->get();
       $fetch= $sql->row();
       $countimages=$fetch->imagecount;
       return $countimages;
	}


	public function fetchallvideo(){

		$show_all_video=$this->db->query("SELECT c.*, v.video_link,v.image,v.slno,count(v.slno) videocount,v.type,v.description, GROUP_CONCAT(v.image SEPARATOR ',') images
			FROM tbl_image_category c 
			JOIN tbl_video v
			ON c.category_name=v.type
			GROUP BY v.type");

		return $show_all_video->result_array();
	}


	public function show_all_location_image($a){

		// $this->db->where('country_name',$country_name);
		// $all_location_image=$this->db->get('tbl_location_image');

		// return $all_location_image;
		$all_location_image=$this->db->query("SELECT l.*, GROUP_CONCAT(l.image SEPARATOR ',') images,GROUP_CONCAT(l.small_image SEPARATOR ',') bimages
		 	FROM tbl_location_image l 
            WHERE l.country_name='".$a."'
		 	GROUP BY l.city_name");
		return $all_location_image->result_array();
	}


	public function fetchallcontinent($continent_name){

		$show_country_list=$this->db->query("select DISTINCT country_name from tbl_location_image where continent_name='".$continent_name."'");

		return $show_country_list->result_array();
	}


	public function all_images_continent(){

		$show_continent_list=$this->db->query("select DISTINCT continent_name from tbl_location_image");

		return $show_continent_list;
	}
	
	
	public function videocount($cname){

	   $this->db->select('count(*) videocount');
       $this->db->from('tbl_video');
       $this->db->where('type', $cname);
       $sql1=$this->db->get();
       $fetch1= $sql1->row();
       $countvideo=$fetch1->videocount;
       return $countvideo;
}
	

}




