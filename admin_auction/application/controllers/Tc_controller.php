<?php
/**
 * 
 */
class Tc_controller extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
$this->load->library('currency_lib'); 
    $this->load->library('upload');
    $this->load->library('image_lib');
	  $this->load->model('Tc_model');
      session_start();
	}
       public function about_tc()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('Admin/tc_add.php');
        $this->load->view('includes/footer');
    }
    public function tc_detail()
    {
        $data1=$this->input->post('Tinformation');
       
        $data2=$this->input->post('editor5');
        
        $tc_info=array(
                  'tc_title'=>$data1,
                  'tc_descripation'=>$data2
                  
                 );
        $this->Tc_model->tc_detail1($tc_info);
        
        return redirect('Tc_controller/tc_view');
    }
    public function tc_view()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $tc['tc']=$this->Tc_model->get_tc();
        /*var_dump($privacy);*/
        $this->load->view('Admin/tc_view',$tc);
        $this->load->view('includes/footer');

    }
    public function tc_update()
    {
        $id=$this->input->post('id');
        $tc_title=$this->input->post('Tinformation');
        $tc_des=$this->input->post('editor1');
        $tc_update=array(
                  'tc_title'=>$tc_title,
                  'tc_descripation'=>$tc_des
                 );
        $this->Tc_model->tc_update1($id,$tc_update);
        
        return redirect('Tc_controller/tc_view');
    }
     public function tc_checking()
    {
    	
        $tc_check=$this->Tc_model->tc_checking1();
        if( $tc_check)
        {
            echo "1";
        }
        else
        {
            echo "0";
        }
    }
}


?>