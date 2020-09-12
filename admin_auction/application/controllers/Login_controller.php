<?php
/**
 * 
 */
class Login_controller extends CI_Controller
{
	
	public function  __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		
		$this->load->library(array('form_validation'));
		$this->load->model('Login_m');
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
				$this->load->view('Admin/login');
			}else
			{
			
				$email=$this->input->post('email');
				$password=$this->input->post('password');
				
			if($data=$this->Login_m->get_lg_data($email,$password))
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
				$this->load->view('Admin/login',$this->data);
			}
			}
		}
		else
		{
			//echo "hi "; die;
			$this->load->view('Admin/login');
		}
		
	}
	
		public function logout()
			{
				session_destroy();
				
				/*$this->session->unset_userdata('email');
				$this->session->unset_userdata('username');
				$this->session->unset_userdata('signup');
				$this->session->sess_destroy();*/
				redirect('Login_controller/login');
			}
}

?>