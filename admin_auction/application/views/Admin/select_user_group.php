
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
                    <h2>Give Task To group</h2>   
                    <ul class="nav navbar-right panel_toolbox">
  
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                   

                    <div class="table-responsive">
                      <form action="<?php echo base_url('group/give_');?>" method="POST" enctype="multipart/form-data">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Group Name </th>
                            
                            <th class="column-title no-link last"><span class="nobr">Group Title</span></th>
                            <th class="column-title no-link last"><span class="nobr">Select File</span></th>             

                            <th class="column-title no-link last"><span class="nobr">Give Task</span> </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                            
                          <tr class="even pointer">
                            <td class="a-center ">
								<input list="group_list" name="take_group" required>
								<datalist id="group_list">
									 <?php   foreach ($r as $row) {  ?>
								  <option value="<?php echo $row->g_name;?>">
									 <?php } ?>
								   </datalist>
                            </td>
								 
							
                            <td class=" "><input type="title" name="title" placeholder="Give Task Title...."></td>
							
                            <td ><input type="file" name="file"></td>
                             <td><button type="button" class="btn tbn-info"><i class="fa fa-plus"></i></button></td> 
                             <td></td> 

                          </tr>
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
        </div>
        </div>

        
        <!-- /page content -->
