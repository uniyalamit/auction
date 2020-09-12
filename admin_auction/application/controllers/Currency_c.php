<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Currency_c extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
        $this->load->model('Currency_m');
		$this->load->helper('url','form');	
		$this->load->library(array('image_lib','javascript',));
		session_start();
    }

	public function view_currency_value()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		
		$this->load->view('Admin/view_currency_value');
		
		$this->load->view('includes/footer');
	}
	public function check_currency_iso()
	{
		
		$currency_iso=$this->input->post('currency_iso');
		//$data['currency_iso']=$currency_iso;
		
		$currency_c=$this->Currency_m->currency_iso($currency_iso);
		$msg=0;
		$count=count($currency_c);
		
		if($count>0)
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
		//
	}
	public function check_currency_name()
	{
		
		$currency_name=$this->input->post('currency_name');
	
		//$data['currency_name']=$currency_name;
		$currency_n=$this->Currency_m->currency_name($currency_name);
		$msg=0;
		$count=count($currency_n);
		
		if($count>0)
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
		
	}
	public function currency_iso($id)
    {
            
      $data['currency_cod']=$this->Currency_m->currency_iso($id);
	  //echo '<pre>';
	  //print_r ($data['currency_cod']);die;
      $this->load->view('Admin/currency_form',$data);
      
    }
	
	public function Currency()
	{ 
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		if(!empty($_POST))
		{
			
				$currency_name=$this->input->post('currency_name');
				$currency_iso=$this->input->post('currency_iso');
							
					$data=array(
					'currency_name'=>$currency_name,
					'currency_iso'=>$currency_iso
					);
				
					$this->Currency_m->currency_detail($data);
					redirect('Currency_c/currency_data');
							
		}	
		else
		{			
			$this->load->view('Admin/currency_form');
		}
		
		$this->load->view('includes/footer');
	}
	public function currency_data()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$data['rec']= $this->Currency_m->fetch_currency_data();
		//echo '<pre>';
		//print_r ($data);die;
		$this->load->view('Admin/view_currency',$data);
		$this->load->view('includes/footer');
	}
	public function delete_currency_rec($id)
	{
		$data['rec']= $this->Currency_m->fetch_currency_data();
		//echo '<pre>';
		//print_r ($data['rec']);die;
		$this->Currency_m->delete_currencyid($id,$data);
		redirect('Currency_c/currency_data');
	}
	public function delete_allrecord_currency()
    { 
	
        foreach ($_POST['table_records'] as $id) 
		{
			
        	$this->Currency_m->delete_allcurrenyrec($id);
			
			
        }
		redirect('Currency_c/currency_data');
	}

	public function fetch_currencyid_rec($id)
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$data['record']=$this->Currency_m->fetch_currencyrecord($id);
		//print_r($data['record']);die;
		$this->load->view('Admin/update_currency',$data);
		$this->load->view('includes/footer');
	}
	public function Update_currencyrec($id)
	{
		if(!empty($_POST))
		{
			
				$currency_name=$this->input->post('currency_name');
				$currency_iso=$this->input->post('currency_iso');
				$data=array(
				'currency_name'=>$currency_name,
				'currency_iso'=>$currency_iso
				);
				
				$this->Currency_m->Update_currencyrec($id,$data);
				redirect('Currency_c/currency_data',$data);
			
		}			
		else
		{
			$this->load->view('Currency_c/update_currency');
		}			
				
	}
	public function currency_value()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$data['rec']= $this->Currency_m->value_currency();
		$data['other']= $this->Currency_m->value_other();
		$data['value_id']= $this->Currency_m->check_all_id();
		//echo '<pre>';
		//print_r ($data);die;
		$this->load->view('Admin/view_currency_value',$data);
		$this->load->view('includes/footer');
	}
	
	public function insert_currency_value()
	{
		if($_POST)
		{
		    $id= $this->Currency_m->check_all_id();
			//echo '<pre>';
			//print_r ($id);die;
			$default_currency_id=$this->input->post('default_currency_id');
			$related_currency_id=$this->input->post('related_currency_id');
			$currency_value=$this->input->post('currency_value');
			
			$data=array(
			'default_currency_id'=>$default_currency_id,
			'related_currency_id'=>$related_currency_id,
			'currency_value'=>$currency_value
			);
			//echo '<pre>';
			//print_r ($data);die;
			$this->Currency_m->insert_value($data,$id);
			redirect('Currency_c/currency_value');
		}
		else
		{
			$this->load->view('Admin/currency_value');
		}
			
	}
	function delete_currency_value($id)
	{
		//echo '<pre>';
		//print_r ($id);die;
		$this->Currency_m->delete_value($id);
		redirect('Currency_c/currency_value');
	}
	public function delete_all_currencyvalue()
    { 
	
        foreach ($_POST['table_value'] as $id) 
		{ 
			echo '<pre>';
			print_r ($id);die;
        	$this->Currency_m->delete_allcurrenyvalue($id);
			
			
        }
		redirect('Currency_c/currency_value');
	}
	
	
}
?>