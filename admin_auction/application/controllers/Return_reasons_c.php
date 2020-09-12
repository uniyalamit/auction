<?php
class Return_reasons_c extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		session_start();
	    $this->load->model('Return_reasons_m');
	}

   public function return_reasons()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$this->load->view('Admin/return_reasons');
		$this->load->view('includes/footer');
	}
	public function add_return_reasons()
	 {
	 	 $this->load->view('includes/header');
	 	 $this->load->view('includes/sidebar');
		 //echo ($date);die;
		 $data['return_reasons']=$this->input->post('return_reasons');
		 $this->Return_reasons_m->add_return_reasons($data);
		 
		 redirect('Return_reasons_c/return_reasons');
		 $this->load->view('includes/footer');
	 }
	public function view_return_reasons()
	 { 
		 $this->load->view('includes/header');
		 $this->load->view('includes/sidebar');
		 $data['get_return_reasons']=$this->Return_reasons_m->getreasonsdata();
		 
		 $this->load->view('Admin/view_return_reasons',$data);
		 $this->load->view('includes/footer');
	 }
	 function delete_reasons($id)
	 {
		 $this->Return_reasons_m->del_return_reasons($id);
		 redirect('Return_reasons_c/view_return_reasons');
	 }
	 public function delete_allrecord_reasons()
    { 
        foreach ($_POST['table_records'] as $id) 
		{
			
        	$this->Return_reasons_m->delete_allreasonsrec($id);
			
			
        }
	redirect('Return_reasons_c/view_return_reasons');	
	}

	 function view_return_update($id)
	 {
	 	$this->load->view('includes/header');
	 	$this->load->view('includes/sidebar');
		
		$id=$this->uri->segment(3);
		$data['get_by_id']=$this->Return_reasons_m->getdatabyId($id);
		$this->load->view('Admin/edit_return_reasons',$data);
		$this->load->view('includes/footer');
	 }
	function update_return_reasons()
	{
		
		$id=$this->uri->segment(3);
		$data['return_reasons']=$this->input->post('return_reasons');
		$this->Return_reasons_m->updt_return_reasons($data,$id);
		redirect('Return_reasons_c/view_return_reasons');
	}
}
?>