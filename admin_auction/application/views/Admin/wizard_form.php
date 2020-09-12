			
		<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Wizards</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Wizards <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              1.<br />
                                              <small>Order Detail</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              2.<br />
                                              <small>Products</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              3.<br />
                                              <small>Payment Details</small>
                                          </span>
                          </a>
                        </li>	
						                      <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              4.<br />
                                              <small>Shiping Details</small>
                                          </span>
                          </a>
                        </li>	
                        <li>
                          <a href="#step-5">
                            <span class="step_no">5</span>
                            <span class="step_descr">
                                               5.<br />
                                              <small>Totals</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Store <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control">
								<option>Default</option>
								<option></option>
								</select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 " for="last-name">Currency <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control">
								<option>Rupay</option>
								<option></option>
								</select>                    
							</div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Customer</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="middle-name" class="form-control col-md-7 col-xs-12 form-control" type="text" name="middle-name">
                            </div>
                          </div>
                         
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Group <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control">
								<option>Default</option>
								<option></option>
								</select>
							</div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Firstname<span class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Name <span class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Telephone <span class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>
							<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Fax <span class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>

                        </form>

                      </div>
                      <div id="step-2">
                        <h2 class="StepTitle">Step 2 Content</h2>
                       <div class="row">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title"> Product </th>
                            <th class="column-title">Model </th>
                            <th class="column-title">Quantity</th>
                            <th class="column-title">Unit Price</th>
                          
                            
                            <th class="column-title no-link last"><span class="nobr">Totle</span>
                            </th>             

                            <th class="column-title no-link last"><span class="nobr">Actions</span>
                            </th><?php //} ?>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span>  <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php
						  /*if(isset($get_brand))
						  {   
					  
							foreach ($get_brand as $row) {*/
                             
                          ?>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" "><?php // echo $row->id; ?></td>
                            <td class=" "><?php //echo $row->brand_name;?> </td>
                            <td class=" "><?php  //echo $row->image;?> </td>
                            <?php //if($this->session->userdata('group_id')==0) { ?>
                            <td class=" ">	<img src="<?php // echo base_url('uploads/brands/').$row->image;?> " ></td>	
                            <td class=" last"><a href="<?php //echo base_url('brand_c/view_edit_brand/').$row->id;?>"><button class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                            <td class=" last"><a href="<?php //echo base_url('brand_c/delete_brand/').$row->id;?>" onclick="return confirm('Are U Sure ????..')"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                            <?php// } ?>
                          </tr>
                          <?php
                       // }
						 // }
                          ?>
                          
                        </tbody>
                      </table>
					  </div>
					  <div class="row">
					        <div class="col-md-6 col-sm-6 col-xs-6">
							<button type="tab" class="btn btn-link col-md-12 col-sm-12 col-xs-12" onclick="button1()">button1</button>
							</div>
					        <div class="col-md-6 col-sm-6 col-xs-6">
							<button type="tab" class="btn btn-link col-md-12 col-sm-12 col-xs-12" onclick="button2()">button2</button>

							</div>
							</div>
							
							<div id="d1" class="row">
							                 <div class="x_content">

                    <form class="form-horizontal form-label-left"  action="<?php if(isset($get_brand)){echo site_url('brand_c/add_brand/').$get_brand->id;} else{echo site_url('brand_c/add_brand') ;}?>" method="post" enctype="multipart/form-data">
						
                     
                      <span class="section">Add brand</span>
						 <div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Name<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="b_name" onchange="unq_brand(this.value)" class="form-control col-md-7 col-xs-12" value="<?php if(isset($get_brand)){ echo $get_brand->brand_name; }?>" name="brand_name" placeholder="Enter Brand Name"  type="text">
							<span id="spn1"></span>
						</div>
                        </div>
						<div class="item form-group" id="class" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Image<span class="">*</span>
                        </label>
						<i style="color:red;"><?php echo form_error('brand_name');?></i>
					  <div class="col-md-6 col-sm-6 col-xs-12">

						 <input id="image" class="form-control col-md-7 col-xs-12" name="image" required="required" type="file">
					<?php if(isset($get_brand)){?><img src="<?php echo base_url('uploads/brands/').$get_brand->image;?>" style="height:175px; width:150px;"><?php		}?>
					   </div>
						
                        </div>
                     					   <i style="color:red;"><?php echo form_error('image');?></i>
						<?php if (isset($error))
									{
										echo $error;
									}
									elseif(isset($success))
									{
										echo"<script>window.alert('brand inserting successed.....');</script>";
						}?>
                      <div class="ln_solid"></div>
						<div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                </div>
							           
				</div>
							<div id="d2" class="row" style="display:none;" >
							          
							                 <div class="x_content">

                    <form class="form-horizontal form-label-left"  action="<?php if(isset($get_brand)){echo site_url('brand_c/add_brand/').$get_brand->id;} else{echo site_url('brand_c/add_brand') ;}?>" method="post" enctype="multipart/form-data">
						
                     
                      <span class="section">Add brand</span>
						 <div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Brand Name<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="b_name" onchange="unq_brand(this.value)" class="form-control col-md-7 col-xs-12" value="<?php if(isset($get_brand)){ echo $get_brand->brand_name; }?>" name="brand_name" placeholder="Enter Brand Name"  type="text">
							<span id="spn1"></span>
						</div>
                        </div>
						<div class="item form-group" id="class" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Brand Image<span class="">*</span>
                        </label>
						<i style="color:red;"><?php echo form_error('brand_name');?></i>
					  <div class="col-md-6 col-sm-6 col-xs-12">

						 <input id="image" class="form-control col-md-7 col-xs-12" name="image" required="required" type="file">
					<?php if(isset($get_brand)){?><img src="<?php echo base_url('uploads/brands/').$get_brand->image;?>" style="height:175px; width:150px;"><?php		}?>
					   </div>
						
                        </div><div class="item form-group" id="class" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product<span class="">*</span>
                        </label>
						<i style="color:red;"><?php echo form_error('brand_name');?></i>
					  <div class="col-md-6 col-sm-6 col-xs-12">

						 <input id="image" class="form-control col-md-7 col-xs-12" name="image" required="required" type="text">
					<?php if(isset($get_brand)){?><img src="<?php echo base_url('uploads/brands/').$get_brand->image;?>" style="height:175px; width:150px;"><?php		}?>
					   </div>
						
                        </div><div class="item form-group" id="class" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product<span class="">*</span>
                        </label>
						<i style="color:red;"><?php echo form_error('brand_name');?></i>
					  <div class="col-md-6 col-sm-6 col-xs-12">

						 <input id="image" class="form-control col-md-7 col-xs-12" name="image" required="required" type="text">
					<?php if(isset($get_brand)){?><img src="<?php echo base_url('uploads/brands/').$get_brand->image;?>" style="height:175px; width:150px;"><?php		}?>
					   </div>
						
                        </div><div class="item form-group" id="class" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product<span class="">*</span>
                        </label>
						<i style="color:red;"><?php echo form_error('brand_name');?></i>
					  <div class="col-md-6 col-sm-6 col-xs-12">

						 <input id="image" class="form-control col-md-7 col-xs-12" name="image" required="required" type="text">
					<?php if(isset($get_brand)){?><img src="<?php echo base_url('uploads/brands/').$get_brand->image;?>" style="height:175px; width:150px;"><?php		}?>
					   </div>
						
                        </div><div class="item form-group" id="class" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Brand Image<span class="">*</span>
                        </label>
						<i style="color:red;"><?php echo form_error('brand_name');?></i>
					  <div class="col-md-6 col-sm-6 col-xs-12">

						 <input id="image" class="form-control col-md-7 col-xs-12" name="image" required="required" type="text">
					<?php if(isset($get_brand)){?><img src="<?php echo base_url('uploads/brands/').$get_brand->image;?>" style="height:175px; width:150px;"><?php		}?>
					   </div>
						
                        </div><div class="item form-group" id="class" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Brand Image<span class="">*</span>
                        </label>
						<i style="color:red;"><?php echo form_error('brand_name');?></i>
					  <div class="col-md-6 col-sm-6 col-xs-12">

						 <input id="image" class="form-control col-md-7 col-xs-12" name="image" required="required" type="text">
					<?php if(isset($get_brand)){?><img src="<?php echo base_url('uploads/brands/').$get_brand->image;?>" style="height:175px; width:150px;"><?php		}?>
					   </div>
						
                        </div>
                     					   <i style="color:red;"><?php echo form_error('image');?></i>
						<?php if (isset($error))
									{
										echo $error;
									}
									elseif(isset($success))
									{
										echo"<script>window.alert('brand inserting successed.....');</script>";
						}?>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                </div>
							</div>
					  
                    
                      </div>
                      <div id="step-3">
                        <h2 class="StepTitle">Step 3 Content</h2>
                         <form class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Choose Address <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control">
								<option>Default</option>
								<option></option>
								</select>
                            </div>
                          </div>
                          
                          
                         
                          
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Firstname<span class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Name <span class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>
						  <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Compny</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="middle-name" class="form-control col-md-7 col-xs-12 form-control" type="text" name="middle-name">
                            </div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address 1 <span class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address 2
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">city 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>
						  	<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Postcode 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>
							<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 " for="last-name">Country <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control" required="required">
								<option>India</option>
								<option></option>
								</select>                    
							</div>
                          </div>
						  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Group <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control">
								<option>Default</option>
								<option></option>
								</select>
							</div>
                          </div>
						  

                        </form>
                      </div>
                      <div id="step-4">
                        <h2 class="StepTitle">Step 4 Content</h2>
                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Choose Address <span class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control">
								<option>Default</option>
								<option></option>
								</select>
                            </div>
                          </div>
                          
                          
                         
                          
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Firstname<span class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Name <span class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>
						  <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Compny</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="middle-name" class="form-control col-md-7 col-xs-12 form-control" type="text" name="middle-name">
                            </div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address 1 <span class="required" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address 2 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">city 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>
						  	<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Postcode 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            </div>
                          </div>
							<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 " for="last-name">Country <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control" required="required">
								<option>India</option>
								<option></option>
								</select>                    
							</div>
                          </div>
						  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Group <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control">
								<option>Default</option>
								<option></option>
								</select>
							</div>
                          </div>
						  

                        </form>
                      </div>
					  <div id="step-5">
                        <h2 class="StepTitle">Step 5 Content</h2>
                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Shiping Method <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12 input-group">
								 <select name="shipping_method" id="input-shipping-method" class="form-control">
					  <option value=""> --- Please Select --- </option>
					  <optgroup label="Flat Rate">
					  <option value="flat.flat" selected="selected">Flat Shipping Rate - ₹5</option></optgroup></select>
                      <span class="input-group-btn">
                      <button type="button" id="button-shipping-method" data-loading-text="Loading..." class="btn btn-primary">Apply</button>
                      </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Payment Method <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12 input-group">
								 <select name="shipping_method" id="input-shipping-method" class="form-control">
					  <option value=""> --- Please Select --- </option>
					  <optgroup label="Flat Rate">
					  <option value="flat.flat" selected="selected">Cash On Delivery</option></optgroup></select>
                      <span class="input-group-btn">
                      <button type="button" id="button-shipping-method" data-loading-text="Loading..." class="btn btn-primary">Apply</button>
                      </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cupon <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12 input-group">
								 <select name="shipping_method" id="input-shipping-method" class="form-control">
					  <option value=""> --- Please Select --- </option>
					  <optgroup label="Flat Rate">
					  <option value="flat.flat" selected="selected">Cash On Delivery</option></optgroup></select>
                      <span class="input-group-btn">
                      <button type="button" id="button-shipping-method" data-loading-text="Loading..." class="btn btn-primary">Apply</button>
                      </span>
                            </div>
                          </div>
                         
                          
						<div class="form-group ">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 ">Vouchur
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12 input-group">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" required="required" type="text">
                            <span class="input-group-btn">
                      <button type="button" id="button-shipping-method" data-loading-text="Loading..." class="btn btn-primary">Apply</button>
                      </span>
							</div>
                          </div>
						<div class="form-group ">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Reward 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12  input-group">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 " required="required" type="text">
                            <span class="input-group-btn">
                      <button type="button" id="button-shipping-method" data-loading-text="Loading..." class="btn btn-primary">Apply</button>
                      </span>
							</div>
                          </div>
						  <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Order Status</label>
                            <div class="col-md-6 col-sm-6 col-xs-12  input-group">
								<select class="form-control" required="required">
								<option>Default</option>
								<option></option>
								</select>                    
						   </div>
                          </div>
						<div class="form-group">
                            <label for="comment" class="control-label col-md-3 col-sm-3 col-xs-12 form_control">Comment 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12 input-group">
							<textarea name="comment" class="col-md-7 col-xs-12 form-control"></textarea>
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Affiliate 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12 input-group">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" name="affiliate" type="text">
                            </div>
                          </div>
						 </form>
                      </div>

                    </div>
                    <!-- End SmartWizard Content -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		<script>
		function button1() {
			document.getElementById('d1').style.display="block";
			document.getElementById('d2').style.display="none";
		}
		function button2() {
			document.getElementById('d1').style.display="none";
			document.getElementById('d2').style.display="block";

		}

		</script>
