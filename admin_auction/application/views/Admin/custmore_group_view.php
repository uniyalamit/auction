
<!-- page content -->
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
            <div class="row">
              <div class="clearfix"></div>
                
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View group</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                   

                    <div class="table-responsive">
                      <form action="<?php echo base_url('Customer_group_controller/group_delete');?>" method="POST">
                     <table id="datatable" class="table table-striped">
                        <thead>
                          <tr class="headings">
                            <th>
                               <input type="checkbox" onchange="checkAll(this)" class="check" >
                            </th>
                            
                            <th class="column-title">Group Name </th>
                            
                            <th class="column-title no-link last"><span class="nobr">Update</span>
                            </th>
                            <th class="column-title no-link last"><span class="nobr">Delete</span>
                            </th>
                            
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                         
                       
                            
                          <?php
                           foreach ($r as $row) {
                             
                          ?>
                          
                          <tr class="even pointer">
                            <td class="a-center ">
                               <input type="checkbox"   name="table_records[]" class="check" value="<?php echo $row->cgroup_id;?>"  >
                             
                            </td>
                           
                            <td class=" "><?php echo $row->cgroup_name;?> </td>
                            <td ><a href="<?php echo base_url('Customer_group_controller/update_group/').$row->cgroup_id;?>"><span class="btn btn-success glyphicon glyphicon-pencil"></span></a></td>
                             <td><a href="<?php echo base_url('Customer_group_controller/single_user_delete/').$row->cgroup_id;?>"><p><i class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('are you sure?');">
                             
                               
                             </p></i></a></td> 

                          </tr>
                          <?php
                        }
                          ?>
                          
                            <input type="submit" value="Delete all" class="delete btn btn-danger" onclick="return confirm('are you sure?');">
                             <!--  <a href="<?php /*echo site_url('group/group_delete/').*/$row->g_id;?>"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a> -->
                               <!-- <input type="submit" value="delete" > -->
                               
                             
                          
                        </tbody>
                      </table>
                      </form>
                    </div>
              
            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
         <script>
       $('.alert').delay(1000).fadeOut(400)
        </script>
        
        <!-- /page content -->

