<?php
class Stock_status_c extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		session_start();
	    $this->load->model('Stock_status_m');
	}

   public function stock_status()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$this->load->view('Admin/stock_status');
		$this->load->view('includes/footer');
	}
	public function add_stock_status()
	 {
	 	 $this->load->view('includes/header');
	 	 $this->load->view('includes/sidebar');
		 //echo ($date);die;
		 $data['stock_status']=$this->input->post('stock_status');
		 $this->Stock_status_m->add_stock_status($data);
		 
		 redirect('Stock_status_c/stock_status');
		 $this->load->view('includes/footer');
	 }
	public function view_stock_status()
	 { 
		 $this->load->view('includes/header');
		 $this->load->view('includes/sidebar');
		 $data['get_stock_status']=$this->Stock_status_m->getstatusdata();
		 
		 $this->load->view('Admin/view_stock_status',$data);
		 $this->load->view('includes/footer');
	 }
	 function delete_status($id)
	 {
		 $this->Stock_status_m->del_stock_status($id);
		 redirect('Stock_status_c/view_stock_status');
	 }
	 public function delete_allrecord_status()
    { 
        foreach ($_POST['table_records'] as $id) 
		{
        	$this->Stock_status_m->delete_allstockrec($id);
				
        }
		redirect('Stock_status_c/view_stock_status');	
	}

	 function view_stock_update()
	 {
	 	$this->load->view('includes/header');
	 	$this->load->view('includes/sidebar');
		
		$id=$this->uri->segment(3);
		$data['get_by_id']=$this->Stock_status_m->getdatabyId($id);
		$this->load->view('Admin/edit_stock_status',$data);
		$this->load->view('includes/footer');
	 }
	function update_stock_status()
	{
		$id=$this->uri->segment(3);
		$data['stock_status']=$this->input->post('stock_status');
	
		$this->Stock_status_m->updt_stock_status($data,$id);
		redirect('Stock_status_c/view_stock_status');
	}
	
}
?>