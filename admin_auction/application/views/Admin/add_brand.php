        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> BRAND</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   <!--  <h2>Form validation <small>sub title</small></h2> -->
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left"  action="<?php if(isset($get_brand)){echo base_url('Brand_c/add_brand/').$get_brand->id;} else{echo base_url('Brand_c/add_brand') ;}?>" method="post" enctype="multipart/form-data">
						
                      </p>
                      <span class="section">Add brand</span>
						 <div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Brand Name<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="b_name" onchange="unq_brand(this.value)" class="form-control col-md-7 col-xs-12" value="<?php if(isset($get_brand)){ echo $get_brand->brand_name; }?>" name="brand_name" placeholder="Enter Brand Name"  type="text" required>
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
		<script type="text/javascript">
	function unq_brand(val)
	{
		
		$.ajax({
						
						url:'<?php echo site_url('brand_c/unq_brand/')?>'+val,
						success: function(res){
							//alert(res);

							$("#spn1").html(res);
						}
					});
	}
</script>

