<?php
session_start();
session_unset();
session_destroy();
$_SESSION = array();
echo "<script>window.location.href='http://dev.hawkscode.com.au/adam-and-company/admin/alogin.php';</script>";
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">

        <meta name="author" content="Coderthemes">



        <link rel="shortcut icon" href="images/favicon.png">



        <title>Adam & Company</title>



        <!-- Google Fonts -->

        <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>



        <!-- Bootstrap core CSS -->

        <link href="css/bootstrap.min.css" rel="stylesheet">



        <!-- Owl Carousel CSS -->

        <link href="css/owl.carousel.css" rel="stylesheet">

        <link href="css/owl.theme.default.min.css" rel="stylesheet">



        <!-- Icon CSS -->

        <link href="css/font-awesome.min.css" rel="stylesheet">



        <!-- Custom styles for this template -->

        <link href="css/style.css" rel="stylesheet">
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
.text-custom {
    color: #5d9cec;
}
.logo {
    color: #36404a !important;
    }

    </style>
<body class="widescreen">

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class=" card-box">
                <div class="panel-heading">
                    <a class="navbar-brand logo" href="http://dev.hawkscode.com.au/adam-and-company/" style="margin-left: 98px;">

                        Adam<span class="text-custom">&amp;</span>Company

                    </a>
                </div>

                <div class="panel-body">
                    <p class="text-center">You are Loged Out!!</p>
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

        <script src="js/jquery.app.js"></script>

	
	
</body>
</html>

        