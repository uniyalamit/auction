
<script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
     
        
        

          <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="clearfix"></div>
                
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
                  

              <form action="<?php echo base_url('Store_controller/store_detail');?>" method="POST" enctype="multipart/form-data">
                 <div class="row">
                <div class="board">
                    <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                    <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#home" data-toggle="tab" title="welcome">
                      <span class="round-tabs one">
                              <i class="glyphicon glyphicon-home"></i>
                      </span> 
                  </a></li>

                  <li><a href="#profile" data-toggle="tab" title="profile">
                     <span class="round-tabs two">
                         <i class="glyphicon glyphicon-user"></i>
                     </span> 
           </a>
                 </li>
                 <li><a href="#messages" data-toggle="tab" title="bootsnipp goodies">
                     <span class="round-tabs three">
                          <i class="glyphicon glyphicon-gift"></i>
                     </span> </a>
                     </li>

                     <li><a href="#settings" data-toggle="tab" title="blah blah">
                         <span class="round-tabs four">
                              <i class="glyphicon glyphicon-comment"></i>
                         </span> 
                     </a></li>

                     <li><a href="#doner" data-toggle="tab" title="completed">
                         <span class="round-tabs five">
                              <i class="glyphicon glyphicon-ok"></i>
                         </span> </a>
                     </li>
                     
                     </ul></div>

                     <div class="tab-content">
                      <div class="tab-pane fade in active" id="home">

                          <center><h1>General</h1></center>
                          <div class="form-group">
                            <label for="exampleInputEmail">Meta Tag</label>
                            
                            <textarea name="editor5" id="editor5"  rows="10" cols="80" required>
                                    
                            </textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail">Meta Descripation</label>
                            
                            <textarea name="editor4" id="editor4" rows="10" cols="80" required>
                                    
                            </textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail">Meta Tag Keywords</label>
                            
                            <textarea name="editor3" id="editor3" rows="10" cols="80" required>
                                    
                            </textarea>
                          </div>
                      </div>
                  <div class="tab-pane fade" id="profile">
                          
                          <center><h1>Store</h1></center>
                          <div class="clearfix"></div>
                          <div class="form-group">
                            <label for="exampleInputUsername">Store Name</label>
                            <input type="text" class="form-control" id="title" placeholder=" Enter Information of Name" name="Store_name" required>
                          </div>
                          <h2><b>Store Owner</b></h2>
                          <div class="form-group">
                            <label for="exampleInputUsername">Address</label>
                            <input type="text" class="form-control" id="title" placeholder=" Enter Information of Name" name="address" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputUsername">URL</label>
                            <input type="text" class="form-control" id="url" placeholder=" Enter Information of URL" name="url" required>
                          </div>
                          <p><b>Geocode</b></p>
                          <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                   <label for="exampleInputUsername">Longitude</label>
                                  <input type="text" class="form-control has-feedback-left" name="longitude" id="Longitude" placeholder="Enter Longitude">
                                  <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                   <label for="exampleInputUsername">Latitude</label>
                                  <input type="text" class="form-control" id="Latitude" name="latitude" placeholder="Enter Latitude">
                                  <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                </div>
                          </div>

                          

                          <div class="form-group">
                            <label for="exampleInputUsername">Telephone No.</label>
                            <input type="text" class="form-control" id="Telephone" placeholder=" Enter Information of Telephone Number" name="telephone" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputUsername">Email</label>
                            <input type="email" class="form-control" id="email" placeholder=" Enter Information of Email" name="email" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputUsername">Fax No.</label>
                            <input type="text" class="form-control" id="Fax" placeholder=" Enter Information of Fax Number" name="fax" required>
                          </div>


                          
                          
                          <div class="form-group">
                              <label for="exampleInputUsername">Opening Timing</label>
                              <input type="time" class="form-control" id="Opening" placeholder="" name="ot" required>
                          </div>
                          
                        <div class="form-group">
                          <label for="exampleInputEmail">Comments</label>
                          <textarea name="comment" class="form-control" id="comment" rows="10" cols="80" required>
                                  
                          </textarea>
                        </div>
                  </div>


                      <div class="tab-pane fade" id="messages">
                          
                       <center><h1>Local</h1></center>
              <hr>

              <div class="form-group">
                  <label for="exampleInputUsername">Country</label>
                  
                   <select class="form-control" name="country" required>
                            <option value="">--select---</option>
                             <option value="India">India</option>
                            <option value="France">France</option>
                            <option value="Germani">Germani</option>
                            <option value="Maxicon">Maxicon</option>
                          </select>
              </div>

              <div class="form-group">
                  <label for="exampleInputUsername">State</label>
                  <input type="text" class="form-control" id="state" placeholder=" Enter Information of State Name" name="State" required>
              </div>

              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Language</label>
                          <select class="form-control" name="language" required>
                            <option value="">--select---</option>
                             <option value="English">English</option>
                            <option value="France">France</option>
                            <option value="German">German</option>
                            <option value="Italian">Italian</option>
                          </select>
                      
              </div>
              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Currency</label>
                          <select class="form-control" name="curr">
                            <option value="">--select---</option>
                            <?php 
                           foreach ($st as $value) {
                             
                            ?>
                             <option value="<?php echo $value->currency_iso;?>"><?php echo $value->currency_iso;?></option>
                             <?php
                         }
                             ?>
                          </select>
              </div>
              <label class="control-label "><h4>Length</h4></label>
              <div class="form-group">

                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                         <label for="exampleInputUsername">Centimetre</label>
                        <input type="text" class="form-control has-feedback-left" id="Centimetre" name="centimetre" placeholder="Enter Centimetre">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                         <label for="exampleInputUsername">Metre</label>
                        <input type="text" class="form-control" id="Metre" name="metre" placeholder="Enter Meter">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                         <label for="exampleInputUsername">Inch</label>
                        <input type="text" class="form-control" id="Inch" name="Inch" placeholder="Enter Inch">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>
                </div>

                <label class="control-label "><h4>Width</h4></label>
              <div class="form-group">

                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                         <label for="exampleInputUsername">Kilogram</label>
                        <input type="text" class="form-control has-feedback-left" name="kilogram" id="Kilogram" placeholder="Enter Kilogram">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                         <label for="exampleInputUsername">Gram</label>
                        <input type="text" class="form-control" id="Gram" name="gram" placeholder="Enter Gram">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                         <label for="exampleInputUsername">Pond</label>
                        <input type="text" class="form-control" id="Pond" name="pond" placeholder="Enter Pond">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>
                </div>
                
                <label class="control-label "><h4>Voucher</h4></label>
                <div class="form-group">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                         <label for="exampleInputUsername">Minimum Voucher</label>
                        <input type="text" class="form-control has-feedback-left" id="Minimum" name="minimum" placeholder="Enter Kilogram">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                         <label for="exampleInputUsername">Maximum Voucher</label>
                        <input type="text" class="form-control" id="Maximum" name="maximum" placeholder="Enter Gram">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>
                </div>

                      </div>
                      <div class="tab-pane fade" id="settings">
                         <div class="form-group">
                            <label for="exampleInputUsername"><h1>Store Logo</h1></label>
                            <input type="file" class="form-control" id="logo" placeholder=" Enter Information of Name" name="logo" required>
                          </div>  
                      </div>
                      <div class="tab-pane fade" id="doner">
                        


              
                 <div class="form-group">
                  <input type="submit" id="sub" value="submit" class="btn btn-success">
                 </div>
                          
                       </div>
<div class="clearfix"></div>
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
