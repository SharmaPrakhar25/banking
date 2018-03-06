<?php 
	if(isset($_REQUEST['submit']))
	{
		$to = 'prakhar.hawkscode@gmail.com'; // Change it to email of admin of website 
		$subject = "Adam bank Contact form submit";
		$message = $_REQUEST['contact_name']." has contacted you.
				   Email:".$_REQUEST['contact_email']."
				   Phone number: ".$_REQUEST['contact_mobile']."
				   Message: ".$_REQUEST['message'];
		mail($to,$subject,$message);
		echo "<script>alert('Your response has send successfully... We will Contact back soon');</script>";
		echo"<script> window.location.href='http://dev.hawkscode.com.au/adam-and-company/'</script>";
	}
?>