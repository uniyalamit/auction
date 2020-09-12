
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>CATEGORY</h3>
              </div>


            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <!-- <h2>Form validation <small>sub title</small></h2> -->
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left"  action="<?php echo base_url('Category_c/add_category');?>" method="post" enctype="multipart/form-data">

                      
                      </p>
            
                      <span class="section">Add category</span>

                   
            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Parent<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="check"  value="parent" class="form-control col-md-7 col-xs-12" name="check"    type="checkbox">
                        </div>
                        </div>
              <span style="color:red;text-align:center;"><?php echo form_error('cat_name');?></span>
               <div class="item form-group" id="cat_n" style="display:none;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Parent Category Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="catname" onchange="unq(this.value)" class="form-control col-md-7 col-xs-12"   name="cat_name"placeholder="Enter Parent Category Name" type="text">
              <span class="spn"></span>
            </div>
                      </div>
             <div class="item form-group" id="hidec" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Category<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12" >
            <input list="cat" name="select_cat" class="form-control col-md-7 col-xs-12">
                          <datalist id="cat"  >
              <?php 
                foreach($rec as $row){
              ?>
              <option value="<?php echo $row->cat_name;?>">
                <?php }?>
              </datalist>
                        </div>                                    
                        </div>
             <div class="item form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Category Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea  class="form-control col-md-7 col-xs-12"   name="cat_description" >
            </textarea>
            
            <b><?php //echo form_err('cat_name');?></b>
            </div>
                      </div>
             <div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sub Cattegory Name<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="subcatname" onchange="unq(this.value)" class="form-control col-md-7 col-xs-12" name="sub_cat" placeholder="Enter Sub Category Name"  type="text">
                        <span class="spn"></span>
            </div>
                        </div>
            <div class="item form-group" id="class" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Category Image<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                         
             <input id="image" class="form-control col-md-7 col-xs-12" accept=".jpg,.png,.gif" name="image" required="required" type="file">
            
             </div>
                        </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
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
    
<script>
$(document).ready(function(){
    $("#check").click(function(){
        $("#cat_n").toggle();
        $("#hide").toggle();
        $("#hidec").toggle();
    });
});
</script>
<script type="text/javascript">
  function unq(val)
  {
    //alert('hi');
    $.ajax({
            
            url:'<?php echo base_url('Category_c/unq_cat/')?>'+val,
            success: function(res){
              //alert(res);

              $(".spn").html(res);
              document.getElementById('catname').val='';
            }
          });
  }
</script>
