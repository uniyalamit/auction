<?php
	if(!defined('BASEPATH'))
		exit('No direct script access allowed');

	class Newsletter extends CI_Controller
	{

		public function __construct()
		{
			session_start();
			parent::__construct();
		}

        function index(){
        	 $this->load->view('includes/header');
        	  $this->load->view('includes/sidebar');
		    $this->load->view('Admin/newsletter_form');
		     $this->load->view('includes/sidebar');
        }
		public function add_new(){
            $email = $this->input->post("email");
            header('Content-Type: application/x-json; charset=utf-8');
            $this->db->set('email',"$email");
            $this->db->insert('ci_newsletter');
            $insert = $this->db->insert_id();
            echo(json_encode($insert));
        }


	}