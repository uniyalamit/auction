<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class FeturPro_c extends CI_Controller {

public function  __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		session_start();
		//$this->load->library(array('session','form_validation'));
		$this->load->model('FeturPro_m');
	}
	
	public function view_get_feturPro()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$data['getData']=$this->FeturPro_m->getAutoData();
		$data['getCom']=$this->FeturPro_m->getbrand_for_id();
		$this->load->view('admin/feture_product',$data);
		 $this->load->view('includes/footer');
	}
	public function get_auto_data()
	{ $this->load->view('includes/header');
	 $this->load->view('includes/sidebar');
		$data['getData']=$this->FeturPro_m->getAutoData();
		//print_r($data);die;
		redirect('FeturPro_c/view_get_feturPro',$data);
		 $this->load->view('includes/footer');
	}
	public function insert_featurePro()
	{	 $this->load->view('includes/header');
		 $this->load->view('includes/sidebar');
		$data['getCom']=$this->FeturPro_m->getbrand_for_id();
		$this->load->view('admin/add_feature_product',$data);
		 $this->load->view('includes/footer');
	}
	public function add_featurePro()
	{
		$data['product_id']=$this->input->post('select_cat');
		$data['feature_product']=$this->input->post('featurePro');
		$this->FeturPro_m->addfeature_pro($data);
		redirect('FeturPro_c/insert_featurePro');
	}
	function get_featurePro()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		if($id=$this->uri->segment(3))
		{
			$this->FeturPro_m->delete_feature_prod($id);
		}
		$data['getAllData']=$this->FeturPro_m->getAutoData();
		$this->load->view('admin/view_feature_product',$data);
		 $this->load->view('includes/footer');
	
	}
	public function edit_featurePro ()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$id=$this->uri->segment(3);
		$data['getCom']=$this->FeturPro_m->getbrand_for_id();
		$data['viewdata']=$this->FeturPro_m->view_pro_by_id($id);
		//print_r($data['viewdata']);die;
		$this->load->view('admin/edit_feature_product',$data);
		 $this->load->view('includes/footer');
	}
	function updt_feature_project()
	{	
		
		$data['product_id']=$this->input->post('select_cat');
		$data['feature_product']=$this->input->post('featurePro');
		$id=$this->uri->segment(3);
		$this->FeturPro_m->editfeature_pro($data,$id);	
		redirect('FeturPro_c/get_featurePro');
		
	}
}
?>