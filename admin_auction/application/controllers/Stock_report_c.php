<?php
class Stock_report_c extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		session_start();
	    $this->load->model('Stock_report_m');
	}
	public function stock_report()
	{
		
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$data['product_name']=$this->Stock_report_m->fetch_prod_name();
		//$data['minimum_stock_qty']=$this->Stock_report_m->fetch_prod_qty();
		//echo "<pre>";
		//print_r ($data);die;
		$this->load->view('Admin/view_stock_report',$data);
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