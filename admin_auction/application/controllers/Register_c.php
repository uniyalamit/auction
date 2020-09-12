<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/kolkata');


class Register_c extends CI_Controller {

public function  __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		
		$this->load->model('Register_m');
		session_start();
	}
	function register_user()
	{
			$this->load->view('includes/header');
			$this->load->view('includes/sidebar');
			$data['getgroup']=$this->Register_m->view_group();
			
			$data['country']=$this->Register_m->getCountryList();
			//echo '<pre>';
			//print_r ($data);die;
			$this->load->view('Admin/register_user',$data);
			
			$this->load->view('includes/footer');
	}
	public function create_user()
	{
		
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		if(!empty($_POST))
		{
			
				$username=$this->input->post('username');
				$email=$this->input->post('email');
				$news_letter_subscription=$this->input->post('news_letter_subscription');
				$country=$this->input->post('country');
				//$countryName= $this->Currency_m->getName('countries',array('id'=>$country));
				$state=$this->input->post('state');
				//$stateName = $this->Currency_m->getName('states',array('id'=>$state));
				$city=$this->input->post('city');
				$street_address=$this->input->post('street_address');
				$post_address=$this->input->post('post_address');
				$password=$this->input->post('password');
				$phone=$this->input->post('phone');
				$select_group=$this->input->post('select_group');
				$dt=date('y/m/d h:i:s');
				$result = array
				(
					'group_id'=>$select_group,
					'username'=>$username,
					'email'=>$email,
					'news_letter_subscription'=>$news_letter_subscription,
					'country'=>$country,
					'state'=>$state,
					'city'=>$city,
					'street_address'=>$street_address,
					'post_address'=>$post_address,
					'password'=>$password,
					'phone'=>$phone,
					'created'=>$dt
				);
			
					//echo '<pre>';
					//print_r ($result);die;
				$this->Register_m->add_user($result);
				redirect('Register_c/register_user');
			
		}
		else
		{
			//echo"post is not reciving....................";die;
			$data['country']=$this->Register_m->getCountryList();
			$data['getgroup']=$this->Register_m->view_group();
			$this->load->view('Admin/register_user',$data);
		}
		$this->load->view('includes/footer');
	}
	public function getallstate($id)
	 {
		  $data=$this->Register_m->getstateRecored($id);
		  foreach($data as $row)
		  {
		  echo "<option value='$row->id'>$row->name</option>";
		  }
	 }
	public function getallcity($id)
	 {
		  $data=$this->Register_m->getcityRecored($id);
		  foreach($data as $row)
		  {
		  echo "<option value='$row->name'>$row->name</option>";
		  }
	 }
	function view_user()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$data['get_user']=$this->Register_m->get_all_user();
		//echo '<pre>';
		//print_r ($data);die;
		$this->load->view('Admin/view_users',$data);
		$this->load->view('includes/footer');
	}
	function delete_user()
	{
		$id=$this->uri->segment(3);
		$data['get_user']=$this->Register_m->get_all_user();
		$this->Register_m->delete_users($id);
		redirect('Register_c/view_user',$data);
		
	}
	function show_edit_user()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$id=$this->uri->segment(3);
		$data['show_user']=$this->Register_m->get_user_by_id($id);
		$data['country']=$this->Register_m->getCountryList();
		$data['state']=$this->Register_m->getstate();
		$data['getgroup']=$this->Register_m->view_group();
		//print_r($data);die;
		$this->load->view('Admin/edit_user',$data);
		$this->load->view('includes/footer');
	}
	function edit_user($id)
	{
		
				$username=$this->input->post('username');
				$email=$this->input->post('email');
				$news_letter_subscription=$this->input->post('news_letter_subscription');
				echo $country=$this->input->post('country');
				//$countryName= $this->Admin_model->getName('countries',array('id'=>$country));
				echo $state=$this->input->post('state');
				//$stateName = $this->Admin_model->getName('states',array('id'=>$state));
				$city=$this->input->post('city');
				$street_address=$this->input->post('street_address');
				$post_address=$this->input->post('post_address');
				$password=$this->input->post('password');
				$phone=$this->input->post('phone');
				$select_group=$this->input->post('select_group');
				$dt=date('y/m/d h:i:s');
				$result = array
				(
					'group_id'=>$select_group,
					'username'=>$username,
					'email'=>$email,
					'news_letter_subscription'=>$news_letter_subscription,
					'country'=>$country,
					'state'=>$state,
					'city'=>$city,
					'street_address'=>$street_address,
					'post_address'=>$post_address,
					'password'=>$password,
					'phone'=>$phone,
					'created'=>$dt
				);
			
					//echo '<pre>';
					//print_r ($result);die;
				
			 $this->Register_m->editUser($id,$result);
			 //$this->load->view('Admin/view_user');
			 redirect('Register_c/view_user');
			
	}
	public function unq_email($a)
	{
		$email=$this->Register_m->get_email($a);
		$b=count($email);
		if($b > 0)
		{
			echo " <b style='color:red;'>Email is already exist</b> ";
		}
	}
	
}
?>