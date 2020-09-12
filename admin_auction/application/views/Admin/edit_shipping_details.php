<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Edit Shipping Details</h3>
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
            <?php 
              if($this->session->flashdata('success'))
              { ?>
                <div class="alert alert-success"> 
                  <?php echo $this->session->flashdata('success'); 
              }
              else if($this->session->flashdata('error'))
              { ?>
                <div class = "alert alert-error">
                  <?php echo $this->session->flashdata('error'); ?>
                </div>
              <?php } ?>
            <br />

            <form method="post" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url(); ?>/Product_c/update_shipping_details/<?php echo $shipping[0]['ship_detail_id']; ?>">
              
              <input type="hidden" name="ship_detail_id" value="<?php echo $shipping[0]['ship_detail_id']; ?>">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Shipping Method</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select name="shipping_id" class="form-control">
                    <option>Choose option</option>
                    <?php $sql = "SELECT * FROM tbl_shipping"; 
                      $query = $this->db->query($sql);
                      $result = $query->result_array();
                      foreach($result as $res){ 
                      if($res['shipping_id']==$shipping[0]['shipping_id'])
                      { ?>
                      <option value="<?php echo $res['shipping_id']; ?>" selected="selected"><?php echo $res['shipping_method']; ?></option>
                      <?php }else{ ?>
                      <option value="<?php echo $res['shipping_id']; ?>"><?php echo $res['shipping_method']; ?></option>
                    <?php } } ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Shipping Geo Zone Name</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select name="geo_zone_id" class="form-control">
                    <option>Choose option</option>
                    <?php $sql = "SELECT * FROM tbl_geo_zones"; 
                      $query = $this->db->query($sql);
                      $result = $query->result_array();
                      foreach($result as $res){ 
                      if($res['geo_zone_id']==$geo[0]['geo_zone_id'])
                      { ?>
                      <option value="<?php echo $res['geo_zone_id']; ?>" selected="selected"><?php echo $res['geo_zone_name']; ?></option>
                      <?php }else{ ?>
                      <option value="<?php echo $res['geo_zone_id']; ?>"><?php echo $res['geo_zone_name']; ?></option>
                    <?php } } ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="shipping">Shipping Value <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="shipping_value" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $shipping[0]['shipping_value']; ?>">
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