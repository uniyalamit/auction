<script>
  $(document).ready(function () 
  {
    CKEDITOR.replace('attribute_desc');
    CKEDITOR.config.height = '300px';
    CKEDITOR.config.allowedContent = true;
  });
</script>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Add Attribute</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <!-- <h2>Add <small>different form elements</small></h2> -->
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
          </div>
          <div class="clearfix"></div>
          <div class="x_content">
           
            <br />
            <?php
         foreach ($attribute as $value) {
                     ?>
            <form method="post" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url(); ?>/Product_c/update_attribute/<?php echo $value->attribute_id; ?>">

              <input type="hidden" name="id" value="<?php echo $value->attribute_id; ?>" />

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="attribute-name">Attribute Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="attribute_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $value->attribute_name; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Attribute Description<span class="required">*</span></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea id="attribute_desc" name="attribute_desc" class="form-control" rows="3" style="margin: 0px 0.375px 0px 0px; height: 78px; width: 368px;" required="required"><?php echo $value->attribute_desc; ?></textarea>
                </div>
              </div>

             

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Update</button>
                </div>
              </div>
            </form>
            <?php
        }

            ?>
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