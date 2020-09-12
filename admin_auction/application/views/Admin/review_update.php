 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                
                
              </div>
              

              
            </div>
            

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                 
                <div class="x_panel">
                  <div class="title">
                   
                    
                 
                    <ul class="nav navbar-right panel_toolbox">

                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                    
                  </div>
                  <div class="x_content">

                  <form class="form-horizontal form-label-left" action="<?php echo base_url('Review_c/update');?>" method="post">
 

   
 
                      
                      </p>
                      <span class="section">Review</span>
                       <input type="hidden" name="id" value="<?php echo($r->review_id); ?>">
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Customre name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" readonly name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="text" value="<?php echo($r->customre_name)?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product">Product<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="product" name="product" readonly required="required" class="form-control col-md-7 col-xs-12" value="<?php echo($r->product_name)?>">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rating">Rating<?php $n=$r->rating; echo $n; ?><span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p>
                          1:
                          <input type="radio" class="flat" name="review" id="radio1" value="1" <?php if($n == "1") { echo "checked"; }?>/>
                          2:
                          <input type="radio" class="flat" name="review" id="genderF" value="2"  <?php if($n == "2") { echo "checked"; }?> />
                          3:
                          <input type="radio" class="flat" name="review" id="genderF" value="3"
                           <?php if($n == "3") { echo "checked"; }?> />
                          4:
                          <input type="radio" class="flat" name="review" id="genderF" value="4"
                           <?php if($n == "4") { echo "checked"; }?> />
                          5:
                          <input type="radio" class="flat" name="review" id="genderF" value="5" 
                           <?php if($n == "5") { echo "checked"; }?> />
                      </p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="review_date">Review Date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="date" name="date" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo($r->date_add)?>">
                        </div>
                      </div>
                     <!-- <div class='input-group date' id='myDatepicker4'>
                            <input type='text' class="form-control"  />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div> -->

                    
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Review status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="heard" class="form-control" name="status" required>
                            <?php
                              if($r->product_status=='0')
                            {
                              ?>

                             <option value="0">Disabled</option>
                              <option value="1">Enableds</option>
                             <?php
                            }
                            else
                              {
                                ?>
                                <option value="1">Enabled</option>
                                <option value="0">Disabled</option>
                                <?php
                              }
                            ?>
                           
                            
                          </select>
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textreview">status Review <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textreview" required="required" name="textreview" class="form-control col-md-7 col-xs-12">
                            <?php echo($r->comment_review)?>
                          </textarea>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <script>
    $('#myDatepicker4').datetimepicker({

        ignoreReadonly: true,
        allowInputToggle: true
    });
</script> -->