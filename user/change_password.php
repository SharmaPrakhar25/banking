<?php 
    include('udb.php');
    include('header.php');

    //$session =  $_SESSION["account_number"];
    //echo "<script>alert('acc_numer".$session."');</script>";
    if(isset($_REQUEST['submit']))
    {
        $query1 = mysqli_query($con,"SELECT * from customer where account_number='".$_SESSION["account_number"]."'");
        $query1_r = mysqli_fetch_array($query1);
    
        $oldpassword = md5($_REQUEST['oldpassword']); // old password in md5 
        
        //echo "<script>alert('password in md5 in database".($query1_r['password'])."');</script>"; // password in md5 in database
        //echo "<script>alert('".($fetch['password'])."')</script>";
        //echo "<script>alert('submitted old password".($_REQUEST['oldpassword'])."')</script>";
        //echo "<script>alert('submitted new password".$_REQUEST['newpassword']."')</script>";
        //echo "<script>alert('submitted-re new password".$_REQUEST['confirmpassword']."')</script>";

        if( $query1_r['password'] == $oldpassword)
        {
            
            if($_REQUEST['newpassword'] == $_REQUEST['confirmpassword'])
            {
                $newpassword = md5($_REQUEST['newpassword']);
                $query2=mysqli_query($con,"update customer set password='$newpassword' where account_number='".$_SESSION["account_number"]."'") ; 
                if($query2)
                {
                    echo '<script>alert("Your Password has successfully changed")
                    window.location.href="http://dev.hawkscode.com.au/adam-and-company/login.php";
                    </script>'; 
                }
            }
        }
        else
        {
             echo '<script>alert("Your Password not matched !")</script>';  
    
        }

    } 
?>
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


    </style>
<body class="widescreen">

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
			<div class=" card-box">
				<div class="panel-heading">
                    <h3 class="text-center"> Reset Password</h3>
                    <a class="navbar-brand logo" href="http://dev.hawkscode.com.au/adam-and-company/" style="margin-left: 70px;">

                        Adam<span class="text-custom">&amp;</span>Company

                    </a>
                </div>

				<div class="panel-body">
					<form method="post" role="form" class="text-center">
						<div class="form-group m-b-0">
						 <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="Password" required="" name="oldpassword" placeholder="oldpass">
                            </div>
                        </div>
                         <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="Password" required="" name="newpassword" placeholder="newpass">
                            </div>
                        </div>
                         <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="Password" required="" name="confirmpassword" placeholder="confirmpass">
                            </div>
                        </div>
                         <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-info text-uppercase waves-effect waves-light" name="submit" type="submit">Submit
                                </button>
                            </div>
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
 <?php include('footer.php'); ?>
