<?php 
session_start();
if(empty($_SESSION['email']))
{
    echo "<script>window.location.href='http://dev.hawkscode.com.au/adam-and-company/login.php';</script>";
}
?>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">

        <meta name="author" content="Coderthemes">



        <link rel="shortcut icon" href="http://dev.hawkscode.com.au/adam-and-company/admin/assets/images/favicon.png">



        <title>Adam & Company</title>

        

        <!--Morris Chart CSS -->

		<link rel="stylesheet" href="http://dev.hawkscode.com.au/adam-and-company/admin/assets/plugins/morris/morris.css">

        <link href="http://dev.hawkscode.com.au/adam-and-company/admin/assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">



        <link href="http://dev.hawkscode.com.au/adam-and-company/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="http://dev.hawkscode.com.au/adam-and-company/admin/assets/css/core.css" rel="stylesheet" type="text/css" />

        <link href="http://dev.hawkscode.com.au/adam-and-company/admin/assets/css/components.css" rel="stylesheet" type="text/css" />

        <link href="http://dev.hawkscode.com.au/adam-and-company/admin/assets/css/icons.css" rel="stylesheet" type="text/css" />

        <link href="http://dev.hawkscode.com.au/adam-and-company/admin/assets/css/pages.css" rel="stylesheet" type="text/css" />

        <link href="http://dev.hawkscode.com.au/adam-and-company/admin/assets/css/responsive.css" rel="stylesheet" type="text/css" />


        <script src="http://dev.hawkscode.com.au/adam-and-company/admin/assets/js/modernizr.min.js"></script>

        

    </head>
<style>
.content-page
{
    margin-left: 0px;
}
.footer {
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    bottom: 0px;
    color: #58666e;
    text-align: center !important;
    padding: 20px 30px;
    position: absolute;
    right: 0px;
    left: 0px;
    font-size: 13px;
}
.navbar-brand {
    float: left;
    height: 50px;
    padding: 20px 15px;
    font-size: 18px;
    line-height: 20px;
}
.form-control
{
    margin-bottom:10px;
}
</style>
    <body class="fixed-left">



        <!-- Begin page -->

        <div id="wrapper">



            <!-- Top Bar Start -->

            <div class="topbar">



                <!-- LOGO -->

                <div class="topbar-left">

                    <div class="text-center">

                       <a class="navbar-brand logo" href="http://dev.hawkscode.com.au/adam-and-company/">

                        Adam<span class="text-custom">&amp;</span>Company

                    </a>
                        <!-- Image Logo here -->

                        <!--<a href="index.html" class="logo">-->

                            <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->

                            <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->

                        <!--</a>-->

                    </div>

                </div>



                <!-- Button mobile view to collapse sidebar menu -->

                <div class="navbar navbar-default" role="navigation">

                    <div class="container">

                        <div class="">

                            <!--<div class="pull-left">

                                <button class="button-menu-mobile open-left waves-effect waves-light">

                                    <i class="md md-menu"></i>

                                </button>

                                <span class="clearfix"></span>

                            </div>-->



                            <!--<ul class="nav navbar-nav hidden-xs">

                                <li><a href="#" class="waves-effect waves-light">Files</a></li>

                                <li class="dropdown">

                                    <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown"

                                       role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span

                                            class="caret"></span></a>

                                    <ul class="dropdown-menu">

                                        <li><a href="#">Action</a></li>

                                        <li><a href="#">Another action</a></li>

                                        <li><a href="#">Something else here</a></li>

                                        <li><a href="#">Separated link</a></li>

                                    </ul>

                                </li>

                            </ul>-->



                            <!--<form role="search" class="navbar-left app-search pull-left hidden-xs">

			                     <input type="text" placeholder="Search..." class="form-control">

			                     <a href=""><i class="fa fa-search"></i></a>

			                </form>-->





                            <ul class="nav navbar-nav navbar-right pull-right">

                                <!--<li class="dropdown top-menu-item-xs">

                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">

                                        <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>

                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-lg">

                                        <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>

                                        <li class="list-group slimscroll-noti notification-list">

                                           <!-- list item-->

                                           <!--<a href="javascript:void(0);" class="list-group-item">

                                              <div class="media">

                                                 <div class="pull-left p-r-10">

                                                    <em class="fa fa-diamond noti-primary"></em>

                                                 </div>

                                                 <div class="media-body">

                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>

                                                    <p class="m-0">

                                                        <small>There are new settings available</small>

                                                    </p>

                                                 </div>

                                              </div>

                                           </a>



                                           <!-- list item-->

                                           <!--<a href="javascript:void(0);" class="list-group-item">

                                              <div class="media">

                                                 <div class="pull-left p-r-10">

                                                    <em class="fa fa-cog noti-warning"></em>

                                                 </div>

                                                 <div class="media-body">

                                                    <h5 class="media-heading">New settings</h5>

                                                    <p class="m-0">

                                                        <small>There are new settings available</small>

                                                    </p>

                                                 </div>

                                              </div>

                                           </a>



                                           <!-- list item-->

                                           <!--<a href="javascript:void(0);" class="list-group-item">

                                              <div class="media">

                                                 <div class="pull-left p-r-10">

                                                    <em class="fa fa-bell-o noti-custom"></em>

                                                 </div>

                                                 <div class="media-body">

                                                    <h5 class="media-heading">Updates</h5>

                                                    <p class="m-0">

                                                        <small>There are <span class="text-primary font-600">2</span> new updates available</small>

                                                    </p>

                                                 </div>

                                              </div>

                                           </a>



                                           <!-- list item-->

                                           <!--<a href="javascript:void(0);" class="list-group-item">

                                              <div class="media">

                                                 <div class="pull-left p-r-10">

                                                    <em class="fa fa-user-plus noti-pink"></em>

                                                 </div>

                                                 <div class="media-body">

                                                    <h5 class="media-heading">New user registered</h5>

                                                    <p class="m-0">

                                                        <small>You have 10 unread messages</small>

                                                    </p>

                                                 </div>

                                              </div>

                                           </a>



                                            <!-- list item-->

                                           <!--<a href="javascript:void(0);" class="list-group-item">

                                              <div class="media">

                                                 <div class="pull-left p-r-10">

                                                    <em class="fa fa-diamond noti-primary"></em>

                                                 </div>

                                                 <div class="media-body">

                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>

                                                    <p class="m-0">

                                                        <small>There are new settings available</small>

                                                    </p>

                                                 </div>

                                              </div>

                                           </a>



                                           <!-- list item-->

                                           <!--<a href="javascript:void(0);" class="list-group-item">

                                              <div class="media">

                                                 <div class="pull-left p-r-10">

                                                    <em class="fa fa-cog noti-warning"></em>

                                                 </div>

                                                 <div class="media-body">

                                                    <h5 class="media-heading">New settings</h5>

                                                    <p class="m-0">

                                                        <small>There are new settings available</small>

                                                    </p>

                                                 </div>

                                              </div>

                                           </a>

                                        </li>

                                        <li>

                                            <a href="javascript:void(0);" class="list-group-item text-right">

                                                <small class="font-600">See all notifications</small>

                                            </a>

                                        </li>

                                    </ul>

                                </li>-->

                                <!--<li class="hidden-xs">

                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>

                                </li>

                                <li class="hidden-xs">

                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="icon-settings"></i></a>

                                </li>-->

                                <li class="dropdown top-menu-item-xs">

                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="http://dev.hawkscode.com.au/adam-and-company/admin/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>

                                    <ul class="dropdown-menu">

                                        <li><a href="user_profile.php"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>

                                        <li><a href="http://dev.hawkscode.com.au/adam-and-company/user"><i class="ti-settings m-r-10 text-custom"></i> Accounts</a></li>

                                        <li><a href="user_withdraw.php"><i class="ti-export m-r-10 text-custom"></i> Withdraw</a></li>
                                        
                                        <li><a href="user_deposit.php"><i class="ti-import m-r-10 text-custom"></i> Deposit</a></li>

                                        <li><a href="transaction.php"><i class="ti-direction-alt m-r-10 text-custom"></i> Transaction</a></li>
                                        
                                        <li><a href="change_password.php"><i class="ti-lock m-r-10 text-custom"></i> Change Password</a></li>



                                        <li class="divider"></li>

                                        <li><a href="http://dev.hawkscode.com.au/adam-and-company/user/logout.php"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>

                                    </ul>

                                </li>

                            </ul>

                        </div>

                        <!--/.nav-collapse -->

                    </div>

                </div>

            </div>

            <!-- Top Bar End -->