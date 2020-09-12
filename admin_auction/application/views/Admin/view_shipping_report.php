
 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View <small>Shipping</small></h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="table-responsive">
		<form action="<?php echo base_url('Shipping_c/check_date/');?>" method="POST">
           <div class="col-sm-4">
                   <label>From Date</label>
                    <div class="form-group">
                        <div class="input-group date" >
                            <input type="date" class="form-control" name="from_date" id="from_date" />
                            </span>
                        </div>
                    </div>
                </div>
				<div class="col-sm-4">
                    <label> To Date</label> 
                    <div class="form-group">
                        <div class="input-group date" >
                            <input type="date" class="form-control" name="to_date" id="to_date" />
                            </span>
                        </div>
                    </div>
                </div>
				<input type="submit" name="submit" style="margin-top:25px" class="btn btn-success" value="submit"/>
				</form>
          <table id="datatable" class="table table-striped ">
                <thead>
                    <tr class="filters">
						<th><span>Order ID </span></th>
                        <th><span>Order Date </span></th>
                        <th><span>Shipping Method</span></th>
                        <th><span>Country ID</span></th>
                        <th><span>Shipping Charges</span></th>
                    </tr>
                </thead>
                <tbody>
				<?php
            
				 foreach ($order_rec as $row) 
				 {
				  
				  ?>
				  <tr class="even pointer">
				    <td class=" "><?php echo $row->order_id;?></td>
					<td class=" "><?php echo $row->apply_date;?></td>
					<td class=" "><?php echo $row->shipping_name;?> </td>
					<td class=" "><?php echo $row->country_id;?> </td>
					<td class=" "><?php echo $row->shipping_charge;?> </td>
										  
					<!--<td class=" last"><a href="<?php //echo base_url('Shipping_c/view_shipping_update/').$row->order_id;?>"  class="btn btn-primary btn-xs" ><span class="glyphicon glyphicon-pencil"></span></button></a></td>
					<td class=" last"><a href="<?php //echo base_url('Shipping_c/delete_shipping/').$row->order_id;?>" onclick="return confirm('Are U Sure ????..')"  class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>
				  --></tr>
				  <?php
					}
				  ?>     
                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>
</div>
</div>
</div>


    <script>

    $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#datatable thead th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control" placeholder="Search By '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#datatable').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.header() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );
</script>