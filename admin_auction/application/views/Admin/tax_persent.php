        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tax</h3>
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
						<?php echo validation_errors(); ?>
                    <form class="form-horizontal form-label-left"  action="<?php echo site_url('welcome/taxt_persent');?>" method="post" >

                      
                     
                      <span class="section">Tax Percent</span>

                   
					 
						  
						
						 <div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Tax class<span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
					 <?php //if(isset($show_class)){print_r($show_class);die;}?>
                         <select class="form-control col-md-7 col-xs-12" name="select_class" id="select_class"  required >
						 <option value="">Select Tax Class</option>
						 <?php
						 if(isset($show_class))
						 {
							foreach($show_class as $r) 
							{
								?>
						 <option value="<?php echo $r->id ; ?>"><?php echo $r->tax_class;?></option>
						 <?php
						 }						 }
						 ?>
						 </select>
						 <i style="color:red;"><?php echo form_error('select_class');?>
						 </i>
						 </div>
                        </div>
						<div class="item form-group" id="class" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Add Tax Percent <span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                         
						 <input class="form-control col-md-7 col-xs-12" name="add_tax_persent"  type="text"  placeholder="Enter Tax %" required>
						
					 <i style="color:red;"><?php echo form_error('add_tax_persent');?>
						 </i>
					   </div>
                        </div>
                   
                     <!--text persent-->
                      
                     
                      
                     
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
		<script>
			function hideparent()
			{
				document.getElementById('hide').style.display="none";
				document.getElementById('hidec').style.display="none";
				document.getElementById('cat_n').style.display="block";
			}
		</script>

