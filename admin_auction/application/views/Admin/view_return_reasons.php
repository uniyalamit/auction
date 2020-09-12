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
<div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View Return<small>Reasons</small></h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="table-responsive">
		<form action="<?php echo base_url('Return_reasons_c/delete_allrecord_reasons');?>" method="POST">           
           <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
							<input type="checkbox" onchange="checkAll(this)" class="check" />Select all
							</th>
                            <th class="column-title"> Return Reasons ID </th>
                            <th class="column-title">Return Reasons </th>
                           
                            <th class="column-title no-link last"><span class="nobr">Update</span>
                            </th>             
                            <th class="column-title no-link last"><span class="nobr">Delete</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span>  <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php
						  if(isset($get_return_reasons))
						  {   
							foreach ($get_return_reasons as $row) {
                             
                          ?>
                          <tr class="even pointer">
                            <td class="a-center ">
                               <input type="checkbox"   name="table_records[]" class="check" value="<?php echo $row->return_reasons_id;?>"  >
                            </td>
                            <td class=" "><?php echo $row->return_reasons_id;?></td>
                            <td class=" "><?php echo $row->return_reasons;?> </td>
                                                      
                            <td class=" last"><a href="<?php echo base_url('Return_reasons_c/view_return_update/').$row->return_reasons_id;?>"  class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                            <td class=" last"><a href="<?php echo base_url('Return_reasons_c/delete_reasons/').$row->return_reasons_id;?>" onclick="return confirm('Are U Sure ????..')"  class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                          </tr>
                          <?php
                        }
						  }
                          ?>
                          
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
        </div>
        <!-- /page content -->
