<?php
class Module_c extends CI_Controller
{
	
	public function __construct()
	{session_start();
		parent::__construct();
		$this->load->helper(array('url','form'));

		$this->load->library('upload');
		$this->load->library('image_lib');
	    $this->load->model('Module_m');
	}
	public function user_module()
	{	
		 $this->load->view('includes/header');
		 	 $this->load->view('includes/sidebar');
		 $id=$this->uri->segment(3);
		$data['view_module_id']=$this->Module_m->view_module_by_id($id);
		$data['rows']=$this->Module_m->get_user();
		$this->load->view('Admin/user_module',$data);
			 $this->load->view('includes/footer');
	}
	function add_module()

	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$id=$this->uri->segment(3);

		$data['group_id']=$this->input->post('select_group');
		$data['module_name']=implode(',',$this->input->post('modules'));
		if($id)
		{
			$this->Module_m->editModule($data,$id);
		
		redirect('Module_c/view_module');
		}
		else
		{
		$this->Module_m->add_module($data);
	
		}
		redirect('Module_c/user_module');
		 $this->load->view('includes/footer');
	}
	public function view_module()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$data['get_module']=$this->Module_m->get_all_module();
		$this->load->view('Admin/view_module',$data);
		 $this->load->view('includes/footer');
	}
	public function module_updt()
	{ $this->load->view('includes/header');
	 $this->load->view('includes/sidebar');
		$id=$this->uri->segment(3);
		$data['rows']=$this->Module_m->get_user();
		$data['view_module_id']=$this->Module_m->view_module_by_id($id);
		$this->load->view('Admin/user_module',$data);
		 $this->load->view('includes/footer');
	}
	public function delete_module()
	{
		$id=$this->uri->segment(3);
		$this->Module_m->deleteModule($id);
		
		redirect('Module_c/view_module');
	}
	}
	?>