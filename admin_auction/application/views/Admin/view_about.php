
<script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
      <!-- <form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </form>  -->
        
        

          <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="clearfix"></div>
                 <span>
                 
                 </span>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>About Us</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                  
              <form action="<?php echo base_url('About_controller/update_about');?>" method="POST">

          <div class="col-md-12 form-line">
             <?php 
                   foreach ($re as $value) {
                
              ?>
              
              <div class="form-group">
                <label for="telephone">Meta Title</label>
                <textarea name="editor1" id="editor1" rows="10" cols="80" requireds>
                        <?php echo $value->mtitle;?>
                </textarea>
              </div>
              <div class="form-group">
                <label for="telephone">Meta Description</label>
                <textarea name="editor2" id="editor2" rows="10" cols="80" requireds>
                        <?php echo $value->mdec;?>
                </textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputUsername">Information of title</label>
                <input type="hidden" name="id" value="<?php echo $value->id;?>">
                <input type="text" class="form-control" id="title" placeholder=" Enter Information of title" name="Tinformation" value="<?php echo $value->ititel;?>" required >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail">Description of page</label>
               
                <textarea name="editor3" id="editor3" rows="10" cols="80" required>
                      <?php echo htmlspecialchars_decode(htmlspecialchars_decode($value->dimg));?>
                </textarea>
              </div>  
              
              <div class="form-group">
                  <input type="submit" id="sub" value="Update" class="btn btn-success">
                 </div>
              <?php
                   }
              ?>
                 
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
                CKEDITOR.replace( 'editor1' );
                 CKEDITOR.replace( 'editor2' );
                  CKEDITOR.replace( 'editor3' );
            </script>
            <script type="text/javascript">
        CKEDITOR.config.height = '200px';
        CKEDITOR.config.allowedContent = true;
        </script>
         <script>
       $('.alert').delay(1000).fadeOut(400)
        </script>
