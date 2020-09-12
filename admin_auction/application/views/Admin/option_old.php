        <!-- page content -->
        <div class="right_col" role="main">
          
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
				  
                  <div class="x_content" class="row">

                    <form class="form-horizontal form-label-left"  action="<?php echo site_url('option_c/insert_option');?>" method="post" enctype="multipart/form-data">

                      <div class="row">
                      
					  <div class="col-md-5 col-sm-5 col-xs-6">
                      <span class="section">Add OPtion's</span>

					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Radio Button<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="r1" onclick="select_radio()" value="1" class="form-control col-md-7 col-xs-12" <?php if(isset($val)){ if($val->is_parent=='No parent'){ ?>checked <?php } }?> name="radio"	  type="radio">
                        </div>
						
                        </div>
						
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Checkbox<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="r2" onclick="select_check_box()" value="2" class="form-control col-md-7 col-xs-12" <?php if(isset($val)){ if($val->is_parent=='No parent'){ ?>checked <?php } }?> name="radio"	  type="radio">
                        </div>
						
                        </div>
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select File<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="r3" onclick="select_file()" value="3" class="form-control col-md-7 col-xs-12" <?php if(isset($val)){ if($val->is_parent=='No parent'){ ?>checked <?php } }?> name="radio"	  type="radio">
                        </div>
						
                        </div>
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Drop Down<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="r4" onclick="drop_down()" value="4" class="form-control col-md-7 col-xs-12" <?php if(isset($val)){ if($val->is_parent=='No parent'){ ?>checked <?php } }?> name="radio"	  type="radio">
                        </div>
						
                        </div>
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Calender<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="r5" onclick="select_calender()" value="5" class="form-control col-md-7 col-xs-12" <?php if(isset($val)){ if($val->is_parent=='No parent'){ ?>checked <?php } }?> name="radio"	  type="radio">
                        </div>
						
                        </div>
						</div>
						<div class="col-md-5 col-sm-5 col-xs-6">
						 
						
						 <div class="item form-group" id="radio_button" style="display:block; visibility:hidden;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Radio Button<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="radio"   name="r1"  value="11"> <label for="checkbox6"> 11 </label><br>
                         <input type="radio"  name="r1"  value="22"> <label for="checkbox6"> 22</label> <br>
                          <input type="radio"   name="r1"  value="33"><label for="checkbox6">33 </label>
                        </div>
                        </div>
						
						
						
						   <div class="item form-group"  id="sel_drop" style="display:block; visibility:hidden;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">CheckboxName <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <input type="checkbox"  name="check_b" value="sandeep" > <label for="checkbox6">sandeep </label><br>
							   <input  type="checkbox"    name="check_b" value="chetan"><label for="checkbox6">chetan </label><br>
						    <input type="checkbox"  name="check_b" value="surendra"><label for="checkbox6">surendra </label>
                        </div>
                      </div>
					
					<div class="form-group" id="file_img" style="display:block; visibility:hidden;">
			              	<label class="control-label col-sm-4">Select File</label>
			       			<div class="col-sm-8">
			                  <div class="input-group">
								<input type="file" class="form-control" name="image"  >
								<span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
							 </div><!-- input-group -->
			            </div>
			            </div>
					<div class="form-group" id="drop_dwn" style="display:block; visibility:hidden;">
			              	<label class="control-label col-sm-4">Select drop_down</label>
			       			<div class="col-sm-8">
			                  <div class="input-group">
								 <select  class="form-control "  name="drp_d">
						    
							<option ></option>
							<option value="Select Category">Select Category</option>
							<option value="Select Category-">Select Category-</option>
							<option value="Select Category--">Select Category--</option>
						  </select>
								<span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
							 </div><!-- input-group -->
			            </div>
			            </div>
						 
						
						
						<div class="form-group" id="sel_dt" style="display:block; visibility:hidden;">
			              	<label class="control-label col-sm-4">Select Date</label>
			       			<div class="col-sm-8">
			                  <div class="input-group">
								<input type="date" class="form-control" name="date_file" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
								<span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
							 </div><!-- input-group -->
			            </div>
			            </div>
                        
					  
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
					  </div>
                    
                  </div>
				  </form>
				  </div>
                </div>
              </div>
            </div>
          </div>
       

        <!-- /page content -->
		<script>
		function select_radio() {
			var x = document.getElementById("radio_button");
			if (x.style.visibility === "hidden") {
				x.style.visibility = "visible";
			} else {
				x.style.visibility = "hidden";
			}
		}
		function select_check_box() {
			var x = document.getElementById("sel_drop");
			if (x.style.visibility === "hidden") {
				x.style.visibility = "visible";
			} else {
				x.style.visibility = "hidden";
			}
		}
		function select_file() {
			var x = document.getElementById("file_img");
			if (x.style.visibility === "hidden") {
				x.style.visibility = "visible";
			} else {
				x.style.visibility = "hidden";
			}
		}
		function drop_down() {
			var x = document.getElementById("drop_dwn");
			if (x.style.visibility === "hidden") {
				x.style.visibility = "visible";
			} else {
				x.style.visibility = "hidden";
			}
		}
		function select_calender() {
			var x = document.getElementById("sel_dt");
			if (x.style.visibility === "hidden") {
				x.style.visibility = "visible";
			} else {
				x.style.visibility = "hidden";
			}
		}
		</script>

