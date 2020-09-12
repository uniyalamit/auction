<?php

/**
 * 
 */
class Review_c extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
      
       $this->load->model('Review_m');
       session_start();
	}
	function review_view()
	{
		$this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $data['rec']=$this->Review_m->get_product_review();
			//$data1['details']=$this->Product_m->get_details();
			//$data2['rec']=array_merge($data['rec'],$data1['details']);
			//echo "<pre>";
			//print_r($data);die;
		$this->load->view('Admin/view_review',$data);

        $this->load->view('includes/footer');
	}
	function selected_product_review($id)
	{

		$this->load->view('includes/header');
        $this->load->view('includes/sidebar');
		$rec['r']=$this->Review_m->select_product_update($id);
		$this->load->view('Admin/review_update',$rec);
        $this->load->view('includes/footer');
		 
	}
	function selected_review_delete($id)
	{
    
		$this->Review_m->review_delete($id);  
		return redirect('review_c/review_view');
	}
	function multi_review_delete()
	{

          
        foreach ($_POST['table_records'] as $id) {

        	$this->Review_m->review_delete($id);
        }
       
          
          return redirect('review_c/review_view');
	}
	function update()
	{
		//echo "<pre>";
		//print_r($_POST);
		//die();
		$id=$this->input->post('id');
		
		$date=$this->input->post('date');
		$status=$this->input->post('status');
		$rating=$this->input->post('review');
		$textreview=$this->input->post('textreview');

            	 
            	 $review_data=array(
                  'rating'=>$rating,
                  'product_status'=>$status,
                  'comment_review'=>$textreview,
                  'date_add'=>$date,
            	 );
            	// print_r($review_data);
            	 //die();
            	 if($this->Review_m->update_review($review_data,$id))
            	 {
            	 	return redirect('review_c/review_view');
            	 }
            	 else
            	 {
            	 	return redirect('review_c/review_view');
            	 }
	}
	
}

?>