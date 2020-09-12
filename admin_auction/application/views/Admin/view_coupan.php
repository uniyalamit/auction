<!-- page content --> <div class="right_col" role="main">
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
                          <tr class="headings">
                            
                            <th class="column-title">Coupan ID </th>
                            <th class="column-title">Coupan  </th>
                            <th class="column-title">Coupan generated date </th>
                            <th class="column-title">Start Date</th>
                            <th class="column-title">Expire Date</th>
							  <th class="column-title">No of Coupan</th>
                            
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
                           foreach ($val as $row) {
                             
                          ?>
                          <tr class="even pointer">
                           
                            <td class=" "><?php echo $row->id;?></td>
                            <td class=" "><?php echo $row->coupan;?></td>
                            <td class=" "><?php echo $row->coupan_genrated_date;?></td>
                            <td class=" "><?php echo $row->start_date;?></td>
                            <td class=" "><?php echo $row->expire_date;?></td>
                            <td class=" "><?php echo $row->no_of_coupan;?></td>
                            <td class=" last"><a href="<?php echo base_url('Product_c/fetch_coupan_id/').$row->id;?>"><button class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                            <td class=" last"><a href="<?php echo base_url('Product_c/delete_coupan/').$row->id;?>"><button class="btn btn-danger btn-xs" onclick="return confirm('are you sure?')"><span class="glyphicon glyphicon-trash"></span></button></a></td>

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
		<script>
function myFunction() {
    confirm("Are you sure you want to delete");
}
</script>
        <!-- /page content -->
