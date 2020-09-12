<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>USER</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <!-- <h2>Form validation <small>sub title</small></h2> -->
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
			
			
                    <form class="form-horizontal form-label-left; data-parsley-validate"  action="<?php echo base_url('Register_c/create_user');?>" method="post" >

                      
                     
                      <span class="section">Add User</span>
					  <div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Group<span class="">*</span>
							</label>
						<div class="col-md-6 col-sm-6 col-xs-12" >
						<select  class="form-control "  name="select_group" required="required"  >
						
						    <?php
							foreach($getgroup as $group){	?>
							<option value="<?php echo $group->g_id;?>"  ><?php echo $group->g_name;?></option>
							<?php } ?>
						  </select>                        
						  </div>
                        </div>

						<div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">User Name<span class="">*</span>
                        </label>
					    <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" value="" name="username" placeholder="Enter User Name"  type="text" required />
                        </div>
                        </div>
						
						<div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email<span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" onchange="unq_email(this.value)" value="" name="email" placeholder="Enter Email"  type="email" required />
                        <span id="unq"></span>
							</div>
                        </div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">News letter subscription <span class="">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input  class="form-control col-md-7 col-xs-12"   name="news_letter_subscription" placeholder="Enter News Letter Subscription"  type="email" required />
							<span id="unq"></span>
						</div>
					</div>
						<div class="item form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Country<span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
								<select name="country" class="form-control" id="country"  onchange ="getState(this.value);" required="required" >
									<option value="" >--select--</option>
						
									<?php foreach($country as $row) { ?> 
						
									  <option value='<?= $row->id ; ?>' required > <?= $row->name; ?></option>
									  	<?php } ?>
								</select>
							</div>
							
						</div>
						<div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">State<span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
								<select name="state" class="form-control" id="showState"   onchange="getCity(this.value);" required="required" >
									<option value="">--select--</option>
								</select>						
							</div>
						</div>
						<div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">City<span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
								<select name="city" class="form-control"  id="showCity"  required="required" >
										<option>--select--</option>
								</select>
							</div>
						</div>
						<div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Street Address<span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" value="" name="street_address" placeholder="Enter Your Street Address"  type="text" required />
                        </div>
                        </div>
						
						<div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Post Address<span class="">*</span>
                        </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" value="" name="post_address" placeholder="Enter Post Address"  type="text"  required />
                        </div>
                        </div>
						
						<div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Password<span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" value="" name="password" placeholder="Enter Password"  type="password"  required />
                        </div>
                        </div>
						<div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Confirm Password<span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" value="" name="cpassword" placeholder="Enter Confirm Password"  type="password"  required />
                        </div>
                        </div>
						<div class="item form-group" id="class" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Phone<span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                         
						 <input class="form-control col-md-7 col-xs-12" name="phone"  type="text"  placeholder="Enter Phone Number"  required  />
					</div>
                        </div>
                     
                      
                     
                      
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                          <button type="" class="btn btn-primary">Cancel</button>
                        </div>
                      </div>
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
<script>
	function unq_email(em)
	{
		//alert(em);
		$.ajax({
				
				url:'<?php echo base_url('Register_c/unq_email/')?>'+em,
				success: function(res){
					$("#unq").html(res);
					//document.getElementById('catname').val='';
				}
			});
}
</script>
<script>
	function getState(id){
	 $.ajax({
	  url:'<?= base_url('Register_c/getallstate/')?>'+id,
	  success: function(result){
	   $("#showState").html(result);
	   console.log(result);
	  },
	  error: function(result){
	   console.log(result);
	  }
	 });
	}
	function getCity(id){
	 $.ajax({
	  url:'<?= base_url('Register_c/getallcity/')?>'+id,
	  success: function(result){
	   $("#showCity").html(result);
	   console.log(result);
	  },
	  error: function(result){
	   console.log(result);
	  }
	 });
	}
</script>