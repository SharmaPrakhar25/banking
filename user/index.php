<?php
      include('header.php');
      include('udb.php');
      $query1= mysqli_query($con,"Select * from customer where email='".$_SESSION["email"]."'");
      while($query1_1 = mysqli_fetch_assoc($query1)){
?>
<div class="content-page">

                <!-- Start content -->

                <div class="content">

                    <div class="container">

                        <!-- Page-Title -->

                        <div class="row">
                        <div class="container">
                        <div class="col-sm-12">
                                <h4 class="page-title"><?php echo $query1_1["name"];?>'s Accounts </h4>
                            </div>
                        </div>    
                        </div>
                        <div class="row">
                        <div class="container">
                        <div class="col-lg-12">
                        		<div class="card-box">
                        			<h4 class="text-dark header-title m-t-0">Hello <?php echo $query1_1["name"] ;?> </h4>
                                    <p class="text-center"><b>Your Balance:</b><span></span><?php echo $query1_1['balance']; ?></span></p>
                                    <p class="text-center"><b>Account Number:</b><span> <?php echo $query1_1["account_number"]; }?></span></p>
                        		</div>
                        	</div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<?php include('footer.php'); ?>