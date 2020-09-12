<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User's</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                   

                    <div class="table-responsive">
                       <table id="datatable" class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <!-- <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th> -->
                            <th class="column-title">User ID </th>
                            <th class="column-title">Group ID </th>
                            <th class="column-title">User Name </th>
                            <th class="column-title">Email </th>
                            <th class="column-title">News Letter Subscription </th>
                            <th class="column-title">Country </th>
                            <th class="column-title">State </th>
                            <th class="column-title">City </th>
                            <th class="column-title">Street Address</th>
                            <th class="column-title">Post Address </th>
                            <th class="column-title">Password </th>
                            <th class="column-title">Phone</th>
                            <th class="column-title">ID Create Time </th>
                            <th class="column-title">Last Modified Time </th>
                            
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
						  if(isset($get_user))
						  {   
											  
							foreach ($get_user as $row) {
                             
                          ?>
                          <tr class="even pointer">
                            <!-- <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td> -->
                            <td class=" "><?php echo $row->user_id;?></td>
                            <td class=" "><?php echo $row->group_id;?> </td>
                            <td class=" "><?php echo $row->username;?> </td>
							
                            <td class=" "><?php echo $row->email;?></td>
                            <td class=" "><?php echo $row->news_letter_subscription;?></td>
                            <td class=" "><?php echo $row->country;?></td>
                            <td class=" "><?php echo $row->state;?></td>
                            <td class=" "><?php echo $row->city;?></td>
                            <td class=" "><?php echo $row->street_address;?></td>
                            <td class=" "><?php echo $row->post_address;?></td>
                            <td class=" "><?php echo $row->password;?> </td>
							
                            <td class=" "><?php echo $row->phone;?></td>
                            <td class=" "><?php echo $row->created;?> </td>
                            <td class=" "><?php echo $row->modified; ?> </td>
							
                            <td class=" last"><a href="<?php echo base_url('Register_c/show_edit_user/').$row->user_id;?>"><button class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                            <td class=" last"><a href="<?php echo base_url('Register_c/delete_user/').$row->user_id;?>"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                         
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
        <script>
          $(document).ready(function() {
    $('#datatable').DataTable();
} );
        </script>