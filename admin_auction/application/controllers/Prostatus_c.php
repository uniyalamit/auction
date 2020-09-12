	<?php
class Prostatus_c extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		session_start();
		$this->load->library('upload');
		$this->load->library('image_lib');
	    $this->load->model('Prostatus_m');
	}
	


    	public function add_product_status()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$this->load->view('Admin/insert_order_status');
		 $this->load->view('includes/footer');
	}
	 function add_status()
	 {
	 	 $this->load->view('includes/header');
	 	  $this->load->view('includes/sidebar');
		 $data['order_status_name']=$this->input->post('status_name');
		 $this->Prostatus_m->addStatus($data);
		 redirect('Prostatus_c/add_product_status');
		  $this->load->view('includes/footer');
	 }
	 function view_status()
	 { 
		  $this->load->view('includes/header');
		   $this->load->view('includes/sidebar');
		 $data['get_status']=$this->Prostatus_m->getdata();
		 $this->load->view('Admin/view_order_status',$data);
		  $this->load->view('includes/footer');
	 }
	 function delete_status()
	 {
		 $id=$this->uri->segment(3);
		 $this->Prostatus_m->dlt_status($id);
		 redirect('Prostatus_c/view_status');
	 }
	 function view_updt()
	 {
	 	 $this->load->view('includes/header');
	 	  $this->load->view('includes/sidebar');
		$id=$this->uri->segment(3);
		$data['get_by_id']=$this->Prostatus_m->getdatabyId($id);
		$this->load->view('Admin/edit_order_status',$data);
		 $this->load->view('includes/footer');
	 }
	function updt_status()
	{
		$id=$this->uri->segment(3);
		$data['order_status_name']=$this->input->post('status_name');
		$this->Prostatus_m->updtStatus($data,$id);
		redirect('Prostatus_c/view_status');

	}
}
?>