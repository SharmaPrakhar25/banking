<?php
session_start();
 include ('db.php');

    $email = $_REQUEST['email'];
    $password = md5($_REQUEST['password']);
    //echo "<script>alert('".($password)."');</script>";
    $query2 = mysqli_query($con,"SELECT * FROM customer WHERE email = '$email' AND password='$password'");
    //print_r($query2_1 = mysqli_fetch_assoc($query2));
    if($query2_r = mysqli_fetch_assoc($query2))
    {       
        $_SESSION["email"] = $email;
        echo "<script>window.location.href='http://dev.hawkscode.com.au/adam-and-company/';</script>";
    }
    else{
        echo "<script>alert('Sorry, Wrong Email and password');</script>";
        //echo "<script>window.location.href='http://dev.hawkscode.com.au/adam-and-company/login.php';</script>";
    }


 
 
 ?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">

        <meta name="author" content="Coderthemes">



        <link rel="shortcut icon" href="http://dev.hawkscode.com.au/adam-and-company/images/favicon.png">



        <title>Adam & Company</title>



        <!-- Google Fonts -->

        <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>



        <!-- Bootstrap core CSS -->

        <link href="http://dev.hawkscode.com.au/adam-and-company/css/bootstrap.min.css" rel="stylesheet">



        <!-- Owl Carousel CSS -->

        <link href="http://dev.hawkscode.com.au/adam-and-company/css/owl.carousel.css" rel="stylesheet">

        <link href="http://dev.hawkscode.com.au/adam-and-company/css/owl.theme.default.min.css" rel="stylesheet">



        <!-- Icon CSS -->

        <link href="http://dev.hawkscode.com.au/adam-and-company/css/font-awesome.min.css" rel="stylesheet">



        <!-- Custom styles for this template -->

        <link href="http://dev.hawkscode.com.au/adam-and-company/css/style.css" rel="stylesheet">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <style>
    .margin
    {
        margin-top:10px;
    }
    .account-pages {
    background: url(../images/agsquare.png);
    position: absolute;
    height: 100%;
    width: 100%;
}
.wrapper-page {
    margin: 5% auto;
    position: relative;
    width: 420px;
}
.wrapper-page .card-box {
    border: 1px solid rgba(54, 64, 74, 0.1);
    box-shadow: 0px 1px 10px 3px #e6e4e4;
    background-color:white;
}
input#checkbox-signup {
    margin-left: 0px;
}
.btn-info
{
    width:100%;
}
.logo {
    color: #36404a !important;
    }
.text-custom
{
    color:#5fbeaa;
}

    </style>
<body class="widescreen">

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class=" card-box">
                <div class="panel-heading">
                    <h3 class="text-center"> User Login </h3>
                    <a class="navbar-brand logo" href="http://dev.hawkscode.com.au/adam-and-company/" style="margin-left: 98px;">

                        Adam<span class="text-custom">&amp;</span>Company

                    </a>
                </div>


                <div class="panel-body">
                    <form class="form-horizontal m-t-20"  method="post" action="login.php">

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="email" required="" placeholder="Enter Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" required="" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">
                                        Remember me
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-info text-uppercase waves-effect waves-light" name="login" type="submit">Log In
                                </button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-sm-12">
                                <a href="forgotPassword.php" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot
                                    your password?</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center margin">
                    <p>Don't have an account? <a href="signup.php" class="text-primary m-l-5"><b>Sign Up</b></a>
                    </p>

                </div>
            </div>
            
        </div>
        
        

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="http://dev.hawkscode.com.au/adam-and-company/assets/js/jquery.min.js"></script>
        <script src="http://dev.hawkscode.com.au/adam-and-company/assets/js/bootstrap.min.js"></script>
        <script src="http://dev.hawkscode.com.au/adam-and-company/assets/js/detect.js"></script>
        <script src="http://dev.hawkscode.com.au/adam-and-company/assets/js/fastclick.js"></script>
        <script src="http://dev.hawkscode.com.au/adam-and-company/assets/js/jquery.slimscroll.js"></script>
        <script src="http://dev.hawkscode.com.au/adam-and-company/assets/js/jquery.blockUI.js"></script>
        <script src="http://dev.hawkscode.com.au/adam-and-company/assets/js/waves.js"></script>
        <script src="http://dev.hawkscode.com.au/adam-and-company/assets/js/wow.min.js"></script>
        <script src="http://dev.hawkscode.com.au/adam-and-company/assets/js/jquery.nicescroll.js"></script>
        <script src="http://dev.hawkscode.com.au/adam-and-company/assets/js/jquery.scrollTo.min.js"></script>


        <script src="http://dev.hawkscode.com.au/adam-and-company/assets/js/jquery.core.js"></script>
        <script src="http://dev.hawkscode.com.au/adam-and-company/assets/js/jquery.app.js"></script>
         <script src="js/jquery-2.1.4.min.js"></script>

        <script src="js/bootstrap.min.js"></script>



        <!-- Jquery easing -->                                                      

        <script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>



        <!-- Owl Carousel -->                                                      

        <script type="text/javascript" src="js/owl.carousel.min.js"></script>



        <!--sticky header-->

        <script type="text/javascript" src="js/jquery.sticky.js"></script>



        <!--common script for all pages-->

        <script src="http://dev.hawkscode.com.au/adam-and-company/js/jquery.app.js"></script>

	
	
</body>
</html>

