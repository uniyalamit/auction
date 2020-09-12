<?php

class Delivery_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url','form'));
$this->load->library('currency_lib'); 
    $this->load->library('upload');
    $this->load->library('image_lib');
      $this->load->model('Delivery_model');
      session_start();
    }
	 public function about_des()
    {
         $this->load->view('includes/header');
         $this->load->view('includes/sidebar');
        $this->load->view('Admin/d_info.php');
         $this->load->view('includes/footer');
    }  
    public function Delivery_detail()
    {
        $data1=$this->input->post('Tinformation');
       
        $data2=$this->input->post('editor5');
        
        $info=array(
                  'title'=>$data1,
                  'descripation'=>$data2
                  
                 );
        $this->Delivery_model->Delivery_detail1($info);
       
        redirect('Delivery_controller/delivery_view');
    }
   /* public function delivery_view()
    {
        $delivery['del']=$this->Delivery_model->get_delivery();
        /*var_dump($result);
        $this->load->view('delivery_view',$delivery);

    }*/
    public function delivery_view()
    {
           $this->load->view('includes/header');
    $this->load->view('includes/sidebar');
        
         $delivery['del']=$this->Delivery_model->get_delivery();
        /*var_dump($result);*/
        $this->load->view('Admin/delivery_view',$delivery);
           $this->load->view('includes/footer');
    
    }
    public function delivery_update()
    {
        $id=$this->input->post('id');
        $d_title=$this->input->post('Tinformation');
        $d_des=$this->input->post('editor1');
        $d_update=array(
                  'title'=>$d_title,
                  'descripation'=>$d_des
                 );
        $this->Delivery_model->delivery_update1($id,$d_update);
       
        return redirect('Delivery_controller/delivery_view');
    }

    public function d_checking()
    {
        $d_check=$this->Delivery_model->d_checking1();
        if( $d_check)
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