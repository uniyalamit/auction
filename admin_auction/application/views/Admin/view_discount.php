        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th class="column-title"> ID </th>
                            <th class="column-title">Discount ID </th>
                            
                            <th class="column-title">Discount</th>
                            <th class="column-title">Start Date</th>
                            <th class="column-title">End Date</th>
                            
                            <th class="column-title no-link last"><span class="nobr">Update</span>
                            </th>
                            <th class="column-title no-link last"><span class="nobr">Delete</span>
                            </th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
                           foreach ($value as $row) {
                             
                          ?>
                          <tr class="even pointer">
                           
                            
                            <td class=" "><?php echo $row->id;?></td>
                            <td class=" "><?php echo $row->discount_id;?></td>
                            <td class=" "><?php echo $row->discount;?></td>
                            <td class=" "><?php echo $row->start_date;?></td>
                            <td class=" "><?php echo $row->end_date;?></td>
                            <td class=" last"><a href="<?php echo base_url('Product_c/fetch_disc/').$row->id;?>"><button class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                            <td class=" last"><a href="<?php echo base_url('Product_c/delete_disc/').$row->id;?>"><button class="btn btn-danger btn-xs" onclick="return confirm('are you sure?')"><span class="glyphicon glyphicon-trash"></span></button></a></td>

                          </tr>
                          <?php
                        }
                          ?>
                          </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

		<script>
function myFunction() {
    confirm("Are you sure you want to delete");
}
</script>
        <!-- /page content -->
