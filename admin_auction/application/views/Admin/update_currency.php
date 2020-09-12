<script>
$(document).ready(function()
{
	//alert('hii');
    $("#up_curr_n_id").change(function()
	{
		//alert('hii');
        $.post("<?php echo base_url()?>/currency_ctrl/check_currency_name",
        {
          currency_name: $("#up_curr_n_id").val() /* plan is the variable is passed to check.php*/
          //alert('hii');
        },
        function(data,status)
		{
			//alert(data);
            if(data== 1)
			{
				document.getElementById('upcurr_response').style.display="block";
				document.getElementById('up_curr_n_id').value='';
				document.getElementById('up_curr_n_id').focus();
			}
			else
			{
				document.getElementById('upcurr_response').style.display="none";
			}
        });
    });
	
$("#up_curr_iso_id").change(function()
	{
		//alert('hii');
        $.post("<?php echo base_url()?>/currency_ctrl/check_currency_iso",
        {
          currency_iso: $("#up_curr_iso_id").val() 
          //alert('hii');
        },
        function(data,status)
		{
			//alert(data);
            if(data== 1)
			{
				document.getElementById('upiso_response').style.display="block";
				document.getElementById('up_curr_iso_id').value='';
				document.getElementById('up_curr_iso_id').focus();
			}
			else
			{
				document.getElementById('upiso_response').style.display="none";
			}
        });
    });
	        
});
</script>
<div class="right_col" role="main">
  <div class="">
	<div class="page-title">
	  <div class="title_left">
		<h3>Update Currency Form</h3>
		
	</div>
	</div>
	<div class="clearfix"></div>
<div class="x_panel">
  <div class="x_title">
	<h2>Currency <small>Form</small></h2>
	<div class="clearfix"></div>
  </div>
  <div class="x_content">
	<br>
	<form  method="post" enctype="multipart/form-data" action="<?php echo base_url('Currency_c/Update_currencyrec/').$record->currency_id ; ?>"  class="form-horizontal form-label-left" >

		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Currency Name <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
			<input id="up_curr_n_id" required="required" style="text-transform:capitalize;" value="<?php echo $record->currency_name; ?>" name="currency_name" class="form-control col-md-7 col-xs-12" required />
			<div id="upcurr_response" class="response" style="display:none;color:red">This Currency Name is Allready Exist.Please Try With Another..!</div>
					
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Currency ISO <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
			<input id="up_curr_iso_id" required="required" style='text-transform:uppercase' name="currency_iso" maxlength="3" value="<?php echo $record->currency_iso;?>" class="form-control col-md-7 col-xs-12" required />
			<div id="upiso_response" class="response" style="display:none;color:red">This Currency ISO is Allready Exist.Please Try With Another..!</div>
					
		</div>
		</div>
		<div style="margin-top:10px" class="form-group">
			<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
			  <button type="submit" name="submit"  value="submit" class="btn btn-success">Submit</button>
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
	</div>       
	</div>       
	</div>      