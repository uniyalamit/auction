<?php 

/**
 * 
 */
class Most_view_c extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->model('Most_view_m');
	}

	function view_product()
	{
	   $this->load->view('includes/header');
	   $this->load->view('includes/sidebar');
	   $data['view']=$this->Most_view_m->most_view();
	   //print_r($data);
	   $this->load->view('Admin/most_view_product_report',$data);
	   $this->load->view('includes/footer');	
    }
}


?>