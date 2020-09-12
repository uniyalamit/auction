        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
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
                      
                      <li><a href="<?php echo base_url('option_c/view_option');?>"><i class=" btn btn-danger fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
			<?php //echo validation_errors();
			?>
			
                    <form class="form-horizontal form-label-left"  action="<?php echo site_url('option_c/add_option');?>" method="post" >

                      
                  
                      <span class="section">Add Option</span>
					
						

						<div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Option Name<span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" value="" name="option_name" placeholder="size,length,"  type="text"  ="" >
                        </div>
						<i style="color:red;"><?php echo form_error('username');?></i>
                        </div>
						
						<div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Option Type<span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                         <input list="list" name="element" class="input-block-level search-query" onblur="add(document.forms[0].element.value)">
						
						<datalist id="list" style="color:red;">
						<?php				foreach($get_option as $row)	{
							
							?>
						<option value="<?php  echo $row->option_name ; ?>">
						<?php }	?>
						</datalist>
                        </div>
                        </div>
						
						<div class="item form-group" id="hide" style="display:block;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sort Order<span class="">*</span>
                        </label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" value="" name="sort_order" placeholder="Sort Order"  type="text" >
                        </div>
						<i style="color:red;"><?php echo form_error('password');?></i>
                        </div>
						
                     
                      
                     
                      
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success fa fa-plus">Add</button>
                        </div>
                      </div>
                    </form>
					
					<table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title"> type</th>
                            <th class="column-title">text </th>
                            <th class="column-title">value</th>
                            <th class="column-title">add</th>
                 
                          </tr>
                        </thead>

                        <tbody>
                        
                          <tr class="even pointer">
						  <td><span id="fooBar">&nbsp;</span></td><td>
</td></tr>                          <tr class="even pointer">

                            <td class="a-center "> <select id = "ddlFruits" ></select>
                            </td>
                            <td class=" ">Text: <input type="text" id = "txtText" /></td>
                            <td class=" ">Value: <input type="text" id = "txtValue" /> </td>
                            <td class=" "><button type="button" id = "Add" value = "" onclick = "Add()"  class="btn btn-success"/> <i class="bg bg-danger fa fa-plus "></i></td>
                            
                          </tr>
                          
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
		
		<script type="text/javascript">
		   var timeout = 2000; // in miliseconds (3*1000)
		   $('.alert').delay(timeout).fadeOut(300);
		</script>
		<script type="text/javascript">
        function Add() {
            var ddl = document.getElementById("ddlFruits");
            var option = document.createElement("OPTION");
            option.innerHTML = document.getElementById("txtText").value;
            option.value = document.getElementById("txtValue").value;
            ddl.options.add(option);
        }
    </script>
	<SCRIPT language="javascript">
function add(type) {

	//Create an input type dynamically.
	var element = document.createElement("input");

	//Assign different attributes to the element.
	element.setAttribute("type", type);
	element.setAttribute("value", type);
	element.setAttribute("name", type);


	var foo = document.getElementById("fooBar");

	//Append the element in page (in span).
	foo.appendChild(element);

}
</SCRIPT>
