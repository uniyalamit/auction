        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                 <h3>CATEGORY</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <!-- <h2>Form validation <small>sub title</small></h2> -->
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left"  action="<?php echo base_url('Category_c/update_cat/').$val->cat_id;?>" method="post" enctype="multipart/form-data">

                      
                      </p>
                      <span class="section">Edit category</span>

                   
					 <?php if(isset($val)){if($val->is_parent=='Parent'){?>
						   <div class="item form-group" id="cat_n" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Category Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="catname" class="form-control col-md-7 col-xs-12"  value="<?php if(isset($val)){ echo $val->cat_name; } ?>" name="cat_name" placeholder="Enter Category Name" type="text">
                        </div>
                      </div>
					   <div class="item form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Category Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea placeholder="Category Description" id="" class="form-control col-md-7 col-xs-12"   name="cat_description">
							<?php if(isset($val)){ echo $val->cat_description; } ?>
						</textarea>
						</div>
                      </div>
					  <div class="item form-group" id="class" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Category Image<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                         
						 <input id="image" class="form-control col-md-7 col-xs-12" name="image" type="file">
						<img src="<?php echo base_url('uploads/').$val->cat_image;?>" height="100px" width="100px">
					   </div>
                        </div>
						
					 <?php }else{?>
						 <div class="item form-group" id="hidec" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Category<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12" >
                          <select  class="form-control col-md-7 col-xs-12"  name="select_cat" >
						    
							<option><?php echo $val->cat_name?></option>
							<option>--Select Category--</option>
							<?php 
								foreach($rec as $row){
							?>
							<option value="<?php echo $row->cat_id;?>"><?php echo $row->cat_name;?></option>
								<?php }?>
						  </select>
                        </div>
                        </div>
						 <div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Parent Cat Name<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="subcatname" class="form-control col-md-7 col-xs-12" value="<?php if(isset($val)){ echo $val->cat_name; } ?>" name="sub_cat" placeholder="Enter Sub Category Name"  type="text">
                        </div>
                        </div>
						 <div class="item form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Category Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea placeholder="Category Description" id="" class="form-control col-md-7 col-xs-12"   name="cat_description" placeholder="Category Description" >
							 <?php if(isset($val)){ echo $val->cat_description; } ?>
						</textarea>
						
						<b><?php //echo form_err('cat_name');?></b>
						</div>
                      </div>
						<div class="item form-group" id="class" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Category Image<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                         
						 <input id="image" class="form-control col-md-7 col-xs-12" name="image"  type="file">
						<img src="<?php echo base_url('uploads/').$val->cat_image;?>" height="100px" width="100px">
					   </div>
                        </div>
					 <?php }}?>
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
            </div>
          </div>
        </div>
        <!-- /page content -->
	

