
      
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
                    <h2>Add Product <small></small></h2>
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
            <form class="form-horizontal form-label-left"  onsubmit="" id="frm" name="validate" action="<?php echo base_url(); ?>index.php/product_c/add_product" method="post" enctype="multipart/form-data">
                      <div id="step-1">
                          
                      <span class="section" style="text-align:center;">Add Product</span>
              <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Name<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name11" class="form-control col-md-7 col-xs-12" name="product_name" value="" required="required" placeholder=" Product name"  type="text">
                        <span  id="nm_msg" style="display:none;color:red;">Name is Required</span>
            </div>
                        </div>
             <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Description<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea  class="form-control col-md-7 col-xs-12" id="product_desc" name="product_desc" value="" required placeholder="Product Description">
                        </textarea>
            <span style="color:red;"><?php echo form_error('product_desc'); ?></span>
            </div>
                        </div>
             <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Meta tag Title<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" name="meta_tag_title" id="m_title" type="text" placeholder="Meta Tag Title">
              <span style="color:red;"><?php echo form_error(''); ?></span>
             </div>
                        </div>
            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Meta tag Description <span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea  class="form-control col-md-7 col-xs-12" name="meta_tag_desc" type="text" placeholder="Meta tag Description" >
              </textarea>
              <span style="color:red;"><?php echo form_error(''); ?></span>
             </div>
            
                        </div>
             <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Input Tags</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tags_1" type="text" class="tags form-control" value="" name="tags[]"/>
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
                          <input  class="form-control col-md-7 col-xs-12" id="p_model" name="product_model" value="" required placeholder=" Product Model"  type="text">
                        <span style="color:red;"><?php echo form_error('product_name'); ?></span>
            </div>
                        </div>
             <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product SKU<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="SKU" onchange="check_sku(this.value)"  class="form-control col-md-7 col-xs-12" name="sku" value="" required placeholder="Product SKU">
                       <span id="sku_msg"></span>
            <span style="color:red;"><?php echo form_error('product_desc'); ?></span>
            </div>
                        </div>
             <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Price<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  id="price" class="form-control col-md-7 col-xs-12" name="product_price"  type="text" placeholder="Product Price">
              <span style="color:red;"><?php echo form_error(''); ?></span>
             </div>
                        </div>
            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tax CLass<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <select   class="form-control col-md-7 col-xs-12" id="t_tax" name="tax_class"  >
              <option>--Seletc Tax--</option>
              <?php if(isset($tax)){ foreach($tax as $tax){?>
              <option value="<?php echo $tax->id;?>"><?php echo $tax->tax_class;?> </option>
              <?php }}?>
             </select>
              
              <span style="color:red;"><?php echo form_error(''); ?></span>
             </div>
            
                        </div>
            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Quantity<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  id="qty" class="form-control col-md-7 col-xs-12" name="quantity" type="text" placeholder="Product Quantity" >
              
              <span style="color:red;"><?php echo form_error(''); ?></span>
             </div>
            
                        </div>

            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Min Quantity<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" name="m_quantity" type="text" placeholder="Product Min Quantity" >
              
              <span style="color:red;"><?php echo form_error(''); ?></span>
             </div>
            
                        </div>
            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Stock Status<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <select   class="form-control col-md-7 col-xs-12" name="stock_status" >
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
                         Yes- <input    value="Yes" name="require_ship" type="radio">
                         No- <input    value="No" name="require_ship" type="radio">
              
             
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
                          <input  list="name" class="form-control col-md-7 col-xs-12" placeholder="Related Product" name="rel_product" type="text">
              <datalist id="name">
              <?php foreach ($product as $row) {?>
                <option value="<?php if(isset($product)){ echo $row->product_name; }?>">
              <?php }?>
              </datalist>
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
             <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Attribute name<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12" >
            <span id="rld">
                          <input   class="form-control col-md-7 col-xs-12" name="atr_name[]"  type="text" placeholder="Attribute Name">
            </span>
             </div>
                        </div>
            
             <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Attribute Description</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
             <span id="rld1">
                          <input id="tags_1" type="text" class="tags form-control" placeholder="Attribute Description" name="atr_desc[]"/>
                          </span>
              <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div>
            
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
                          <input id="r1" onclick="select_radio()" value="1" class="form-control col-md-7 col-xs-12" name="radio"    type="radio">
                        </div>
            
                        </div>
            
            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Checkbox<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="r2" onclick="select_check_box()" value="2" class="form-control col-md-7 col-xs-12" <?php if(isset($val)){ if($val->is_parent=='No parent'){ ?>checked <?php } }?> name="radio"   type="radio">
                        </div>
            
                        </div>
            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select File<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="r3" onclick="select_file()" value="3" class="form-control col-md-7 col-xs-12" <?php if(isset($val)){ if($val->is_parent=='No parent'){ ?>checked <?php } }?> name="radio"    type="radio">
                        </div>
            
                        </div>
            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Drop Down<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="r4" onclick="drop_down()" value="4" class="form-control col-md-7 col-xs-12" <?php if(isset($val)){ if($val->is_parent=='No parent'){ ?>checked <?php } }?> name="radio"    type="radio">
                        </div>
            
                        </div>
            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Select Calender<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="r5" onclick="select_calender()" value="5" class="form-control col-md-7 col-xs-12" <?php if(isset($val)){ if($val->is_parent=='No parent'){ ?>checked <?php } }?> name="radio"    type="radio">
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
                          <input   class="form-control col-md-7 col-xs-12" name="discount_price"  type="text" placeholder="Discount Price">
            </span>
             </div>
                        </div>
            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Start Date<span class="required">*</span>
                        </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" name="start_date" type="date"  >
              
              <span style="color:red;"><?php echo form_error(''); ?></span>
             </div>
            
                        </div>
             <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">End Date</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tags_1" type="date" class="tags form-control"  name="end_date"/>
                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div>
            
            </div>
                      </div>
            <div id="step-7">
              <div class="form-horizontal form-label-left container" id="container" >
                  <span class="section" style="text-align:center;">Special Discount</span>
                  <button type="button" onclick="Clone()" class="btn-primary">Add More++</button>
                  <div class="mydiv" id="thediv" >
                  <div class="item form-group ">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">User Group</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="tags_1"  class="tags form-control"  name="user_group[]">
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
                          <input   class="form-control col-md-7 col-xs-12" name="per_discount[]"  type="text" placeholder="Discount Percent">
                          <span style="color:red;"><?php echo form_error(''); ?></span>
                        </div>
                  </div>
                  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Start Date<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input   class="form-control col-md-7 col-xs-12" name="s_start_date[]" type="date"  >
                           <span style="color:red;"><?php echo form_error(''); ?></span>
                        </div>
                  </div>
                  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">End Date</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tags_1" type="date" class="tags form-control"  name="s_end_date[]"/>
                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;">
                          </div>
                        </div>
                  </div>
                </div>
                
              </div>


               <!-- <button type="button" onclick="Clone()" ) ">Clone</button>  -->
            
               
            </div>

          
            <div id="step-8">
              <div class="form-horizontal form-label-left" >
                <span class="section" style="text-align:center;">Image</span>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Main Image</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tags_1" type="file" class="tags form-control"  name="product_img"/>
                        <h3 onclick="add_add()"><i class="fa fa-plus" aria-hidden="true">Additional Image</i></h3>

                        <div id="add_ad" style="display:none">
                            <input type="file" name="additional_img[]" multiple>

                        </div>
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
                          <input id="tags_1" type="text" class="tags form-control" placeholder="Auction Start Price" name="p_auction_price"/>
              
            </div>
              </div>
             
              <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Hours</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="" type="number" value="<?php //echo $dtdt=date;?>" class="tags form-control"  name="hours"/>
            </div>
              </div>
              <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Start Time</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="" type="datetime-local"  class="tags form-control"  name="start_o_date"/>
            </div>
              </div>
            
              <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Auction price</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="" type="text" class="tags form-control" placeholder="Auction Price"  name="auction_price"/>
            </div>
              <button type="submit" onclick="validateForm()" class="btn btn-primary">Submit</button>
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
        function Clone() {


  var clone = document.getElementById('thediv').cloneNode(true); // "deep" clone
  document.getElementById("container").appendChild(clone);
}

function Delete(button) {
  var parent = button.parentNode;
  var grand_father = parent.parentNode;
  grand_father.removeChild(parent);
}
    </script>
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
            
            url:'<?php echo base_url('Category_c/getsubCategoryList/')?>'+a,
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
            
            url:'<?php echo base_url('Product_c/check_sku/')?>'+a,
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
        document.getElementById('add_ad').style.display='block';
      }
    </script>
    <script>
      function get_disc(dis)
      {
        var pr=document.getElementById('price').value;
        alert(pr);
        alert(dis);
        $.ajax({
            url:'<?php echo base_url('Product_c/auto_disc/')?>'+dis+pr,
            success: function(res){
              $("#rld").html(res);
            }
          });
      }
    </script>
    <script>
       function validateForm()
{
  
   var nm=document.getElementById("name11").value;
   var mt=document.getElementById("m_title").value;
   var t_tax=document.getElementById("t_tax").value;
   var p_model=document.getElementById("p_model").value;
   var qty=document.getElementById("qty").value;
   var price=document.getElementById("price").value;
  
  
   if(nm==""){ alert("Product Name Can't be null"); document.getElementById("name11").style.background=("red"); }
   
   if(mt==""){ alert("Meta tag Can't be null"); document.getElementById("m_title").style.background=("red");  }
  
   if(p_model==""){ alert("Product Model Can't be null"); document.getElementById("p_model").style.background=("red"); }
   
   if(qty==""){ alert("Product Quantity Can't be null");document.getElementById("qty").style.background=("red"); }
  
   if(price==""){ alert("Product Price Can't be null"); document.getElementById("price").style.background=("red"); }
   
   if(nm && mt && t_tax && p_model && qty && price != ""){ srt(); }
   

}

    </script>
