<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View Brand <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                   

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title"> ID </th>
                            <th class="column-title">Brand Name </th>
                            <th class="column-title">Image Name</th>
                            <th class="column-title">Image </th>
                          
                            
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
						  if(isset($get_brand))
						  {   
					  
							foreach ($get_brand as $row) {
                             
                          ?>
                          <tr class="even pointer">
                            
                            <td class=" "><?php echo $row->id;?></td>
                            <td class=" "><?php echo $row->brand_name;?> </td>
                            <td class=" "><?php  echo $row->image;?> </td>
                            <td class=" ">	<img src="<?php  echo base_url('uploads/brands/').$row->image;?> " ></td>	
                            <td class=" last"><a href="<?php echo base_url('brand_c/view_edit_brand/').$row->id;?>"><button class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                            <td class=" last"><a href="<?php echo base_url('brand_c/delete_brand/').$row->id;?>" onclick="return confirm('Are U Sure ????..')"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                          </tr>
                          <?php
                        }
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
        </div>
        <!-- /page content -->
