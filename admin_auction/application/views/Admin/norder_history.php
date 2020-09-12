			
		<div class="right_col" role="main">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Wizards</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Wizards <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              1.<br />
                                              <small>Order Detail</small>
                                          </span>
                          </a>
                        </li>
                        
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              2.<br />
                                              <small>Product 
											  Order Details</small>
                                          </span>
                          </a>
                        </li>	
						                      <li>
                          <a href="#step-4">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              3.<br />
                                              <small>Shiping Details</small>
                                          </span>
                          </a>
                        </li>	
                        
                      </ul>
					   <form class="form-horizontal form-label-left col-md-12 " action="<?php echo base_url('orderhistory_c/upate_order_history/').$view_order->order_id;?>" method="post">

                      <div id="step-1">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Order Status <span class=""></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control" name="order_status">
								
								<?php if(isset($get_status)){
							foreach($get_status as $group){	?>
							<option value="<?php  $group->order_status_id;?>" ><?php echo $group->order_status_name;?></option>
							<?php } }?>								</select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 " for="last-name">First Name <span class=""></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
								<input id="first-name" class="form-control col-md-7 col-xs-12 form-control" placeholder="First Name" type="text" name="first_name" value="<?php echo $view_order->first_name;?>" >
                 
							</div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Last Name</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="last-name" class="form-control col-md-7 col-xs-12 form-control" placeholder="Last Name" type="text" name="last_name" value=" <?php echo $view_order->last_name;?>">
                            </div>
                          </div>
                         
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address <span class=""></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
	                           <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="Address" type="text" name="address" value="<?php echo $view_order->address;?>">
							</div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Order Email<span class="" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="Order Email" type="text" name="order_email" value="<?php echo $view_order->order_email;?>">
                            </div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone <span class="" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="Phone" type="text" name="phone" value="<?php echo $view_order->phone;?>">
                            </div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Shipping Address <span class="" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="Shipping Address " type="text" name="shipping_address" value="<?php echo $view_order->shipping_address;?>">
                            </div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Shipping Name <span class="" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="Shipping Name" type="text" name="shipping_name" value="<?php echo $view_order->shipping_name;?>">
                            </div>
                          </div>
							<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Shipping Phone <span class="" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="Shipping Phone" type="text" name="shipping_phone" value="<?php echo $view_order->shipping_phone;?>">
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">shipping Email <span class="" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="shipping Email" type="text" name="shipping_email" value="<?php echo $view_order->shipping_email;?>">
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Email <span class="" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="Email" type="text" name="email" value="<?php echo $view_order->email;?>">
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">User Id <span class="" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="User Id" type="text" name="user_id" value="<?php echo $view_order->user_id;?>">
                            </div>
                          </div>

                        

                      </div>
                    
                      <div id="step-3">

                          
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Order Id<span class="" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="Order Id" type="text" constant="constant" name="order_id" value="<?php echo $view_order_product->order_id;?>">
                            </div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Name <span class="" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="Product Name" type="text" name="product_name" value="<?php echo $view_order_product->product_name;?>">
                            </div>
                          </div>
						  <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Option Name</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="middle-name" class="form-control col-md-7 col-xs-12 form-control" type="text" placeholder="Option Name" name="option_name" value="<?php echo $view_order_product->option_name;?>">
                            </div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantity <span class="" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="quantity" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="Quantity" type="text" name="quantity" value="<?php echo $view_order_product->quantity;?>">
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Price
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="price" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="Price" type="text" name="price" value="<?php echo $view_order_product->price;?>">
                            </div>
                          </div>
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Option Price 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="option_price" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="Option Price" type="text" name="option_price" value="<?php echo $view_order_product->option_price;?>">
                            </div>
                          </div>
						  	<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tax 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="dropdown form-control" name="tax" >
							  <option value="0" <?php echo $view_order_product->tax;?>>Include</option>
							  <option value="1" <?php echo $view_order_product->tax;?>>Exclude</option>
							  </select>
                            </div>
                          </div>
							<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12 " for="last-name">Option Tax <span class=""></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="dropdown form-control" name="option_tax" >
							  <option value="0" <?php echo $view_order_product->option_tax;?>>Include</option>
							  <option value="1" <?php echo $view_order_product->option_tax;?>>Exclude</option>
							  </select>
							</div>
                          </div>
						  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Total <span class=""></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">							
						     <input id="sub_total" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="Sub Total" type="text" name="sub_total" value="<?php echo $view_order_product->sub_total;?>">
							</div>
							
                          </div>
						  

                        
                      </div>
                      <div id="step-4">
						 
						 <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Order id<span class="" style="color:red;">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="Order_id" type="text" name="order_id" value="<?php echo $view_shipping->order_id;?>">
                            </div>
                          </div>
                          
						<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Shipping Method Name 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder ="Shipping Method Name" type="text" name="shipping_method_name" value="<?php echo $view_shipping->shipping_method_name;?>">
                            </div>
                          </div>
						  	<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Shipping Charge 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 form-control" placeholder="Shipping Charge" type="text" name="shipping_charges" value="<?php echo $view_shipping->shipping_charges;?>">
                            </div>
                          </div><input type="submit">
                      </div>					  

					 
					</form>
                    </div>
                    <!-- End SmartWizard Content -->

                  </div>
                </div>
              </div>
			  
            </div>
       
		<script>
		function button1() {
			document.getElementById('d1').style.display="block";
			document.getElementById('d2').style.display="none";
		}
		function button2() {
			document.getElementById('d1').style.display="none";
			document.getElementById('d2').style.display="block";

		}
		
		
		</script>
		<script>
		
    $(document).ready(function(){
        $("#option_price").on("blur", function(){
        var price = parseInt($('#price').val());
        var option_price = parseInt($('#option_price').val());
        var quantity= parseInt($('#quantity').val());
           var d = price + option_price;
		   var sum = d * quantity;
			alert(sum);
        })
    });
    </script>