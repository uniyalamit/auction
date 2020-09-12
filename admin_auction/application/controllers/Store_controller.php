<?php

/**
 * 
 */
class Store_controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
$this->load->library('currency_lib'); 
    $this->load->library('upload');
    $this->load->library('image_lib');
	  $this->load->model('Store_model');
      session_start();
      
	}

	 public function store_checking()
    {
        $store_check=$this->Store_model->store_checking1();
        if( $store_check)
        {
            echo "1";
        }
        else
        {
            echo "0";
        }
    }
   public function store()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $s['st']=$this->Store_model->get_data();
       $this->load->view('Admin/store_information',$s);
       $this->load->view('includes/footer');

    }
    public function store_view()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $store['store']=$this->Store_model->get_store();
        /*var_dump($store);*/
         $this->load->view('Admin/store_update',$store);
          $this->load->view('includes/footer');

    }
    public function store_detail()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $data1=$this->input->post('editor5');     
        $data2=$this->input->post('editor4');
        $data3=$this->input->post('editor3');
        $data4=$this->input->post('Store_name');
        $data5=$this->input->post('address');
        $data6=$this->input->post('url');
        $data7=$this->input->post('longitude');     
        $data8=$this->input->post('latitude');
        
        $data10=$this->input->post('telephone');
        $data11=$this->input->post('email');
        $data12=$this->input->post('fax');
        $data13=$this->input->post('ot');     
        $data14=$this->input->post('comment');
        $data15=$this->input->post('country');
        $data16=$this->input->post('State');
        $data17=$this->input->post('language');
        $data18=$this->input->post('curr');
        $data19=$this->input->post('centimetre');     
        $data20=$this->input->post('metre');
        $data21=$this->input->post('Inch');
        $data22=$this->input->post('kilogram');
        $data23=$this->input->post('gram');
        $data24=$this->input->post('pond');
        $data25=$this->input->post('minimum');
        $data26=$this->input->post('maximum');
          $path_parts = pathinfo($_FILES["logo"]["name"]);
          $extension =  $_FILES["logo"]["name"] ;

         

            move_uploaded_file($_FILES['logo']['tmp_name'], "./image/"  . $extension);
           
            $config['image_library'] = 'gd2';
            $config['maintain_ratio'] = TRUE;
            $config['create_thumb'] = False;
            $config['overwrite'] = TRUE;
            $config['encrypt_name'] = TRUE;
            $config['x_axis'] = 100;
            $config['y_axis'] = 60;
            $config['quality'] = 300;
            $config['source_image'] = "image/"  . $extension;
            
            $this->image_lib->clear();
            $this->image_lib->initialize($config);

  
       $this->image_lib->crop();

      if ( ! $this->image_lib->crop())
        {
         echo $this->image_lib->display_errors();
        }
        else
        {
             if(!$extension)
                {   
                   

                 echo "not upload some problem.....";
                 $error = array('error' => $this->upload->display_errors());
                 $this->load->view('Store_controller/store',$error);
                 $this->load->view('includes/footer');
                }
                else{
                        //$photo=$this->upload->data();
                        //$image =$photo['raw_name'].$photo['file_ext'];
                        
                        $storedata=array(
                        'store_name'=>$data4,
                        'URL'=>$data6,
                        'currency'=>$data18,
                        'meta_tag'=>$data1,
                        'meta_discripation'=>$data2,
                        'store_logo'=>$extension,
                        'store_email'=>$data11,
                        'storemeta_key'=>$data3,
                        'store_address'=>$data5,
                        'g_longtitude'=>$data7,
                        'g_latitude'=>$data8,
                       
                        'store_telephone'=>$data10,
                        'store_fax'=>$data12,
                        
                        'store_comment'=>$data14,
                        'store_open'=>$data13,
                        'store_country'=>$data15,
                        'store_state'=>$data16,
                        'store_language'=>$data17,
                        'store_centimeter'=>$data19,
                        'store_meter'=>$data20,
                        'store_inch'=>$data21,
                        'store_kilo'=>$data22,
                        'store_gram'=>$data23,
                        'store_pond'=>$data24,
                        'store_miniv'=>$data25,
                        'store_maxv'=>$data26,
                        );
                        
                         $this->Store_model->insert_store_data($storedata,$data18);
                          
                        redirect('Store_controller/store_view');

                    }

        }
    }
    public function store_update()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $store_id=$this->input->post('id');
         $data1=$this->input->post('editor5'); 

        $data2=$this->input->post('editor4');
        $data3=$this->input->post('editor3');
        $data4=$this->input->post('Store_name');
        $data5=$this->input->post('address');
        $data6=$this->input->post('url');
        $data7=$this->input->post('longitude');     
        $data8=$this->input->post('latitude');
       
        $data10=$this->input->post('telephone');
        $data11=$this->input->post('email');
        $data12=$this->input->post('fax');
        $data13=$this->input->post('ot');     
        $data14=$this->input->post('comment');
        $data15=$this->input->post('country');
        $data16=$this->input->post('State');
        $data17=$this->input->post('language');
        $data18=$this->input->post('curr');
        $data19=$this->input->post('centimetre');     
        $data20=$this->input->post('metre');
        $data21=$this->input->post('Inch');
        $data22=$this->input->post('kilogram');
        $data23=$this->input->post('gram');
        $data24=$this->input->post('pond');
        $data25=$this->input->post('minimum');
        $data26=$this->input->post('maximum');
        $path_parts = pathinfo($_FILES["logo"]["name"]);
          $extension =  $_FILES["logo"]["name"] ;
          
           move_uploaded_file($_FILES['logo']['tmp_name'], "./image/"  . $extension);
            $config['image_library'] = 'gd2';
            $config['maintain_ratio'] = TRUE;
            $config['create_thumb'] = False;
            $config['overwrite'] = TRUE;
            $config['encrypt_name'] = TRUE;
            $config['x_axis'] = 100;
            $config['y_axis'] = 60;
            $config['quality'] = 300;
            $config['source_image'] = "image/"  . $extension;
            $this->image_lib->clear();
            $this->image_lib->initialize($config);
            $this->image_lib->crop();
            if ( ! $this->image_lib->crop())
                {
                 echo $this->image_lib->display_errors();
                }
                 else
             {
              if(!$extension)
                {   

                     
                $storedata=array(
                        'store_name'=>$data4,
                        'URL'=>$data6,
                        'currency'=>$data18,
                        'meta_tag'=>$data1,
                        'meta_discripation'=>$data2,
                        
                        'store_email'=>$data11,
                        'storemeta_key'=>$data3,
                        'store_address'=>$data5,
                        'g_longtitude'=>$data7,
                        'g_latitude'=>$data8,
                        
                        'store_telephone'=>$data10,
                        'store_fax'=>$data12,
                        
                        'store_comment'=>$data14,
                        'store_open'=>$data13,
                        'store_country'=>$data15,
                        'store_state'=>$data16,
                        'store_language'=>$data17,
                        'store_centimeter'=>$data19,
                        'store_meter'=>$data20,
                        'store_inch'=>$data21,
                        'store_kilo'=>$data22,
                        'store_gram'=>$data23,
                        'store_pond'=>$data24,
                        'store_miniv'=>$data25,
                        'store_maxv'=>$data26,
                        );
         $this->Store_model->update_store_data($storedata,$store_id,$data18);
           
                         
                        redirect('Store_controller/store_view');
                       
                }
                else
             {

            $storedata=array(
                        'store_name'=>$data4,
                        'URL'=>$data6,
                        'currency'=>$data18,
                        'meta_tag'=>$data1,
                        'meta_discripation'=>$data2,
                        'store_logo'=>$extension,
                        'store_email'=>$data11,
                        'storemeta_key'=>$data3,
                        'store_address'=>$data5,
                        'g_longtitude'=>$data7,
                        'g_latitude'=>$data8,
                        
                        'store_telephone'=>$data10,
                        'store_fax'=>$data12,
                        
                        'store_comment'=>$data14,
                        'store_open'=>$data13,
                        'store_country'=>$data15,
                        'store_state'=>$data16,
                        'store_language'=>$data17,
                        'store_centimeter'=>$data19,
                        'store_meter'=>$data20,
                        'store_inch'=>$data21,
                        'store_kilo'=>$data22,
                        'store_gram'=>$data23,
                        'store_pond'=>$data24,
                        'store_miniv'=>$data25,
                        'store_maxv'=>$data26,
                        );
           $this->Store_model->update_store_data($storedata,$store_id,$data18);
    
          
                         
                        redirect('Store_controller/store_view');
                        
          
        }
    }
       
            
         
    
}
}
?>