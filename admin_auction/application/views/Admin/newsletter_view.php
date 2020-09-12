<script>
function clickMe(e){

    var d=document.getElementById(e.id).value;
    //alert(d);
    $.ajax({
      type:'POST',
      data:{status:d},
      url:'<?php echo base_url('Newsletter_c/checkstatus');?>',
      success:function(result)
      {
        alert(result);
      }
     });
 
}
</script>
</style>
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div>
      
    </div>
    <div class="clearfix"></div>
        
    
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <p class="text-muted font-13 m-b-30"></p>
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr class="headings">
                  <th class="column-title">Email</th>
                  <th class="column-title no-link last"><span class="nobr">Subscribers</span></th>
                 
                  <th class="bulk-actions" colspan="7">
                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> <i class="fa fa-chevron-down"></i></a>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($email as $row) 
                {
                 ?> 
                  <tr >
                    
                 
                    <td class=" "><?php  echo  $row->email;?></td>
                    <td class="last">
                     <div class="form-group">
                        <?php if($row->status=='1'){?>     
                       <a href="<?php echo base_url('Newsletter_c/checks/').$row->user_id;?>"><button  id="button1" class="btn btn-deafult"/>unsubscribe</button></a>
                        <?php }else{ ?>
                      <a href="<?php echo base_url('Newsletter_c/check/').$row->user_id;?>"><button  id="button2" class="btn btn-danger"/>subscribe</button>
                       <?php } ?></a>
                      </div>
                        </div>
                      </td>
                    
                 
                    
                  </tr>
                 <?php  } ?>  
              </tbody>
            </table>
          </div>
        </div>
   
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
   var timeout = 2000; // in miliseconds (3*1000)
   $('.alert').delay(timeout).fadeOut(300);
</script>
