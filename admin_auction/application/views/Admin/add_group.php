
<!-- page content -->
<script>
$(document).ready(function(){
  $('#name').change(function(){
     var group=$('#name').val();
     $.ajax({
      type:'POST',
      data:{group:group},
      url:'<?php echo base_url('Group/check');?>',
      success:function(result)
      {
        if (result==0) 
        {
          $result='';
         $('#result').html($result);      
        }
       else
       {
         $('#result').html(result);
         document.getElementById('name').focus();
         document.getElementById('name').value='';
       }
      }
     });
  });
});

</script>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Group</h3>
                
              </div>
              

              
            </div>
            

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                 
                <div class="x_panel">
                  <div class="x_title">
                   
                    
                 
                    <ul class="nav navbar-right panel_toolbox">

                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form  action="<?php echo base_url('Group/group_add');?>" method="post" class="form-horizontal form-label-left">

                      <center><span class="section">
                        <?php 
                        $uri=$this->uri->segment(3);
                        if($uri=='success')
                        {
                        echo "<script>window.alert('Data successfully Inserted')</script>";
                        }
                        ?>  
                      </span></center>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Group Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="groupname" placeholder="Enter group name" required type="text" >
                          <p id="result"></p>
                           <?php echo form_error('groupname'); ?>
                        </div>
                        
                      </div>

                      <!-- <div class="ln_solid"></div> -->
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          
                          <center><button id="send" type="submit" class="btn btn-success">ADD GROUP</button></center>
                        </div>
                        <div id="add_pass_response" class="response" style="display:none;color:red;">This Is All-ready Exist! Please Try with Another password.</div>
                      </div>
                    </form>
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
