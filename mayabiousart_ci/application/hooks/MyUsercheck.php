<?php
class MyUsercheck
{
    
    /*public function Myusersessioncheck()
    {
        
        $this->CI= & get_instance();

        $session_userdata = $this->CI->session->userdata('sessionid', TRUE);
        if(empty($session_userdata))
        {
            
            //redirect('admin');
            $this->load->view('login');
            
        }
    }*/


    private $CI;
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('session');
        $this->CI->load->helper('url');
    }

    public function Myusersessioncheck ($params)
    {
        if(strtolower( $this->CI->router->class ) == 'allcontroller' && (strtolower( $this->CI->router->method ) == 'dashboard' || strtolower( $this->CI->router->method ) == 'contact' || strtolower( $this->CI->router->method ) == 'edit_contact' || strtolower( $this->CI->router->method ) == 'update_contact' || strtolower( $this->CI->router->method ) == 'creative_approach_content' || strtolower( $this->CI->router->method ) == 'edit_creative_approach_content' || strtolower( $this->CI->router->method ) == 'update_approach_content' || strtolower( $this->CI->router->method ) == 'work_list_content' || strtolower( $this->CI->router->method ) == 'edit_work_content' || strtolower( $this->CI->router->method ) == 'update_work_content' || strtolower( $this->CI->router->method ) == 'add_news' || strtolower( $this->CI->router->method ) == 'add_news_code' || strtolower( $this->CI->router->method ) == 'edit_news' || strtolower( $this->CI->router->method ) == 'update_news' || strtolower( $this->CI->router->method ) == 'delete_news_image' || strtolower( $this->CI->router->method ) == 'add_new_publication' || strtolower( $this->CI->router->method ) == 'add_publication_code' || strtolower( $this->CI->router->method ) == 'all_publication' || strtolower( $this->CI->router->method ) == 'edit_publication' || strtolower( $this->CI->router->method ) == 'update_publication' || strtolower( $this->CI->router->method ) == 'delete_publication_image' || strtolower( $this->CI->router->method ) == 'add_new_team' || strtolower( $this->CI->router->method ) == 'add_team_code' || strtolower( $this->CI->router->method ) == 'all_team' || strtolower( $this->CI->router->method ) == 'edit_team' || strtolower( $this->CI->router->method ) == 'update_team' || strtolower( $this->CI->router->method ) == 'delete_team' || strtolower( $this->CI->router->method ) == 'add_new_awards' || strtolower( $this->CI->router->method ) == 'add_award_code' || strtolower( $this->CI->router->method ) == 'all_awards' || strtolower( $this->CI->router->method ) == 'edit_awards' || strtolower( $this->CI->router->method ) == 'update_code' || strtolower( $this->CI->router->method ) == 'delete_awards' || strtolower( $this->CI->router->method ) == 'add_media' || strtolower( $this->CI->router->method ) == 'add_media_code' || strtolower( $this->CI->router->method ) == 'all_media' || strtolower( $this->CI->router->method ) == 'edit_media' || strtolower( $this->CI->router->method ) == 'update_media' || strtolower( $this->CI->router->method ) == 'delete_media' || strtolower( $this->CI->router->method ) == 'add_new_clients' || strtolower( $this->CI->router->method ) == 'add_clients_code' || strtolower( $this->CI->router->method ) == 'all_clients' || strtolower( $this->CI->router->method ) == 'edit_clients' || strtolower( $this->CI->router->method ) == 'update_clients' || strtolower( $this->CI->router->method ) == 'delete_clients' || strtolower( $this->CI->router->method ) == 'add_image_type_category' || strtolower( $this->CI->router->method ) == 'edit_category' || strtolower( $this->CI->router->method ) == 'add_type_image' || strtolower( $this->CI->router->method ) == 'add_type_code' || strtolower( $this->CI->router->method ) == 'all_type_image' || strtolower( $this->CI->router->method ) == 'edit_type_image' || strtolower( $this->CI->router->method ) == 'update_type_code' || strtolower( $this->CI->router->method ) == 'delete_type_image' || strtolower( $this->CI->router->method ) == 'add_video' || strtolower( $this->CI->router->method ) == 'add_type_video_code' || strtolower( $this->CI->router->method ) == 'all_video' || strtolower( $this->CI->router->method ) == 'edit_type_video' || strtolower( $this->CI->router->method ) == 'update_type_video' || strtolower( $this->CI->router->method ) == 'delete_type_video' || strtolower( $this->CI->router->method ) == 'add_location_image' || strtolower( $this->CI->router->method ) == 'add_location_image_code' || strtolower( $this->CI->router->method ) == 'all_location_image' || strtolower( $this->CI->router->method ) == 'edit_location_image' || strtolower( $this->CI->router->method ) == 'update_location_image' || strtolower( $this->CI->router->method ) == 'delete_location_image'))
            
        {
            if (!isset($_SESSION['sessionid']))
            {
                $this->CI->session->sess_destroy();
                redirect('admin');
            }
        }
        
    }
}
            