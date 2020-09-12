<html lang="en-US">  
    <head>  
        <title>Codeigniter Autocomplete</title>  
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css" type="text/css" media="all" />  
        <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/   css" media="all" />  
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>  
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>  
        <meta charset="UTF-8">  
            
        
            
        <script type="text/javascript">  
        $(this).ready( function() {  
            $("#id").autocomplete({  
 
                minLength: 1,  
                source:   
                function(req, add){  
                    $.ajax({  
                        url: "<?php echo base_url(); ?>index.php/welcome/lookup",  
                        dataType: 'json',  
                        type: 'POST',  
                        data: req,  
                        success:      
                        function(data){  
                            if(data.response =="true"){  
                                add(data.message);  
                                console.log(data);
                            }  
                        },  
                    });  
                },  
                     
            });  
        });  
        </script>  
            
    </head>  
    <body>  
        Country : 
<form>		
<input type="text" name="" id="id">
</form>		
        <?php  
			
           // echo form_input('printable_name','','id="id"');  
        ?>  
        <ul>  
            <div class="well" id="result"></div>  
        </ul>  
    </body>  
</html>