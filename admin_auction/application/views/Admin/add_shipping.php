<script>
$(document).ready(function()
{
	//alert('hii');
    $("#shipping_id").change(function()
	{
		//alert('hii');
        $.post("<?php echo base_url()?>/Shipping_c/check_shipping_method",
        {
          shipping_method_name : $("#shipping_id").val(),
          country_id : $("#country").val() 
          //alert('hii');
        },
        function(data,status)
		{
			//alert(data);
            if(data== 1)
			{
				document.getElementById('shipping_response').style.display="block";
				document.getElementById('country_response').style.display="block";
				document.getElementById('shipping_id').value='';
				document.getElementById('country').value='';
				document.getElementById('shipping_id').focus();
			}
			else
			{
				document.getElementById('shipping_response').style.display="none";
				
			}
        });
    });
	  $("#country").change(function()
	{
		//alert('hii');
        $.post("<?php echo base_url()?>/Shipping_c/check_shipping_method",
        {
          shipping_method_name : $("#shipping_id").val(),
          country_id : $("#country").val() 
          //alert('hii');
        },
        function(data,status)
		{
			//alert(data);
            if(data== 1)
			{
				document.getElementById('shipping_response').style.display="block";
				document.getElementById('country_response').style.display="block";
				document.getElementById('shipping_id').value='';
				document.getElementById('country').value='';
				document.getElementById('shipping_id').focus();
			}
			else
			{
				document.getElementById('shipping_response').style.display="none";
				
			}
        });
    });
	
	
	
});
</script>
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Add Shipping Form</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Shipping <small>Form</small></h2>
					<ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left"  action="<?php echo base_url('Shipping_c/insert_shipping') ;?>" method="post" enctype="multipart/form-data">
                      <span class="section">Add Shipping </span>
					<div class="item form-group" id="hide" style="display:block;">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Shipping Method Name<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="shipping_id" class="form-control col-md-7 col-xs-12"  name="shipping_method_name" placeholder="Enter Your  Shipping Method Name "  type="text" required />
                        </div>
						<div id="shipping_response" class="response" style="display:none;color:red">This Shipping Method is Allready Exist To This Country</div>
				
                     </div>
						<div class="item form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Country<span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
								<select name="country_id"  class="form-control" id="country"  onchange ="getState(this.value);" required="required" >
									
								<option value="">--Select--</option>
									<?php foreach($country as $row) { ?> 
									  <option value='<?= $row->id ; ?>' required > <?= $row->name; ?></option>
									  	<?php } ?>
								</select>
							</div>
							<div id="country_response" class="response" style="display:none;color:red">This Country Id is Allready Exist To This Shipping Method</div>
				
						</div>
						<div class="item form-group" id="hide" style="display:block;">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Shipping Charge<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="subcatname" class="form-control col-md-7 col-xs-12"  name="shipping_charge" placeholder="Enter Your  Shipping Charge "  type="text" required />
                        </div>
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

