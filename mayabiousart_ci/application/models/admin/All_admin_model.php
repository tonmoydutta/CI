<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class All_admin_model extends CI_model{



	public function check_admin_user($username,$password){



		$this->db->where('username',$username);

		$this->db->where('password',$password);

		$admin_data=$this->db->get('tbl_admin');



		//return $admin_data;

		if($admin_data->num_rows()>0)	{



			$result=$admin_data->row();

			$data = array('slno'=>$result->slno,

				          'name' => $result->name,

		                  'username' => $result->username

		                );



    	$this->session->set_userdata('sessionid',$data);



    	return TRUE;

    }	



    return FALSE;

	}





	public function show_contact(){

	$show_contact=$this->db->get('tbl_contact');

		return $show_contact;

	}



	public function edit_contact_content($contact_slno){



		$this->db->where('slno',$contact_slno);

		$edit_contact_content=$this->db->get('tbl_contact');

		return $edit_contact_content;

	}





	public function update_contact_content($contact_content,$e_slno){



    

    $contact_array=array(



    	                 //'title'   =>$contact_title,

                         'content' =>$contact_content

                         );

    

    $this->db->where('slno',$e_slno);

    $update_contact_content=$this->db->update('tbl_contact',$contact_array);

    return $update_contact_content;

}





public function show_creative_content(){



	$show_approach_content=$this->db->get('tbl_approach');

	return $show_approach_content;

}



public function edit_creative_content($edit_approach_slno){



	$this->db->where('slno',$edit_approach_slno);

	$edit_approach_content=$this->db->get('tbl_approach');

	return $edit_approach_content;

}



public function update_approach_data($approach_title,$approach_content,$approach_slno){



	$approach_array=array(



		                 'content' =>$approach_content,

                         'title'   =>$approach_title



		                );



	$this->db->where('slno',$approach_slno);

	$update_approach_data=$this->db->update('tbl_approach',$approach_array);



	   return $update_approach_data;                   

 



}





public function show_work_data(){



	$show_work_content=$this->db->get('tbl_work');

	return $show_work_content;

}



public function edit_work_data($work_slno){



	$this->db->where('slno',$work_slno);

	$edit_work_list=$this->db->get('tbl_work');

	return $edit_work_list;

}



public function update_work_data($work_title,$work_conten,$work_slno){



	$work_list_array=array(



                             'title'   =>$work_title,

                             'content' =>$work_conten



	                      );



	$this->db->where('slno',$work_slno);

	$update_work_list=$this->db->update('tbl_work',$work_list_array);



	return $update_work_list;

}





public function add_news_image($filename){



	$add_news=$this->db->query("insert into tbl_news (image) values ('".$filename."')");



	return $add_news;

}





public function show_news(){



	$all_news=$this->db->get('tbl_news');

	return $all_news;

}



public function edit_news($news_slno){

	$this->db->where('slno',$news_slno);

	$edit_news=$this->db->get('tbl_news');



	return $edit_news;

}



public function update_news_image($edit_news_slno){



	$this->db->where('slno',$edit_news_slno);

	  $fetch=$this->db->get('tbl_news');

	  $fetch1=$fetch->row();



if (empty($_FILES['edit_news_image']['name'])) {

		

	$filename=$fetch1->image;

}



else{



	$filedata='edit_news_image';

	$filename=do_upload($filedata);

}



$news_array=array(

  

                     

                     'image'=>$filename



                   );



 $this->db->where('slno',$edit_news_slno);

$update_news_data=$this->db->update('tbl_news',$news_array);

return $update_news_data;





}



public function delete_news($del_slno){



	$this->db->where('slno',$del_slno);

	$delete_news=$this->db->delete('tbl_news');

	return $delete_news;

}





public function add_publication_image($filename1){



	$insert_publication=$this->db->query("insert into tbl_publication (image) values ('".$filename1."')");

	return $insert_publication;

}





public function show_publication(){



	$show_all_publication=$this->db->get('tbl_publication');

	return $show_all_publication;

}





public function edit_publication($publication_slno){



	$this->db->where('slno',$publication_slno);

	$edit_publication=$this->db->get('tbl_publication');



	return $edit_publication;

}





public function update_publication_image($edit_publication_slno){



	$this->db->where('slno',$edit_publication_slno);

	  $fetch1=$this->db->get('tbl_publication');

	  $fetch2=$fetch1->row();



if (empty($_FILES['edit_publication_image']['name'])) {

		

	$filename2=$fetch2->image;

}



else{



	$filedata2='edit_publication_image';

	$filename2=do_upload($filedata2);

}



$pub_array=array(

  

                     

                     'image'=>$filename2



                   );



 $this->db->where('slno',$edit_publication_slno);

$update_publication_data=$this->db->update('tbl_publication',$pub_array);

return $update_publication_data;

}





public function delete_publication($publication_del_slno){



	$this->db->where('slno',$publication_del_slno);

	$delete_publication=$this->db->delete('tbl_publication');



	return $delete_publication;

}



 public function add_team_image($team_title,$team_designation,$team_description,$filename2){



 	$add_team_data=$this->db->query("insert into tbl_team (name,designation,description,image) values ('".$team_title."','".$team_designation."','".$team_description."','".$filename2."')");



 	return $add_team_data;

 }



 public function show_team(){



 	$all_team_list=$this->db->get('tbl_team');

 	return $all_team_list;

 }



 public function edit_team($edit_team_slno){



 	$this->db->where('slno',$edit_team_slno);

 	$edit_team=$this->db->get('tbl_team');

 	return $edit_team;

 }



 public function update_team($edit_team_name,$edit_team_designation,$edit_team_description,$edit_team_slno){



 	$this->db->where('slno',$edit_team_slno);

	  $fetch2=$this->db->get('tbl_team');

	  $fetch3=$fetch2->row();



if (empty($_FILES['edit_team_image']['name'])) {

		

	$filename3=$fetch3->image;

}



else{



	$filedata3='edit_team_image';

	$filename3=do_upload($filedata3);

}



$team_array=array(

  

                     'name'       =>$edit_team_name,

                     'designation'=>$edit_team_designation,

                     'description'=>$edit_team_description,

                     'image'      =>$filename3



                   );



 $this->db->where('slno',$edit_team_slno);

$update_team_data=$this->db->update('tbl_team',$team_array);

return $update_team_data;

 }





 public function delete_team($team_del_slno){



 	$this->db->where('slno',$team_del_slno);

 	$delete_team=$this->db->delete('tbl_team');

 	return $delete_team;

 }





 public function add_award_image($award_title,$award_description,$filename3){



 	$insert_awards=$this->db->query("insert into tbl_award (title,description,image) values ('".$award_title."','".$award_description."','".$filename3."')");



 	return $insert_awards;

 }





 public function show_awards(){



 	$show_awards=$this->db->get('tbl_award');

 	return $show_awards;

 }



public function edit_awards($awards_slno){



     $this->db->where('slno',$awards_slno);

     $edit_awards_list=$this->db->get('tbl_award');



     return $edit_awards_list;



}





public function update_awards($edit_awards_title,$edit_awards_description,$edit_awards_slno){



	$this->db->where('slno',$edit_awards_slno);

	  $fetch4=$this->db->get('tbl_award');

	  $fetch5=$fetch4->row();



if (empty($_FILES['edit_awards_image']['name'])) {

		

	$filename4=$fetch5->image;

}



else{



	$filedata4='edit_awards_image';

	$filename4=do_upload($filedata4);

}



$awards_array=array(

  

                     'title'       =>$edit_awards_title,

                     

                     'description'=>$edit_awards_description,

                     'image'      =>$filename4



                   );



 $this->db->where('slno',$edit_awards_slno);

$update_awards_data=$this->db->update('tbl_award',$awards_array);

return $update_awards_data;

}



public function delete_awards($delete_awards){



	$this->db->where('slno',$delete_awards);

	$delete_awards=$this->db->delete('tbl_award');

	return $delete_awards;

}





public function add_media_image($media_title,$media_description,$filename5){



	$insert_media=$this->db->query("insert into tbl_media (title,description,image) values ('".$media_title."','".$media_description."','".$filename5."')");



	return $insert_media;

}



public function show_all_media(){



	$show_all_media=$this->db->get('tbl_media');

	return $show_all_media;

}



public function edit_media($media_slno){



	$this->db->where('slno',$media_slno);

	$edit_media=$this->db->get('tbl_media');

	return $edit_media;

}





public function update_media($edit_media_title,$edit_media_description,$edit_media_slno){



	$this->db->where('slno',$edit_media_slno);

	  $fetch5=$this->db->get('tbl_media');

	  $fetch6=$fetch5->row();



if (empty($_FILES['edit_media_image']['name'])) {

		

	$filename5=$fetch6->image;

}



else{



	$filedata5='edit_media_image';

	$filename5=do_upload($filedata5);

}



$media_array=array(

  

                     'title'       =>$edit_media_title,

                     

                     'description'=>$edit_media_description,

                     'image'      =>$filename5



                   );



 $this->db->where('slno',$edit_media_slno);

$update_media_data=$this->db->update('tbl_media',$media_array);

return $update_media_data;

}



public function delete_media($delete_media){



	$this->db->where('slno',$delete_media);

	$delete_media_list=$this->db->delete('tbl_media');



	return $delete_media_list;

}







public function add_clients_image($clients_title,$clients_address,$filename6){



	$insert_clients_data=$this->db->query("insert into tbl_clients (title,address,image) values ('".$clients_title."','".$clients_address."','".$filename6."')");
  
    $insert_id= $this->db->insert_id();


   $this->db->select_max('position');
    $result12 = $this->db->get('tbl_clients')->row();  
   $position= $result12->position+1;

  

    $update_insert_id=array(

                     'position'       =>$position

                   );


 $this->db->where('slno',$insert_id);

$update_insert_data=$this->db->update('tbl_clients',$update_insert_id);


	return $insert_clients_data;

}

public function show_all_clients(){



	$show_clients_list=$this->db->query('select * from tbl_clients order by position ASC');



	return $show_clients_list;

}



public function edit_clients($edit_clients_slno){



	$this->db->where('slno',$edit_clients_slno);



	$edit_clients_data=$this->db->get('tbl_clients');



	return $edit_clients_data;

}





public function update_clients($edit_clients_title,$edit_clients_address,$edit_position,$current_position,$edit_clients_slno){

/** Position Change Start**/	

// $this->db->where('position',$edit_position);

// 	  $fetch20=$this->db->get('tbl_clients');

// 	  $fetch21=$fetch20->row();

// $old_pslno=$fetch21->slno;	


// $old_position_array=array(

  

//                      'position'       =>$current_position

//                    );

// $this->db->where('slno',$old_pslno);

// $update_old_position=$this->db->update('tbl_clients',$old_position_array);

/** Position Change End **/	





	$this->db->where('slno',$edit_clients_slno);

	  $fetch6=$this->db->get('tbl_clients');

	  $fetch7=$fetch6->row();



if (empty($_FILES['edit_clients_image']['name'])) {

		

	$filename7=$fetch7->image;

}



else{



	$filedata6='edit_clients_image';

	$filename7=do_upload($filedata6);

}



$clients_array=array(

  

                     'title'       =>$edit_clients_title,

                     'address'     =>$edit_clients_address,

                     'image'       =>$filename7,

                     'position'    =>$edit_position



                   );

                     

                     



 $this->db->where('slno',$edit_clients_slno);

$update_clients_data=$this->db->update('tbl_clients',$clients_array);

return $update_clients_data;

}





public function delete_clients($delete_clients){



	$this->db->where('slno',$delete_clients);

	$delete_clients=$this->db->delete('tbl_clients');



	return $delete_clients;

}





public function add_type_image($content_type,$image_title,$type_description,$filename7,$filename13){



	$insert_type_image=$this->db->query("insert into tbl_type_image (title,description,type,image,small_image) values ('".$image_title."','".$type_description."','".$content_type."','".$filename7."','".$filename13."')");





	return $insert_type_image;

}



public function add_image_category($image_category_name){



	$this->db->where('category_name',$image_category_name);

	$find_image_category=$this->db->get('tbl_image_category');



	if($find_image_category->num_rows()>0){



    /*echo '<script language="javascript">';

    echo 'alert("Category Name Exists.")';

    echo 'window.location.href="index.php" ';

    echo '</script>';*/

    echo '<script type="text/javascript">'; 

	echo 'alert("Category Name Exists.");'; 

	echo 'document.location.href = "'.base_url('add_image_type_category').'";';

	echo '</script>';



    //return FALSE;

	  }



else{



    $insert_image_category=$this->db->query("insert into tbl_image_category (category_name) values ('".$image_category_name."')");



	return $insert_image_category;

}



}

public function edit_imag_cat($image_cat_slno){

	$this->db->where('slno',$image_cat_slno);
	$edit_image_cat=$this->db->get('tbl_image_category');

	return $edit_image_cat;

}


public function update_image_category_name($edit_img_cat_name,$edit_img_cat_slno){

	$udate_image_cat_array=array(

                                    'category_name'=> $edit_img_cat_name
	                             );

	$this->db->where('slno',$edit_img_cat_slno);
	$update_image_cat_query=$this->db->update('tbl_image_category',$udate_image_cat_array);

  return $update_image_cat_query;
}


public function delete_image_category($delete_icat_slno){

	$this->db->where('slno',$delete_icat_slno);
	$delete_image_cat=$this->db->delete('tbl_image_category');
	return $delete_image_cat;
}



public function edit_image_category($edit_category_name){



	$this->db->where('category_name',$edit_category_name);

	$edit_image_category=$this->db->get('tbl_image_category');



	if($edit_image_category->num_rows()>0){



		echo 1;



	}



	else{



		//echo 2;

		$insert_image_category_edit=$this->db->query("insert into tbl_image_category (category_name) values ('".$edit_category_name."')");



	return $insert_image_category_edit;

	}

}



public function show_all_category(){



	$all_category=$this->db->get('tbl_image_category');



	return $all_category;

}



public function show_all_type($select_cat){


    if(empty($select_cat))
    {
    	$this->db->where('type',$select_cat);
	    $this->db->order_by('type', 'ASC');
		$show_all_type=$this->db->get('tbl_type_image');

		return $show_all_type;
    }
    else
    { 
        $this->db->where('type',$select_cat);
	    $this->db->order_by('type', 'ASC');
		$show_all_type=$this->db->get('tbl_type_image');


		$sql=$show_all_type->result_array();
	    $data=null;
		foreach ($sql as $value) {
			$data[]=$value;
		}
		return $data;
    }
   

}





public function edit_type_image($edit_type_slno){



	$this->db->where('slno',$edit_type_slno);

	$edit_type_image=$this->db->get('tbl_type_image');

	return $edit_type_image;

}





public function update_type_image($edit_type_title,$edit_type_description,$edit_content_type,$edit_type_slno){


   $filename8='';
   $filename14='';

	$this->db->where('slno',$edit_type_slno);

	  $fetch7=$this->db->get('tbl_type_image');

	  $fetch8=$fetch7->row();



if (empty($_FILES['edit_type_image']['name'])) {

		

	$filename8=$fetch8->image;

}



else{

   $path1 ="uploads/";
   unlink($path1.$fetch8->image);

	$filedata7='edit_type_image';

	$filename8=do_upload($filedata7);


}

if (empty($_FILES['edit_type_image_new']['name'])) {

		

	$filename14=$fetch8->small_image;

}



else{

    $path2 ="uploads-new/";
    unlink($path2.$fetch8->small_image); 

	$filedata14='edit_type_image_new';

	$filename14=do_upload_new($filedata14);


}



$type_array=array(

  

                     'title'       =>$edit_type_title,

                     'description' =>$edit_type_description,

                     'type'        =>$edit_content_type,

                     'image'       =>$filename8,

                     'small_image' =>$filename14



                   );

                     

                     



 $this->db->where('slno',$edit_type_slno);

$update_type_data=$this->db->update('tbl_type_image',$type_array);

return $update_type_data;

}





// public function delete_clients($delete_clients){



// 	$this->db->where('slno',$delete_clients);

// 	$delete_clients=$this->db->delete('tbl_clients');



// 	return $delete_clients;

// }



public function delete_type_image($delete_type_slno){



	$this->db->where('slno',$delete_type_slno);

	$delete_type_data=$this->db->delete('tbl_type_image');



	return $delete_type_data;

}





public function add_type_video($video_type,$video_link,$type_video_description,$filename8){



	$insert_type_video=$this->db->query("insert into tbl_video (type,video_link,description,image) values ('".$video_type."','".$video_link."','".$type_video_description."','".$filename8."')");



	return $insert_type_video;

}



public function show_all_type_video(){



	$all_type_video=$this->db->get('tbl_video');

	return $all_type_video;

}



public function edit_type_video($edit_type_video_slno){



	$this->db->where('slno',$edit_type_video_slno);



	$edit_type_video=$this->db->get('tbl_video');

	return $edit_type_video;

}





public function update_type_video($edit_video_type,$edit_type_video_link,$edit_type_video_description,$edit_type_video_slno){



	$this->db->where('slno',$edit_type_video_slno);

	  $fetch8=$this->db->get('tbl_video');

	  $fetch9=$fetch8->row();



if (empty($_FILES['edit_type_video_image']['name'])) {

		

	$filename9=$fetch9->image;

}



else{



	$filedata8='edit_type_video_image';

	$filename9=do_upload_new($filedata8);

}



$type_video_array=array(

  

                     'type'       =>$edit_video_type,

                     'video_link'  =>$edit_type_video_link,

                     'description' =>$edit_type_video_description,

                     

                     'image'       =>$filename9



                   );

                     

                     



 $this->db->where('slno',$edit_type_video_slno);

$update_type_video_data=$this->db->update('tbl_video',$type_video_array);

return $update_type_video_data;

}



public function delete_type_video($delete_type_video_slno){



	$this->db->where('slno',$delete_type_video_slno);

	$delete_type_video=$this->db->delete('tbl_video');

	return $delete_type_video;

}





public function add_location_image($continent_name,$country_name,$state_name,$location_description,$filename9,$filename12){



	$insert_location_image=$this->db->query("insert into tbl_location_image (continent_name,country_name,city_name,description,image,small_image) values ('".$continent_name."','".$country_name."','".$state_name."','".$location_description."','".$filename9."','".$filename12."') ");



	return $insert_location_image;

}





public function show_location_image(){



	$show_location_image=$this->db->get('tbl_location_image');

	return $show_location_image;

}





public function edit_location_image($edit_location_image_slno){



	$this->db->where('slno',$edit_location_image_slno);

	$edit_location_image=$this->db->get('tbl_location_image');



	return $edit_location_image;

}





public function update_location_image($edit_continent_name,$edit_country_name,$edit_state_name,$edit_location_description,$edit_location_slno){



      $this->db->where('slno',$edit_location_slno);

	  $fetch9=$this->db->get('tbl_location_image');

	  $fetch10=$fetch9->row();



if (empty($_FILES['edit_location_image']['name'])) {

		

	$filename10=$fetch10->image;

}



else{



	$filedata9='edit_location_image';

	$filename10=do_upload($filedata9);

}

if (empty($_FILES['edit_location_image_new']['name'])) {

		

	$filename15=$fetch10->small_image;

}



else{



	$filedata15='edit_location_image_new';

	$filename15=do_upload_new($filedata15);

}



$location_image_array=array(

  

                     'continent_name'  =>$edit_continent_name,

                     'country_name'    =>$edit_country_name,

                     'city_name'       =>$edit_state_name,

                     'description'     =>$edit_location_description,

                     

                     'image'       =>$filename10,
                     'small_image' =>$filename15



                   );

                     

                     



 $this->db->where('slno',$edit_location_slno);

$update_location_image_data=$this->db->update('tbl_location_image',$location_image_array);

return $update_location_image_data;



}





public function delete_location_image($delete_location_slno){



	$this->db->where('slno',$delete_location_slno);

	$delete_location_image=$this->db->delete('tbl_location_image');



	return $delete_location_image;

}


public function allposition(){

	$position=$this->db->get('tbl_clients');

	return $position->result();
}


public function allpslno($edit_pslno){

$this->db->where('slno',$edit_pslno);
$edit_position=$this->db->get('tbl_clients');

return $edit_position;
}



public function update_position($position_slno,$position_no){

	$update_position_array=array(

                               'position' =>$position_no

	                              );

	$this->db->where('slno',$position_slno);

$update_position_no=$this->db->update('tbl_clients',$update_position_array);

return $update_position_no;


}

public function add_video_category($vcategory_name){

	$insert_video_category=$this->db->query("insert into tbl_video_category (category_name) values ('".$vcategory_name."')");

	return $insert_video_category;
}


public function show_all_vcategory(){

	$all_category=$this->db->get('tbl_video_category');

	return $all_category;
}

public function edit_video($video_slno){

	$this->db->where('slno',$video_slno);
	$edit_vcategory=$this->db->get('tbl_video_category');

	return $edit_vcategory;
}


public function update_category_name($edit_cat_name,$edit_cat_slno){

	$update_vcat_array=array(

                               'category_name' =>$edit_cat_name,

	                              );

	$this->db->where('slno',$edit_cat_slno);

    $update_video_category_name=$this->db->update('tbl_video_category',$update_vcat_array);

    return $update_video_category_name;
}


public function delete_video_category($delete_vcat_slno){

	$this->db->where('slno',$delete_vcat_slno);
	$delete_video_cat=$this->db->delete('tbl_video_category');

	return $delete_video_cat;
}


public function all_video_category_list(){

	$allvcat_list=$this->db->get('tbl_video_category');
	return $allvcat_list;
}

public function all_image_category_list(){

	$all_icat_list=$this->db->get('tbl_image_category');
	return $all_icat_list;
}

}





?>