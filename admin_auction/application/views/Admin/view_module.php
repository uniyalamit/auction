
<!-- page content -->
<style type="text/css">
  .check{
        width: 22px;
    height: 19px;

  }

</style>
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
                 <span>
                   <?php 
                        // $uri=$this->uri->segment(3);
                        // if($uri=='delete')
                        // {
                        // echo "<script>window.alert('Data successfully delete')</script>";
                        // }
                        // if($uri=='update')
                        // {
                        // echo "<script>window.alert('Data successfully update')</script>";
                        // }
                        ?>
						
                 </span>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View group module</h2>     
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
                           <!--  <th>
                               <input type="checkbox" onchange="checkAll(this)" class="check" >
                            </th> -->
                            
                            <th class="column-title">Group ID </th>
                            <th class="column-title">Module Name </th>
                            <th class="column-title no-link last"><span class="nobr">Give Module</span>
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
                           foreach ($get_module as $row) {
                             
                          ?>
                          
                          <tr class="even pointer">
                           <!--  <td class="a-center ">
                               <input type="checkbox"   name="table_records[]" class="check" value="<?php echo $row->id;?>"  >
                            </td> -->
                            <td class=" "><?php echo $row->group_id?> </td>
                            <td class=" "><?php echo $row->module_name;?> </td>
                            <td ><a href="<?php echo base_url('Module_c/module_updt/').$row->id;?>"><span class="btn btn-success glyphicon glyphicon-pencil"></span></a></td>
                             <td><a href="<?php echo base_url('Module_c/delete_module/').$row->id;?>"><p><i class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('are you sure?');">
                               
                             </p></i></a></td> 

                          </tr>
                          <?php
                        }
                          ?>
                          
                           <!--  <input type="submit" value="Delete all" class="delete btn btn-danger" onclick="return confirm('are you sure?');"> -->
                             <!--  <a href="<?php /*echo base_url('group/group_delete/').*/$row->g_id;?>"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a> -->
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
          $(document).ready(function() {
    $('#datatable').DataTable();
} );
        </script>

        
     