
<!-- page content -->
<script>
 $(document).ready(function(){
  $('#name').change(function(){
     var group=$('#name').val();
     $.ajax({
      type:'POST',
      data:{group:group},
      url:'<?php echo site_url('group/check');?>',
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
                <h3>Group Update </h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

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

                    <form  action="<?php echo base_url('group/update_data');?>" method="post" class="form-horizontal form-label-left">

                      

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Group Name <span class="required">*</span>
                        </label>
                         
                             
                        
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="groupname" placeholder="Enter group name" required type="text" value="<?php echo $r->g_name;?>">
                          <input type="hidden" name="id" value="<?php echo $r->g_id;?>">
                          <p id="result"></p>

                           <?php echo form_error('groupname'); ?>
                        </div>
 
                      </div>

                      <!-- <div class="ln_solid"></div> -->
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          
                          <center><button id="send" type="submit" class="btn btn-success">UPDATE</button></center>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
