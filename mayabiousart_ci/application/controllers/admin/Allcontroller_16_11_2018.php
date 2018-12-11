<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Allcontroller extends CI_Controller{

	public function __construct()
	{
		 parent::__construct();

		 // if(!checksession()){

		 // 	//redirect('admin');
		 // 	$this->load->view('admin/login');
		 // }

		 $this->load->library('form_validation');
		 $this->load->model('admin/all_admin_model');

		 
	}

	public function index(){
		//$this->session->set_userdata('is_logged_in_page', FALSE);
	  $this->load->view('admin/login');
	
	}

	public function check_user(){

		 $username=$this->input->post('uname');
		 $password=$this->input->post('upass');

		 $this->form_validation->set_rules('uname', 'Username', 'required'); 
		 $this->form_validation->set_rules('upass', 'Password', 'required'); 
			
         if ($this->form_validation->run() == FALSE) { 

         $this->load->view('admin/login');

         }

         else{

              //$this->load->model('admin/all_admin_model');
		      $user_check=$this->all_admin_model->check_admin_user($username,$password);


		      if($user_check){
		      	redirect('dashboard');
		      }

		      else{

		      	$data=array('errormsg'=>'Invalid username and/or password.<br />');
               // $this->index($msg);
                $this->load->view('admin/login', $data);
		      }

         }

		 
	}

	public function dashboard(){

     $this->load->view('admin/dashboard');

	}


	public function contact(){

	//$this->load->model('admin/all_admin_model');
	$show_contact['contact_content']=$this->all_admin_model->show_contact();

	$this->load->view('admin/contact_content',$show_contact);
	}


	public function edit_contact(){

		$contact_slno=$this->uri->segment(2);

    //$this->load->model('admin/all_admin_model');
	$edit_contact['edit_contact_content']=$this->all_admin_model->edit_contact_content($contact_slno);

    $this->load->view('admin/edit_contact_content',$edit_contact);
	}

	public function update_contact(){

   //$contact_title=$this->input->post('enter_title');
   $contact_content=$this->input->post('editor6');
   $e_slno=$this->input->post('e_slno');



  
    

   //       $this->form_validation->set_rules('enter_title', 'Title', 'required'); 
		 // $this->form_validation->set_rules('editor6', 'Content', 'required'); 
			
   //       if ($this->form_validation->run() == FALSE) { 

   //       $this->load->view('admin/edit_contact_content');
         

   //       }

   
    //$this->load->model('admin/all_admin_model');
    $this->all_admin_model->update_contact_content($contact_content,$e_slno);
    
    	//$contact_msg=array('contact_success'=>'<font style="color:green;">Contact content successfully updated.</font>');
     $show_contact['contact_content']=$this->all_admin_model->show_contact();
     $show_contact['contact_msg']='<font style="color:green;">Contact content successfully updated.</font>';

    $this->load->view('admin/contact_content', $show_contact);
    
   

	}


	public function creative_approach_content(){

		//$this->load->model('admin/all_admin_model');

		$approach_data['approach_content']=$this->all_admin_model->show_creative_content();
		$this->load->view('admin/creative_approach_content',$approach_data);
	}


	public function edit_creative_approach_content(){

	$edit_approach_slno=$this->uri->segment(2);	

	$edit_approach_data['edit_creative_contact_content']=$this->all_admin_model->edit_creative_content($edit_approach_slno);	

    $this->load->view('admin/edit_creative_approach_content',$edit_approach_data);
	}


	public function update_approach_content(){

   $approach_title=$this->input->post('approach_title');
   $approach_content=$this->input->post('editor7');
   $approach_slno=$this->input->post('approach_slno');


   $this->all_admin_model->update_approach_data($approach_title,$approach_content,$approach_slno);
   //redirect('creative_approach_content');
   $approach_data['approach_content']=$this->all_admin_model->show_creative_content();
   $approach_data['approach_msg']='<font style="color:green;">Creative Approach content successfully Updated.</font>';
		$this->load->view('admin/creative_approach_content',$approach_data);
	}


	public function work_list_content(){

		$work_content['work_content']=$this->all_admin_model->show_work_data();
		$this->load->view('admin/work_list_content',$work_content);
	}

	public function edit_work_content(){

     $work_slno=$this->uri->segment(2);

     $edit_work_data['edit_work_list_content']=$this->all_admin_model->edit_work_data($work_slno);
     $this->load->view('admin/edit_work_list_content',$edit_work_data);



	}


	public function update_work_content(){

   $work_title=$this->input->post('work_title');
   $work_content=$this->input->post('editor8');
   $work_slno=$this->input->post('work_slno');

  
   $this->all_admin_model->update_work_data($work_title,$work_content,$work_slno);

        $work_content2['work_content']=$this->all_admin_model->show_work_data();
        $work_content2['work_msg']='<font style="color:green;">Work List Content successfully updated.</font>';
		$this->load->view('admin/work_list_content',$work_content2);
	}


	public function add_news(){

		$this->load->view('admin/add_news');
	}

	public function all_news(){

	$show_all_news['news']=$this->all_admin_model->show_news();
	$this->load->view('admin/all_news',$show_all_news);
}

public function add_news_code(){
	$filename='';


      
      if (empty($_FILES['news_image']['name']))
      {
      	$this->form_validation->set_rules('news_image', 'Image', 'required');
      	if ($this->form_validation->run() == FALSE)
      	{
      		$this->load->view('admin/add_news');
      	}
      	//return false;
      }
      else
      {
        $filedata='news_image';
	    $filename=do_upload($filedata);
	    $this->all_admin_model->add_news_image($filename);
	    //redirect('all_news');
	    $show_all_news['news']=$this->all_admin_model->show_news();
	    $show_all_news['susscess']='<font style="color:green;">News Added Successfully.</font><br />';
	    //$data1=array('susscess'=>'News Added Successfully.<br />');
               // $this->index($msg);
                $this->load->view('admin/all_news', $show_all_news);
      }

      
      
}




public function edit_news(){

	$news_slno=$this->uri->segment(2);
	$edit_news['edit_news_list']=$this->all_admin_model->edit_news($news_slno);
	$this->load->view('admin/edit_news',$edit_news);
}

public function update_news(){

	 // $filedata1='edit_news_image';
	 // $filename1=do_upload($filedata1);

	$edit_news_slno=$this->input->post('edit_news_slno');
	

	 $update_news_list=$this->all_admin_model->update_news_image($edit_news_slno);
	 if($update_news_list){

	 	$show_all_news['news']=$this->all_admin_model->show_news();
	 	$show_all_news['news_msg']='<font style="color:green;">News updated Successfully.</font>';

	 	$this->load->view('admin/all_news',$show_all_news);

	 }
}


public function delete_news_image(){

	//$del_slno=$this->uri->segment(2);
   $del_slno=$this->input->post('new_del_id');

	$this->all_admin_model->delete_news($del_slno);

 //    $show_all_news['news']=$this->all_admin_model->show_news();
	//  $show_all_news['delete_news_msg']='<font style="color:red;">News Deleted Successfully.</font>';
	// $this->load->view('admin/all_news',$show_all_news);
}

public function all_publication(){

	$show_all_publication['publication']=$this->all_admin_model->show_publication();
	$this->load->view('admin/all_publication',$show_all_publication);
}


public function add_new_publication(){

	$this->load->view('admin/add_publication');
}

public function add_publication_code(){

      $filename1='';


      
      if (empty($_FILES['publication_image']['name']))
      {
      	$this->form_validation->set_rules('publication_image', 'Image', 'required');
      	if ($this->form_validation->run() == FALSE)
      	{
      		$this->load->view('admin/add_publication');
      	}
      	//return false;
      }
      else
      {
        $filedata1='publication_image';
	    $filename1=do_upload($filedata1);
	    $this->all_admin_model->add_publication_image($filename1);
	    
	    $show_all_publication['publication']=$this->all_admin_model->show_publication();
	    $show_all_publication['susscess']='<font style="color:green;">Publication Added Successfully.</font><br />';
	    
        $this->load->view('admin/all_publication', $show_all_publication);
      }
}


public function edit_publication(){

	$publication_slno=$this->uri->segment(2);

	$edit_publication['edit_publication_list']=$this->all_admin_model->edit_publication($publication_slno);
	$this->load->view('admin/edit_publication',$edit_publication);
}


public function update_publication(){
 
    $edit_publication_slno=$this->input->post('edit_publication_slno');
	

	 $update_publication_list=$this->all_admin_model->update_publication_image($edit_publication_slno);
	 if($update_publication_list){

	 	$show_all_publication['publication']=$this->all_admin_model->show_publication();
	 	$show_all_publication['publication_msg']='<font style="color:green;">News updated Successfully.</font>';

	 	$this->load->view('admin/all_publication',$show_all_publication);

	 }

}


public function delete_publication_image(){

	$publication_del_slno=$this->input->post('new_del_id');

	$this->all_admin_model->delete_publication($publication_del_slno);

}

 public function all_team(){

  	$show_all_team['team']=$this->all_admin_model->show_team();
	$this->load->view('admin/all_team',$show_all_team);
  }


	
public function add_new_team(){

	$this->load->view('admin/add_new_team');
}


public function add_team_code(){

    $team_title=$this->input->post('team_name');
	$team_designation=$this->input->post('team_designation');
	$team_description=$this->input->post('editor8');

    $filename2='';

    if (empty($_FILES['team_image']['name']))
     {

       $this->form_validation->set_rules('team_name', 'Team name', 'required'); 
       $this->form_validation->set_rules('team_designation', 'Team Designation', 'required');
       $this->form_validation->set_rules('editor8', 'Description', 'required');
       $this->form_validation->set_rules('team_image', 'Image', 'required');

       if ($this->form_validation->run() == FALSE) { 

        $this->load->view('admin/add_new_team');

       }
     }

     else{

     	$filedata2='team_image';
	    $filename2=do_upload($filedata2);
	    $this->all_admin_model->add_team_image($team_title,$team_designation,$team_description,$filename2);

	    $show_team['team']=$this->all_admin_model->show_team();
	 	$show_team['susscess']='<font style="color:green;">Team Added Successfully.</font>';

	 	$this->load->view('admin/all_team',$show_team);
     }
	// $team_title=$this->input->post('team_name');
	// $team_designation=$this->input->post('team_designation');
	// $team_description=$this->input->post('editor8');

 //         $this->form_validation->set_rules('team_name', 'Team name', 'required'); 
	// 	 $this->form_validation->set_rules('team_designation', 'Team Designation', 'required'); 
	// 	 $this->form_validation->set_rules('editor8', 'Description', 'required'); 
			
 //         if ($this->form_validation->run() == FALSE) { 

 //         $this->load->view('admin/add_new_team');

 //         }


	// $filename2='';


      
 //      if (empty($_FILES['team_image']['name']))
 //      {
 //      	$this->form_validation->set_rules('team_image', 'Image', 'required');
 //      	if ($this->form_validation->run() == FALSE)
 //      	{
 //      		$this->load->view('admin/add_new_team');
 //      	}
 //      	//return false;
 //      }
 //      else
 //      {
 //        $filedata2='team_image';
	//     $filename2=do_upload($filedata2);
	//     $this->all_admin_model->add_team_image($team_title,$team_designation,$team_description,$filename2);

	//     $show_team['team']=$this->all_admin_model->show_team();
	//  	$show_team['susscess']='<font style="color:green;">Team Added Successfully.</font>';

	//  	$this->load->view('admin/all_team',$show_team);
 //    }

  }

  public function edit_team(){

  	$edit_team_slno=$this->uri->segment(2);
  	$edit_team['edit_team']=$this->all_admin_model->edit_team($edit_team_slno);
	$this->load->view('admin/edit_team',$edit_team);

  }

  public function update_team(){

  	$edit_team_slno=$this->input->post('edit_team_slno');
	$edit_team_name=$this->input->post('edit_team_title');
	$edit_team_designation=$this->input->post('edit_team_designation');
    $edit_team_description=$this->input->post('editor9');

	 $update_team_list=$this->all_admin_model->update_team($edit_team_name,$edit_team_designation,$edit_team_description,$edit_team_slno);
	 if($update_team_list){

	 	$show_team['team']=$this->all_admin_model->show_team();
	 	$show_team['team_msg']='<font style="color:green;">Team updated Successfully.</font>';

	 	$this->load->view('admin/all_team',$show_team);

	 }
  }


  public function delete_team(){

  	$team_del_slno=$this->input->post('new_del_id');

	$this->all_admin_model->delete_team($team_del_slno);
  }

  public function all_awards(){

  	$show_all_awards['awards']=$this->all_admin_model->show_awards();
	$this->load->view('admin/all_awards',$show_all_awards);
  }


  public function add_new_awards(){

  	$this->load->view('admin/add_new_awards');
  }


  public function add_award_code(){

  	$award_title=$this->input->post('award_name');
  	$award_description=$this->input->post('editor10');

    $filename3='';

    if (empty($_FILES['award_image']['name'])){

   $this->form_validation->set_rules('award_name', 'Award Title', 'required'); 
   $this->form_validation->set_rules('editor10', 'Description', 'required'); 
   $this->form_validation->set_rules('award_image', 'Image', 'required');

    if ($this->form_validation->run() == FALSE) {

     $this->load->view('admin/add_new_awards');

    }

    }

    else{

     $filedata3='award_image';
     $filename3=do_upload($filedata3);
     $this->all_admin_model->add_award_image($award_title,$award_description,$filename3);
	 $show_awards['awards']=$this->all_admin_model->show_awards();
     $show_awards['awards_susscess']='<font style="color:green;">Awards Added Successfully.</font>';
     $this->load->view('admin/all_awards',$show_awards);

    }
       
//   	     $this->form_validation->set_rules('award_name', 'Award Title', 'required'); 
		  
// 		 $this->form_validation->set_rules('editor10', 'Description', 'required'); 
			
//          if ($this->form_validation->run() == FALSE) { 

//          $this->load->view('admin/add_new_awards');

//          }


// 	$filename3='';


      
//       if (empty($_FILES['award_image']['name']))
//       {
//       	$this->form_validation->set_rules('award_image', 'Image', 'required');
//       	if ($this->form_validation->run() == FALSE)
//       	{
//       		$this->load->view('admin/add_new_awards');
//       	}
//       	//return false;
//       }
//       else
//       {
//         $filedata3='award_image';
// 	    $filename3=do_upload($filedata3);
// 	   $this->all_admin_model->add_award_image($award_title,$award_description,$filename3);
// 	   $show_awards['awards']=$this->all_admin_model->show_awards();
// 	   $show_awards['awards_susscess']='<font style="color:green;">Awards Added Successfully.</font>';
// 	   $this->load->view('admin/all_awards',$show_awards);
// }

  }



  public function edit_awards(){

  	$awards_slno=$this->uri->segment(2);
  	$edit_awards_list['edit_awards']=$this->all_admin_model->edit_awards($awards_slno);
  	$this->load->view('admin/edit_awards',$edit_awards_list);



  }

  public function update_code(){

  	$edit_awards_slno=$this->input->post('edit_awards_slno');
	$edit_awards_title=$this->input->post('edit_awards_title');
	
    $edit_awards_description=$this->input->post('editor11');

	 $update_awards_list=$this->all_admin_model->update_awards($edit_awards_title,$edit_awards_description,$edit_awards_slno);
	 if($update_awards_list){

	 	$show_awards['awards']=$this->all_admin_model->show_awards();
	 	$show_awards['awards_msg']='<font style="color:green;">Awards updated Successfully.</font>';



	 	$this->load->view('admin/all_awards',$show_awards);

	 }
  }


  public function delete_awards(){

  	$delete_awards=$this->input->post('new_del_id');
  	$this->all_admin_model->delete_awards($delete_awards);
  }


  public function all_media(){

$show_all_media['media']=$this->all_admin_model->show_all_media();
$this->load->view('admin/all_media',$show_all_media);

}



public function add_media(){

	$this->load->view('admin/add_media');
}


public function add_media_code(){

	     $media_title=$this->input->post('media_title');
  	     $media_description=$this->input->post('editor12');
         $filename5='';
     if (empty($_FILES['media_image']['name'])){
  	     $this->form_validation->set_rules('media_title', 'Media Title', 'required'); 
		 $this->form_validation->set_rules('media_image', 'Media Image', 'required');
		 $this->form_validation->set_rules('editor12', 'Description', 'required'); 
		 
			
         if ($this->form_validation->run() == FALSE ) { 
         	
		 //if ($this->form_validation->run($this)){

		 	//if (empty($_FILES['media_image']['name']))

         $this->load->view('admin/add_media');

         


       }
	
}

      
      
      else
      {
        $filedata5='media_image';
	    $filename5=do_upload($filedata5);
	   $this->all_admin_model->add_media_image($media_title,$media_description,$filename5);
	   
	    $show_media['media']=$this->all_admin_model->show_all_media();
	    $show_media['media_susscess']='<font style="color:green;">Media Added Successfully.</font>';
	   $this->load->view('admin/all_media',$show_media);
}
}


public function edit_media(){

	$media_slno=$this->uri->segment(2);
	$edit_media['edit_media']=$this->all_admin_model->edit_media($media_slno);
	$this->load->view('admin/edit_media',$edit_media);
}


public function update_media(){

	$edit_media_slno=$this->input->post('edit_media_slno');
	$edit_media_title=$this->input->post('edit_media_title');
	
    $edit_media_description=$this->input->post('editor13');

	 $update_media_list=$this->all_admin_model->update_media($edit_media_title,$edit_media_description,$edit_media_slno);
	 if($update_media_list){

	 	$show_media['media']=$this->all_admin_model->show_all_media();
	 	$show_media['media_msg']='<font style="color:green;">Media updated Successfully.</font>';



	 	$this->load->view('admin/all_media',$show_media);

	 }

}


public function delete_media(){

	$delete_media=$this->input->post('new_del_id');
  	$this->all_admin_model->delete_media($delete_media);
}


public function add_new_clients(){

	//$clients_title=$this->input->post('clients_title');
	$this->load->view('admin/add_new_clients');
}


public function add_clients_code(){

	$clients_title=$this->input->post('clients_title');
	$clients_address=$this->input->post('clients_address');

	$filename6='';
     if (empty($_FILES['clients_image']['name'])){
  	     $this->form_validation->set_rules('clients_title', 'Clients Title', 'required'); 
		 $this->form_validation->set_rules('clients_image', 'Clients Image', 'required');
		 $this->form_validation->set_rules('clients_address', 'Clients Address', 'required');
		 
			
         if ($this->form_validation->run() == FALSE ) { 
         	
		 //if ($this->form_validation->run($this)){

		 	//if (empty($_FILES['media_image']['name']))

         $this->load->view('admin/add_new_clients');

         


       }
	
}

      
      
      else
      {
        $filedata6='clients_image';
	    $filename6=do_upload($filedata6);
	   $this->all_admin_model->add_clients_image($clients_title,$clients_address,$filename6);
	   
	    $show_all_clients['clients']=$this->all_admin_model->show_all_clients();
	    $show_all_clients['clients_susscess']='<font style="color:green;">Clients Added Successfully.</font>';
	   $this->load->view('admin/all_clients',$show_all_clients);
}
}


public function all_clients(){

	$show_all_clients['clients']=$this->all_admin_model->show_all_clients();
    $this->load->view('admin/all_clients',$show_all_clients);
}


public function edit_clients(){

	$edit_clients_slno=$this->uri->segment(2);

	$edit_clients['edit_clients']=$this->all_admin_model->edit_clients($edit_clients_slno);
    $this->load->view('admin/edit_clients',$edit_clients);
}


public function update_clients(){

    $edit_clients_slno=$this->input->post('edit_clients_slno');
	$edit_clients_title=$this->input->post('edit_clients_title');
	$edit_clients_address=$this->input->post('edit_clients_address');
	
    //$edit_media_description=$this->input->post('editor13');

	 $update_clients_list=$this->all_admin_model->update_clients($edit_clients_title,$edit_clients_address,$edit_clients_slno);
	 if($update_clients_list){

	 	$show_all_clients['clients']=$this->all_admin_model->show_all_clients();
	 	$show_all_clients['clients_msg']='<font style="color:green;">Clients updated Successfully.</font>';



	 	$this->load->view('admin/all_clients',$show_all_clients);

	 }

}


public function delete_clients(){

	$delete_clients=$this->input->post('new_del_id');
  	$this->all_admin_model->delete_clients($delete_clients);
}


public function add_type_image(){

	$image_type['image_category']=$this->all_admin_model->show_all_category();

	$this->load->view('admin/add_type_image',$image_type);
}

public function add_image_type_category(){

	$image_category_name=$this->input->post('image_category');

	$category_add=$this->all_admin_model->add_image_category($image_category_name);
   if($category_add){

   	echo '<script type="text/javascript">'; 
	echo 'alert("Category Added Successfully.");'; 
	echo 'document.location.href = "'.base_url('add_type_image').'";';
	echo '</script>';
	
}

else{

	return FALSE;
}
}

public function edit_category(){

	$edit_category_name=$this->input->post('new_cat');
    $this->all_admin_model->edit_image_category($edit_category_name);

}


public function add_type_code(){

	$content_type=$this->input->post('content_type');
    $image_title=$this->input->post('image_title');
    $type_description=$this->input->post('editor12');

    $image_type['image_category']=$this->all_admin_model->show_all_category();

    $filename7='';
     if (empty($_FILES['type_image']['name']) || empty($_FILES['type_image_new']['name'])){
  	     $this->form_validation->set_rules('content_type', 'Image Type', 'required'); 
  	     $this->form_validation->set_rules('image_title', 'Title', 'required'); 
		 //$this->form_validation->set_rules('editor12', 'Description', 'required');
		 $this->form_validation->set_rules('type_image', 'Image', 'required');
		 
			
         if ($this->form_validation->run() == FALSE ) { 
         	
		 

         $this->load->view('admin/add_type_image',$image_type);

         


       }
	
}

     else{

     	$filedata7='type_image';
	    $filename7=do_upload($filedata7);

	    $filedata13='type_image_new';
	    $filename13=do_upload_new($filedata13);

	   $this->all_admin_model->add_type_image($content_type,$image_title,$type_description,$filename7,$filename13);
	   
	    $show_all_type['type']=$this->all_admin_model->show_all_type();
	    $show_all_type['type_susscess']='<font style="color:green;">Type Image Added Successfully.</font>';
	   $this->load->view('admin/all_type_image',$show_all_type);
     }

}


public function all_type_image(){

	$show_all_type['type']=$this->all_admin_model->show_all_type();
    $this->load->view('admin/all_type_image',$show_all_type);
}


public function edit_type_image(){

	$edit_type_slno=$this->uri->segment(2);
    $edit_type['image_category']=$this->all_admin_model->show_all_category();
	$edit_type['edit_type']=$this->all_admin_model->edit_type_image($edit_type_slno);
    $this->load->view('admin/edit_type_image',$edit_type);
}


public function update_type_code(){

	$edit_type_slno=$this->input->post('edit_type_slno');
	$edit_content_type=$this->input->post('edit_content_type');
	$edit_type_title=$this->input->post('edit_type_title');
    $edit_type_description=$this->input->post('editor13');

	

	 $update_type_list=$this->all_admin_model->update_type_image($edit_type_title,$edit_type_description,$edit_content_type,$edit_type_slno);
	 if($update_type_list){

	 	$show_all_type['type']=$this->all_admin_model->show_all_type();
	 	$show_all_type['type_msg']='<font style="color:green;">Type Image updated Successfully.</font>';



	 	$this->load->view('admin/all_type_image',$show_all_type);

	 }
}


public function delete_type_image(){

	$delete_type_slno=$this->input->post('new_del_id');
  	$this->all_admin_model->delete_type_image($delete_type_slno);
}


public function add_video(){
  $this->load->view('admin/add_video');

}


public function add_type_video_code(){

	$video_link=$this->input->post('video_link');
    $video_type=$this->input->post('video_type');
    $type_video_description=$this->input->post('editor14');


    $filename8='';
     if (empty($_FILES['type_video_image']['name'])){
  	     $this->form_validation->set_rules('video_link', 'Video Link', 'required'); 
  	     
		 $this->form_validation->set_rules('editor14', 'Description', 'required');
		 $this->form_validation->set_rules('type_video_image', 'Image', 'required');
		 
			
         if ($this->form_validation->run() == FALSE ) { 
         

         $this->load->view('admin/add_video');

         


       }
	
}

else{

        $filedata8='type_video_image';
	    $filename8=do_upload($filedata8);
	   $this->all_admin_model->add_type_video($video_type,$video_link,$type_video_description,$filename8);
	   
	    $show_all_type_video['type_video']=$this->all_admin_model->show_all_type_video();
	    $show_all_type_video['type_video_susscess']='<font style="color:green;">Type Video Added Successfully.</font>';
	   $this->load->view('admin/all_type_video',$show_all_type_video);

}


}

public function all_video(){

	$show_all_type_video['type_video']=$this->all_admin_model->show_all_type_video();
    $this->load->view('admin/all_type_video',$show_all_type_video);
}


public function edit_type_video(){

    $edit_type_video_slno=$this->uri->segment(2);
    $edit_type_video['edit_type_video']=$this->all_admin_model->edit_type_video($edit_type_video_slno);
    $this->load->view('admin/edit_type_video',$edit_type_video);

}


public function update_type_video(){

	$edit_type_video_slno=$this->input->post('edit_type_video_slno');
	$edit_video_type=$this->input->post('edit_video_type');
	$edit_type_video_link=$this->input->post('edit_type_video_link');
    $edit_type_video_description=$this->input->post('editor15');

	

	 $update_type_video_list=$this->all_admin_model->update_type_video($edit_video_type,$edit_type_video_link,$edit_type_video_description,$edit_type_video_slno);
	 if($update_type_video_list){

	 	$show_all_type_video['type_video']=$this->all_admin_model->show_all_type_video();
	 	$show_all_type_video['type_video_msg']='<font style="color:green;">Type Video updated Successfully.</font>';



	 	$this->load->view('admin/all_type_video',$show_all_type_video);

	 }
}

public function delete_type_video(){

	$delete_type_video_slno=$this->input->post('new_del_id');
  	$this->all_admin_model->delete_type_video($delete_type_video_slno);
}

public function add_location_image(){

	$this->load->view('admin/add_location_image');
}

public function add_location_image_code(){

     $continent_name=$this->input->post('continent_name');
     $country_name=$this->input->post('country_name');
     $state_name=$this->input->post('state_name');
     $location_description=$this->input->post('editor16');


     $filename9='';
     $filename12='';
       if (empty($_FILES['location_image']['name']) || empty($_FILES['location_image_new']['name'])){
  	     $this->form_validation->set_rules('continent_name', 'Continent Name', 'required'); 
  	     $this->form_validation->set_rules('country_name', 'Country Name', 'required'); 
		 $this->form_validation->set_rules('editor16', 'Description', 'required');
		 $this->form_validation->set_rules('location_image', 'Image', 'required');
		 
			
         if ($this->form_validation->run() == FALSE ) { 
         

         $this->load->view('admin/add_location_image');

         


       }
	
}

else{

        $filedata9='location_image';
	    $filename9=do_upload($filedata9);

	    $filedata12='location_image_new';
	    $filename12=do_upload_new($filedata12);

	   $this->all_admin_model->add_location_image($continent_name,$country_name,$state_name,$location_description,$filename9,$filename12);
	   
	    $show_all_location_image['location_image']=$this->all_admin_model->show_location_image();
	    $show_all_location_image['location_susscess']='<font style="color:green;">Location Image Added Successfully.</font>';
	   $this->load->view('admin/all_location_image',$show_all_location_image);

}

}

public function all_location_image(){

$show_all_location_image['location_image']=$this->all_admin_model->show_location_image();
$this->load->view('admin/all_location_image',$show_all_location_image);
}


public function edit_location_image(){

	$edit_location_image_slno=$this->uri->segment(2);
	$edit_location_image['edit_location']=$this->all_admin_model->edit_location_image($edit_location_image_slno);
	$this->load->view('admin/edit_location_image',$edit_location_image);
}

public function update_location_image(){

	 $edit_continent_name=$this->input->post('edit_continent_name');
     $edit_country_name=$this->input->post('edit_country_name');
     $edit_state_name=$this->input->post('edit_state_name');
     $edit_location_description=$this->input->post('editor17');
     $edit_location_slno=$this->input->post('edit_location_slno');

	

	 $update_location_list=$this->all_admin_model->update_location_image($edit_continent_name,$edit_country_name,$edit_state_name,$edit_location_description,$edit_location_slno);
	 if($update_location_list){

	 	$show_all_location_image['location_image']=$this->all_admin_model->show_location_image();
	 	$show_all_location_image['type_location_msg']='<font style="color:green;">Location Image Updated Successfully.</font>';
	   $this->load->view('admin/all_location_image',$show_all_location_image);


	 }
}


public function delete_location_image(){

	$delete_location_slno=$this->input->post('new_del_id');
  	$this->all_admin_model->delete_location_image($delete_location_slno);
}

public function logout(){

	$this->session->unset_userdata('sessionid');
    $this->session->unset_userdata('is_logged_in_page');
	$this->session->sess_destroy();
	redirect('admin');

	}
	
	
	public function change_position(){

		$position_slno=$this->input->post('p_slno');

		$position_no=$this->input->post('position');

		$this->all_admin_model->update_position($position_slno,$position_no);
	}

}

?>