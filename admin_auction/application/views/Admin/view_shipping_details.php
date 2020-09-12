<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div>
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
                  <th class="column-title">Shipping Method</th>
                  <th class="column-title">Geo Zone Name</th>
                  <th class="column-title">Shipping Value</th>
                  <th class="column-title no-link last"><span class="nobr">Update</span></th>
                  <th class="column-title no-link last"><span class="nobr">Delete</span></th>
                  <th class="bulk-actions" colspan="7">
                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> <i class="fa fa-chevron-down"></i></a>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($val as $row) 
                { ?>
                  <tr class="even pointer">
                    <?php $sql = "SELECT * FROM tbl_shipping WHERE shipping_id='".$row['shipping_id']."'";        
                          $query = $this->db->query($sql); 
                          $res = $query->result_array();
                          ?>
                    <td class=" "><?php echo $res[0]['shipping_method']; ?></td>
                    <?php $sql = "SELECT * FROM tbl_geo_zones WHERE geo_zone_id='".$row['geo_zone_id']."'";        
                          $query = $this->db->query($sql);
                          $res = $query->result_array(); ?>
                    <td class=" "><?php echo $res[0]['geo_zone_name']; ?></td>
                    <td class=" "><?php echo $row['shipping_value']; ?></td>
                    <td class=" last"><a href="<?php echo base_url('Product_c/edit_shipping_details/').$row['ship_detail_id'];?>"><button class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                    <td class=" last"><a href="<?php echo base_url('Product_c/delete_shipping_details/').$row['ship_detail_id'];?>"><button class="btn btn-danger btn-xs" onclick="return confirm('are you sure?')"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                  </tr>
                <?php } ?>  
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