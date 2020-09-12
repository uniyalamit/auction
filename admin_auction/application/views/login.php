<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <!-- Bootstrap -->
       
    <link href="http://localhost/admin_auction/assests/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://localhost/admin_auction/assests/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="http://localhost/admin_auction/assests/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="http://localhost/admin_auction/assests/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="http://localhost/admin_auction/assests/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="http://localhost/admin_auction/assests/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="http://localhost/admin_auction/assests/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="http://localhost/admin_auction/assests/build/css/custom.min.css" rel="stylesheet">

    </head>

    <body class="login">
        <div>
            <div class="login_wrapper">
                <div class="">
                    <section class="login_content">
                        <form action="<?php echo site_url('login_c/login');?>" method="post">
                            <h1>Login Form</h1>
							<b style="color:red;"><?php 
								if(isset($err) && $err!=''){
									echo $err;
								}
							?></b>
                            <div>
                                <input type="text" id="email" class="form-control" name="email" placeholder="Email" required="" value="" />
                          <span style="color:red;"><b><?php echo form_error('email');?></b></span>
                          <span id="div" style="display:none;color:red;"><b>Invalid Email</b></span>
                            <div>
                                <input type="password"  class="form-control" name="password" placeholder="Password" required="" />
								  <span style="color:red;"><?php echo form_error('password');?></span>
						 </div>
                            <div>
                                <input type="submit" name="loginSubmit" class="btn btn-default submit">
                                <!--  <a class="reset_pass" href="#">Lost your password?</a> -->
                            </div>
							
                            <div class="clearfix"></div>

                            <div class="separator">
                               
                                <div class="clearfix"></div>
                                <br />
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
	
</html>