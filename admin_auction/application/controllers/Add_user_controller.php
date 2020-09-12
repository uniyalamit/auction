<?php
class Add_user_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	  $this->load->model('Add_user_model');
	  session_start();
    
	}
	public function user_add()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		 $user['user']=$this->Add_user_model->get_store();
        /*print_r($user);*/
        $this->load->view('Admin/add_user_group',$user);
        $this->load->view('includes/footer');

	 	
	}
	function group_update()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$group=$this->input->post('group');
		 
		foreach ($_POST['all'] as $id) {
        	$this->Add_user_model->group_insert($id,$group);
        }
        
           return redirect('Add_user_controller/user_add');
           
	}

	
}
?>