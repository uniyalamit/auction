
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>coupan</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>coupan<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  <?php if(isset($coupan_save) && $coupan_save!=''){?>
					<div class="alert alert-success "style="text-align:center;">
					  <strong > <?php echo $coupan_save;?></strong>
					</div>
					 
				  <?php }?>
				  
                    <form class="form-horizontal form-label-left"  action="<?php if(isset($cp)){ echo base_url('Product_c/edit_coupan/').$cp->id; } echo base_url('Product_c/save_coupan');?>" method="post" enctype="multipart/form-data">

                      
                      </p>
                      <span class="section" style="text-align:center;">Coupan Code</span>

                   <h1 style="text-align:center;color:red;"><?php if(isset($uniq)){echo $uniq ;}?></h1>
				 <div class="item form-group" id="cat_n" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Start Date<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="catname" class="form-control col-md-7 col-xs-12"  value="<?php if(isset($cp)){ echo $cp->start_date; }?>" name="start_date"  type="date">
                        </div>
                      </div>
						   <div class="item form-group" id="cat_n" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Expire Date<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="catname" class="form-control col-md-7 col-xs-12"  value="<?php if(isset($cp)){ echo $cp->expire_date; }?>"  name="expire_date"  type="date">
                        </div>
                      </div>
					   <div class="item form-group" id="cat_n" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Num of coupan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="catname" class="form-control col-md-7 col-xs-12"   value="<?php if(isset($cp)){ echo $cp->no_of_coupan; }?>" name="no_of_coupan"  type="number">
                        </div>
                      </div>
					  <input type="hidden" name="coupan" value="<?php if(isset($uniq)){ echo $uniq;}?>">
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
       $('.alert').delay(1000).fadeOut(400)
        </script>
	
