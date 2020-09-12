        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>MODULE</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <!-- <h2>Form validation <small></small></h2> -->
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left"  action="<?php if(isset($view_module_id)){ echo base_url('Module_c/add_module/').$view_module_id->id; } else{echo base_url('Module_c/add_module') ; }?>" method="post" >
					
                       <span class="section">User Module</span>
						<div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Group<span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
					  <select  class="form-control "  name="select_group" required>
						<option value="">select group</option>
						    <?php
							foreach($rows as $group){ ?>
							<option value="<?php echo $group->g_id;?>" ><?php echo $group->g_name;?></option>
							<?php } ?>
						  </select>                        </div>
						<i style="color:red;"><?php echo form_error('username');?></i>
                        </div>
						<div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">User Module<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
						<p style="padding: 5px;"><?php if(isset($view_module_id)){ $q=explode(',',$view_module_id->module_name); } ?>
                        <input type="checkbox" name="modules[]" id="hobby2" value="category" <?php if(isset($q)){  if(in_array('category',$q)){ ?>checked <?php  } }?> class="flat" /> Category
                        <br />

                        <input type="checkbox" name="modules[]" id="hobby3" value="class_tax" <?php if(isset($q)){  if(in_array('class_tax',$q)){ ?>checked <?php } }?> class="flat" /> Tax Class
                        <br />

                        <input type="checkbox" name="modules[]" id="hobby4" value="user_group" <?php if(isset($q)){  if(in_array('user_group',$q)){ ?>checked <?php } }?> class="flat" /> User Group
                        <br />
						<input type="checkbox" name="modules[]" id="hobby1" value="user" <?php if(isset($q)){   if(in_array('user',$q)){ ?>checked <?php } }?>  class="flat" /> User
                        <br />

                        <input type="checkbox" name="modules[]" id="hobby2" value="brand" <?php if(isset($q)){  if(in_array('brand',$q)){ ?>checked <?php } }?> class="flat" /> Brand
                        <br />

                        <input type="checkbox" name="modules[]" id="hobby3" value="option" <?php if(isset($q)){  if(in_array('option',$q)){ ?>checked <?php } }?> class="flat" /> Option
                        <br />

                        <input type="checkbox" name="modules[]" id="hobby4" value="feature_product" <?php if(isset($q)){  if(in_array('feature_product',$q)){ ?>checked <?php } }?> class="flat" /> Feature Product
                        <br />
                        <input type="checkbox" name="modules[]" id="hobby4" value="about" <?php if(isset($q)){  if(in_array('about',$q)){ ?>checked <?php } }?> class="flat" /> About
                        <br />
                        <input type="checkbox" name="modules[]" id="hobby4" value="delivery_information" <?php if(isset($q)){  if(in_array('delivery_information',$q)){ ?>checked <?php } }?> class="flat" /> Delivery Information
                        <br />
                        <input type="checkbox" name="modules[]" id="hobby4" value="privacy_policies" <?php if(isset($q)){  if(in_array('privacy_policies',$q)){ ?>checked <?php } }?> class="flat" /> Privacy Policies
                        <br />
                        <input type="checkbox" name="modules[]" id="hobby4" value="terms_condition" <?php if(isset($q)){  if(in_array('terms_condition',$q)){ ?>checked <?php } }?> class="flat" /> Terms&Condition
                        <br />
                        <input type="checkbox" name="modules[]" id="hobby4" value="return_policies" <?php if(isset($q)){  if(in_array('return_policies',$q)){ ?>checked <?php } }?> class="flat" /> Return Policies
                        <br />
                        <input type="checkbox" name="modules[]" id="hobby4" value="store" <?php if(isset($q)){  if(in_array('store',$q)){ ?>checked <?php } }?> class="flat" /> Store
                        <br />
                        <input type="checkbox" name="modules[]" id="hobby4" value="custmore_group" <?php if(isset($q)){  if(in_array('custmore_group',$q)){ ?>checked <?php } }?> class="flat" /> Customer Group
                        <br />
                        
                        <input type="checkbox" name="modules[]" id="hobby4" value="add_user" <?php if(isset($q)){  if(in_array('add_user',$q)){ ?>checked <?php } }?> class="flat" /> Add User
                        <br />
                        <input type="checkbox" name="modules[]" id="hobby4" value="currency" <?php if(isset($q)){  if(in_array('currency',$q)){ ?>checked <?php } }?> class="flat" /> Currency
                        <br />
                         <input type="checkbox" name="modules[]" id="hobby4" value="users" <?php if(isset($q)){  if(in_array('users',$q)){ ?>checked <?php } }?> class="flat" /> Users
                        <br />
                        <input type="checkbox" name="modules[]" id="hobby4" value="review" <?php if(isset($q)){  if(in_array('review',$q)){ ?>checked <?php } }?> class="flat" /> Users
                        <br />

                        <p>                        </div>
                        </div>
						
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
		<script>
			function hideparent()
			{
				document.getElementById('hide').style.display="none";
				document.getElementById('hidec').style.display="none";
				document.getElementById('cat_n').style.display="block";
			}
		</script>

