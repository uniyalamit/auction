<?php $this->load->view('include/header');
$this->load->view('include/sidebar');?>
<script type="text/javascript">
function checkAll(ele) {
        //alert('hii'); 
     var checkboxes = document.getElementsByTagName('input');
     if (ele.checked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             console.log
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
             }
         }
     }
 }

 
 </script>
<!-- page content --> <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
					<form action="<?php echo base_url('Currency_ctrl/delete_allrecord_currency');?>" method="POST">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                          <tr class="headings">
                            <th>
							<input type="checkbox" onchange="checkAll(this)" class="check" />Select all
							</th>
                            
                            <th class="column-title">Currency Id</th>
                            <th class="column-title">Currency Name</th>
                            <th class="column-title">Currency Code</th>
							<th class="column-title no-link last"><span class="nobr">Update</span>
                            </th>
                            <th class="column-title no-link last"><span class="nobr">Delete</span>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                           foreach ($rec as $row) 
						   {
                             
                          ?>
                          <tr class="even pointer">
						    <td class="a-center ">
                               <input type="checkbox"   name="table_records[]" class="check" value="<?php echo $row->currency_id;?>"  >
                            </td><td class=" "><?php echo $row->currency_id;?></td>
                            <td class=" "><?php echo $row->currency_name;?><?php if(($row->default_currency)==1) {echo "<p style='color:red;'>Default</p>";} else{};?></p></td>
                            <td class=" "><?php echo $row->currency_code;?></td>
							<td>
							<a href="<?php echo base_url('Currency_ctrl/fetch_currencyid_rec/').$row->currency_id;?>" class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></a>
							</td>
					
							<td>
								<a href="<?php echo base_url('Currency_ctrl/delete_currency_rec/').$row->currency_id;?>" onclick="return confirm('are you sure?')"><span class="glyphicon glyphicon-trash"></span></a>
							</td>
							
                        
                          <?php
                        }
                          ?>
						   
				           </tr>  
                        </tbody>
                      </table>
					  <input type="submit" value="Delete all" class="delete btn btn-danger" onclick="return confirm('are you sure?');">
				          
					  </form>
                    </div>
              
            
                  </div>
                </div>
              </div>
            </div>
          </div>
		<script>
function myFunction(a) {
    confirm("Are you sure you want to delete");
}
</script>
        <!-- /page content -->
		<?php $this->load->view('include/footer');?>