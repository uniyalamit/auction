        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Validation</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form validation <small>sub title</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  <form method="POST" class="search_form" action="<?php echo base_url('welcome/searchdata'); ?>">
						<!--input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt"-->
					
						<input list="list" name="search" class="input-block-level search-query" required>
						
						<datalist id="list" style="color:red;">
						<?php				foreach($getData as $row)	{
							
							?>
						<option value="<?php  echo $row->feature_product ; ?>">
						<?php }	?>
						</datalist>
						<button class="search-button">Search</button>
					</form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
		<script>
			function hideparent()
			{
				document.getElementById('hide').style.display="none";
				document.getElementById('hidec').style.display="none";
				document.getElementById('cat_n').style.display="block";
			}
		</script>

