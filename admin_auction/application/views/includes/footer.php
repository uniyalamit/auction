 <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
      <script>
        $(document).ready(function(){
           $.ajax({
             url:'<?php echo base_url('About_controller/checking');?>',
              success:function(result)
               {
                  if (result==1) {
                    document.getElementById('demo').style.pointerEvents = 'none';
                  }
                  else
                  {

                  }
                  
               }
           });
           $.ajax({
             url:'<?php echo base_url('Delivery_controller/d_checking');?>',
              success:function(result)
               {
                  if (result==1) {
                    document.getElementById('d_add').style.pointerEvents = 'none';
                  }
                  else
                  {

                  }
                  
               }
           });
            $.ajax({
             url:'<?php echo base_url('Privacy_controller/p_checking');?>',
              success:function(result)
               {
               
                  if (result==1) {
                    
                    document.getElementById('p_add').style.pointerEvents = 'none';
                  }
                  else
                  {

                  }
                  
               }
           });
            $.ajax({
             url:'<?php echo base_url('Tc_controller/tc_checking');?>',
              success:function(result)
               {
               
                  if (result==1) {
                    
                    document.getElementById('tc_add').style.pointerEvents = 'none';
                  }
                  else
                  {

                  }
                  
               }
           });
           $.ajax({
             url:'<?php echo base_url('Returnp_controller/rp_checking');?>',
              success:function(result)
               {
                 if (result==1) {
                    
                    document.getElementById('rp_add').style.pointerEvents = 'none';
                  }
                  else
                  {

                  }
                  
               }
           });
           $.ajax({
             url:'<?php echo base_url('Store_controller/store_checking');?>',
              success:function(result)
               {
                  
                  if (result==1) {
                    
                    document.getElementById('store_add').style.pointerEvents = 'none';
                  }
                  else
                  {

                  }
                  
               }
           });

        });
      </script>

      <script src="<?php echo base_url().'assets/jquery-ui/jquery-ui.js'?>" type="text/javascript"></script>
    <!-- JQuery UI Javascript--> 
    <!-- JQuery Datepicker Javascript--> 
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker/boild/js/bootstrap-datetimepicker.min.js') ?> "></script> 
    <!-- Custom Javascript--> 

   <!-- jQuery -->
    <script src="<?php echo base_url()?>assests/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assests/vendors/jquery/dist/jquery.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url()?>assests/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assests/vendors/bootstrap/dist/js/bootstrap.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()?>assests/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url()?>assests/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url()?>assests/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url()?>assests/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url()?>assests/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url()?>assests/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url()?>assests/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url()?>assests/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>assestss/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url()?>assests/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url()?>assests/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url()?>assests/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url()?>assests/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url()?>assests/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url()?>assests/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url()?>assests/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url()?>assests/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url()?>assestss/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url()?>assests/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url()?>assests/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url()?>assests/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url(); ?>assests/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

    <!-- Custom Theme Scripts -->
  <!--DATA TABLE-->
  <script src="<?php echo base_url()?>assests/build/js/custom.min.js"></script>
  <!--script src="<?php// echo base_url(); ?>assets/build/js/custom.min.js"></script-->
  <script src="<?php echo base_url(); ?>/assests/vendors/select2/dist/js/select2.full.min.js"></script>
   <script src="<?php echo base_url();?>assests/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assests/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assests/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assests/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assests/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assests/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assests/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assests/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>assests/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>assests/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>assests/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assests/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  
  <!--DATA TABLE-->

	
  </body>
</html>