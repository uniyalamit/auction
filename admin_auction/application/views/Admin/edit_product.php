      
        <script>
  $(document).ready(function () 
  {
    CKEDITOR.replace('product_desc');
    CKEDITOR.config.height = '300px';
    CKEDITOR.config.allowedContent = true;
  });
</script>
<script>
  $(document).ready(function () 
  {
    CKEDITOR.replace('meta_tag_desc');
    CKEDITOR.config.height = '200px';
    CKEDITOR.config.allowedContent = true;
  });
</script>

<script>
	
$(document).ready(function(){
    $("#btn1").click(function(){
		//alert('hi');
        $("#rld1").after('<div><span style="color:red;">*</span><input class="form-control col-md-7 col-xs-12" name="atr_name[]"  type="text" placeholder="Attribute Name"></div> ');
        $("#rld1").after('<div><span style="color:red;">*</span><input id="tags_1" type="text" class="tags form-control"  name="atr_desc[]" placeholder="Attribute Description"></div>');
    });
   
});
</script>
</script>


        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 >Product</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Product <small>Sessions</small></h2>
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
                                              Step 1<br />
                                              <small>Step 1 General</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Step 2 Data</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Step 3 Link</small>
                                          </span>
                          </a>
                        </li>
						<li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Step 4<br />
                                              <small>Step 4 Attribue</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-5">
                            <span class="step_no">5</span>
                            <span class="step_descr">
                                              Step 5<br />
                                              <small>Step 5 Option</small>
                                          </span>
                          </a>
                        </li> 
						<li>
                          <a href="#step-6">
                            <span class="step_no">6</span>
                            <span class="step_descr">
                                              Step 6<br />
                                      <small>Step 6 Discount</small>
                               </span>
                          </a>
                        </li>
						<li>
                          <a href="#step-7">
                            <span class="step_no">7</span>
                            <span class="step_descr">
                                              Step 7<br />
                                      <small>Step 7 Special  Discount</small>
                               </span>
                          </a>
                        </li>
						<li>
                          <a href="#step-8">
                            <span class="step_no">8</span>
                            <span class="step_descr">
                                              Step 8<br />
                                      <small>Step 8 Image</small>
                               </span>
                          </a>
                        </li>
						<li>
                          <a href="#step-9">
                            <span class="step_no">9</span>
                            <span class="step_descr">
                                              Step 9<br />
                                      <small>Step 9 Auction</small>
                               </span>
                          </a>
                        </li>
                      </ul>
					  <form class="form-horizontal form-label-left" id="frm" name="form" action="<?php echo base_url('index.php/product_c/update_product/').$val->product_id; ?>" method="post" enctype="multipart/form-data">
                      <div id="step-1">
                          
                      <span class="section" style="text-align:center;">Add Product</span>
						  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Name<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" name="product_name" value="<?php if(isset($val)){ echo $val->product_name; }?>" required="required" placeholder=" Product name"  type="text">
                        <span style="color:red;"><?php echo form_error('product_name'); ?></span>
						</div>
                        </div>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Description<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea  class="form-control col-md-7 col-xs-12" id="product_desc" name="product_desc" value="" required placeholder="Product Description">
						  <?php if(isset($val)){ echo $val->product_desc; }?>
                        </textarea>
						<span style="color:red;"><?php echo form_error('product_desc'); ?></span>
						</div>
                        </div>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Meta tag Title<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" name="meta_tag_title" value="<?php if(isset($val)){ echo $val->meta_tag_title; }?>"						  type="text" placeholder="Meta Tag Title">
						  <span style="color:red;"><?php echo form_error(''); ?></span>
					   </div>
                        </div>
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Meta tag Description <span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea   class="form-control col-md-7 col-xs-12" name="meta_tag_desc" type="text" value="" placeholder="Meta tag Description" >
						  <?php if(isset($val)){ echo $val->meta_tag_desc; }?>
						  </textarea>
						  <span style="color:red;"><?php echo form_error(''); ?></span>
					   </div>
					  
                        </div>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Input Tags</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
					   <?php // $tag=explode(',',$details->tags);
							//print_r($details->tags); die; 
					   ?>
                          <input id="tags_1" type="text" class="tags form-control" value="<?php echo $details->tags;?>" name="tags[]"/>
                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
					  
                      </div>
                      <div id="step-2">
                        <div class="form-horizontal form-label-left">
                      </p>
					  <p style="text-align:center;color:red"><?php if(isset($failed) && $failed!=''){ echo $failed;}?></p>
                      <span class="section" style="text-align:center;">Data</span>

                   
					  
						  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Model<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" name="product_model" value="<?php if(isset($details)){ echo $details->model; }?>" required placeholder=" Product Model"  type="text">
                        <span style="color:red;"><?php echo form_error('product_name'); ?></span>
						</div>
                        </div>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product SKU<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="SKU" onchange="check_sku(this.value)"  class="form-control col-md-7 col-xs-12" name="sku" value="<?php if(isset($details)){ echo $details->sku; }?>" required placeholder="Product SKU">
                       <span id="sku_msg"></span>
						<span style="color:red;"><?php echo form_error('product_desc'); ?></span>
						</div>
                        </div>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="name">Product Price<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  id="price" class="form-control col-md-7 col-xs-12" value="<?php  echo $details->product_price; ?>" name="product_price"  type="text" placeholder="Product Price">
						  <span style="color:red;"><?php echo form_error(''); ?></span>
					   </div>
                        </div>
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tax CLass<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <select   class="form-control col-md-7 col-xs-12" name="tax_class"  >
						  <?php if(isset($tax_name)){?>
						  <option <?php echo $tax_name->id;?>><?php echo $tax_name->taxt_name?></option>
						  <?php }?>
							<option>--Seletc Tax--</option>
							<?php if(isset($tax)){ foreach($tax as $tax){?>
							<option value="<?php echo $tax->id;?>"><?php echo $tax->tax_class;?></option>
							<?php }}?>
						  </select>
						  
						  <span style="color:red;"><?php echo form_error(''); ?></span>
					   </div>
					  
                        </div>
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Quantity<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" name="quantity" value="<?php  echo $details->quantity; ?> "type="text" placeholder="Product Quantity" >
						  
						  <span style="color:red;"><?php echo form_error(''); ?></span>
					   </div>
					  
                        </div>

						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Min Quantity<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" value="<?php  echo $details->minimum_stock_qty; ?>" name="m_quantity" type="text" placeholder="Product Min Quantity" >
						  
						  <span style="color:red;"><?php echo form_error(''); ?></span>
					   </div>
					  
                        </div>
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Stock Status<span class="required">*</span>
                        </label>
						
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <select   class="form-control col-md-7 col-xs-12" name="stock_status" >
						  
						  <?php if(isset($stock_sts_up)){?>
						    <option value="<?php echo $stock_sts_up->stock_status;?>"><?php echo $stock_sts_up->stock_status;?></option>
						  <?php }?>
							<option >-Stock Status-</option>
							<option value="instock">Instock</option>
							<option value="out_of_stock">Out of stock</option>
							<option value="pre_order">Pre-Order</option>
						  </select>
						  
						  <span style="color:red;"><?php echo form_error(''); ?></span>
					   </div>
					  
                        </div>
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Require Shipping<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                         Yes- <input    value="Yes" name="require_ship" type="radio" <?php if(isset($shipping_updt)){ if($shipping_updt->require_ship=='Yes'){?> checked <?php } }?>>
                         No- <input    value="No" name="require_ship" type="radio" <?php if(isset($shipping_updt)){ if($shipping_updt->require_ship=='No'){ ?> checked <?php }}?> >
						  
						 
					   </div>
					  
                        </div>
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Status<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <select   class="form-control col-md-7 col-xs-12" name="product_sts" >
							<option>--Select Status--</option>
							<option value="Enable">Enable</option>
							<option value="Disable">Disable</option>
						  </select>
						  
						  <span style="color:red;"><?php echo form_error(''); ?></span>
					   </div>
					  
                        </div>
					
                      <div class="ln_solid"></div>
                      
                      </div>
                      </div>
                      <div id="step-3">
                         <div class="form-horizontal form-label-left" >
                      <span class="section" style="text-align:center;">Links</span>
						  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Manufacture<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <select   class="form-control col-md-7 col-xs-12" name="brand"  >
						  <option><?php if(isset($brand_nm)){ echo $brand_nm->brand_name;}?></option>
							<option>--Seletc Brand--</option>
							<?php if(isset($brand)){ foreach($brand as $brand){?>
							<option value="<?php echo $brand->id;?>"><?php echo $brand->brand_name;?></option>
							<?php }}?>
						  </select>
                        <span style="color:red;"><?php echo form_error('product_name'); ?></span>
						</div>
                        </div>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Category<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
			                <select onchange="subsub(this.value)" class="form-control col-md-7 col-xs-12" name="category">
							<?php if(isset($cat_nm)){?><option value="<?php echo $cat_nm->cat_id?>"><?php echo $cat_nm->cat_name;?></option><?php }?>
							<option >--Select Category--</option>
							<?php if(isset($cat)){ foreach( $cat as $cat){?>
							<option  value="<?php echo $cat->cat_id;?>"><?php echo $cat->cat_name;?></option>
							<?php }}?>
						  </select>
						</div>
                        </div>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">sub cat<span class="required">*</span>
                        </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control col-md-7 col-xs-12" name="sub_sub"  id="sub">
								<option>Select Sub categories</option>
							</select>
						</div>
                        </div>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Related Product<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" name="rel_product" <?php if(isset($details)){  } ?> type="text">
						  <span style="color:red;"><?php echo form_error(''); ?></span>
					   </div>
                        </div>
					
                     </div>
                      </div>
					  
					 <div id="step-4">
                        <div class="form-horizontal form-label-left" >
                      <span class="section" style="text-align:center;">Attribute</span>
					   <button type="button" id="btn1" class="btn-primary">Add More++</button>
					  <div id="">
					  <?php if(isset($atr_val)){ $ex=explode(',',$atr_val->atr_name);  $h=count($ex);   ?>
					  <?php
						for($i=0; $i<=$h; $i++){
					  ?>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Attribute name<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12" >
					  <span id="rld">
                          <input   class="form-control col-md-7 col-xs-12" value="<?php echo $atr_val->atr_name[$i];?>" name="atr_name[]"  type="text" placeholder="Attribute Name">
						</span>
					   </div>
                        </div>
						
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Attribute Description</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
					   <span id="rld1">
                          <input id="tags_1" type="text" value="<?php echo $atr_val->atr_desc[$i];?>" class="tags form-control" placeholder="Attribute Description" name="atr_desc[]"/>
                          </span>
						  <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div>
					  <?php } }?>
					  
					  </div>
                      </div>
                      </div>
					  
                      <div id="step-5">
                        <div class="form-horizontal form-label-left" >

                      <div class="row">
                      
					  <div class="col-md-5 col-sm-5 col-xs-6">
                      <span class="section">Add OPtion's</span>
					 
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Radio Button<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="r1" onclick="select_radio()" value="1" class="form-control col-md-7 col-xs-12" name="radio"	  type="radio">
                        </div>
						
                        </div>
						
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Checkbox<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="r2" onclick="select_check_box()" value="2" class="form-control col-md-7 col-xs-12"  name="radio"	  type="radio">
                        </div>
						
                        </div>
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select File<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="r3" onclick="select_file()" value="3" class="form-control col-md-7 col-xs-12"  name="radio"	  type="radio">
                        </div>
						
                        </div>
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Drop Down<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="r4" onclick="drop_down()" value="4" class="form-control col-md-7 col-xs-12" name="radio"	  type="radio">
                        </div>
						
                        </div>
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Calender<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="r5" onclick="select_calender()" value="5" class="form-control col-md-7 col-xs-12"  name="radio"	  type="radio">
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
								<input type="file" class="form-control" name="image" >
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
					  </div>
						</div>
					</div>
				  
                      </div>
					   <div id="step-6">
                        <div class="form-horizontal form-label-left" >
                      <span class="section" style="text-align:center;">Discount</span>
					  
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Discount<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" name="discount" onchange="get_disc(this.value)">
						  <?php if(isset($disc_per))?><option value="<?php echo $disc_per->id;?>"><?php echo $disc_per->discount;?>
							<option>--Select Discount--</option>
							<?php if(isset($disc)){ foreach( $disc as $disc ){ ?>
							<option value="<?php echo $disc->id;?>"><?php echo $disc->discount;?></option>
							<?php }}?>
						  </select>
                       
						<span style="color:red;"><?php echo form_error('product_desc'); ?></span>
						</div>
                        </div>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Discount Price<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12" >
					  <span id="rld">
                          <input  value="<?php if(isset($disc_name)){ echo $disc_name->disc_price; }?>" class="form-control col-md-7 col-xs-12" name="discount_price"  type="text" placeholder="Discount Price">
						</span>
					   </div>
                        </div>
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Start Date<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  value="<?php if(isset($disc_name)){ echo $disc_name->start_date; }?>"  class="form-control col-md-7 col-xs-12" name="start_date" type="date"  >
						  
						  <span style="color:red;"><?php echo form_error(''); ?></span>
					   </div>
					  
                        </div>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">End Date</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tags_1"  value="<?php if(isset($disc_name)){ echo $disc_name->end_date; }?>" type="date" class="tags form-control"  name="end_date"/>
                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div>
					  
					  </div>
                      </div>
					  <div id="step-7">
                        <div class="form-horizontal form-label-left" >
                      <span class="section" style="text-align:center;">Special Discount</span>
					   
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">User Group</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="tags_1"  class="tags form-control"  name="user_group">
							<option>--Select Group--</option>
							<?php if(isset($group)){ foreach($group as $group){?>
							<option value="<?php echo $group->cgroup_id ?>"><?php echo $group->cgroup_name ;?></option>
							<?php }}?>
						  </select>
                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Percent Discount<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" value="<?php if(isset($special_disc)){ echo $special_disc->discount; }?>" name="per_discount"  type="text" placeholder="Discount Percent">
						  <span style="color:red;"><?php echo form_error(''); ?></span>
					   </div>
                        </div>
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Start Date<span class="required">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" value="<?php if(isset($special_disc)){ echo $special_disc->start_date; }?>" name="s_start_date" type="date"  >
						  
						  <span style="color:red;"><?php echo form_error(''); ?></span>
					   </div>
					  
                        </div>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">End Date</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tags_1" type="date" class="tags form-control"  value="<?php if(isset($special_disc)){ echo $special_disc->end_date; }?>" name="s_end_date"/>
                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div>
					
					  </div>
                      </div>
					  <div id="step-8">
						 <div class="form-horizontal form-label-left" >
						<span class="section" style="text-align:center;">Image</span>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Main Image</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tags_1" type="file" class="tags form-control"  name="product_img"/>
						   <?php if(isset($val)){ ?><img src="<?php echo base_url('uploads/').$val->product_img; ?>" height="100px" width="100px" > <?php }?>
						  <h3 onclick="add_add()"><i class="fa fa-plus" aria-hidden="true">Additional Image</i></h3>
                        <span id="add_ad"></span>
						</div>
						
						
						  </div>
					  </div>
						 
                      </div>
					   <div id="step-9">
						 <div class="form-horizontal form-label-left" >
						<span class="section" style="text-align:center;">Auction Detail</span>
						 <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Price</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tags_1" value="<?php if(isset($auction_dt)){ echo $auction_dt->start_price; }?>" type="text" class="tags form-control" placeholder="Auction Start Price" name="p_auction_price"/>
						  
						</div>
						  </div>
						 
						   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Hours</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="" type="number" class="tags form-control" value="<?php  if(isset($auction_dt)){ echo $auction_dt->hours; } ?>" name="hours"/>
						  
						</div>
						  </div>
						  
						  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Auction price</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="" type="number" class="tags form-control" value="<?php if(isset($auction_dt)){ echo $auction_dt->auction_price; } ?>" name="auction_price"/>
						</div>
						  <button type="submit" onclick="srt()" class="btn btn-primary">Submit</button>
						  </div>
						
					  </div>
						 
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		
		 
        </div>
		<script>
		function srt(){
			document.getElementById('frm').submit();
		}
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
		<script>
			function subsub(a)
			{
				//alert(a);
				$.ajax({
						
						url:'<?php echo site_url('Category_c/getsubCategoryList/')?>'+a,
						success: function(res){
							//alert(res);

							$("#sub").html(res);
						}
					});
				
			}
		</script>
		<script>
			function check_sku(a)
			{
				$.ajax({
						
						url:'<?php echo site_url('Product_c/check_sku/')?>'+a,
						success: function(res){
							//alert(res);

							$("#sku_msg").html(res);
						}
					});
				
			}
		</script>
			
		<script>
			function add_add()
			{
				document.getElementById('add_ad').innerHTML='<input type="file" name="additional_img[]" multiple>';
			}
		</script>
		<script>
			function get_disc(dis)
			{
				//alert(dis);
				var pr=document.getElementById('price').value;
				//alert(pr);
				$.ajax({
						url:'<?php echo site_url('Product_c/auto_disc/')?>'+dis,
						success: function(res){
							$("#rld").html(res);
						}
					});
			}
		</script>

       <?php $this->load->view('includes/footer');?>