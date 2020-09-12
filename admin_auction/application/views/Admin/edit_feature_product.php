        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Validation</h3>
              </div>

             
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form validation <small>sub title</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					
                    <form class="form-horizontal form-label-left"  action="<?php echo site_url('feturPro_c/updt_feature_project/').$viewdata->id ;?>" method="post" enctype="multipart/form-data">

                      
                      </p>
                      <span class="section">Add category</span>

                   
					 
						  
						 <div class="item form-group" id="hidec" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Category<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12" >
                          <select  class="form-control col-md-7 col-xs-12"  name="select_cat" >
						    
							<option>--Select Category--</option>
							<?php 
								foreach($getCom as $row){
							?>
							<option value="<?php echo $row->id;?>"><?php echo $row->brand_name;?></option>
								<?php }?>
						  </select>
                        </div>
                        </div>
						 <div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Feature Product Name<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="subcatname" class="form-control col-md-7 col-xs-12" value="<?php if(isset($viewdata)){ echo $viewdata->feature_product; }?>" name="featurePro" placeholder="Enter Sub Category Name"  type="text">
                        </div>
                        </div>
						
                     
                      
                     
                      
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
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

