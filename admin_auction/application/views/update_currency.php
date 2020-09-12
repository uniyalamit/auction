<?php 
	$this->load->view('include/header');
$this->load->view('include/sidebar');
?>
<script>
$(document).ready(function()
{
	//alert('hii');
    $("#currency_name_id").change(function()
	{
		//alert('hii');
        $.post("check_Currency_name",
        {
          currency_name: $("#currency_name_id").val() /* plan is the variable is passed to check.php*/
          //alert('hii');
        },
        function(data,status)
		{
			//alert(data);
            if(data== '1')
			{
				document.getElementById('currency_response').style.display="block";
				document.getElementById('currency_name_id').value='';
				document.getElementById('currency_name_id').focus();
			}
			else
			{
				document.getElementById('currency_response').style.display="none";
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
	<form  method="post" enctype="multipart/form-data" action="<?php echo base_url('Currency_ctrl/Update_currencyrec/').$record->currency_id ; ?>"  class="form-horizontal form-label-left" >

		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Currency Name <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
			<select id="currency_name_id" required="required" name="currency_name" class="form-control col-md-7 col-xs-12"  >
             
				<?php
					//echo '<pre>';
					//print_r ($currency);die;
				  foreach ($currency as $value) 
				  {
					  //echo '<pre>';
					  //print_r ($currency);die;
              ?>
                  <option value="<?=$value->currency_name?>"><?=$value->currency_name?></option>
              <?php }?>
            </select>
				<div class="error"><?php echo form_error('currency_name');?></div>
				<div id="currency_response" class="response" style="display:none;color:red">This Currency Name is Allready Exist.Please Try With Another..!</div>
					
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Currency Code <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
			<select id="" required="required" name="currency_code" class="form-control col-md-7 col-xs-12"  >
			
              <?php
			  foreach ($currency as $value) 
			  {
				?>
                  <option value="<?=$value->currency_code?>"><?=$value->currency_code;?></option>
                  
              <?php }?>
            </select>
				<div class="error"><?php echo form_error('currency_code');?></div>
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
<?php 
	$this->load->view('include/footer');
?>