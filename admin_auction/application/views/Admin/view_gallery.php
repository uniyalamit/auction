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
                            
                            <th class="column-title"> Id </th>
                            <th class="column-title">Product Id </th>
                            <th class="column-title">Product Image</th>
							<th class="column-title no-link last"><span class="nobr">Update</span>
                            </th>
                            <th class="column-title no-link last"><span class="nobr">Delete</span>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php
                           foreach ($rec as $row) {
                             $img=explode(',',$row->images);
							// echo $a=count($img); die;
                          ?>
                          <tr class="even pointer">
                            <td class=" "><?php echo $row->pimg_id;?></td>
                            <td class=" "><?php echo $row->product_id;?></td>
						<td><?php for($i=0;$i<count($img);$i++) { ?><a href="<?php echo base_url('uploads/').$img[$i];?>"><img src="<?php echo base_url('uploads/').$img[$i]; ?>" height="200px" width="200px"></a><?php if($i==2){ echo '<br>'; } } ?></td>
						 <td class=" last"><a href="<?php echo base_url('Product_c/fetch_img/').$row->pimg_id;?>"><button class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                            <td class=" last"><a href="<?php echo base_url('Product_c/delete_product/').$row->pimg_id;?>"><button class="btn btn-danger btn-xs" onclick="return confirm('are you sure?')"><span class="glyphicon glyphicon-trash"></span></button></a></td>

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
