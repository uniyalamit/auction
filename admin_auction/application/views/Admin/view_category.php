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
                          <tr class="headings">
                           
                            <th class="column-title">Category ID </th>
                            <th class="column-title">Category Name </th>
                            <th class="column-title">Category Image </th>
                            <th class="column-title">Category Discription </th>
                             <th class="column-title">Status</th>
                            <th class="column-title no-link last"><span class="nobr">Update</span>
                            </th>
                            <th class="column-title no-link last"><span class="nobr">Delete</span>
                            </th>
                          
                          </tr>
                        </thead>

                        <tbody>
                          <?php
                           foreach ($rec as $row) {
                             
                          ?>
                          <tr class="even pointer">
                           
                            <td class=" "><?php echo $row->cat_id;?></td>
                            <td class=" "><?php echo $row->cat_name;?><b style="color:red;text-height:100px;">(<?php echo $row->is_parent;?>)</b> </td>
                            <td class=" "><a href="<?php  echo $row->cat_image;?>" ><img src="<?php echo base_url('uploads/').$row->cat_image;?>" height="100px" width="100px"></td>
							<td style="width:35%;"><?php echo $row->cat_description;?></td>
							<?php if($row->cat_status==1){?>
							 <td><a href="<?php echo base_url('Category_c/disable/').$row->cat_id;?>"><button class="btn btn-info btn-xs" >Disabe</button></a></td>
							<?php }else{?>
							<td><a href="<?php echo base_url('Category_c/enable/').$row->cat_id;?>"><button class="btn btn-danger btn-xs" >Enable</button></a></td>
							<?php }?>
						  <td class=" last"><a href="<?php echo base_url('Category_c/edit_cat/').$row->cat_id;?>"><button class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                            <td class=" last"><a href="<?php echo base_url('Category_c/delete_cat/').$row->cat_id;?>"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>

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
