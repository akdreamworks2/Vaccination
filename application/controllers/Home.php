<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct()
	{
		  /*call CodeIgniter's default Constructor*/
		  parent::__construct();
			$this->load->library('session');
		  /*load database libray manually*/
		  $this->load->database();
		  //$this->load->library('upload', $config);

		 $this->load->model('Home_model');
		// $this->load->model('lead_model');
		  //$this->load->view('admin');
		  $this->load->library('form_validation');
		  //$this->load->library(‘upload’);
			$this->load->helper('url', 'form');
	}
    public function home()
    {
        $result['data']=$this->Home_model->get_homelogo();
        $result['data2']=$this->Home_model->get_homebanner();
        $result['data3']=$this->Home_model->get_hiwheader();
        $result['data4']=$this->Home_model->get_hiw_block1_image();
        $this->load->view('frontheader',$result);
        $this->load->view('home',$result);
        $this->load->view('frontfooter');
    }
    public function about()
    {
        $result['data']=$this->Home_model->get_aboutus();
        $this->load->view('frontheader');
        $this->load->view('about',$result);
        $this->load->view('frontfooter');
    }
    public function pricing()
    {
        //$result['data']=$this->Employee_model->get_employee();
        $this->load->view('frontheader');
        $this->load->view('pricing');
        $this->load->view('frontfooter');
    }
    public function contact()
    {
        //$result['data']=$this->Employee_model->get_employee();
        $this->load->view('frontheader');
        $this->load->view('contact');
        $this->load->view('frontfooter');
    }
    public function signup()
    {
        //$result['data']=$this->Employee_model->get_employee();
        $this->load->view('frontheader');
        $this->load->view('signup');
        $this->load->view('frontfooter');
    }
    public function login()
    {
        //$result['data']=$this->Employee_model->get_employee();
        $this->load->view('frontheader');
        $this->load->view('login');
        $this->load->view('frontfooter');
    }

    public function registeration()
    {
           
                $data['name'] = $this->input->post('name');
                
                $data['email'] = $this->input->post('email');
                $data['phone_no'] = $this->input->post('phone_no');
                
                $data['city'] = $this->input->post('city');
                $data['company_name'] = $this->input->post('company_name');
                $data['no_of_employee'] = $this->input->post('no_of_employee');
                $data['password'] = $this->input->post('password');
               $response = $this->Home_model->registeration($data);
                
                if($response==true)
                {
                //	echo "success";
                $this->session->set_flashdata('success_addemployee', 'Added Successfully');
                    redirect(base_url().'Home/login');
                
                
                }
                else{
                    redirect(base_url().'Home/signup');
                }
        }
}