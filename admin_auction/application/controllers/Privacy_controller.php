<?php

/**
 * 
 */
class Privacy_controller extends CI_Controller
{
	
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url','form'));
$this->load->library('currency_lib'); 
    $this->load->library('upload');
    $this->load->library('image_lib');
      $this->load->model('Privacy_model');
      session_start();
    }
	 public function about_privacy()
    {
       $this->load->view('includes/header');
    $this->load->view('includes/sidebar');
        $this->load->view('Admin/privacy_add.php');
        $this->load->view('includes/footer');
    }
     public function privacy_detail()
    {
        $data1=$this->input->post('Tinformation');
       
        $data2=$this->input->post('editor5');
        
        $p_info=array(
                  'p_title'=>$data1,
                  'p_descipation'=>$data2
                  
                 );
        $this->Privacy_model->privacy_detail1($p_info);

        return redirect('Privacy_controller/privacy_view');
    }
    public function privacy_view()
    {
           $this->load->view('includes/header');
    $this->load->view('includes/sidebar');
        $privacy['pri']=$this->Privacy_model->get_privacy();
        /*var_dump($privacy);*/
        $this->load->view('Admin/privacy_view',$privacy);
        $this->load->view('includes/footer');


    }
    public function privacy_update()
    {
        $id=$this->input->post('id');
        $p_title=$this->input->post('Tinformation');
        $p_des=$this->input->post('editor1');
        $p_update=array(
                  'p_title'=>$p_title,
                  'p_descipation'=>$p_des
                 );
        $this->Privacy_model->privacy_update1($id,$p_update);
        
        return redirect('Privacy_controller/privacy_view');
    }
     public function p_checking()
    {
        $p_check=$this->Privacy_model->p_checking1();

        if( $p_check)
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