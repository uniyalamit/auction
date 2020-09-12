<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/kolkata');



class Option_c extends CI_Controller {

public function  __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		session_start();
		//$this->load->library(array('session','form_validation'));
		$this->load->model('Option_m');
	}
	public function view_option()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$data['get_option']=$this->Option_m->get_option_name();
		$this->load->view('admin/options',$data);
		 $this->load->view('includes/footer');
	}
	
	public function insert_option()
	{
				 $this->load->view('includes/header');
				  $this->load->view('includes/sidebar');
				$config['upload_path']	='uploads/option_file';
				$config['allowed_types'] ='*';
				$config['max_size']		 =1024;
				$config['width']         = 175;
				$config['height']       =150;
				
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('image'))
				{		
					$radio_type=$this->input->post('radio');		
					$photo=$this->upload->data();
					$image =$photo['raw_name'].$photo['file_ext'];
					$data=array(
					'option_id'=>$radio_type,
					'option_val_name' =>$image
					);
					$this->Option_m->insert_optn($data);
					redirect('Option_c/view_option');
				}
				else{
					$aa=array('r1','date_file','drp_d','check_b');
					$data['option_id']=$this->input->post('radio');
					$data['option_val_name']=implode($this->input->post($aa));
					$this->Option_m->insert_optn($data);
					redirect('Option_c/view_option');
		
	}	
	 $this->load->view('includes/footer');
	}
	public function get_val_tbl()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		//print_r($id=$this->uri->segment(3));die;
		if($id=$this->uri->segment(3))
		{
			$this->Option_m->delete_tbl_val($id);
		}
		$data['getdata']=$this->Option_m->view_val_tbl();
		$this->load->view('admin/view_tbl_val_option',$data);
		 $this->load->view('includes/footer');
	}
	public function view_edit_option()
	{	$this->load->view('includes/header');
		 $this->load->view('includes/sidebar');
		$id=$this->uri->segment(3);
		$getData['get_edit']=$this->Option_m->view_tbl_val_by_id($id);
		$this->load->view('admin/view_edit_option',$getData);
		 $this->load->view('includes/footer');
	}
	public function edit_option()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
			$id=$this->uri->segment(3);
			$config['upload_path']	='uploads/option_file';
				$config['allowed_types'] ='*';
				$config['max_size']		 =1024;
				$config['width']         = 175;
				$config['height']       =150;
				
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('image'))
				{		
					$radio_type=$this->input->post('radio');		
					$photo=$this->upload->data();
					$image =$photo['raw_name'].$photo['file_ext'];
					$data=array(
					'option_id'=>$radio_type,
					'option_val_name' =>$image
					);
					$this->Option_m->edit_option_val($data,$id);
					redirect('Option_c/get_val_tbl');
				}
				else{
					$aa=array('r1','date_file','drp_d','check_b');
					$data['option_id']=$this->input->post('radio');
					$data['option_val_name']=implode($this->input->post($aa));
					$this->Option_m->edit_option_val($data,$id);
					redirect('Option_c/get_val_tbl');
		
	}
	 $this->load->view('includes/footer');
	}
}
	?>