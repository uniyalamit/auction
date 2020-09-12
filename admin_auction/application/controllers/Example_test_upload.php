<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/kolkata');



class brand_c extends CI_Controller {

public function  __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		session_start();
		//$this->load->library(array('session','form_validation'));
		$this->load->model('brand_m');
	}
	function create_brand()
	{ $this->load->view('includes/header');
	 $this->load->view('includes/sidebar');
		$this->load->view('admin/add_brand');
		 $this->load->view('includes/footer');
	}
				/*create and update brand*/
	function add_brand()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
			$id=$this->uri->segment(3);
			$this->form_validation->set_rules('brand_name','Brand Name','required|is_unique[brand.brand_name]');
			if($this->form_validation->run()==false)
			{
				$this->load->view('admin/add_brand');				
			}
			else
			{	
				$config['upload_path']	='uploads/brands';
				$config['allowed_types'] ='jpg|jpeg|png';
				$config['width']         = 175;
				$config['height']       =150;
				
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if(!$this->upload->do_upload('image'))
				{		
					//echo"not upload some problem.....";die;
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('admin/add_brand',$error);
				}
				else{
					$brand_name=$this->input->post('brand_name');
					if(isset($id))
					{
					$photo=$this->upload->data();
					$image =$photo['raw_name'].$photo['file_ext'];
					$brandAdd=array(
					'brand_name'=>$brand_name,
					'image' =>$image
					);	
					$this->brand_m->edit_brand($brandAdd,$id);
					
					redirect('brand_c/view_brand');
					}
				else{
					$photo=$this->upload->data();
					$image =$photo['raw_name'].$photo['file_ext'];
					$brandAdd=array(
					'brand_name'=>$brand_name,
					'image' =>$image
					);
				$this->brand_m->insert_brand($brandAdd);
					redirect('brand_c/create_brand');
				}	
				}
			}
			 $this->load->view('includes/footer');
	}
			/*create and update brand*/
	
	
			/*for view brand*/
		public function view_brand()
		{ $this->load->view('includes/header');
		 $this->load->view('includes/sidebar');
			$viewB['get_brand']=$this->brand_m->getBrand();
			$this->load->view('admin/view_brand',$viewB);
			 $this->load->view('includes/footer');

		}
			/*for view brand*/
		
		
			/* for delete brands*/
		function delete_brand()
	{
		$id=$this->uri->segment(3);
		$data['get_brand']=$this->brand_m->getBrand();
		$this->brand_m->delete_brand($id);
		redirect('brand_c/view_brand',$data);
		
	}
			/* for delete brands*/

			
			/* for update brands*/

	function view_edit_brand()
	{	 $this->load->view('includes/header');
		 $this->load->view('includes/sidebar');
		$id=$this->uri->segment(3);
		$data['get_brand']=$this->brand_m->get_brand_by_id($id);
		$this->load->view('admin/add_brand',$data);
		 $this->load->view('includes/header');
	}
	
			/* for update brands*/

}
?>