
<script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
     
        
        

          <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="clearfix"></div>
                 <span>
                 
                 </span>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Privacy Policy</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">


              <form action="<?php echo base_url('Privacy_controller/privacy_detail');?>" method="POST">
              
					<div class="col-md-12 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Information of title</label>
					    	<input type="text" class="form-control" id="title" placeholder=" Enter Information of title" name="Tinformation" required>
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Description of page</label>
					    	
					    	<textarea name="editor5" id="editor5" rows="10" cols="80" required>
				                
				        </textarea>
					  	</div>	
					  	
			  		     <div class="form-group">
			  		     	<input type="submit" id="sub" value="submit" class="btn btn-success">
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
                 
            </script>
            <script type="text/javascript">
				CKEDITOR.config.height = '200px';
				CKEDITOR.config.allowedContent = true;
				</script>
