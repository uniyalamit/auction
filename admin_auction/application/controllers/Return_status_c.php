<?php
class Return_status_c extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		session_start();
		$this->load->library('upload');
		$this->load->library('image_lib');
	    $this->load->model('Return_status_m');
	}

   public function return_status()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$this->load->view('Admin/return_status');
		$this->load->view('includes/footer');
	}
	public function add_return_status()
	 {
	 	 $this->load->view('includes/header');
	 	 $this->load->view('includes/sidebar');
		
		 //echo ($date);die;
		 $data['return_status_name']=$this->input->post('return_status_name');
		 $date['dat']=$this->input->post('added_date');
		 $this->Return_status_m->add_return_Status($data);
		 
		 redirect('Return_status_c/return_status');
		 $this->load->view('includes/footer');
	 }
	public function view_return_status()
	 { 
		 $this->load->view('includes/header');
		 $this->load->view('includes/sidebar');
		 $data['get_return_status']=$this->Return_status_m->getreturndata();
		 
		 $this->load->view('Admin/view_return_status',$data);
		 $this->load->view('includes/footer');
	 }
	 function delete_status()
	 {
		 $id=$this->uri->segment(3);
		 $this->Return_status_m->del_return_status($id);
		 redirect('Return_status_c/view_return_status');
	 }
	 function view_return_update()
	 {
	 	$this->load->view('includes/header');
	 	$this->load->view('includes/sidebar');
		$id=$this->uri->segment(3);
		$data['get_by_id']=$this->Return_status_m->getdatabyId($id);
	
		$this->load->view('Admin/edit_return_status',$data);
		$this->load->view('includes/footer');
	 }
	function update_return_status()
	{
		$id=$this->uri->segment(3);
		$data['return_status_name']=$this->input->post('return_status_name');
		$this->Return_status_m->updt_return_status($data,$id);
		redirect('Return_status_c/view_return_status');

	}
}
?>