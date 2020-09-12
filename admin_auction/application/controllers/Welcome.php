<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function  __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		session_start();
		//$this->load->library(array('session','form_validation'));
		$this->load->model('Welcome_model');
	}

	function get_tax_report_date()
	{
		if (empty($_POST)) {
			redirect('Welcome/get_tax_report_data');
		}
		else
		{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$from= $this->input->post('from');
		$to= $this->input->post('to');
		
	    $tax_data['tax']=$this->Welcome_model->get_report_data($from,$to);
	    $this->load->view('Admin/tax_report',$tax_data);
	     $this->load->view('includes/footer');
	 }
	     // echo "<pre>";
	     // print_r($data);
		
	}
	function get_tax_report_data()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		  $tax_data['tax']=$this->Welcome_model->get_tax_report();

		  $this->load->view('Admin/tax_report',$tax_data);
		  $this->load->view('includes/footer');
	}
	function add_tax_class()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$this->load->view('Admin/add_cls');
		 $this->load->view('includes/footer');
	}
	public function add_cls()
		{
			 $this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
		if(!empty($_POST))
		{			
		$taxt_name=$this->input->post('add_text_name');
		$taxt_class=$this->input->post('add_text_class');
		$data=array(
		'tax_name'=>$taxt_name,
		'tax_class'=>$taxt_class
		
		);
			$this->Welcome_model->add_Taxt_Calss($data);
			$data["get_cls"]=$this->Welcome_model->get_all_Tax_persent();
			redirect('Welcome/add_tax_class',$data);	
		}
		
		else
		{
			$this->load->view('Admin/add_cls');
		}
		 $this->load->view('includes/footer');
		}
	function taxPersent()
		{
			 $this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
		$data['show_class']=$this->Welcome_model->get_all_class();
		$this->load->view('Admin/tax_persent',$data);
		 $this->load->view('includes/footer');
		}
	function taxt_persent()
		{
			 $this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
			
			$data['show_class']=$this->Welcome_model->get_all_class();
			
			$select_class=$this->input->post('select_class');
			$add_tax=$this->input->post('add_tax_persent');
			$addData=array(
				'tax_id'=>$select_class,
				'persent'=>$add_tax
			);
			$this->Welcome_model->add_tax_persent($addData);
			redirect('Welcome/taxPersent',$data);
			 $this->load->view('includes/footer');
			
		}
	function delete_cls()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$id=$this->uri->segment(3);
		$data["get_cls"]=$this->Welcome_model->get_all_Tax_persent();
		$this->Welcome_model->delete_class($id);
		redirect('Welcome/view_tax_class',$data);	
		 $this->load->view('includes/footer');
	}
	function delete_persent()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$id=$this->uri->segment(3);
		$data['show_tax_class']=$this->Welcome_model->get_persents();
		$this->Welcome_model->delete_per($id);
		redirect('Welcome/view_tax_persent',$data);
		 $this->load->view('includes/footer');
	}
	function search()
	{
		$s=$_POST['id'];
		$data=$this->Welcome_model->search_data($s);
		foreach ($data as $key) {
		    echo "<option>".$key->tax_name."</option>";
		}
		/*if($data=$this->Welcome_model->search_data($s))
		{
		print_r($data);
	    }
	    else
	    {
	    	echo "not";
	    }*/
	}
	function show_class_edit()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$id=$this->uri->segment(3);
		$data['getData']=$this->Welcome_model->get_class_by_id($id);
		$this->load->view('admin/edit_tax_class',$data);
		 $this->load->view('includes/footer');
	}
	function edit_tax_class()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$id=$this->uri->segment(3);
		$taxt_name=$this->input->post('edit_text_name');
		$taxt_class=$this->input->post('edit_text_class');
		$data=array(
		'tax_name'=>$taxt_name,
		'tax_class'=>$taxt_class
		
		);
		$this->Welcome_model->edit_Taxt_Calss($data,$id);
		redirect('Welcome/view_tax_class');
		 $this->load->view('includes/footer');
	}
	function show_persent_edit()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$id=$this->uri->segment(3);
		$data['showdata']=$this->Welcome_model->get_per_by_id($id);
		$this->load->view('admin/edit_persent',$data);
		 $this->load->view('includes/footer');
	}
	function edit_persent()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$id=$this->uri->segment(3);
		$add_tax=$this->input->post('edit_tax_persent');
		$addData=array(
		'persent'=>$add_tax		);
		$this->Welcome_model->edit_persent($addData,$id);
		redirect('Welcome/view_tax_persent');
	 $this->load->view('includes/footer');
	}
	function view_tax_class()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$data["get_cls"]=$this->Welcome_model->get_all_Tax_persent();
		$this->load->view('admin/view_tax_class',$data);
	 $this->load->view('includes/footer');
	}
	function view_tax_persent()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$data['show_tax_class']=$this->Welcome_model->get_persents();
		$this->load->view('admin/view_tax_persent',$data);
	 $this->load->view('includes/footer');
	}
	function tax_report()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		if(!empty($_POST))
		{
		
		$keyword=$this->input->post('search');
		$data['rest'] = $this->Welcome_model->lookup($keyword);
		
		}
		else{
			$keyword=$this->input->post('search');
			$data['res'] = $this->Welcome_model->lookup($keyword);


			
		}
			
		//print_r($data);die;
				$this->load->view('Admin/tax_report',$data);
		$this->load->view('includes/footer');
		//foreach($data as $r)
		//{
			//print_r($r);die;
	//		echo "<li value='$r'>$r</li>";
		//}

	}/*
	 
	 public function lookup(){  
        // process posted form data  
        $keyword = $this->input->post('term');  
        $data['response'] = 'false'; //Set default response  
        $query = $this->Welcome_model->lookup($keyword); //Search DB  
        if( ! empty($query) )  
        {  
            $data['response'] = 'true'; //Set response  
            $data['message'] = array(); //Create array  
            foreach( $query as $row )  
            {  
                $data['message'][] = array(   
                                        'id'=>$row->id,  
                                        'value' => $row->tax_name,  
                                        
                                     );  //Add a row to array  
            }  
        }  
        if('IS_AJAX')  
        {  
            echo json_encode($data); //echo json string if ajax request  
        }  
        else 
        {  
            $this->load->view('Admin/autosuggetion',$data); //Load html view of search results  
        }  
    }  

*/
 
	 
	 
}
?>
