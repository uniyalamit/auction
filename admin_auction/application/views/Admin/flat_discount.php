        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>DISCOUNT</h3>
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

                    <form class="form-horizontal form-label-left"  action="<?php if(isset($fetched)){ echo base_url('Product_c/edit_disc/').$fetched->id; }else { echo base_url('Product_c/add_discount');} ?>" method="post" enctype="multipart/form-data">

                      
                      </p>
					  <p style="text-align:center;color:red"><?php if(isset($failed) && $failed!=''){ echo $failed;}?></p>
                      <span class="section" style="text-align:center;">Add Discount</span>

                   
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Discount Name<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <select   class="form-control col-md-7 col-xs-12"  name="select_dic"  >
						  <?php if(isset($fetched)){?>
						  <option value="<?php  echo $fetched->discount_id; ?>"><?php echo $fetched->discount_id;?></option> <?php }?>
							<option>--Select Discount--</option>
							<?php 
								if(isset($disc)){
									foreach( $disc as $row){
							?>
							<option value="<?php echo $row->discount_id;?>"><?php echo $row->discount_type?></option>
								<?php }}?>
						  </select>
						    <span style="color:red;"><?php echo form_error('select_disc'); ?></span>
                        </div>
                        </div>
						  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Add Discount<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" name="add_disc" value="<?php if(isset($fetched)){ echo $fetched->discount ; }?>" placeholder="Add Discount"  type="text">
                        <span style="color:red;"><?php echo form_error('add_disc'); ?></span>
						</div>
                        </div>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">  Discount Start Date<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" name="start_date" value="<?php if(isset($fetched)){ echo $fetched->start_date ; }?>"   type="date">
                          <span style="color:red;"><?php echo form_error('start_date'); ?></span>
						</div>
                        </div>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Discount End Date<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" name="end_date" value="<?php if(isset($fetched)){ echo $fetched->end_date ; }?>" placeholder="Percent Flat Discount"  type="date">
						  <span style="color:red;"><?php echo form_error('end_date'); ?></span>
					   </div>
                        </div>
                      <div class="ln_solid"></div>
                      <div class="form-group" style="text-align:center;">
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
$(document).ready(function(){
    $("#check").click(function(){
        $("#cat_n").toggle();
        $("#hide").toggle();
        $("#hidec").toggle();
    });
});
</script>
