<?php 
session_start();
if(empty($_SESSION['username']))
{
    echo "<script>window.location.href='http://dev.hawkscode.com.au/adam-and-company/admin/alogin.php';</script>";
}
?>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">

        <meta name="author" content="Coderthemes">



        <link rel="shortcut icon" href="assets/images/favicon.png">



        <title>Adam & Company</title>

        

        <!--Morris Chart CSS -->

		<link rel="stylesheet" href="admin/assets/plugins/morris/morris.css">

        <link href="admin/assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">



        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <script src="assets/js/modernizr.min.js"></script>

        

    </head>
<style>
.sweet-alert
{
    display:none;
}
.page-title {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 20px;
    margin-top: 7px;
}
.navbar-brand {
    float: left;
    height: 50px;
    padding: 20px 32px;
    font-size: 18px;
    line-height: 20px;
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

                            <div class="pull-left">

                                <button class="button-menu-mobile open-left waves-effect waves-light">

                                    <i class="md md-menu"></i>

                                </button>

                                <span class="clearfix"></span>

                            </div>



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

                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>

                                    <ul class="dropdown-menu">

                                        <li><a href="profile.php"><i class="ti-user m-r-10 text-custom"></i>My Profile</a></li>

                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i>Change password</a></li>

                                        <li class="divider"></li>

                                        <li><a href="alogout.php"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>

                                    </ul>

                                </li>

                            </ul>

                        </div>

                        <!--/.nav-collapse -->

                    </div>

                </div>

            </div>

            <!-- Top Bar End -->