
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
                            
                            <th class="column-title">Id</th>
              <th class="column-title" style="width:5%"> Image</th>
                            <th class="column-title">Product Name</th>
                            <th class="column-title">Product Model</th>
                            <th class="column-title">Product Review</th>
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
                           
                            <td class=" "><?php echo $row->product_id;?></td>
              <td class=" " style="color:blue;text-align:center;"><a href="<?php echo base_url('uploads/').$row->product_img;?>"><img src="<?php echo base_url('uploads/').$row->product_img;?>" height="65px" width="100px"></a><br><b style="color:blue;text-align:center;"><a href="<?php echo site_url('Product_c/view_gallery_img/').$row->product_id;?>">View More</a></b></td>
                            <td class=" "><?php echo $row->product_name;?></td>
                            <td class=" "><?php echo $row->model;?></td>
                            <td><a href="" class="btn btn-primary"></a></td>
                           
              
              
             <td class=" last"><a href="<?php echo site_url('Product_c/fetch_product_id/').$row->product_id;?>"><button class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></button></a>
                            <a href="<?php echo site_url('Product_c/delete_product/').$row->product_id;?>"><button class="btn btn-danger btn-xs" onclick="return confirm('are you sure?')"><span class="glyphicon glyphicon-trash"></span></button></a></td>

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
    