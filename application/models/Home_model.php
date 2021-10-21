<?php
class Home_model extends CI_Model{

    public function get_aboutus(){
		
		//$this->db->where('status','Converted');
		return $admin= $this->db->get('aboutus')->row_array();
		
	}
    public function get_testimonials(){
		
		//$this->db->where('status','Converted');
		return $admin= $this->db->get('testimonials')->row_array();
		
	}
    public function registeration($data)
    {
        $this->db->insert('company1',$data);
		return true;
    }
    /* get function for home data */
    public function get_homelogo(){
		
		$this->db->where('key','header_logo');
		return $logo= $this->db->get('homepage')->row_array();
       
		
	}
    public function get_homebanner(){
		
		
        $this->db->where('key','banner_image');
		return $banner= $this->db->get('homepage')->row_array();
		
	}
    public function get_hiwheader(){
		
		
        $this->db->where('key','hiw_header');
		return $hiw_header= $this->db->get('homepage')->row_array();
		
	}
    public function get_hiw_block1_image(){
		
        $this->db->where('key','hiw_block1_image');
		return $result= $this->db->get('homepage')->row_array();
		
	}
    
}
?>