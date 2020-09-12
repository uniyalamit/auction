
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Validation</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
	 <form class="form-horizontal form-label-left"  action="<?php echo base_url('prostatus_c/add_status') ;?>" method="post" enctype="multipart/form-data">
					<div class="x_panel" style="">
    <div class="x_title">
        <h2>Date Pickers <small> Available with multiple designs</small></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">

        <div class="container">
            <div class="row">

                <div class='col-sm-4'>
                    User ID
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker'>
                            <input type='text' class="form-control" name="user_id" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-user"></span>
                            </span>
                        </div>
                    </div>
                </div>						   <?php // if(isset($get_status)){ print_r($get_status->);die;}?>

				<div class='col-sm-4'>
                   Order <small> Status</small>
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker3'>
                           <select class="form-control" name="">
						     <?php 
							foreach($get_status as $group){	?>
							<option value="<?php  $group->order_status_id;?>" ><?php echo $group->order_status_name;?></option>
							<?php } ?>
						   </select>
                            <span class="input-group-addon">
                            </span>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4'>
                     Date Added
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker2'>
                            <input type='date' class="form-control" name="date_added" placeholder="Date Added"/ >
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                
                 
                
                <div class='col-sm-4'>
                    Customer
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker4'>
                            <input type='text' class="form-control" name="customer" placeholder="Customer" />
                            <span class="input-group-addon">
                            </span>
                        </div>
                    </div>
                </div>
                
                 <div class='col-sm-4'>
                    Total
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker6'>
                            <input type='text' class="form-control" name="totla" />
                            <span class="input-group-addon">
                            </span>
                        </div>
                    </div>
                </div>
               <div class='col-sm-4'>
                     Date Modified
                    <div class="form-group">
                        <div class='input-group date' id='myDatepicker2'>
                            <input type='date' class="form-control" name="date_modified" placeholder="Date Modified"/>
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div></form>
 <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">order ID </th>
                            <th class="column-title">customer Name</th>
                            <th class="column-title">address</th>
                            <th class="column-title">order Email </th>
                            <th class="column-title">Phone </th>
                            <th class="column-title">Shipping Address </th>
                          
                            <th class="column-title no-link last"><span class="nobr"><a href="<?php echo base_url('orderhistory/norder_hostory');?>">Update</a></span>
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
						  if(isset($get_order))
						  {   	foreach ($get_order as $row) {                   
                          ?>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" "><?php echo $row->order_id;?></td>
                            <td class=" "><?php echo $row->first_name ,$row->last_name;?> </td>
                            <td class=" "><?php  echo $row->address;?> </td>
                            <td class=" "><?php  echo $row->order_email;?> </td>
                            <td class=" "><?php  echo $row->phone;?> </td>
                            <td class=" "><?php echo $row->shipping_address;?> </td>
                                                       
                            <td class=" last"><a href="<?php echo base_url('orderhistory_c/view_edit_order/').$row->order_id;?>"><button class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                            <td class=" last"><a href="<?php echo base_url('orderhistory_c/delete_order/').$row->order_id;?>" onclick="return confirm('Are U Sure ????..')"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>
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
        
        <!-- /page content -->
	

       