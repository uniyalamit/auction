
<script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
     
     
        

          <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="clearfix"></div>
                 <span>
                 <div id="msg">
                     
                 </div>
                 </span>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Store Information</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

 
<form action="<?php echo base_url('Store_controller/store_update');?>" method="POST" enctype="multipart/form-data">
                   
                                    <!-- Nav tabs -->
                      <div class="card">
                        <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">General</a></li>
                          <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Store</a></li>
                          <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Local</a></li>
                          <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Logo</a></li>
                        </ul>

                                    <!-- Tab panes -->
                                     <?php 
                   foreach ($store as $data) {
                    for ($i=0; $i <count($data['all']) ; $i++) { 
                    
                        
                   ?> 
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                  <input type="hidden" name="id" value=" <?php echo $data['all'][$i]->store_id;?>">
                  <div class="form-group">
                    <label for="exampleInputEmail">Meta Tag</label>
                    
                    <textarea name="editor5" id="editor5" rows="10" cols="80" required>
                             <?php echo $data['all'][$i]->meta_tag;?>
                    </textarea>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail">Meta Descripation</label>
                      
                      <textarea name="editor4" id="editor4" rows="10" cols="80" required>
                               <?php echo $data['all'][$i]->meta_discripation;?>
                      </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail">Meta Tag Keywords</label>
                    
                    <textarea name="editor3" id="editor3" rows="10" cols="80" required>
                            <?php echo $data['all'][$i]->storemeta_key;?>
                    </textarea>
                  </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                  <h2><b>Store Name</b></h2>
                  <div class="form-group">
                    <input type="text" class="form-control" id="title" placeholder=" Enter Information of Name" name="Store_name" value="<?php echo $data['all'][$i]->store_name;?>"  required>
                  </div>
                  <h2><b>Store Owner</b></h2>
                  <div class="form-group">
                    <label for="exampleInputUsername">Address</label>
                    <input type="text" class="form-control" id="title" placeholder=" Enter Information of Address" name="address" value="<?php echo $data['all'][$i]->store_address;?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername">URL</label>
                    <input type="text" class="form-control" id="url" placeholder=" Enter Information of URL" name="url" value="<?php echo $data['all'][$i]->URL;?>" required>
                   </div>
                   <p><b>Geocode</b></p>
                    <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                             <label for="exampleInputUsername">Longitude</label>
                            <input type="text" class="form-control has-feedback-left" name="longitude" id="Longitude" value="<?php echo $data['all'][$i]->g_longtitude;?>" placeholder="Enter Longitude" >
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                             <label for="exampleInputUsername">Latitude</label>
                            <input type="text" class="form-control" id="Latitude" name="latitude" placeholder="Enter Latitude" value="<?php echo $data['all'][$i]->g_latitude;?>" >
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                          </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername">Telephone No.</label>
                      <input type="text" class="form-control" id="Telephone" placeholder=" Enter Information of Telephone Number" name="telephone" value="<?php echo $data['all'][$i]->store_telephone;?>"  required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername">Email</label>
                      <input type="email" class="form-control" id="email" placeholder=" Enter Information of Email" name="email" value="<?php echo $data['all'][$i]->store_email;?>" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername">Fax No.</label>
                      <input type="text" class="form-control" id="Fax" placeholder=" Enter Information of Fax Number" name="fax"  value="<?php echo $data['all'][$i]->store_fax;?>"  required>
                    </div>
                     
                      <div class="form-group">
                          <label for="exampleInputUsername">Opening Timing</label>
                          <input type="time" class="form-control" id="Opening" placeholder="" name="ot" value="<?php echo $data['all'][$i]->store_open;?>"  required>
                      </div>
                
                    <div class="form-group">
                      <label for="exampleInputEmail">Comments</label>
                      <textarea name="comment" class="form-control" id="comment" rows="10" cols="80" required>
                             <?php echo $data['all'][$i]->store_comment;?>
                      </textarea>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                  

              <div class="form-group">
                  <label for="exampleInputUsername">Country</label>
                  <input type="text" class="form-control" id="country" placeholder=" Enter Information of Country Name" name="country" value="<?php echo $data['all'][$i]->store_country;?>" required>
              </div>

              <div class="form-group">
                  <label for="exampleInputUsername">State</label>
                  <input type="text" class="form-control" id="state" placeholder=" Enter Information of State Name" name="State" value="<?php echo $data['all'][$i]->store_state;?>" required>
              </div>

              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Language</label>
                          <select class="form-control" name="language">
                            <option value="<?php echo $data['all'][$i]->store_language;?>"><?php echo $data['all'][$i]->store_language;?></option>
                            <option value="English">English</option>
                            <option value="France">France</option>
                            <option value="German">German</option>
                            <option value="Italian">Italian</option>
                          </select>
                      
              </div>
              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Currency</label>
                         <select class="form-control" name="curr">
                          <option value="<?php echo $data['all'][$i]->currency;?>"><?php echo $data['all'][$i]->currency;?></option>
                        <?php
                        for ($j=0; $j <count($data['curr']) ; $j++) {

                        ?>
                         
                          <option value="<?php  echo $data['curr'][$j]->currency_iso;?>"><?php  echo $data['curr'][$j]->currency_iso;?></option>

                        <?php
                    
                                                  }
                        ?>
                        </select>
                        
                            
                          
              </div>
              <label class="control-label "><h4>Length</h4></label>
              <div class="form-group">

                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                         <label for="exampleInputUsername">Centimetre</label>
                        <input type="text" class="form-control has-feedback-left" id="Centimetre" name="centimetre" placeholder="Enter Centimetre" value="<?php echo $data['all'][$i]->store_centimeter;?>" >
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                         <label for="exampleInputUsername">Metre</label>
                        <input type="text" class="form-control" id="Metre" name="metre" value="<?php echo $data['all'][$i]->store_meter;?>" placeholder="Enter Meter" >
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                         <label for="exampleInputUsername">Inch</label>
                        <input type="text" class="form-control" id="Inch" name="Inch" value="<?php echo $data['all'][$i]->store_inch;?>" placeholder="Enter Inch" >
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>
                </div>

                <label class="control-label "><h4>Width</h4></label>
              <div class="form-group">

                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                         <label for="exampleInputUsername">Kilogram</label>
                        <input type="text" class="form-control has-feedback-left"  value="<?php echo $data['all'][$i]->store_kilo;?>" name="kilogram" id="Kilogram" placeholder="Enter Kilogram" >
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                         <label for="exampleInputUsername">Gram</label>
                        <input type="text" class="form-control" id="Gram" value="<?php echo $data['all'][$i]->store_gram;?>" name="gram" placeholder="Enter Gram" >
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                         <label for="exampleInputUsername">Pond</label>
                        <input type="text" class="form-control" id="Pond" name="pond" value="<?php echo $data['all'][$i]->store_pond;?>" placeholder="Enter Pond" >
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>
                </div>
                
                <label class="control-label "><h4>Voucher</h4></label>
                <div class="form-group">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                         <label for="exampleInputUsername">Minimum Voucher</label>
                        <input type="text" class="form-control has-feedback-left" id="Minimum" name="minimum" placeholder="Enter Kilogram" value="<?php echo $data['all'][$i]->store_miniv;?>" >
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                         <label for="exampleInputUsername">Maximum Voucher</label>
                        <input type="text" class="form-control" id="Maximum" name="maximum" placeholder="Enter Gram"  value="<?php echo $data['all'][$i]->store_maxv;?>" >
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>
                </div>
                <br>
                <br>
                <br>
                </div>
                <div role="tabpanel" class="tab-pane" id="settings">
                  <div class="form-group">
                  <label for="exampleInputUsername"><h3>Store Logo</h3></label>
                  <input type="file" class="form-control" id="logo" placeholder=" Enter Information of Name" name="logo" value="<?php echo $data['all'][$i]->store_logo;?>">
                  <img height="50" width="50" src="<?php echo base_url('image/').$data['all'][$i]->store_logo;?>">
                </div>


              
                 <div class="form-group">
                  <input type="submit" id="sub" value="Update" class="btn btn-success">
                 </div>
                </div>
            </div>
         </div>
    </div>
    <?php
     }
   }
    ?>
</form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor5' );
                 CKEDITOR.replace( 'editor4' );
                  CKEDITOR.replace( 'editor3' );
            </script>
            <script type="text/javascript">
				CKEDITOR.config.height = '100px';
				CKEDITOR.config.allowedContent = true;
				</script>
        <script>
       $('.alert').delay(1000).fadeOut(400)
        </script>
