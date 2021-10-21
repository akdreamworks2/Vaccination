<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function __construct()
	{
		  /*call CodeIgniter's default Constructor*/
		  parent::__construct();
			$this->load->library('session');
		  /*load database libray manually*/
		  $this->load->database();
		  //$this->load->library('upload', $config);

		  /*load Model*/
		 $this->load->model('Employee_model');
		// $this->load->model('lead_model');
		  //$this->load->view('admin');
		  $this->load->library('form_validation');
		  //$this->load->library(‘upload’);
			$this->load->helper('url', 'form');
	}
    public function employeelist()
    {
        $result['data']=$this->Employee_model->get_employee();
        $this->load->view('header.php');
        $this->load->view('employeelist',$result);
    }

    public function companylist()
    {
        $result['data']=$this->Employee_model->get_company();
        $this->load->view('header.php');
        $this->load->view('companylist',$result);
    }
	public function aboutuscontent()
    {
        $result['data']=$this->Employee_model->get_aboutuscontent();
        $this->load->view('header.php');
        $this->load->view('aboutuscontent',$result);
    }
	public function update_aboutuscontent()
    {
		$this->Employee_model->update_aboutuscontent();
		$this->session->set_flashdata('update_success', 'Updated Successfully');
		redirect(base_url().'Admin/aboutuscontent');
    }

    public function insert_employee()
	{
		
			$data['name'] = $this->input->post('fullName');
			
			$data['email_id'] = $this->input->post('email');
			$data['phone_no'] = $this->input->post('phone');
			
			$data['department'] = $this->input->post('department');
			$data['role'] = $this->input->post('role');
			$data['status'] = $this->input->post('status');
			//$data['image'] = $this->input->post('image');
			//	$data['specialty'] = $this->input->post('kyc');
			//$data['image'] = $this->input->post('image', TRUE);
            //$data['pic_desc'] = $this->input->post('pic_desc', TRUE);
			 $config['upload_path'] = './Images';
			 $config['allowed_types'] = 'jpg|png|jpeg';
			  $this->load->library('upload', $config);
			  if(!$this->upload->do_upload('image')){
				  echo $this->upload->display_errors();
			  }
			  else{
			 $upload_data = $this->upload->data();
			  }
			  $data['image']=$upload_data['file_name'];
			  
			$response = $this->Employee_model->insert_employee($data);
			
			if($response==true)
			{
			//	echo "success";
			$this->session->set_flashdata('success_addemployee', 'Added Successfully');
                redirect(base_url().'index.php/Employee/employeelist');
			
			
			}
			else{
				redirect(base_url().'Doctor/add_doctor');
			}
	}

    public function insert_company()
	{
		
			$data['name'] = $this->input->post('name');
			
			$data['city'] = $this->input->post('city');
			$data['phone_no'] = $this->input->post('phone');
			
			$data['membership'] = $this->input->post('membership');
		//	$data['role'] = $this->input->post('role');
			$data['status'] = $this->input->post('status');
			//$data['image'] = $this->input->post('image');
			//	$data['specialty'] = $this->input->post('kyc');
			//$data['image'] = $this->input->post('image', TRUE);
            //$data['pic_desc'] = $this->input->post('pic_desc', TRUE);
            $config['upload_path'] = './Images';
            $config['allowed_types'] = 'jpg|png|jpeg';
             $this->load->library('upload', $config);
             if(!$this->upload->do_upload('image')){
                 echo $this->upload->display_errors();
             }
             else{
            $upload_data = $this->upload->data();
             }
             $data['image']=$upload_data['file_name'];
			$response = $this->Employee_model->insert_company($data);
			
			if($response==true)
			{
			//	echo "success";
			$this->session->set_flashdata('success_addemployee', 'Added Successfully');
                redirect(base_url().'index.php/Employee/companylist');
			
			
			}
			else{
				redirect(base_url().'Doctor/add_doctor');
			}
	}
    public function testimonials()
    {
        //$result['data']=$this->Employee_model->get_employee();
        $this->load->view('header.php');
        $this->load->view('testimonials');
    }

    public function insert_testimonial()
	{
		
			$data['name'] = $this->input->post('fullName');
			
			$data['profession'] = $this->input->post('profession');
			$data['review'] = $this->input->post('review');
		
			
			//$data['image'] = $this->input->post('image');
			//	$data['specialty'] = $this->input->post('kyc');
			//$data['image'] = $this->input->post('image', TRUE);
            //$data['pic_desc'] = $this->input->post('pic_desc', TRUE);
			
			$response = $this->Employee_model->insert_testimonial($data);
			
			if($response==true)
			{
			//	echo "success";
			$this->session->set_flashdata('success_addemployee', 'Added Successfully');
                redirect(base_url().'index.php/Employee/testimonials');
			
			
			}
			else{
				redirect(base_url().'Doctor/add_doctor');
			}
	}
}