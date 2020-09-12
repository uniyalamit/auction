<?php
	if(!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Newsletter_c extends CI_Controller
	{

		public function __construct()
		{
			session_start();
			parent::__construct();
			$this->load->model('Newsletter_m');
		}

		function view_newsletter()
		{
            $this->load->view('includes/header');
		    $this->load->view('includes/sidebar');
		    $data['email']=$this->Newsletter_m->get_email();
		   // print_r($data);die();
		    $this->load->view('Admin/newsletter_view',$data);
		    $this->load->view('includes/footer');
		}
		function checkstatus()
		{
			alert('jii');
		}
		function check($id)
		{
		  $status=1;
		  $this->Newsletter_m->checkstatus1($id,$status);
		  redirect('Newsletter_c/view_newsletter');
		  
		 // echo $status;
		}
		function checks($id)
		{
			 $status=0;
		  $this->Newsletter_m->checkstatus1($id,$status);
		  redirect('Newsletter_c/view_newsletter');
		}

	}

?>