<?php

/**
 * 
 */
class Returnp_controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
$this->load->library('currency_lib'); 
    $this->load->library('upload');
    $this->load->library('image_lib');
	  $this->load->model('Returnp_model');
      session_start();
	}

	 public function about_rp()
    {
         $this->load->view('includes/header');
        $this->load->view('includes/sidebar');        
        $this->load->view('Admin/rp_add.php');
         $this->load->view('includes/footer');
    }
     public function rp_detail()
    {
        $data1=$this->input->post('Tinformation');
       
        $data2=$this->input->post('editor5');
        
        $rp_info=array(
                  'rp_title'=>$data1,
                  'rp_descripation'=>$data2
                  
                 );
        $this->Returnp_model->rp_detail1($rp_info);
        
        return redirect('Returnp_controller/rp_view');
    }
    public function rp_view()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $rp['rp']=$this->Returnp_model->get_rp();
        /*var_dump($privacy);*/
        $this->load->view('Admin/rp_view',$rp);
        $this->load->view('includes/footer');

    }
    public function rp_update()
    {
        $id=$this->input->post('id');
        $rp_title=$this->input->post('Tinformation');
        $rp_des=$this->input->post('editor1');
        $rp_update=array(
                  'rp_title'=>$rp_title,
                  'rp_descripation'=>$rp_des
                 );
        $this->Returnp_model->rp_update1($id,$rp_update);
        
        return redirect('Returnp_controller/rp_view');
    }

     public function rp_checking()
    {
        $rp_check=$this->Returnp_model->rp_checking1();
        if( $rp_check)
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