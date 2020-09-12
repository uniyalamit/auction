
<script>

</script>
       <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
               <div class="col-md-12">
        <h4>User Group</h4>
        <div class="table-responsive">
          <form action="<?php echo base_url('Add_user_controller/group_update');?>" method="POST">
           
                <label for="heard">User Group:</label>
                          <select id="heard" class="form-control" name="group" required>
                            <?php
                           foreach($user as $data) {
                    for ($i=0; $i <count($data['curr']) ; $i++) { 
               
                            ?>
                            <option value="<?php echo $value=$data['curr'][$i]->cgroup_id;?>"><?php echo $data['curr'][$i]->cgroup_name;?></option>

                            <?php

                          }
                        }
                        ?>
                          </select>
                          <br>
                          <br>
              <table id="datatable" class="table table-striped">
                   
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>User Name</th>
                    <th>Group Name</th>
                     
                      
                   </thead>
              <tbody>
    
                    
                      <?php
                           foreach($user as $data) {
                    for ($j=0; $j <count($data['all']) ; $j++) { 
               
                            ?>
                            <tr>
                    <td><input type="checkbox" name="all[]" class="checkthis" value="<?php echo $data['all'][$j]->user_id; ?>" /></td>
                     
                    <td><?php echo $data['all'][$j]->username;?></td>
                    <td><?php 
                     $this->db->select('cgroup_name');
                      $this->db->from('custmore_group');
                      $this->db->where('cgroup_id',$data['all'][$j]->group_id);
                       $name=$this->db->get()->row('cgroup_name');
                       echo $name;
                     
                    ?>
                      

                    </td>
                    </tr>  
                    <?php
                      }
                    }
                    ?>
                    
                    
                    
               </tbody> 

            </table>
            <input type="submit" class="btn btn-success" value="Submit" name="">

                </form>
            </div>
            
        </div>
           </div>
         </div>
       </div>
       <script>
         $(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});

       </script>
     
        