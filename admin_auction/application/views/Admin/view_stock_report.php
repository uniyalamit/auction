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
          <table id="datatable" class="table table-striped ">
                <thead>
						<th>Product Name </th>
                        <th>Stock Quantity</th>
                         
                </thead>
                <tbody>
				<?php
				 foreach ($product_name as $row) 
				 {				 
				 
				  ?>
				  <tr class="even pointer">
				  <td class=" "><?php echo $row->product_name;?></td>
				          
					<td class=" "><?php echo $row->quantity;?></td>
					<?php
					}
				  ?> 
				  </tr>
				      
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