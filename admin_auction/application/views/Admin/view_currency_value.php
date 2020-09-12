<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $('input#value').blur(function(){
    var num = parseFloat($(this).val());
    var cleanNum = num.toFixed(2);
    $(this).val(cleanNum);
  });
});
</script>
<div class="right_col" role="main">
  <div class="">
	<div class="page-title">
	  <div class="title_left">
		<h3> Value Form</h3>
		
	</div>
	</div>
	<div class="clearfix"></div>
<div class="x_panel">
  <div class="x_title">
	<div class="clearfix"></div>
  </div>
  <div class="x_content">
	<br>
	<form  method="post" enctype="multipart/form-data" action="<?php echo base_url('Currency_c/insert_currency_value'); ?>"  class="form-horizontal form-label-left" >
    <table>
	<div class=" text-align: center;">
		<?php 
			foreach ($rec as $default)
			{
		?>
		<div class="">
		<h3 class="" >Your Default Currency IS :<span style="color:red;"><?php echo $default->currency_name; ?></span></h3>
		</div>
		
	</div>
	<table id="datatable" class="table table-striped table-bordered">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title">Currency ISO</th>
							<th class="column-title no-link last"><span class="nobr">Currency Value</span>
                           
							<th class="column-title no-link last"><span class="nobr">Delete</span>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                           foreach ($other as $row) 
						   {
							   
							
                          ?>
                          <tr class="even pointer">
						    <td style="color:red;font-size:20px; "><?php echo $row->currency_iso;?></td>
							<input type="hidden" name="default_currency_id[]" value="<?php echo  $default->currency_id;  ?>" />
							<input type="hidden" name="related_currency_id[]" value="<?php echo  $row->currency_id;  ?>" />
                           
							<td class=" "><input type="number" name="currency_value[]" id="value"  min="0" step="any" maxlength="10" placeholder="Value" /></td>
							
							<td>
								<a href="<?php echo base_url('Currency_c/delete_currency_value/').$row->currency_id;?>" onclick="return confirm('are you sure?')"><span class="glyphicon glyphicon-trash"></span></a>
							</td>
							
                        
                          <?php
			}  } 
                          ?>
						   
				           </tr>  
                        </tbody>
                      </table>
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
