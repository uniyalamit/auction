<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	date_default_timezone_set('Asia/kolkata');
	$dt=date('y/m/d h:i:s');
	class login_c extends CI_Controller {
	public function  __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		
		$this->load->library(array('form_validation'));
		$this->load->model('login_m');
		session_start();
	}
	public function index()
	{
		$this->load->view('Admin/login');
	}
	
	public function login()
	{
		
		if($this->input->post())
		{
			$this->form_validation->set_rules('email','email','required');
			$this->form_validation->set_rules('password','password','required');
			//echo " heloo "; die;
			if($this->form_validation->run()==false)
			{echo"";die;
				$this->load->view('login');
			}else
			{
			
				$email=$this->input->post('email');
				$password=$this->input->post('password');
				
			if($data=$this->login_m->get_lg_data($email,$password))
			{
				/*$data1=array(
						'group_id' =>$data->group_id,
						'username' =>$data->username,
						'email' =>$data->email,
						'phone' =>$data->phone,
						'status' =>$data->status,
						'signup' => true
					);
					$this->session->set_userdata($data1);*/
					$_SESSION['username']=$data->username;
					$_SESSION['email']=$data->email;
					$_SESSION['group_id']=$data->group_id;
					$_SESSION['phone']=$data->phone;
					$_SESSION['status']=$data->status;
					redirect('category_c');
			}
			else
			{
				
				$this->data['err']="Email and Password not match ";
				$this->load->view('login',$this->data);
			}
			}
		}
		else
		{
			//echo "hi "; die;
			$this->load->view('login');
		}
		
	}
	
		public function logout()
			{
				session_destroy();
				
				/*$this->session->unset_userdata('email');
				$this->session->unset_userdata('username');
				$this->session->unset_userdata('signup');
				$this->session->sess_destroy();*/
				redirect('login_c/login');
			}
	}
	?>