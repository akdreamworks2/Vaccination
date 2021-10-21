<?php
class Employee_model extends CI_Model{
public function insert_employee($data)
	{
		$this->db->insert('employee',$data);
		return true;
	}
    public function get_employee(){
		
		//$this->db->where('status','Converted');
		return $admin= $this->db->get('employee')->result_array();
		
	}
    public function get_aboutuscontent(){
		
		//$this->db->where('status','Converted');
		return $admin= $this->db->get('aboutus')->row_array();
		
	}
    public function update_aboutuscontent(){
		echo $this->input->post('about');
        $data['about'] = $this->input->post('about');
				
        $data['vision'] = $this->input->post('vision');
        $data['innovation'] = $this->input->post('innovation');
        $data['business_address'] = $this->input->post('business_address');
        $data['email'] = $this->input->post('email');
        $data['phone_no'] = $this->input->post('phone_no');
        
        $this->db->update('aboutus',$data);
        
	}

    public function insert_company($data)
	{
		$this->db->insert('comapny',$data);
		return true;
	}
    public function get_company(){
		
		//$this->db->where('status','Converted');
		return $admin= $this->db->get('comapny')->result_array();
		
	}
    public function insert_testimonial($data)
	{
		$this->db->insert('testimonials',$data);
		return true;
	}

}
?>