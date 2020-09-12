<?php
class About_controller extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url','form'));

    $this->load->library('upload');
    $this->load->library('image_lib');
    $this->load->model('About_model');
   session_start();
    
    }
    
/*-------------------- start about page----------------------------------*/    
     public function about()
    {    $this->load->view('includes/header');
         $this->load->view('includes/sidebar');
        $this->load->view('Admin/admin_aboutus.php');
        $this->load->view('includes/footer');
    }
    public function about_info()
    {
      
       $data1=$this->input->post('Tinformation');
        $data2=$this->input->post('editor3');
        $data3=$this->input->post('editor1');
        $data4=$this->input->post('editor2');
         $data=array(
                  'ititel'=>$data1,
                  'dimg'=>$data2,
                  'mtitle'=>$data3,
                  'mdec'=>$data4
                 );
          $this->About_model->about_detail($data);
         
          redirect('About_controller/about_view');
            
    }
    
    public function update_about()
    {

         $id=$this->input->post('id');
        $data1=$this->input->post('Tinformation');
        $data2=$this->input->post('editor3');
        $data3=$this->input->post('editor1');
        $data4=$this->input->post('editor2');
        $data=array(
                  'ititel'=>$data1,
                  'dimg'=>$data2,
                  'mtitle'=>$data3,
                  'mdec'=>$data4
                 );
         $this->About_model->about_update1($id,$data);
        
         return redirect('About_controller/about_view');
    }
   
    public function about_view()
    {
      $this->load->view('includes/header');
    $this->load->view('includes/sidebar');
        $result['re']=$this->About_model->get_about();
        /*var_dump($result);*/
        $this->load->view('Admin/view_about',$result);
        $this->load->view('includes/footer');
    

    }
     
    public function checking()
    {
        $data=$this->About_model->checking1();
        if($data)
        {
            echo "1";
        }
        else
        {
            echo "0";
        }
    }

/*-------------------- end about page----------------------------------*/
}
?>