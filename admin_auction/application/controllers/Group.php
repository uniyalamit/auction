<?php
/**
 * 
 */
class Group extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
$this->load->library('currency_lib'); 
    $this->load->library('upload');
    $this->load->library('image_lib');
	  $this->load->model('Group_m');
	  session_start();
	}
	public function index()
	{
		
		$this->load->view('index');
	}
/*-------------------group strat----------------------------------------*/
    	public function add_group()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$this->load->view('Admin/add_group');
		$this->load->view('includes/footer');
	}
	
	public function group_add()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
       if(!empty($_POST))
		{
			 $this->form_validation->set_rules('groupname','Groupname','required');
			 if($this->form_validation->run() == FALSE)
            {
            	
                $this->load->view('Admin/add_group');
                $this->load->view('includes/footer');
            }
            else
            {
            	 $gname=$this->input->post('groupname');
            	 $data=array(
                  'g_name'=>$gname,
            	 );
            	 $this->Group_m->insert($data);
            	 
            	 redirect('Group/add_group');
            }
		}
	}
	public function group_view()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$rec['r']=$this->Group_m->get_user();
		$this->load->view('Admin/view_group',$rec);
		$this->load->view('includes/footer');

	}

	public function group_delete()
	{

          
        foreach ($_POST['table_records'] as $id) {
        	$this->Group_m->delete_group($id);
        }
       
          
           return redirect('Group/group_view');
	}

	public function single_delete($g_id)
	{
		$this->Group_m->single_delete1($g_id);
        
		
        
		return redirect('Group/group_view');
	}
	public function update_group($g_id)
	{
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
	  $this->Group_m->group_update($g_id);
	  $rec['r']=$this->Group_m->group_update($g_id);
	  $this->load->view('Admin/update',$rec);
     /*$this->load->view('update');*/  
     $this->load->view('includes/footer');
		
	}

    public function check()
    {
    	$group=$this->input->post('group');
    	if($data=$this->Group_m->check_m($group))
				{
					echo "<h4 class='text-danger'>Already exist.</h4> ";

				}
				else
				{
					echo "0";
				}
    	
				
    }
     public function check_u()
    {
    	$group=$this->input->post('group');
    	if($data=$this->Group_m->check_m_u($group))
				{
					echo "<h4 class='text-danger'>Already exist.</h4> ";

				}
				else
				{
					echo "0";
				}
    	
				
    }

	
	public function update_data()
	{

       if(!empty($_POST))
		{
			 $this->form_validation->set_rules('groupname','Groupname','required');
			 if($this->form_validation->run() == FALSE)
            {
                $this->load->view('update');
            }
            else
            {
            	 $gname=$this->input->post('groupname');
            	 $id=$this->input->post('id');
                 
            	  $data=array(
                  'g_name'=>$gname,
                 
                  
            	 );
            	  

            	if($data=$this->Group_m->new_data($data,$id))
            	 {
            	 	
                 
            	 $this->load->view('Group/group_view');
            	}
            	else
            	{
            		 
            		
            	 redirect('Group/group_view'); 
            	}
            }
		}
	}

	
}
/*--------------------group end-----------------------------------*/
?>