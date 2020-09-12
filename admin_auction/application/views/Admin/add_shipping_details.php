<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Add Shipping Details</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
           <!--  <h2>Add <small>Attributes</small></h2> -->
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <?php 
              if($this->session->flashdata('success'))
              { ?>
                <div class="alert alert-success"> 
                  <?php echo $this->session->flashdata('success'); ?>
                </div>   
              <?php }
              else if($this->session->flashdata('error'))
              { ?>
                <div class = "alert alert-error">
                  <?php echo $this->session->flashdata('error'); ?>
                </div>
              <?php } ?>
            <br />
            <form method="post" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url(); ?>/Product_c/add_shipping_details">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Shipping Method</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select name="shipping_id" class="form-control">
                    <option>Choose option</option>
                    <?php foreach($shipping_method as $ship){ ?>
                    <option value="<?php echo $ship['shipping_id']; ?>"><?php echo $ship['shipping_method']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Geo Zone Name</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select name="geo_zone_id" class="form-control">
                    <option>Choose option</option>
                    <?php foreach($geozone as $geo){ ?>
                     <option value="<?php echo $geo['geo_zone_id']; ?>"><?php echo $geo['geo_zone_name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="shipping">Shipping Value <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="shipping_value" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
             
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>
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