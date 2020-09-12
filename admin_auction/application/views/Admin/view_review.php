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
            

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                   
                     <form action="<?php echo base_url('Review_c/multi_review_delete');?>" method="POST">
                    <table id="datatable" class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                               <input type="checkbox" onchange="checkAll(this)" class="check" >
                            </th>
                            <th class="column-title">Product Name</th>
                            <th class="column-title">Custmore Name</th>
                            <th class="column-title">Rating</th>
                            <th class="column-title">Product Status</th>
                            <th class="column-title">Comment</th>
                            <th class="column-title">Date Add</th>
                           
                           
                            
              
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            
                           
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php
              //echo "<pre>";
              //print_r($rec); die;
                           foreach ($rec as $row) {
                             
                         ?>
                          <tr class="even pointer">
                             <td class="a-center ">
                               <input type="checkbox"   name="table_records[]" class="check" value="<?php echo $row->review_id;?>"  >
                             </td>
                            <td class=" " readonly><?php echo $row->product_name;?></td>
                            <td class=" "><?php echo $row->customre_name;?></td>
                            <td class=" "><?php echo $row->rating;?></td>
                            <td class=" "><?php if($row->product_status=='0')
                            {
                              echo "Disabled";
                            }
                            else
                              {
                                echo "Enabled";
                              }?></td>
                            <td class=" "><?php echo $row->comment_review;?></td>
                            <td class=" "><?php echo $row->date_add;?></td>
                           
              
               
              
             <td class=" last"><a href="<?php echo base_url('Review_c/selected_product_review/').$row->review_id;?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="<?php echo base_url('Review_c/selected_review_delete/').$row->review_id;?>" class="btn btn-danger btn-xs" onclick="return confirm('are you sure?')"><span class="glyphicon glyphicon-trash"></span></a></td>

                          </tr>
                     
                          <?php
                        }
                          ?>

                     <button class="btn btn-danger btn-xs" onclick="return confirm('are you sure?')">Delete</button>     
                        </tbody>
                      </table>
                    </form>
                    </div>
              
            
                  </div>
                </div>
              </div>
            </div>
          </div>
    <script>
function myFunction() {
    confirm("Are you sure you want to delete");
}
</script>
        <!-- /page content -->   
    <script>

$(document).ready(function() {
    $('#datatable').DataTable();
} );
</script>
        <!-- /page content -->
    