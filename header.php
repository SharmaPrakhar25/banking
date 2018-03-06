<?php session_start();

?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">

        <meta name="author" content="Coderthemes">



        <link rel="shortcut icon" href="http://dev.hawkscode.com.au/adam-and-company/images/favicon.png">



        <title>adam-and-company</title>



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


    <body data-spy="scroll" data-target="#navbar-menu">



        <!-- Navbar -->

        <div class="navbar navbar-custom sticky navbar-fixed-top" role="navigation" id="sticky-nav">

            <div class="container">



                <!-- Navbar-header -->

                <div class="navbar-header">



                    <!-- Responsive menu button -->

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>



                    <!-- LOGO -->

                    <a class="navbar-brand logo" href="http://dev.hawkscode.com.au/adam-and-company/">

                        Adam<span class="text-custom">&</span>Company

                    </a>



                </div>

                <!-- end navbar-header -->



                <!-- menu -->

                <div class="navbar-collapse collapse" id="navbar-menu">



                    <!-- Navbar right -->

                    <ul class="nav navbar-nav navbar-right">

                        <li class="active">

                            <a href="#home" class="nav-link js-btn">Home</a>

                        </li>

                        <li class="features">

                            <a href="#features" class="nav-link js-btn">Features</a>

                        </li>
                        
                        <!--<li>

                            <a href="http://dev.hawkscode.com.au/adam-and-company/about" class="nav-link">About Us</a>

                        </li>-->
                        
                        <li class="contact">
                        
                            <a href="#contact" class="nav-link">Contact</a>

                        </li>

                        
                        <!-- user profile -->
                        <?php 
                            if(($_SESSION["email"])){
                                ?>

                                <li class="dropdown top-menu-item-xs">

                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="http://dev.hawkscode.com.au/adam-and-company/admin/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle" style="    width: 31%;margin-top: -10px;"> </a>

                                    <ul class="dropdown-menu">

                                        <li><a href="http://dev.hawkscode.com.au/adam-and-company/user/user_profile.php"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>

                                        <li><a href="http://dev.hawkscode.com.au/adam-and-company/user"><i class="ti-settings m-r-10 text-custom"></i> Accounts</a></li>

                                        <li><a href="http://dev.hawkscode.com.au/adam-and-company/user/user_withdraw.php"><i class="ti-export m-r-10 text-custom"></i> Withdraw</a></li>
                                        
                                        <li><a href="http://dev.hawkscode.com.au/adam-and-company/user/user_deposit.php"><i class="ti-import m-r-10 text-custom"></i> Deposit</a></li>
                                           <li><a href="http://dev.hawkscode.com.au/adam-and-company/user/transaction.php"><i class="ti-direction-alt m-r-10 text-custom"></i> Transaction</a></li>
                                        
                                        <li><a href="http://dev.hawkscode.com.au/adam-and-company/user/forgot_password.php"><i class="ti-lock m-r-10 text-custom"></i> Change Password</a></li>

                                        <li class="divider"></li>

                                        <li><a href="http://dev.hawkscode.com.au/adam-and-company/user/logout.php"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>

                                    </ul>

                                </li>
                            <?php 
                                }
                                else
                                { ?>
                                <li>

                            <a href="login.php">Login</a>

                        </li>

                        <!-- <li>

                            <a href="signup.php" class="btn btn-white-bordered navbar-btn">Create New Account</a>

                        </li> -->
                                    
                                <?php }
                            ?>
                          
                                                

                    </ul>



                </div>

                <!--/Menu -->

            </div>

            <!-- end container -->

        </div>

        <!-- End navbar-custom -->