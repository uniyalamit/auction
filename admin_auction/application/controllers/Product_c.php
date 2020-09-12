<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/kolkata');
$dt=date('y/m/d h:i:s');
class Product_c extends CI_Controller {
	public function  __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
	session_start();
		//$this->load->library(array('session','form_validation'));
		$this->load->model('Product_m');
		$this->load->model('Welcome_model');
		$this->load->model('Brand_m');
		$this->load->model('Customer_group_model');
		$this->load->model('FeturPro_m');
	}
/* --------Adding discount-----------*/ 
	public function Add_disc()
	{
		 $this->load->view('includes/header');
		  $this->load->view('includes/sidebar');
		$ab['disc']=$this->Product_m->get_disc();
		$this->load->view('Admin/flat_discount',$ab);
		 $this->load->view('includes/footer');
	}
	public function add_discount()
	{
		if(!empty($_POST))
		{
			 $this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
		
			$this->form_validation->set_rules('select_dic','Select Discount','required');
			$this->form_validation->set_rules('add_disc','Add Dsicount','required');
			$this->form_validation->set_rules('start_date','Start Date','required');
			$this->form_validation->set_rules('end_date','End Date','required');
			
			if($this->form_validation->run()==false)
			{
				//echo " hii"; die;
				$this->load->view('Admin/flat_discount');
			}else{
		
		
				$disc=$this->input->post('select_dic');
				$disc1=$this->input->post('add_disc');
				$start=$this->input->post('start_date');
				$end=$this->input->post('end_date');
			
					//echo $disc; die;
				$data=array(
					'discount_id' =>$disc,
					'discount' =>$disc1,
					'start_date' =>$start,
					'end_date' =>$end
					
				);
				$tbl_discount='tbl_discount';
				$this->Product_m->commanInsert($tbl_discount,$data);
				redirect('Product_c/Add_disc');
				
					$this->data['failed']=" Not Inserted ";
						$this->load->view('Admin/flat_discount',$this->data);
				}
		}else
		{
			$this->load->view('Admin/flat_discount');
		}
				
			 $this->load->view('includes/footer');
		
		}
			/*-------updateing discount-----------*/
		public function view_disc()
		{
			 $this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
			$data['value']=$this->Product_m->view_d();
			$this->load->view('Admin/view_discount',$data);
			 $this->load->view('includes/footer');
		}
		public function fetch_disc($id)
		{
			 $this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
			$data['disc']=$this->Product_m->get_disc();
			$data['fetched']=$this->Product_m->fetchrec($id);
			$this->load->view('Admin/flat_discount',$data);
			 $this->load->view('includes/footer');
		}
		public function edit_disc($id)
		{
			 $this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
			$disc=$this->input->post('select_dic');
				$disc1=$this->input->post('add_disc');
				$start=$this->input->post('start_date');
				$end=$this->input->post('end_date');
				      
				$data=array(
					'discount_id' =>$disc,
					'discount' =>$disc1,
					'start_date' =>$start,
					'end_date' =>$end
					
				);
				//echo $data; die;
				$this->Product_m->update_disc($id,$data);
				redirect('Product_c/view_disc');
				 $this->load->view('includes/footer');
				}
			
				/*-------Deleteing Discount-----------*/
		public function delete_disc($id)
		{
			$this->Product_m->delete_rec($id);
				redirect('Product_c/view_disc');
			
		}
		
				/*-----------Generating Coupan------------ */
		public function gen_coupan ()
		{
			$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$res = "";
			for ($i = 0; $i < 10; $i++) {
				$res .= $chars[mt_rand(0, strlen($chars)-1)];
				
			}
			$coupan['uniq']=$res;
			$this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
			$this->load->view('Admin/coupan',$coupan);
			$this->load->view('includes/footer');
			  
		}
		public function save_coupan()
		{
			$coupan=$this->input->post('coupan');
			$start=$this->input->post('start_date');
			$expire=$this->input->post('expire_date');
			$ammount=$this->input->post('no_of_coupan');
			$create=date('y/m/d');
			if(!empty($expire)){
			$record=array(
			'coupan'=>$coupan,
			'start_date'=>$start,
			'expire_date'=>$expire,
			'coupan_genrated_date'=>$create,
			'no_of_coupan'=>$ammount
			
			);
			$tbl_coupan='tbl_coupan';
			$this->Product_m->commanInsert($tbl_coupan,$record);
			$this->data['coupan_save']=" Coupan Saved Succesfully ";
			$this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
			$this->load->view('Admin/coupan',$this->data);
			$this->load->view('includes/footer');
			 
			}else{
				
				redirect('Product_c/gen_coupan');
			}
		}
		public function view_coupan()
		{
			$data['val']=$this->Product_m->fetch_coupan();
			$this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
			$this->load->view('Admin/view_coupan',$data);

			  $this->load->view('includes/footer');
		}
					/*------------Deleteing Coupan------------*/
		public function  delete_coupan($id)
		{
			$this->Product_m->delete_cp($id);
			redirect('Product_c/view_coupan');
		}
					/* -----------Editing coupan----------- */
		public function fetch_coupan_id($id)
		{
			$data['cp']=$this->Product_m->fetch_coupanby_id($id);
			$this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
			$this->load->view('Admin/coupan',$data);
			$this->load->view('includes/footer');
			
		}
		public function edit_coupan($id)
		{
			$start=$this->input->post('start_date');
			$expire=$this->input->post('expire_date');
			$ammount=$this->input->post('no_of_coupan');
			if(!empty($expire)){
			$record=array(
			
			'start_date'=>$start,
			'expire_date'=>$expire,
			'no_of_coupan'=>$ammount
			
			);
			$this->Product_m->update_coupan($id,$record);
			redirect('Product_c/view_coupan');
		}
		}
			/* ----------adding product----------- */
		public function add_p()
		
		{
			$data['cat']=$this->Product_m->fetch_c_cat();
			$data['tax']=$this->Welcome_model->get_all_Tax_persent();
			//echo "<pre>";
			//print_r($data);die();
			$data['brand']=$this->Brand_m->getBrand();
			$data['disc']=$this->Product_m->view_d();
			$data['group']=$this->Customer_group_model->get_custmore();
			//echo "<pre>";
		//print_r($data);die();
			$this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
			$this->load->view('Admin/add_productf',$data);
			$this->load->view('includes/footer');
			  
		}
		public function add_product()
		{
			
							/* -----1st TAB---- */
							$name=$this->input->post('product_name');
							$desc=$this->input->post('product_desc');
							$meta=$this->input->post('meta_tag_title');
							$meta_desc=$this->input->post('meta_tag_desc');// die;
							$tags=$this->input->post('tags');
							$tag=implode(',',$tags);
							/*------2nd TAB----------  */
							$product_model=$this->input->post('product_model');
							$sku=$this->input->post('sku');
							$product_price=$this->input->post('product_price');
							$tax_class=$this->input->post('tax_class');
							$quantity=$this->input->post('quantity');
							$m_quantity=$this->input->post('m_quantity');
					        $stock_status=$this->input->post('stock_status'); 
							$require_ship=$this->input->post('require_ship');
							$product_sts=$this->input->post('product_sts');
							/* ------3rd TAB---------- */
							$brand=$this->input->post('brand');
							$category=$this->input->post('category');
							$sub_sub=$this->input->post('sub_sub');
							$rel_product=$this->input->post('rel_product'); 
							$attribute=$this->input->post('attribute');
							/* ------4th TAB----------- */
							$atr_name=$this->input->post('atr_name');
							$atr_imp=implode(',',$atr_name);
							$atr_desc=$this->input->post('atr_desc');
							$desc_imp=implode(',',$atr_desc);
							/* ------5th TAB----------- */
							$r1=$this->input->post('r1');
							$check_box=$this->input->post('check_b');
							$image=$this->input->post('image');
							$drop_d=$this->input->post('drop_d');
							$date_file=$this->input->post('date_file');
							/* ------6th TAB---------- */
							//$disc_qty=$this->input->post('dis_quantity');
							$discount=$this->input->post('discount');
							$discount_price=$this->input->post('discount_price');
							$start_date=$this->input->post('start_date');
							$end_date=$this->input->post('end_date');
							$user_group=$this->input->post('user_group');
							/* ------7th TAB---------- */
							$user_group=$this->input->post('user_group');
							$per_discount=$this->input->post('per_discount');
							$s_start_date=$this->input->post('s_start_date');
							$s_end_date=$this->input->post('s_end_date');
							
							/* ------8th TAB---------- */
							if(isset($_FILES['product_img']))
							{
							  $errors= array();
							  $file_name = $_FILES['product_img']['name'];
							  $file_size =$_FILES['product_img']['size'];
							  $file_tmp =$_FILES['product_img']['tmp_name'];
							  $file_type=$_FILES['product_img']['type'];
							 // $file_ext=strtolower(end(explode('.',$_FILES['product_img']['name'])));
							  $exploded = explode('.',$_FILES['product_img']['name']);
	                          $last_element = end($exploded);
	                          $file_ext=strtolower($last_element);
							  $expensions= array("jpeg","jpg","png");
							  if(in_array($file_ext,$expensions)=== false)
							  {
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
							/* ---------9TH TAB--------- */
							$p_auction_price=$this->input->post('p_auction_price');
							//$start_date=$this->input->post('start_date');
							$hours=$this->input->post('hours');
							$auction_price=$this->input->post('auction_price');
							//$o_end_dt=$this->input->post('o_end_date');
							//$o_end_time=$this->input->post('o_end_time');
							
							
													//$datetime1 = new DateTime($start_time); 
													//$datetime2 = new DateTime($o_end_time);
													//$interval = $datetime1->diff($datetime2);
													//$tm= $interval->format('%h');
													//$bit=$tm*$auction_price;
													//echo $bit; die;
							/* -------Tables Name------ */
							$tbl_product='tbl_product';
							$tbl_product_details='tbl_product_details';
							$tbl_image='tbl_product_image';
							$tbl_shipping='tbl_pro_shipping';
							$tax_tbl='tbl_product_tax';
							$a=$_FILES['additional_img'];
							$b='uploads/';
							$atri="product_atr";
							
							
							
						
							$product=array(
								'product_name' =>$name,
								'product_desc' =>$desc,
								'meta_tag_title' =>$meta,
								'meta_tag_desc' => $meta_desc,
								'product_img' => $file_name
							);
							
						$id=$this->Product_m->commanInsert($tbl_product,$product);
							$stock=array(
							'stock_status' =>$stock_status,
							'product_id' =>$id
						);
						$stk_id=$this->Product_m->stock_sts($stock);
						if(empty($sub_sub)){
							$details=array(
								'product_id'=>$id,
								'tags' => $tag,
								'model'=>$product_model,
								'sku' => $sku,
								'product_price' =>$product_price,
								'quantity' =>$quantity,
								'minimum_stock_qty'=>$m_quantity,
								'brand_id'=>$brand,
								'cat_id'=>$category,
								//'sub_cat_id' =>$sub_sub,
								'stock_status_id'=>$stk_id
							);
						}else{
						
							$details=array(
								'product_id'=>$id,
								'tags' => $tag,
								'model'=>$product_model,
								'sku' => $sku,
								'product_price' =>$product_price,
								'quantity' =>$quantity,
								'minimum_stock_qty'=>$m_quantity,
								'brand_id'=>$brand,
								'cat_id'=>$category,
								'sub_cat_id' =>$sub_sub,
								'stock_status_id'=>$stk_id
							);
						}
					if(!empty($discount)){
							$disc=array(
								'product_id'=>$id,
								'discount'=>$discount,
								'disc_price'=>$discount_price,
								'start_date'=>$start_date,
								'end_date'=>$end_date
							);
					}
							
							if(!empty($per_discount)){
							$grp=array(
								'discount'=>$per_discount,
								'start_date'=>$s_end_date,
								'end_date'=>$s_end_date,
								'group_id'=>$user_group,
								'product_id'=>$id
							);
							}
							echo "<pre>";
							print_r($grp);
							if(!empty($atr_desc)){
							$atr=array(
								'product_id'=>$id,
								'atr_name'=>$atr_imp,
								'atr_desc'=>$desc_imp
							);
							}
							if(!empty($require_ship)){
							$ship=array(
								'product_id'=>$id,
								'require_ship' => $require_ship
							);
							}
							$tax=array(
								'product_id' =>$id,
								'tax_id' =>$tax_class
							);
							if(!empty($rel_product)){
							$rel=array(
								'product'=>$rel_product,
								'product_id' =>$id
							);
							}
							
							if(!empty($p_auction_price)){
							$auction=array(
								'product_id'=>$id,
								'start_price'=>$p_auction_price,
								//'start_date'=>$start_date,
								'hours'=>$hours,
								//'end_date'=>$o_end_date,
								//'end_time'=>$o_end_time,
								'auction_price'=>$auction_price
							);
							}
							//print_r($auction);die;
							//print_r($auction);
							
							$this->Product_m->commanInsert($tbl_product_details,$details);
							$this->Product_m->commanInsert($atri,$atr);
							if(!empty($ship)){
							$this->Product_m->commanInsert($tbl_shipping,$ship);
							}
							$this->Product_m->commanInsert($tax_tbl,$tax);
							$this->Product_m->commanInsert('tbl_related_pro',$rel);
							$this->Product_m->commanInsert('tbl_auction_pro',$auction);
							if(!empty($a)){
						    $data1['images']=$this->Product_m->multiple_upload($b,$a);
							}
						    $data1['product_id']=$id;
							$this->Product_m->p_image($data1);
							$this->Product_m->p_disc_image($disc);
							if(!empty($per_discount)){
							$this->Product_m->special_disc($grp,$id);
							}
							redirect('Product_c/add_p'); 
					
		}
		public function view_product()
		{
			$data['rec']=$this->Product_m->get_product();
			//$data1['details']=$this->Product_m->get_details();
			//$data2['rec']=array_merge($data['rec'],$data1['details']);
			//echo "<pre>";
			//print_r($data);die;
			$this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
			$this->load->view('Admin/view_product',$data);
			$this->load->view('includes/footer');
		
		}
		public function disable($id)
		{
				$this->Product_m->disable_c($id);
				redirect('Product_c/view_product');
		}
		public function enable($id)
		{
			$this->Product_m->enable_c($id);
			redirect('Product_c/view_product');
		}
		public function delete_product($id)
		{
			$this->Product_m->delete_p($id);
			redirect('Product_c/view_product');
		}
		public function fetch_product_id($id)
		{
			$data['val']=$this->Product_m->fetch_rec($id);
			$data['details']=$this->Product_m->fetch_detail($id);
			$data['discount']=$this->Product_m->disc($id);
			$d_id=$data['discount']->id; 
			$b_id= $data['details']->brand_id; 
			$c_id= $data['details']->cat_id; 
			$data['special_disc']=$this->Product_m->grp($id);
			$data['show_tax']=$this->Product_m->upd_tax($id);
			$t_id=$data['show_tax']->tax_id;
			$data['tax_name']=$this->Product_m->tx_nm($t_id);
		//echo $c_id; die;
			$data['brand_nm']=$this->Product_m->getbrandname($b_id);
			$data['cat_nm']=$this->Product_m->getcatname($c_id);
			//print_r($data['brand_nm']); die;
			$data['tax']=$this->Welcome_model->get_all_Tax_persent();
			$data['brand']=$this->Brand_m->getBrand();
			$data['disc']=$this->Product_m->view_d();
			$data['group']=$this->Customer_group_model->get_custmore();
			$data['cat']=$this->Product_m->fetch_c_cat();
			$data['atr_val']=$this->Product_m->p_atr($id);
			$data['disc_name']=$this->Product_m->getdiscountname($d_id);
			$disc_no=$data['disc_name']->discount;
			$data['disc_per']=$this->Product_m->get_disc_no($disc_no);
			$data['shipping_updt']=$this->Product_m->shiping($id);
			$data['stock_sts_up']=$this->Product_m->stock_sts_up($id);
			$data['auction_dt']=$this->Product_m->auction_pr($id);
			
			
			//echo "<pre>";
			//print_r($data['auction_dt']);die;
			
			$this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
			$this->load->view('Admin/edit_product',$data);
			$this->load->view('includes/footer');
			 
		}
					/*-------------Updating Product----------------  */
		public function update_product($id)
		{
			
						
						
						if(isset($_FILES['product_img'])){
						  $errors= array();
						  $file_name = $_FILES['product_img']['name'];
						  $file_size =$_FILES['product_img']['size'];
						  $file_tmp =$_FILES['product_img']['tmp_name'];
						  $file_type=$_FILES['product_img']['type'];
						  $file_ext=strtolower(end(explode('.',$_FILES['product_img']['name'])));
						  
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
					   /* -----1st TAB---- */
							$name=$this->input->post('product_name');
							$desc=$this->input->post('product_desc');
							$meta=$this->input->post('meta_tag_title');
							$meta_desc=$this->input->post('meta_tag_desc');
							$tags=$this->input->post('tags');
							$tag=implode(',',$tags);
							/*------2nd TAB----------  */
							$product_model=$this->input->post('product_model');
							$sku=$this->input->post('sku');
							$product_price=$this->input->post('product_price');
							$tax_class=$this->input->post('tax_class');
							$quantity=$this->input->post('quantity');
							$m_quantity=$this->input->post('m_quantity');
					        $stock_status=$this->input->post('stock_status'); 
							$require_ship=$this->input->post('require_ship');
							$product_sts=$this->input->post('product_sts');
							/* ------3rd TAB---------- */
							$brand=$this->input->post('brand');
							$category=$this->input->post('category');
							$sub_sub=$this->input->post('sub_sub');
							$rel_product=$this->input->post('rel_product');
							$attribute=$this->input->post('attribute');
							/* ------4th TAB----------- */
							$atr_name=$this->input->post('atr_name');
							$atr_imp=implode(',',$atr_name);
							$atr_desc=$this->input->post('atr_desc');
							$desc_imp=implode(',',$atr_desc);
							/* ------5th TAB----------- */
							$r1=$this->input->post('r1');
							$check_box=$this->input->post('check_b');
							$image=$this->input->post('image');
							$drop_d=$this->input->post('drop_d');
							$date_file=$this->input->post('date_file');
							/* ------6th TAB---------- */
							//$disc_qty=$this->input->post('dis_quantity');
							$discount=$this->input->post('discount');
							$discount_price=$this->input->post('discount_price');
							$start_date=$this->input->post('start_date');
							$end_date=$this->input->post('end_date');
							$user_group=$this->input->post('user_group');
							/* ------7th TAB---------- */
							$user_group=$this->input->post('user_group');
							$per_discount=$this->input->post('per_discount');
							$s_start_date=$this->input->post('s_start_date');
							$s_end_date=$this->input->post('s_end_date');
							/* --------9thtab------------ */
							$p_auction_price=$this->input->post('p_auction_price');
							//$start_date=$this->input->post('start_date');
							$hours=$this->input->post('hours');
							$auction_price=$this->input->post('auction_price');
							//$o_end_dt=$this->input->post('o_end_date');
							//$o_end_tm=$this->input->post('o_end_time');
					    /* $tbl='tbl_product'; */
						/* -------Tables Name------ */
							$tbl_product='tbl_product';
							$tbl_product_details='tbl_product_details';
							$tbl_image='tbl_product_image';
							$tbl_discount='tbl_discount_pro';
							$tbl_grp='tbl_group_disc';
							$tbl_shipping='tbl_pro_shipping';
							$tax_tbl='tbl_product_tax';
							$tbl_atr='product_atr';
							$tbl_rqr_ship=' tbl_pro_shipping';
							$tbl_auction=' tbl_auction_pro';
							$a=$_FILES['additional_img'];
							$b='uploads/';
							$atri="product_atr";
							
							
							$stock=array(
							'stock_status' =>$stock_status,
							'product_id' =>$id
						);
						$stk_id=$this->Product_m->stock_sts($stock);
						if(!empty($file_name)){
							$product=array(
								'product_name' =>$name,
								'product_desc' =>$desc,
								'meta_tag_title' =>$meta,
								'meta_tag_desc' => $meta_desc,
								'product_img' => $file_name
						);
						}else{
							$product=array(
								'product_name'=>$name,
								'product_desc' =>$desc,
								'meta_tag_title' =>$meta,
								'meta_tag_desc' => $meta_desc
								);
						}
							
						
						if(empty($sub_sub)){
							$details=array(
								'product_id'=>$id,
								'tags' => $tag,
								'model'=>$product_model,
								'sku' => $sku,
								'product_price' =>$product_price,
								'quantity' =>$quantity,
								'minimum_stock_qty'=>$m_quantity,
								'brand_id'=>$brand,
								'cat_id'=>$category,
								//'sub_cat_id' =>$sub_sub,
								'stock_status_id'=>$stk_id
							);
						}else{
						
							$details=array(
								'product_id'=>$id,
								'tags' => $tag,
								'model'=>$product_model,
								'sku' => $sku,
								'product_price' =>$product_price,
								'quantity' =>$quantity,
								'minimum_stock_qty'=>$m_quantity,
								'brand_id'=>$brand,
								'cat_id'=>$category,
								'sub_cat_id' =>$sub_sub,
								'stock_status_id'=>$stk_id
							);
						}
						
							$disc=array(
								'product_id'=>$id,
								'discount'=>$discount,
								'disc_price'=>$discount_price,
								'start_date'=>$start_date,
								'end_date'=>$end_date
							);
							
							$grp=array(
								'discount'=>$per_discount,
								'start_date'=>$s_end_date,
								'end_date'=>$s_end_date,
								'group_id'=>$user_group,
								'product_id'=>$id
							);
							
							$atr=array(
								'product_id'=>$id,
								'atr_name'=>$atr_imp,
								'atr_desc'=>$desc_imp
							);
							$ship=array(
								'product_id'=>$id,
								'require_ship' => $require_ship
							);
							$tax=array(
								'product_id' =>$id,
								'tax_id' =>$tax_class
							);
							$auction=array(
								'product_id'=>$id,
								'start_price'=>$p_auction_price,
								//'start_date'=>$start_date,
								'hours'=>$hours,
								//'end_date'=>$o_end_date,
								//'end_time'=>$o_end_time,
								'auction_price'=>$auction_price
							);
							
						$id_name='product_id';
						
						$this->Product_m->updateRecordsByid($tbl_product,$id_name,$product,$id);
						$this->Product_m->updateRecordsByid($tbl_product_details,$id_name,$details,$id);
						$this->Product_m->updateRecordsByid($tbl_discount,$id_name,$disc,$id);
						$this->Product_m->updateRecordsByid($tbl_grp,$id_name,$grp,$id);
						$this->Product_m->updateRecordsByid($tbl_atr,$id_name,$atr,$id);
						$this->Product_m->updateRecordsByid($tbl_rqr_ship,$id_name,$ship,$id);
						$this->Product_m->updateRecordsByid('tbl_product_tax',$id_name,$tax,$id);
						$this->Product_m->updateRecordsByid($tbl_auction,$id_name,$auction,$id);
						
						
					   //$this->Product_m->update_pro($id,$data);
					   redirect('Product_c/view_product');
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		public function view_gallery_img($id)
		{
			$gallery['rec']=$this->Product_m->gallery_im($id);
			$this->load->view('Admin/view_gallery',$gallery);
		}
		public function fetch_img($id)
		{
			$data['im']=$this->Product_m->edit_img($id);
			$this->load->view('Admin/edit_image',$data);
			
		}
		public function update_gal($id)
		{
			if(isset($_FILES['product_g_img'])){
						  $errors= array();
						  $file_name = $_FILES['product_g_img']['name'];
						  $file_size =$_FILES['product_g_img']['size'];
						  $file_tmp =$_FILES['product_g_img']['tmp_name'];
						  $file_type=$_FILES['product_g_img']['type'];
						  $file_ext=strtolower(end(explode('.',$_FILES['product_g_img']['name'])));
						  
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
					   $data=array(
							'images'=>$file_name
					   );
					   $this->Product_m->update_gallery($id,$data);
					   redirect('Product_c/view_product');
		}
		 public function add_attribute_group()
    {
        if($this->input->post())
        {  
            $attribute_grp_name = $this->input->post('attribute_grp_name')?$this->input->post('attribute_grp_name'):'';
            $arrdata = array(
                           "attribute_grp_name" => $attribute_grp_name
                        );
            $check = $this->Product_m->checkrecords("tbl_attribute_grp","attribute_grp_name='".$attribute_grp_name."'");
            if($check==0)
            {
                $result = $this->Product_m->insertrecords('tbl_attribute_grp', $arrdata);
                if($result)
                {
                   
                   redirect('Product_c/view_attribute_group');
                }
                else
                {
                   
                    redirect('Product_c/add_attribute_group');
                }
            }
            else
            {
                
                redirect('Product_c/add_attribute_group');
            }   
        }
        else
        {
            $this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
            $this->load->view('Admin/add_attribute_grp');
            $this->load->view('includes/footer');
			  
        }
    } 


    /* View Attribute Groups */
    public function view_attribute_group()
    {
        $data['val']=$this->Product_m->getrecords('tbl_attribute_grp');   
   $this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
        $this->load->view('Admin/view_attribute_grp', $data);
       $this->load->view('includes/footer');
			 

}
    /* Edit Attribute Group */
    public function edit_attribute_group()
    {
        $id = $this->uri->segment(3);
        $data['attribute_grp'] = $this->Product_m->getrecords('tbl_attribute_grp', "attribute_grp_id='".$id."'");
        //echo "<pre>";
        //print_r($data);
        $this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
        $this->load->view('Admin/edit_attribute_grp',$data);
       $this->load->view('includes/footer');
			 
    }

    /* Update Attribute Group */
    public function update_attribute_group($id)
    {
        if($this->input->post())
        {
            $arrdata = array(
                'attribute_grp_name' => $this->input->post('attribute_grp_name')
            );
            //update attribute data
            $update = $this->Product_m->updateRecordsByid('tbl_attribute_grp', 'attribute_grp_id', $arrdata, $id);
            if($update)
            {
                
                redirect('Product_c/view_attribute_group');
            }
            else
            {
               
                redirect('Product_c/view_attribute_group');
            }  
        }     
    } 
    
    /* Delete Attribute Group */
    public function delete_attribute_group($id)
    {
        $res = $this->Product_m->deleterow('tbl_attribute_grp', 'attribute_grp_id', $id);
        if ($res) 
        {
            
            redirect('Product_c/view_attribute_group');
        } 
        else 
        {
            
            redirect('Product_c/view_attribute_group');
        }
    }


    ////////////////////////////////////// Attributes Group Ends /////////////////////////////////////////////////////

    ////////////////////////////////////// Attributes Starts ////////////////////////////////////////////////////

    /* Add Attribute */
    public function add_attribute()
    {
        $query1 = "SELECT * FROM tbl_attribute_grp";        
        $result1 = $this->db->query($query1);
        $data['attr_grp'] = $result1->result_array();

    	if($this->input->post())
        {  
            $attribute_name = $this->input->post('attribute_name')?$this->input->post('attribute_name'):'';
            $attribute_grp_id = $this->input->post('attribute_grp_id')?$this->input->post('attribute_grp_id'):'';
            $attribute_description = htmlspecialchars($this->input->post('attribute_desc')?$this->input->post('attribute_desc'):'');
            //$attribute_terms = $this->input->post('attribute_terms')?$this->input->post('attribute_terms'):'';
            $terms = implode(',',$attribute_terms);
            $arrdata = array(
                            "attribute_name" => $attribute_name,
                            "attribute_grp_id" => $attribute_grp_id,
                            "attribute_desc" => $attribute_description
                            // "attribute_terms" => $terms
                        );
            $check = $this->Product_m->checkrecords("tbl_attribute","attribute_name='".$attribute_name."'");
            if($check==0)
            {
                $result = $this->Product_m->insertrecords('tbl_attribute', $arrdata);
                if($result)
                {
                  
                   redirect('Product_c/view_attribute');
                }
                else
                {
                	
                	redirect('Product_c/add_attribute');
                }
            }
            else
            {
            	
            	redirect('Product_c/add_attribute');
            } 	
        }
        else
        {
           $this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
            $this->load->view('Admin/add_attribute',$data);
           $this->load->view('includes/footer');
			 
        }
    } 


    /* View Attribute */
    public function view_attribute()
    {
        $data['val']=$this->Product_m->getrecords('tbl_attribute');   
    	$this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
        $this->load->view('Admin/view_attribute', $data);
        $this->load->view('includes/footer');
			 
    } 


    /* Edit Attribute */
    public function edit_attribute()
    {
        $id = $this->uri->segment(3);
        $data['attribute'] = $this->Product_m->getrecords('tbl_attribute', "attribute_id='".$id."'");
    	$this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
        $this->load->view('Admin/edit_attribute',$data);
    
			  $this->load->view('includes/footer');
    }

    /* Update Attribute */
    public function update_attribute($id)
    {
        if($this->input->post())
        {
	        $arrdata = array(
	            'attribute_name' => $this->input->post('attribute_name'),
                'attribute_grp_id' => $this->input->post('attribute_grp_id'),
	            'attribute_desc' => htmlspecialchars($this->input->post('attribute_desc'))
	            // 'attribute_terms' => implode(',',$this->input->post('attribute_terms'))
            );
	        //update attribute data
	        $update = $this->Product_m->updateRecordsByid('tbl_attribute', 'attribute_id', $arrdata, $id);
	        if($update)
	        {
	            
	            redirect('Product_c/view_attribute');
	        }
	        else
	        {
	           
	            redirect('Product_c/view_attribute');
	        }  
	    }     
    } 
    
    /* Delete Attribute */
    public function delete_attribute($id)
    {
        $res = $this->Product_m->deleterow('tbl_attribute', 'attribute_id', $id);
        if ($res) 
        {
           
	        redirect('Product_c/view_attribute');
        } 
        else 
        {
            
	        redirect('Product_c/view_attribute');
        }
    }


    ////////////////////////////////////// Attributes Ends /////////////////////////////////////////////////////

    ////////////////////////////////////// Geo Zones Starts ////////////////////////////////////////////////////

    /* Add Geo Zone */
    public function add_geozone()
    {
    	if($this->input->post())
        {  
            $geo_zone_name = $this->input->post('geo_zone_name')?$this->input->post('geo_zone_name'):'';
            $arrdata = array(
                            "geo_zone_name" => $geo_zone_name
                        );
            $check = $this->Product_m->checkrecords("tbl_geo_zones","geo_zone_name='".$geo_zone_name."'");
            if($check==0)
            {
                $result = $this->Product_m->insertrecords('tbl_geo_zones', $arrdata);
                if($result)
                {
                   
                   redirect('Product_c/view_geozone');
                }
                else
                {
                	
                	redirect('Product_c/add_geozone');
                }
            }
            else
            {
            	
            	redirect('Product_c/add_geozone');
            } 	
        }
        else
        {
           $this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
            $this->load->view('Admin/add_geozone');
            $this->load->view('includes/footer');
        }
    }

    /* View Geo Zone */
    public function view_geozone()
    {
    	$data['val']=$this->Product_m->getrecords('tbl_geo_zones');   
    	$this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
        $this->load->view('Admin/view_geozone', $data);
        $this->load->view('includes/footer');
    }

    /* Edit Geo Zone */
    public function edit_geozone()
    {
        $id = $this->uri->segment(3);
        $data['geo'] = $this->Product_m->getrecords('tbl_geo_zones', "geo_zone_id='".$id."'");
    	$this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
        $this->load->view('Admin/edit_geozone',$data);
        $this->load->view('includes/footer');
    }

    /* Update Geo Zone */
    public function update_geozone($id)
    {
        if($this->input->post())
        {
	        $arrdata = array(
	            'geo_zone_name' => $this->input->post('geo_zone_name')
            );

	        //update geo zone
	        $update = $this->Product_m->updateRecordsByid('tbl_geo_zones', 'geo_zone_id', $arrdata, $id);

	        if($update)
	        {
	           
	            redirect('Product_c/view_geozone');
	        }
	        else
	        {
	            
	            redirect('Product_c/view_geozone');
	        }  
	    }     
    } 
    
    /* Delete Geo Zone */
    public function delete_geozone($id)
    {
        $res = $this->Product_m->deleterow('tbl_geo_zones', 'geo_zone_id', $id);
        if ($res) 
        {
           
	        redirect('Product_c/view_geozone');
        } 
        else 
        {
           
	        redirect('Product_c/view_geozone');
        }
    }

    ////////////////////////////////////// Geo Zone Ends /////////////////////////////////////////////////////

    ////////////////////////////////////// Shipping Starts //////////////////////////////////////////////////

    /* Add Shipping */
    public function add_shipping()
    {
    	if($this->input->post())
        {  
            $shipping_method = $this->input->post('shipping_method')?$this->input->post('shipping_method'):'';
            $arrdata = array(
                            "shipping_method" => $shipping_method
                        );
            $check = $this->Product_m->checkrecords("tbl_shipping","shipping_method='".$shipping_method."'");
            if($check==0)
            {
                $result = $this->Product_m->insertrecords('tbl_shipping', $arrdata);
                if($result)
                {
                   
                   redirect('Product_c/view_shipping');
                }
                else
                {
                	
                	redirect('Product_c/add_shipping');
                }
            }
            else
            {
            	
            	redirect('Product_c/add_shipping');
            } 	
        }
        else
        {
           $this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
            $this->load->view('Admin/add_shipping');
            $this->load->view('includes/footer');
        }
    }

    /* View Shipping */
    public function view_shipping()
    {
    	$data['val']=$this->Product_m->getrecords('tbl_shipping');   
    	$this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
        $this->load->view('Admin/view_shipping', $data);
        $this->load->view('includes/footer');
    }

    /* Edit Shipping */
    public function edit_shipping()
    {
        $id = $this->uri->segment(3);
        $data['shipping'] = $this->Product_m->getrecords('tbl_shipping', "shipping_id='".$id."'");
    	$this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
        $this->load->view('Admin/edit_shipping',$data);
        $this->load->view('includes/footer');
    }

    /* Update Shipping */
    public function update_shipping($id)
    {
        if($this->input->post())
        {
	        $arrdata = array(
	            'shipping_method' => $this->input->post('shipping_method')
            );

	        //update geo zone
	        $update = $this->Product_m->updateRecordsByid('tbl_shipping', 'shipping_id', $arrdata, $id);

	        if($update)
	        {
	            
	            redirect('Product_c/view_shipping');
	        }
	        else
	        {
	            
	            redirect('Product_c/view_shipping');
	        }  
	    }     
    } 
    
    /* Delete Shipping */
    public function delete_shipping($id)
    {
        $res = $this->Product_m->deleterow('tbl_shipping', 'shipping_id', $id);
        if ($res) 
        {
            
	        redirect('Product_c/view_shipping');
        } 
        else 
        {
            
	        redirect('Product_c/view_shipping');
        }
    }

    /* Add Shipping Details */
    public function add_shipping_details()
    {
    	$query = "SELECT * FROM tbl_shipping";        
        $result = $this->db->query($query);
        $data['shipping_method'] = $result->result_array();
        //echo '<pre>'; print_r($data); die();

        $query1 = "SELECT * FROM tbl_geo_zones";        
        $result1 = $this->db->query($query1);
        $data['geozone'] = $result1->result_array();
        //echo '<pre>'; print_r($data); die();

    	if($this->input->post())
        {  
        	$shipping_id = $this->input->post('shipping_id')?$this->input->post('shipping_id'):'';
        	$geo_zone_id = $this->input->post('geo_zone_id')?$this->input->post('geo_zone_id'):'';
            $shipping_value = $this->input->post('shipping_value')?$this->input->post('shipping_value'):'';

            $arrdata = array(
                            "shipping_id" => $shipping_id,
                            "geo_zone_id" => $geo_zone_id,
                            "shipping_value" => $shipping_value
                        );
            $check = $this->Product_m->checkrecords("tbl_shipping_details","shipping_value='".$shipping_value."'");
            if($check==0)
            {
                $result = $this->Product_m->insertrecords('tbl_shipping_details', $arrdata);
                if($result)
                {
                   
                   redirect('Product_c/view_shipping_details');
                }
                else
                {
                	
                	redirect('Product_c/add_shipping_details');
                }
            }
            else
            {
            	
            	redirect('Product_c/add_shipping_details');
            } 	
        }
        else
        {
           $this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
            $this->load->view('Admin/add_shipping_details', $data);
            $this->load->view('includes/footer');
        }
    }

    /* View Shipping Details*/
    public function view_shipping_details()
    {
    	$data['val']=$this->Product_m->getrecords('tbl_shipping_details');
    	$this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
        $this->load->view('Admin/view_shipping_details', $data);
        $this->load->view('includes/footer');
    }

    /* Edit Shipping Details */
    public function edit_shipping_details()
    {
        $id = $this->uri->segment(3);
        $data['shipping'] = $this->Product_m->getrecords('tbl_shipping_details', "ship_detail_id='".$id."'");
        $data['geo'] = $this->Product_m->getrecords('tbl_shipping_details', "ship_detail_id='".$id."'");
    	$this->load->view('includes/header');
			  $this->load->view('includes/sidebar');
        $this->load->view('Admin/edit_shipping_details',$data);
        $this->load->view('includes/footer');
    }

    public function update_shipping_details($id)
    {
    	if($this->input->post())
        {
	        $arrdata = array(
	            'shipping_value' => $this->input->post('shipping_value'),
                'shipping_id' => $this->input->post('shipping_id'),
                'geo_zone_id' => $this->input->post('geo_zone_id')
            );

	        //update geo zone
	        $update = $this->Product_m->updateRecordsByid('tbl_shipping_details', 'ship_detail_id', $arrdata, $id);

	        if($update)
	        {
	           
	            redirect('Product_c/view_shipping_details');
	        }
	        else
	        {
	            
	            redirect('Product_c/view_shipping_details');
	        }  
	    }   
    }


    /* Delete Shipping */
    public function delete_shipping_details($id)
    {
        $res = $this->Product_m->deleterow('tbl_shipping_details', 'ship_detail_id', $id);
        if($res) 
        {
            
	        redirect('Product_c/view_shipping_details');
        } 
        else 
        {
            
	        redirect('Product_c/view_shipping_details');
        }
    }
    
    ////////////////////////////////////// Shipping Ends ///////////////////////////////////////////////////

	public function check_sku($sk)
	{
		$vl=$this->Product_m->check_sk_vl($sk);
		$a=count($vl);
		if($a > 0){ echo " <b style='color:red;'>SKU is already exists </b>"; }else{ }
	}
	public function auto_disc($a,$b)
	{
		echo $abcd;
		$d=$this->product_m->get_p_disc($a);
		$disc=$d->discount;
		$x=$b - ($b * $disc); 
		echo '<input   class="form-control col-md-7 col-xs-12" value="$x" name="discount_price"  type="text" placeholder="Discount Price">';
	}

	}
	

	

