

<?php
include('db.php');


if(isset($_REQUEST['Reset'])){ 
    $ResetEmail= $_REQUEST['ResetEmail'];
    echo "<script>alert('$ResetEmail');</script>";

    $select="select * from customer where email='$ResetEmail'";
    $run=mysqli_query($con,$select);
   //$count = mysqli_num_rows($run);
    $row = mysqli_fetch_array($run);
    $passkey=$row['id'];
    $to=$row['email'];

    // Your subject
    $subject="Your confirmation link here";
    $message.="http://dev.hawkscode.com.au/adam-and-company/resetpassowrd.php?email=".$ResetEmail."";

    // From
    $header="from: your name <your email>";
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers))
    {
        echo "<script>alert('Your Password has been sent to.'".$ResetEmail.
        "'please check your inbox if you not found anything than please check your spam box');</script>" ;
    }
    else{
        echo "<script>alert('Failed to Recover your password, try again');</script>";
        echo $ResetEmail;
    }
    

    
    
};


?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <meta name="author" content="Coderthemes">



    <link rel="shortcut icon" href="http://dev.hawkscode.com.au/adam-and-company/images/favicon.png">



    <title></title>



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
.text-custom {
    color: #5fbeaa;
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
            <h3 class="text-center" style="margin-bottom:30px"> Reset Password </h3>
            <a class="navbar-brand logo" href="http://dev.hawkscode.com.au/adam-and-company/" style="margin-left: 90px;">

                Adam<span class="text-custom">&amp;</span>Company

            </a>
        </div>

        <div class="panel-body">
           <form method="post" action="#" role="form" class="text-center">
              <div class="alert alert-info alert-dismissable">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    X
                </button>
                Enter your <b>Email</b> and instructions will be sent to you!
            </div>
            <div class="form-group m-b-0">
             <div class="input-group">
                <input type="email" class="form-control" placeholder="Enter Email" name="ResetEmail" required="">
                <span class="input-group-btn">
                   <button type="submit" class="btn btn-info w-sm waves-effect waves-light" name="Reset">
                      Reset
                  </button> 
              </span>
          </div>
      </div>

  </form>
</div>
</div>
<div class="row">
               <!-- <div class="col-sm-12 text-center margin">
                    <p>Login Account? <a href="alogin.php" class="text-primary m-l-5"><b>Log In</b></a>
                    </p>

                </div>-->
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

