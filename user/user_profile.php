<?php 
	  include('header.php');
	  include('udb.php');
	  if(isset($_REQUEST['update'])){
	  	$updated_name = $_REQUEST['Name'];
	  	$updated_mobile = $_REQUEST['mobileNumber'];
	  	$updated_address = $_REQUEST['address'];
	  	$updated_city = $_REQUEST['city'];
	  	$query1 = mysqli_query($con,"UPDATE customer set name='$updated_name',mobile='$updated_mobile',address='$updated_address',city='$updated_city' where account_number= '".$_SESSION["account_number"]."'");
	  	if($query1){
	  		echo "<script>alert('User profile updated successfully');</script>";
	  		$_SESSION["name"] = $updated_name;
	  	}
	  }
	  $query = mysqli_query($con, "Select * from customer where account_number = '".$_SESSION["account_number"]."'");
?>
<div class="content-page">

	<!-- Start content -->

	<div class="content">

		<div class="container">

			<!-- Page-Title -->
			<?php
			while($query_r = mysqli_fetch_array($query)){
			?>
			<div class="row">
				<div class="col-lg-12">
					<div class="card-box p-0">
						<div class="profile-widget text-center">
							<div class="bg-custom bg-profile"></div>
							<img src="http://dev.hawkscode.com.au/adam-and-company/admin/assets/images/users/avatar-1.jpg" class="thumb-lg img-circle img-thumbnail" alt="img">
							<h4><?php echo $query_r['name'];?></h4>
							<p class="text-muted"><i class="fa fa-map-marker"></i><?php echo $query_r['city'];?></p>
							<form class="form-horizontal" role="form" data-parsley-validate="" novalidate="" method="post">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Name</label>
									<div class="col-sm-7">
										<input type="email" required="" parsley-type="email" class="form-control" name="Name" placeholder="Name" value="<?php echo $query_r['name'];?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Email*</label>
									<div class="col-sm-7">
										<input type="email" required="" parsley-type="email" class="form-control" id="inputEmail3" placeholder="Email" value="<?php echo $query_r['email'];?>" disabled>
									</div>
								</div>
								<div class="form-group">
									<label for="webSite" class="col-sm-3 control-label">Phone Number</label>
									<div class="col-sm-7">
										<input type="text" required="" class="form-control"  placeholder="XXX-XXXX-XXX" name="mobileNumber" value="<?php echo $query_r['mobile'];?>">
									</div>
								</div>

								<div class="form-group">
									<label for="webSite" class="col-sm-3 control-label">Address</label>
									<div class="col-sm-7">
										<input type="text" required="" class="form-control" placeholder="Address" name="address" value="<?php echo $query_r['address']; ?>">
									</div>
								</div>

								<div class="form-group">
									<label for="webSite" class="col-sm-3 control-label">City</label>
									<div class="col-sm-7">
										<input type="text" required="" class="form-control"  placeholder="City" name="city" value="<?php echo $query_r['city']; }?>">
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-8">
										<button type="submit" name="update" class="btn btn-primary waves-effect waves-light" >
											Update
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<?php include('footer.php'); ?>