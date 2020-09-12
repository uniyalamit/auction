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
                   
                     
                    <table id="datatable" class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title">Product ID</th>
                            <th class="column-title">IP Address</th>
                             <th class="column-title">Total Number Of Review</th>
                                        
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php
              //echo "<pre>";
              //print_r($rec); die;
                           foreach ($view as $row) {
                             
                         ?>
                          <tr class="even pointer">
                            <td class=" "><?php echo $row->product_id?></td>
                            <td class=" "><?php echo $row->ip_address?></td>
                            <td class=" "><?php echo $row->total_no?></td>
                            
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    
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
    