<?php include('header.php');
      include('sidebar.php');
      include('adb.php');
       
?>
<div class="content-page">

                <!-- Start content -->

                <div class="content">

                    <div class="container">

                        <!-- Page-Title -->

                        <div class="row">
                        <div class="col-lg-12">
                        		<div class="card-box p-0">
                        			<div class="profile-widget text-center">
			                            <div class="bg-custom bg-profile"></div>
			                            <img src="assets/images/users/avatar-1.jpg" class="thumb-lg img-circle img-thumbnail" alt="img">
			                            <h4>Jonathan Doe</h4>
			                            <p class="text-muted"><i class="fa fa-map-marker"></i> London</p>
                          			   <form class="form-horizontal" role="form" data-parsley-validate="" novalidate="">
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-3 control-label">Email*</label>
											<div class="col-sm-7">
												<input type="email" required="" parsley-type="email" class="form-control" id="inputEmail3" placeholder="Email">
											</div>
										</div>
										<div class="form-group">
											<label for="hori-pass1" class="col-sm-3 control-label">Password*</label>
											<div class="col-sm-7">
												<input id="hori-pass1" type="password" placeholder="Password" required="" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label for="hori-pass2" class="col-sm-3 control-label">Confirm Password *</label>
											<div class="col-sm-7">
												<input data-parsley-equalto="#hori-pass1" type="password" required="" placeholder="Password" class="form-control" id="hori-pass2">
											</div>
										</div>
										
										<div class="form-group">
											<label for="webSite" class="col-sm-3 control-label">Web Site*</label>
											<div class="col-sm-7">
												<input type="url" required="" parsley-type="url" class="form-control" id="webSite" placeholder="URL">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-8">
												<button type="submit" class="btn btn-primary waves-effect waves-light">
													Update
												</button>
												<button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
													Cancel
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