<style>
tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
</style>
<div class="right_col" role="main">
            <h3>Tax Report</h3>
          <div class="">
            <div class="page-title">  
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <form class="form-inline" action="<?php echo base_url('Welcome/get_tax_report_date/')?>" method="post">
                  
                  <div class="form-group">
                    <label for="ex4">From Date</label>
                    <input type="date" id="ex4" class="form-control" name="from" placeholder=" ">
                  </div>
                  <div class="form-group">
                    <label for="ex5">To Date</label>
                    <input type="date" id="ex4" class="form-control" name="to" placeholder=" ">
                  </div>
                  <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            </div>  
          <div class="row">
            <br>
        <div class="panel  filterable">
      
            <table id="datatable" class="table table-striped  ">
                <thead>
                    <tr class="filters">
                        <th>Tax Name</th>
                        <th>Tax Price</th>
                        <th>Tax Percent" disabled</th>
                        <th>User Id" disabled</th>
                        <th>Tax Date" disabled</th>
                        <th>Tax Product" disabled</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                  foreach ($tax as $data) {
                      

                    ?>
                    <tr>
                        <td><?php echo $data->tax_name ?></td>
                        <td><?php echo $data->tax_price ?></td>
                        <td><?php echo $data->tax_per ?></td>
                        <td><?php echo $data->user_id ?></td>
                        <td><?php echo $data->tax_date ?></td>
                        <td><?php echo $data->tax_product ?></td>
                    </tr>
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
<script>
    $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#datatable thead th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
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
