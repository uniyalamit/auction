<?php
class Customer_group_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	  $this->load->model('Customer_group_model');
     session_start();
	}

		public function custmore()
		{
			$this->load->view('includes/header');
            $this->load->view('includes/sidebar');
			$this->load->view('Admin/custmore_group_add');
			$this->load->view('includes/footer');
			
		}
		
		public function cgroup_add()
	   {
		       if(!empty($_POST))
				{
					 $this->form_validation->set_rules('groupname','Groupname','required');
					 if($this->form_validation->run() == FALSE)
		            {
		            	$this->session->set_flashdata('error','Data Not Insert');
		            	$this->load->view('includes/header');
                        $this->load->view('includes/sidebar');
		                $this->load->view('Admin/custmore_group_add');
		                $this->load->view('includes/footer');
		            }
		            else
		            {
		            	 $gname=$this->input->post('groupname');
		            	 $data=array(
		                  'cgroup_name'=>$gname,
		            	 );
		            	 $this->Customer_group_model->insert($data);
		            	 
		            	 redirect('Customer_group_controller/custmore');
		            }
				}
	    }
	     public function cgroup_view()
			{
				$this->load->view('includes/header');
                $this->load->view('includes/sidebar');
				$rec['r']=$this->Customer_group_model->get_custmore();
				$this->load->view('Admin/custmore_group_view',$rec);
				$this->load->view('includes/footer');

			}
			public function single_user_delete($g_id)
			{
				
				$this->Customer_group_model->single_delete1($g_id);
		        
				
				return redirect('Customer_group_controller/cgroup_view');
				
			}

			public function group_delete()
			{
		          $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
		        foreach ($_POST['table_records'] as $id) {
		        	$this->Customer_group_model->delete_group($id);
		        }
		       
		           
		           return redirect('Customer_group_controller/cgroup_view');
		           $this->load->view('includes/footer');

			}
			public function update_group($g_id)
			{
				 $this->load->view('includes/header');
                $this->load->view('includes/sidebar');
			  $this->Customer_group_model->group_update($g_id);
			  $rec['r']=$this->Customer_group_model->group_update($g_id);
			  $this->load->view('Admin/custmore_group_update',$rec);
		     /*$this->load->view('update');*/  
		     $this->load->view('includes/footer');
			}
			public function update_data()
	{

       if(!empty($_POST))
		{
			 $this->form_validation->set_rules('groupname','Groupname','required');
			 if($this->form_validation->run() == FALSE)
            {
                redirect('Customer_group_controller/cgroup_view');
            }
            else
            {
            	 $gname=$this->input->post('groupname');
            	 $id=$this->input->post('id');
                 
            	  $data=array(
                  'cgroup_name'=>$gname,
                 
                  
            	 );
            	 
            	if($data=$this->Customer_group_model->new_data($data,$id))
            	 {

            	 	
            		
            	redirect('Customer_group_controller/cgroup_view'); 
            	}
            	else
            	{
            	
                 
            	 redirect('Customer_group_controller/cgroup_view');
            		  
            	}
            }
		}
	}
			 public function check()
			
		    {
		    	$group=$this->input->post('group');
		    	if($data=$this->Customer_group_model->check_m($group))
						{
							echo "<h4 class='text-danger'>Already exist.</h4> ";

						}
						else
						{
							echo "0";
						}
		    	
						
		    }
}
?>