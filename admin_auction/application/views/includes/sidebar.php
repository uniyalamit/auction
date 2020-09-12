
<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url(); ?>" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>assests/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
               
			   <h2><b><?php  echo $_SESSION['username']; ?></b></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
			
            <!-- sidebar menu -->
			
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
				<?php
				include('connection.php');
				
				$select=" select * from user_module";
				$query=mysqli_query($connect,$select);
				while($r=mysqli_fetch_array($query)){
				$q=explode(',',$r['module_name']);
					
				if($_SESSION['group_id']==$r['group_id'] )
					{	if($q)		{ ?>
                <ul class="nav side-menu">
				<li value="task" <?php if(in_array('task',$q) ){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?> ><a><i class="fa fa-home" ></i> Task <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
				    <li><a href="<?php echo base_url('module_c/user_module'); ?>">User Module</a></li>  
				    <li><a href="<?php echo base_url('module_c/view_module'); ?>">View Module</a></li>  
	
				    <li><!--a href="<?php //echo site_url('Newsletter/index'); ?>">Newsletter</a></li-->  
					</ul>
                  </li>
				  
                 
				  
				  <li value="class_tax" <?php if(in_array('class_tax',$q)){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?>><a><i class="fa fa-home"></i> Class <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Welcome/add_tax_class'); ?>">Add Tax Class</a></li>
                      <li><a href="<?php echo base_url('Welcome/taxPersent'); ?>">Add Tax Percent </a></li>
                      <li><a href="<?php echo base_url('Welcome/view_tax_class'); ?>">View Tax Percent</a></li>
                      <li><a href="<?php echo base_url('Welcome/view_tax_persent'); ?>">view Tax Persent</a></li>
                    </ul>
                  </li>
                  

                  <li value="about" <?php if(in_array('about',$q)){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?>><a><i class="fa fa-home"></i> About <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a id="demo" href="<?php echo base_url('About_controller/about');?>">Add</a></li>
                      <li><a href="<?php echo base_url('About_controller/about_view');?>" >Upadate</a></li>
                    </ul>
                  </li>

                <li value="delivery_information" <?php if(in_array('delivery_information',$q)){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?>><a><i class="fa fa-home"></i>Delivery Information<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a id="d_add" href="<?php echo base_url('Delivery_controller/about_des');?>">Add</a></li>
                      <li><a href="<?php echo base_url('Delivery_controller/delivery_view');?>">Upadate</a></li>
                    </ul>
                </li>

                <li value="privacy_policies" <?php if(in_array('privacy_policies',$q)){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?>><a><i class="fa fa-home"></i> Privacy Policies <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a id="p_add" href="<?php echo base_url('Privacy_controller/about_privacy');?>">Add</a></li>
                      <li><a href="<?php echo base_url('Privacy_controller/privacy_view');?>" >Upadate</a></li>
                    </ul>
                </li>

                <li value="terms_condition" <?php if(in_array('terms_condition',$q)){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?>><a><i class="fa fa-home"></i>Terms & Conditions <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a id="tc_add" href="<?php echo base_url('Tc_controller/about_tc');?>">Add</a></li>
                      <li><a href="<?php echo base_url('Tc_controller/tc_view');?>" >Upadate</a></li>
                    </ul>
                </li>

                <li value="return_policies" <?php if(in_array('return_policies',$q)){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?>><a><i class="fa fa-home"></i> Return Policies <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a id="rp_add" href="<?php echo base_url('Returnp_controller/about_rp');?>">Add</a></li>
                      <li><a href="<?php echo base_url('Returnp_controller/rp_view');?>" >Upadate</a></li>
                    </ul>
                </li>

                <li value="store" <?php if(in_array('store',$q)){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?>><a><i class="fa fa-home"></i> Store <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a id="store_add" href="<?php echo base_url('Store_controller/store');?>">Add</a></li>
                      <li><a href="<?php echo base_url('Store_controller/store_view');?>" >Upadate</a></li>
                    </ul>
                </li>

                <li value="custmore_group" <?php if(in_array('custmore_group',$q)){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?>><a><i class="fa fa-home"></i>Customer Group<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a id="store_add" href="<?php echo base_url('Customer_group_controller/custmore'); ?>">Add</a></li>
                      <li><a href="<?php echo base_url('Customer_group_controller/cgroup_view'); ?>" >Upadate</a></li>
                    </ul>
                </li>

                <li value="add_user" <?php if(in_array('add_user',$q)){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?>><a><i class="fa fa-home"></i>Add User<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a id="store_add" href="<?php echo base_url('Add_user_controller/user_add'); ?>">Add</a></li>
                    </ul>
                  </li>
                <li value="currency" <?php if(in_array('currency',$q)){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?>><a><i class="fa fa-home"></i> Currency <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Currency_c/Currency'); ?>">Add Currency</a></li>
                      <li><a href="<?php echo base_url('Currency_c/currency_data'); ?>">View Currency</a></li>
                      <li><a href="<?php echo base_url('Currency_c/currency_value'); ?>">Add & Edit Currency Value</a></li>
                    </ul>
                </li>
                  <li value="users" <?php if(in_array('users',$q)){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?>><a><i class="fa fa-home"></i>Users<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <li><a href="<?php echo base_url('Register_c/register_user'); ?>">Create User</a></li>
                      <li><a href="<?php echo base_url('Register_c/view_user'); ?>">View User</a></li>
                    </ul>
                  </li>
						

				   <li value="user_group" <?php if(in_array('user_group',$q)){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?>><a><i class="fa fa-home"></i> User Group<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Group/add_group'); ?>">Insert Group</a></li>                     
                      <li><a href="<?php echo base_url('Group/group_view'); ?>">view Group</a></li>                                           
                    </ul>
                  </li>
                  
				  <!-- <li value="user" <?php //if(in_array('user',$q)){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?> ><a><i class="fa fa-home"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php //echo site_url('Register_c/register_user'); ?>">Create User</a></li>
                      <li><a href="<?php// echo site_url('Register_c/view_user'); ?>">View User</a></li>
                      
                    </ul>
                  </li> -->

				   <li vlaue="brand" <?php if(in_array('brand',$q)){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?>><a><i class="fa fa-home"></i> Brand <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Brand_c/create_brand'); ?>">Create Brand</a></li>
                      <li><a href="<?php echo base_url('Brand_c/view_brand'); ?>">View Brand</a></li>
                      
                    </ul>
                  </li>
				  <li value="option" <?php if(in_array('option',$q)){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?>><a><i class="fa fa-home"></i> Option<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Option_c/view_option'); ?>">Create Option Table</a></li>
                      <li><a href="<?php echo base_url('Option_c/get_val_tbl'); ?>">View Option's</a></li>
                     
                      
                    </ul>
                  </li>
                    <li value="feature_product" <?php if(in_array('feature_product',$q)){?>style="display:block;"<?php } else {?>style="display:none;"<?php }?>><a><i class="fa fa-home"></i> Feature Product<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('FeturPro_c/insert_featurePro'); ?>">Insert feature Product</a></li>                     
                      <li><a href="<?php echo base_url('FeturPro_c/get_featurePro'); ?>">view feature Product</a></li>                     
                      <li><a href="<?php echo base_url('FeturPro_c/view_get_feturPro'); ?>"> feature Product</a></li>                     
                      
                    </ul>
                  </li>
				 
                  
                 
                  
				</ul><?php  
					}
				}
				
				if($_SESSION['group_id']==0){?>
					 <ul class="nav side-menu">
				<li value="task" ><a><i class="fa fa-home" ></i> Task <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
				    <li><a href="<?php echo base_url('module_c/user_module'); ?>">User Module</a></li>  
				    <li><a href="<?php echo base_url('module_c/view_module'); ?>">View Module</a></li>  
				    <li><!--a href="<?php //echo site_url('Newsletter/index'); ?>">Newsletter</a></li-->  

					</ul>
					<li value="product_status" ><a><i class="fa fa-home"></i> Order Status <span class="fa fa-chevron-down"></span></a>
				  
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Prostatus_c/add_product_status'); ?>">Add status</a></li>
                      <li><a href="<?php echo base_url('Prostatus_c/view_status'); ?>">View Status</a></li>
                      
                    </ul>
                  </li>
				  <li value="order_history" ><a><i class="fa fa-home"></i> Order History<span class="fa fa-chevron-down"></span></a>
				  
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Orderhistory_c/order_history'); ?>">Add Order_History</a></li>
                      
                    </ul>
                  </li>
                  

                  <li><a><i class="fa fa-home"></i> About <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a id="demo" href="<?php echo base_url('About_controller/about');?>">Add</a></li>
                      <li><a href="<?php echo base_url('About_controller/about_view');?>" >Upadate</a></li>
                    </ul>
                  </li>

                <li><a><i class="fa fa-home"></i>Delivery Information<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a id="d_add" href="<?php echo base_url('Delivery_controller/about_des');?>">Add</a></li>
                      <li><a href="<?php echo base_url('Delivery_controller/delivery_view');?>">Upadate</a></li>
                    </ul>
                </li>

                <li><a><i class="fa fa-home"></i> Privacy Policies <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a id="p_add" href="<?php echo base_url('Privacy_controller/about_privacy');?>">Add</a></li>
                      <li><a href="<?php echo base_url('Privacy_controller/privacy_view');?>" >Upadate</a></li>
                    </ul>
                </li>

                <li><a><i class="fa fa-home"></i>Terms & Conditions <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a id="tc_add" href="<?php echo base_url('Tc_controller/about_tc');?>">Add</a></li>
                      <li><a href="<?php echo base_url('Tc_controller/tc_view');?>" >Upadate</a></li>
                    </ul>
                </li>

                <li><a><i class="fa fa-home"></i> Return Policies <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a id="rp_add" href="<?php echo base_url('Returnp_controller/about_rp');?>">Add</a></li>
                      <li><a href="<?php echo base_url('Returnp_controller/rp_view');?>" >Upadate</a></li>
                    </ul>
                </li>

                <li><a><i class="fa fa-home"></i> Store <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a id="store_add" href="<?php echo base_url('Store_controller/store');?>">Add</a></li>
                      <li><a href="<?php echo base_url('Store_controller/store_view');?>" >Upadate</a></li>
                    </ul>
                </li>
                 <li><a><i class="fa fa-home"></i> Category <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Category_c/category'); ?>">Add Category</a></li>
                      <li><a href="<?php echo base_url('Category_c/view_cat'); ?>">View Category</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-home"></i> Discount <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Product_c/Add_disc'); ?>">Add Discount</a></li>
                      <li><a href="<?php echo base_url('Product_c/view_disc'); ?>">view Discount</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> Coupan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Product_c/gen_coupan'); ?>">Generate Coupan</a></li>
                      <li><a href="<?php echo base_url('Product_c/view_coupan'); ?>">View Coupan</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> Product <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Product_c/add_p'); ?>">Add product</a></li>
              <li><a href="<?php echo base_url('Product_c/view_product'); ?>">View Product</a></li>
                     
                      
                    </ul>
                  </li>
                 <!--  <li><a><i class="fa fa-home"></i> Option'S<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php //echo base_url('Option_c/view_option'); ?>">Create Option Table</a></li>
                      <li><a href="<?php// echo base_url('Option_c/get_val_tbl'); ?>">View Option's</a></li>
                    </ul>
                  </li> -->
                  <li><a><i class="fa fa-home"></i> Geo Zone <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Product_c/add_geozone'); ?>">Add Geo Zone</a></li>
                      <li><a href="<?php echo base_url('Product_c/view_geozone'); ?>">View Geo Zones</a></li> 
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> Attribute <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Product_c/add_attribute_group'); ?>">Add Attribute Group</a></li>
                      <li><a href="<?php echo base_url('Product_c/view_attribute_group'); ?>">View Attributes Group</a></li> 
                      <li><a href="<?php echo base_url('Product_c/add_attribute'); ?>">Add Attribute</a></li>
                      <li><a href="<?php echo base_url('Product_c/view_attribute'); ?>">View Attributes</a></li> 
                    </ul>
                  </li>
                <li><a><i class="fa fa-home"></i>Customer Group<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a id="store_add" href="<?php echo base_url('Customer_group_controller/custmore'); ?>">Add</a></li>
                      <li><a href="<?php echo base_url('Customer_group_controller/cgroup_view'); ?>" >Upadate</a></li>
                    </ul>
                </li>

                <li><a><i class="fa fa-home"></i>Add User<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a id="store_add" href="<?php echo base_url('Add_user_controller/user_add'); ?>">Add</a></li>
                    </ul>
                  </li>
                <li><a><i class="fa fa-home"></i> Currency <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Currency_c/Currency'); ?>">Add Currency</a></li>
                      <li><a href="<?php echo base_url('Currency_c/currency_data'); ?>">View Currency</a></li>
                      <li><a href="<?php echo base_url('Currency_c/currency_value'); ?>">Add & Edit Currency Value</a></li>
                    </ul>
                </li>
                  <li><a><i class="fa fa-home"></i>Users<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <li><a href="<?php echo base_url('Register_c/register_user'); ?>">Create User</a></li>
                      <li><a href="<?php echo base_url('Register_c/view_user'); ?>">View User</a></li>
                    </ul>
                  </li>
				  
				  
                  
				  
				  
				  <li value="class_tax" ><a><i class="fa fa-home"></i> Tax Class <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Welcome/add_tax_class'); ?>">Add Tax Class</a></li>
                      <li><a href="<?php echo base_url('Welcome/taxPersent'); ?>">Add Tax Percent </a></li>
                      <li><a href="<?php echo base_url('Welcome/view_tax_class'); ?>">View Tax Class</a></li>
                      <li><a href="<?php echo base_url('Welcome/view_tax_persent'); ?>">view Tax Percent</a></li>
                      <li><a href="<?php echo base_url('Welcome/get_tax_report_data'); ?>">Tax Report</a></li>
                    </ul>
                  </li>
						

				   <li value="user_group" ><a><i class="fa fa-home"></i> User Group<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Group/add_group'); ?>">Insert Group</a></li>                     
                      <li><a href="<?php echo base_url('Group/group_view'); ?>">view Group</a></li>                                           
                    </ul>
                  </li>
				  <!-- <li value="user"  ><a><i class="fa fa-home"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php //echo site_url('Register_c/register_user'); ?>">Create User</a></li>
                      <li><a href="<?php //echo site_url('Register_c/view_user'); ?>">View User</a></li>
                      
                    </ul>
                  </li> -->

				   <li vlaue="brand"><a><i class="fa fa-home"></i> Brand <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Brand_c/create_brand'); ?>">Create Brand</a></li>
                      <li><a href="<?php echo base_url('Brand_c/view_brand'); ?>">View Brand</a></li>
                      
                    </ul>
                  </li>
				  <li value="option" ><a><i class="fa fa-home"></i> Option<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Option_c/view_option'); ?>">Create Option Table</a></li>
                      <li><a href="<?php echo base_url('Option_c/get_val_tbl'); ?>">View Option's</a></li>
                     
                      
                    </ul>
                  </li>
                    <li value="feature_product"><a><i class="fa fa-home"></i> Feature Product<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('FeturPro_c/insert_featurePro'); ?>">Insert feature Product</a></li>                     
                      <li><a href="<?php echo base_url('FeturPro_c/get_featurePro'); ?>">view feature Product</a></li>                     
                      <!-- <li><a href="<?php //echo site_url('feturPro_c/view_get_feturPro'); ?>"> feture Product</a></li> -->                     
                      
                    </ul>
                  </li>
                  <li ><a><i class="fa fa-home"></i> Review<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Review_c/review_view'); ?>">View Review</a></li>                     
                                                                
                    </ul>
                  </li>
                  <li ><a><i class="fa fa-home"></i>Return Status<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Return_status_c/return_status'); ?>">Add Return Status</a></li>                     
                      <li><a href="<?php echo base_url('Return_status_c/view_return_status'); ?>">View Return Status</a></li>                                        
                    </ul>
                  </li>
                  <li ><a><i class="fa fa-home"></i>Return Reasons<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Return_reasons_c/return_reasons'); ?>">Add Return Reasons</a></li>                     
                      <li><a href="<?php echo base_url('Return_reasons_c/view_return_reasons'); ?>">View Return Reasons</a></li>                                        
                    </ul>
                  </li>
                   <li ><a><i class="fa fa-home"></i>Stock Status<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Stock_status_c/stock_status'); ?>">Add Stock Status</a></li>                     
                      <li><a href="<?php echo base_url('Stock_status_c/view_stock_status'); ?>">View Stock Status</a></li>                                        
                    </ul>
                  </li>
                  <!--  -->
                  <li ><a><i class="fa fa-home"></i>Order Retrun(pendding r)<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Add Return Status</a></li>                     
                      <li><a href="#">View Return Status</a></li>                                     
                    </ul>
                  </li>
                  <li ><a><i class="fa fa-home"></i>Shipping<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Shipping_c/add_shipping'); ?>">Add Shipping</a></li>                     
                      <li><a href="<?php echo base_url('Shipping_c/view_shipping'); ?>">View Shipping</a></li>
                      <li><a href="<?php echo base_url('Shipping_c/shipping_report'); ?>">View Shipping Report</a></li>                                       
                    </ul>
                  </li>
                  <li ><a><i class="fa fa-home"></i>Stock Report<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Stock_report_c/stock_report'); ?>">view stock report</a></li>                     
                                                              
                    </ul>
                  </li>
                   <li ><a><i class="fa fa-home"></i>News Letter Subscription<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Newsletter_c/view_newsletter'); ?>">Send Newsletter</a></li>                     
                                                              
                    </ul>
                  </li>
                   <li ><a><i class="fa fa-home"></i>Most View Product<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Most_view_c/view_product'); ?>">View Product</a></li>                     
                                                              
                    </ul>
                  </li>
				 
                  
                 
                  
				</ul><?php 
				}
				?>
								
				  
              </div>
            

				</div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>