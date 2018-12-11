<?php
function do_upload($img)
{
    $files = $_FILES[$img];
    
    $ci = & get_instance();
    $ci->load->library('upload');
  
    $config['upload_path'] = 'uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    
    $filename1=$_FILES[$img]['name'];
    $ext = pathinfo($filename1, PATHINFO_EXTENSION);
    //$filename=str_replace(' ', '_', $filename);
    //$filename=preg_replace("/[^a-z0-9\_\-\.]/i",'',$filename);
    $only_name=basename($filename1);
    $filename2=str_replace($only_name, rand(), $filename1);
    $filename3=$filename2.'.'.$ext;
    
    $_FILES[$img]['name'] =$filename3;
    

    $_FILES[$img]['type'] = $files['type'];
    $_FILES[$img]['tmp_name'] = $files['tmp_name'];
    $_FILES[$img]['error'] = $files['error'];
    $_FILES[$img]['size'] = $files['size'];
    $ci->upload->initialize($config);
    if ($ci->upload->do_upload($img))
    {
      $prod_img = array('upload_data' => $ci->upload->data());
    }
    else   
    {
    }
  return $filename3;
}

function do_upload_new($img)
{
    $files = $_FILES[$img];
    
    $ci = & get_instance();
    $ci->load->library('upload');
  
    $config['upload_path'] = 'uploads-new/';
    $config['allowed_types'] = 'gif|jpg|png';
    
    $filename1=$_FILES[$img]['name'];
    $ext = pathinfo($filename1, PATHINFO_EXTENSION);
    //$filename=str_replace(' ', '_', $filename);
    //$filename=preg_replace("/[^a-z0-9\_\-\.]/i",'',$filename);
    $only_name=basename($filename1);
    $filename2=str_replace($only_name, rand(), $filename1);
    $filename3=$filename2.'.'.$ext;
    
    $_FILES[$img]['name'] =$filename3;
    

    $_FILES[$img]['type'] = $files['type'];
    $_FILES[$img]['tmp_name'] = $files['tmp_name'];
    $_FILES[$img]['error'] = $files['error'];
    $_FILES[$img]['size'] = $files['size'];
    $ci->upload->initialize($config);
    if ($ci->upload->do_upload($img))
    {
      $prod_img = array('upload_data' => $ci->upload->data());
    }
    else   
    {
    }
  return $filename3;
}

function getcountry($cont, $country)
{
    switch ($cont)
    {
        case 'Asia':

        $html .='<option  value="India" '.($country == "India" ? "selected": "").'>India</option>
             <option value="China" '.($country == "China" ? "selected": "").'>China</option>
             <option value="Pakistan" '.($country == "Pakistan" ? "selected": "").'>Pakistan</option>
             <option value="Bangladesh" '.($country == "Bangladesh" ? "selected": "").'>Bangladesh</option>
             <option value="Japan" '.($country == "Japan" ? "selected": "").'>Japan</option>
             <option value="Srilanka" '.($country == "Srilanka" ? "selected": "").'>Sri Lanka</option>
             <option value="Dubai" '.($country == "Dubai" ? "selected": "").'>Dubai</option>
             ';
        break;

        case 'Africa':
        $html .='<option value="Egypt" '.($country == "Egypt" ? "selected": "").'>Egypt</option>
                 <option value="Kenya" '.($country == "Kenya" ? "selected": "").'>Kenya</option>
                 <option value="Morocco" '.($country == "Morocco" ? "selected": "").'>Morocco</option>
                 <option value="Swaziland" '.($country == "Swaziland" ? "selected": "").'>Swaziland</option>
                 <option value="Zimbabwe" '.($country == "Zimbabwe" ? "selected": "").'>Zimbabwe</option>';
        break;

        case 'Europe':
        $html .='<option value="Russia" '.($country == "Egypt" ? "selected": "").'>Russia</option>
                 <option value="Germany" '.($country == "Germany" ? "selected": "").'>Germany</option>
                 <option value="U.K" '.($country == "U.K" ? "selected": "").'>U.K</option>
                 <option value="France" '.($country == "France" ? "selected": "").'>France</option>
                 <option value="Italy" '.($country == "Italy" ? "selected": "").'>Italy</option>
                 <option value="Netherlands" '.($country == "Netherlands" ? "selected": "").'>Netherlands</option>
                 <option value="Sweden" '.($country == "Sweden" ? "selected": "").'>Sweden</option>
                 <option value="Switzerland" '.($country == "Switzerland" ? "selected": "").'>Switzerland</option>';
        break;

        case 'North America':
        $html .='<option value="U.S" '.($country == "U.S" ? "selected": "").'>U.S</option>
                 <option value="Canada" '.($country == "Canada" ? "selected": "").'>Canada</option>
                 <option value="Greenland" '.($country == "Greenland" ? "selected": "").'>Greenland</option>
                 <option value="Bermuda" '.($country == "Bermuda" ? "selected": "").'>Bermuda</option>
                 <option value="Saint Pierre &amp; Miquelon" '.($country == "Saint Pierre &amp; Miquelon" ? "selected": "").'>Saint Pierre &amp; Miquelon</option>';
        break;
    }
    
    return $html;
}


function getcity($country_name,$city){

    switch($country_name){

        case 'India':

        $html1 .='<option value="Mumbai" '.($city == "Mumbai" ? "selected": "").'>Mumbai</option>
                 <option value="Delhi" '.($city == "Delhi" ? "selected": "").'>Delhi</option>
                 <option value="Kolkata" '.($city == "Kolkata" ? "selected": "").'>Kolkata</option>
                 <option value="Jaipur" '.($city == "Jaipur" ? "selected": "").'>Jaipur</option>
                 <option value="Hyderabad" '.($city == "Hyderabad" ? "selected": "").'>Hyderabad</option>
                 <option value="Bangalore" '.($city == "Bangalore" ? "selected": "").'>Bangalore</option>
                 <option value="Bhubaneswar" '.($city == "Bhubaneswar" ? "selected": "").'>Bhubaneswar</option>
                 <option value="Pune" '.($city == "Pune" ? "selected": "").'>Pune</option>
                 <option value="Patna" '.($city == "Patna" ? "selected": "").'>Patna</option>
                 <option value="Chennai" '.($city == "Chennai" ? "selected": "").'>Chennai</option>
                 <option value="Chandigarh" '.($city == "Chandigarh" ? "selected": "").'>Chandigarh</option>
                 <option value="Ahmedabad" '.($city == "Ahmedabad" ? "selected": "").'>Ahmedabad</option>
                 <option value="Surat" '.($city == "Surat" ? "selected": "").'>Surat</option>
                 <option value="Indore" '.($city == "Indore" ? "selected": "").'>Indore</option>
                 <option value="Lucknow" '.($city == "Lucknow" ? "selected": "").'>Lucknow</option>
                 <option value="Nagpur" '.($city == "Nagpur" ? "selected": "").'>Nagpur</option>
                 <option value="Amritsar" '.($city == "Amritsar" ? "selected": "").'>Amritsar</option>
                 <option value="Guwahati" '.($city == "Guwahati" ? "selected": "").'>Guwahati</option>
                 <option value="Goa" '.($city == "Goa" ? "selected": "").'>Goa</option>';

        break;         
    }

    return $html1;
}


function imageloop($catslno)
{
    $CI =& get_instance();

   
    $CI->load->model('All_frontend_model');
    
   
   $allimages_array=$CI->All_frontend_model->fetch_cat_type($catslno);
   return $allimages_array;

}

function videoloop($catslno)
{
    $CI =& get_instance();

   
    $CI->load->model('All_frontend_model');
    
   
   $allvideo_array=$CI->All_frontend_model->fetch_video_type($catslno);
   return $allvideo_array;

}

function image_exist($catname)
{
    $CI =& get_instance();

   
    $CI->load->model('All_frontend_model');
    
   
   $allimagecount=$CI->All_frontend_model->fetchallimages($catname);
   return $allimagecount;

}


function show_all_video()  {

    $CI =& get_instance();
    $CI->load->model('All_frontend_model');

    $allvideo=$CI->All_frontend_model->fetchallvideo();
   return $allvideo;
}


function countryloop($continent_name){

    $CI =& get_instance();
    $CI->load->model('All_frontend_model');

    $allcontinent=$CI->All_frontend_model->fetchallcontinent($continent_name);
   return $allcontinent;
}


function checksession(){

   $CI = & get_instance();  //get instance, access the CI superobject
  $isLoggedIn = $CI->session->userdata('is_logged_in_page');
  if( $isLoggedIn ) {
     return TRUE;
  }
  return FALSE;
}

function count_all($cname){

    $CI =& get_instance();
    $CI->load->model('All_frontend_model');

    $allimagevideo=$CI->All_frontend_model->videocount($cname);
   return $allimagevideo;

}

function getbigimg($img)
{
  $ci =& get_instance();
  $sql=$ci->db->query("select * from tbl_location_image where image='".$img."' ");
  $sql_row=$sql->row();
  $bigimage=$sql_row->small_image;
  return $bigimage;
}

function get_position(){

$CI =& get_instance();
$CI->load->model('All_admin_model');

    $allposition=$CI->All_admin_model->allposition();
   return $allposition;
}

function get_pslno($edit_pslno){

   $CI =& get_instance();
   $CI->load->model('All_admin_model');

   $allpslno=$CI->All_admin_model->allpslno($edit_pslno);
   return $allpslno; 
}

function get_all_vcategory(){

   $CI =& get_instance();
   $CI->load->model('All_admin_model');

   $allvcategory=$CI->All_admin_model->all_video_category_list();
   return $allvcategory;  
}
?>