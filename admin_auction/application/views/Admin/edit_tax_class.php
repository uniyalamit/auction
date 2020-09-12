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
					
                    <form class="form-horizontal form-label-left"  action="<?php echo site_url('welcome/edit_tax_class/').$getData->id;?>" method="post" > 
                      <span class="section">Edit Taxt Name & Class</span>
						 <div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Edit Tax Name<span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" value="<?php echo $getData->tax_class ; ?>" name="edit_text_name" placeholder="Enter Taxt Name"  type="text" required >
                        </div>
						
                        </div>
						<div class="item form-group" id="class" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Edit Tax Class<span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                         
						 <input class="form-control col-md-7 col-xs-12" value="<?php echo $getData->tax_name ; ?>"  name="edit_text_class"  type="text"  placeholder="Enter Taxt Class"  required >
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
        </div>
        <!-- /page content -->
		
