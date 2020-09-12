<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/kolkata');
$dt=date('y/m/d h:i:s');
class Category_c extends CI_Controller {
	public function  __construct()
	{
		parent::__construct();
		session_start();
		$this->load->helper(array('url','form'));
		//$this->load->library(array('session','form_validation'));
		$this->load->model('Category_m');
	}

	
	public function index()
	{		
	
		 $this->load->view('includes/header');
		 $this->load->view('includes/sidebar');
		$this->load->view('Admin/index');
		$this->load->view('includes/footer');
		

				 

	}
	
	//login
	
	
	//category
	public function category()
	{	 $this->load->view('includes/header');
			 $this->load->view('includes/sidebar');

		$cat['rec']=$this->Category_m->fetch_cat();
		$this->load->view('Admin/add_category',$cat);
				 //$this->load->view('includes/logout');
	  $this->load->view('includes/footer');


	}
	
	public function add_category()
	{
		
		$is_parent=$this->input->post('check');
		
		$file_name="";
		if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }

				$cat_name=$this->input->post('cat_name');
				//echo $cat_name; 
				$cat_id=$this->input->post('select_cat');
				$sub_cat=$this->input->post('sub_cat');
				$cat_desc=$this->input->post('cat_description');
				//echo $cat_id; die;
				
				if(!empty($is_parent)){
				$data=array(
					'cat_name' =>$cat_name,
					'is_parent' =>$is_parent,
					'cat_image' =>$file_name,
					'is_parent'=>'Parent',
					'cat_description'=>$cat_desc
					
				);
				}else{
					$data=array(
					'cat_name' =>$sub_cat,
					'is_parent' =>$is_parent,
					'cat_image' =>$file_name,
					'is_parent' =>'Sub',
					'sub_cat_id' =>$cat_id,
					'cat_description'=>$cat_desc
					
				);
				}
				//echo $data; die;
				$this->Category_m->insert_cat($data);
				redirect('Category_c/category');
		
		}
		
		
		
	public function view_cat()
	{		 $this->load->view('includes/header');
		 $this->load->view('includes/sidebar');

		$record['rec']=$this->Category_m->fetch_all_cat();
		$this->load->view('Admin/view_category',$record);
				 $this->load->view('includes/footer');

	}
	public function delete_cat($id)
	{		 $this->load->view('includes/header');
		 $this->load->view('includes/sidebar');

		$this->Category_m->delete_catg($id);
		redirect('Category_c/view_cat');
				 $this->load->view('includes/footer');

	}
	
	/* --------------update category start------------- */
	public function edit_cat($id)
	{		 $this->load->view('includes/header');
		 $this->load->view('includes/sidebar');

		$value['rec']=$this->Category_m->fetch_cat();
		
		$value['val']=$this->Category_m->fetch_id_rec($id);
		$this->load->view('Admin/edit_cat',$value);
				 $this->load->view('includes/footer');

	}
	public function update_cat($id)
	{		 $this->load->view('includes/header');
		 $this->load->view('includes/sidebar');

		$file_name="";
		if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
		
				$cat_name=$this->input->post('cat_name');
				$cat_id=$this->input->post('select_cat');
				$sub_cat=$this->input->post('sub_cat');
			$cat_desc=$this->input->post('cat_description');
				if(empty($cat_name))
				{
					if(!empty($file_name)){
					$data=array(
						'cat_name' =>$sub_cat,
						'cat_description' =>$cat_desc,
						'cat_image' =>$file_name,
						'sub_cat_id' =>$cat_id
					);
					}else{
						$data=array(
						'cat_name' =>$sub_cat,
						'cat_description' =>$cat_desc,
						'sub_cat_id' =>$cat_id
					);
					}
				}else{
					if(!empty($file_name)){
					$data=array(
						'cat_name' =>$cat_name,
						'cat_description' =>$cat_desc,
						'cat_image' =>$file_name
						
					);
					}else{
						$data=array(
						'cat_description' =>$cat_desc,
						'cat_name' =>$cat_name
					);
					}
				}
				$this->Category_m->submit_f($id,$data);
				redirect('Category_c/view_cat');
					 $this->load->view('includes/footer');
	
	
	}
	/*----------update End-------------*/
	
	/* ----------Enabe Disabe Category----------- */
	public function disable($id)
	{		 $this->load->view('includes/header');
		 $this->load->view('includes/sidebar');

		$this->Category_m->disable_c($id);
		redirect('Category_c/view_cat');	
		$this->load->view('includes/footer');

	}
	public function enable($id)
	{		 $this->load->view('includes/header');
		 $this->load->view('includes/sidebar');

		$this->Category_m->enable_c($id);
		redirect('Category_c/view_cat');
				 $this->load->view('includes/footer');

	}
	public function getsubCategoryList($id=null)
	{
//echo $id; die;
		 

		$sub=$this->Category_m->getsub($id);
		$c=count($sub);
		echo $c;
		foreach($sub as $val)
		{
			echo "<option value='$val->cat_id'>$val->cat_name</option>";
		}
				 

	}
	
	public function unq_cat($id)
	{			

		$data=$this->Category_m->check_cat($id);
		$a=count($data);
		if($a > 0){
			echo "<b style='color:red;'>Category Already Exist</b>";
		}
				

	}
}
	

