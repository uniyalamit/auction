 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add product</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">

                    <form class="form-horizontal form-label-left"  action="<?php echo base_url('Product_c/update_gal/').$im->pimg_id; ?>" method="post" enctype="multipart/form-data">

                      
                      </p>
					  <p style="text-align:center;color:red"><?php if(isset($failed) && $failed!=''){ echo $failed;}?></p>
                      <span class="section" style="text-align:center;">Edit Image</span>

                   
					  
						 
						
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Product image<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" name="product_g_img" accept=".png,.jpg,.jpeg,.gif" required type="file">
						<img src="<?php echo base_url('uploads/').$im->images; ?>" height="100px" width="100px">
						 <span style="color:red;"><?php echo form_error(''); ?></span>
					   </div>
                        </div>
						
                      <div class="ln_solid"></div>
                      <div class="form-group" style="text-align:center;">
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
		
