<?php
class Shipping_c extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		session_start();
	    $this->load->model('Shipping_m');
	}
	
   public function add_shipping()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$data['country']=$this->Shipping_m->getCountryList();
		$this->load->view('Admin/add_shipping',$data);
		$this->load->view('includes/footer');
	}
	public function check_shipping_method()
	{
		
		$shipping_method_name=$this->input->post('shipping_method_name');
		$country_id=$this->input->post('country_id');
				
				$result = array
				(
					'shipping_method_name'=>$shipping_method_name,
					'country_id'=>$country_id
					
					
				);		
		$data=$this->Shipping_m->Shipping_method($result);
		$msg=0;
		$count=count($data);
		
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
	public function country()
	{
		$data['country']=$this->Shipping_m->getCountryList();
		//echo '<pre>';
		//print_r ($data);die;
	}
	public function insert_shipping()
	{
		
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		if(!empty($_POST))
		{
			
				$shipping_method_name=$this->input->post('shipping_method_name');
				$country_id=$this->input->post('country_id');
				$shipping_charge=$this->input->post('shipping_charge');
				
				$result = array
				(
					'shipping_method_name'=>$shipping_method_name,
					'country_id'=>$country_id,
					'shipping_charge'=>$shipping_charge
					
					
				);
			
					//echo '<pre>';
					//print_r ($result);die;
				$this->Shipping_m->addshipping($result);
				redirect('Shipping_c/add_shipping');
			
		}
		else
		{
			$data['country']=$this->Shipping_m->getCountryList();
			$this->load->view('Admin/add_shipping',$data);
		}
		$this->load->view('includes/footer');
	}
	function view_shipping()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$data['shipping_rec']=$this->Shipping_m->view_alldata();
		$data['order_rec']=$this->Shipping_m->fetch_order_record();
		//print_r ($data);die;
		$this->load->view('Admin/view_shipping',$data);
		$this->load->view('includes/footer');
	}
	function view_shipping_update($id)
	 {
	 	$this->load->view('includes/header');
	 	$this->load->view('includes/sidebar');
		$id=$this->uri->segment(3);
		$data['get_by_id']=$this->Shipping_m->getdatabyId($id);
		
		$data['country']=$this->Shipping_m->getCountryList();
	
		$this->load->view('Admin/edit_shipping',$data);
		$this->load->view('includes/footer');
	 }
	function update_shipping()
	{
		$id=$this->uri->segment(3);
		$data['shipping_method_name']=$this->input->post('shipping_method_name');
		$data['country_id']=$this->input->post('country_id');
		$data['shipping_charge']=$this->input->post('shipping_charge');
		$this->Shipping_m->updt_shipping($data,$id);
		redirect('Shipping_c/view_shipping');

	}
	function delete_shipping()
	 {
		 $id=$this->uri->segment(3);
		 $this->Shipping_m->del_shipping($id);
		 redirect('Shipping_c/view_shipping');
	 }
	 function delete_allrecord_status()
	 {
		 foreach ($_POST['table_records'] as $id) 
		{
			
        	$this->Shipping_m->delete_allshippingrec($id);
			
			
        }
		redirect('Shipping_c/view_shipping');	
	}
	
	public function shipping_report()
	{
		
			$this->load->view('includes/header');
			$this->load->view('includes/sidebar');
			$data['order_rec']=$this->Shipping_m->fetch_order_record();
			//echo "<pre>";
			//print_r($data);
			$this->load->view('Admin/view_shipping_report',$data);
			$this->load->view('includes/footer');
		
			
	}
	function check_date()
	{
	if(empty($_POST))
		{
			redirect('Shipping_c/shipping_report');
		}
		else
		{
	
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$from_date=$this->input->post('from_date');
		$to_date=$this->input->post('to_date');
		$data['order_rec']=$this->Shipping_m->shipping_date($from_date,$to_date);
		
		$this->load->view('Admin/view_shipping_report',$data);
		$this->load->view('includes/footer');
		
	}
	}
	 
}
?>