<?php
include('includes/common.php');
if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];	
$mobile=$_POST['mobileno'];
$subject=$_POST['subject'];	
$description=$_POST['description'];
$sql="INSERT INTO  enquirytbl(FullName,EmailId,MobileNumber,Subject,Description) VALUES('" . $fname . "','" . $email . "','" . $mobile . "','" . $subject ."','" . $description . "')";
$query_result = mysqli_query($con, $sql) or die(mysqli_error($con));
// $row = mysqli_fetch_assoc($query_result);
}

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trip planner | TP</title>
    <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />

	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="index.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
    <!-- <script src="css/bootstrap.min.js"></script> -->
</head>
<body>
<!-- top-header -->

<?php include('includes/header.php');?>



<!--- privacy ---->
<div class="privacy">
	<div class="container">
		<h3><center>  Enquiry Form  </h3>
		<form name="enquiry" method="post">
		<center>
	<p style="width$ 350px;">
		
			 <input type="text" name="fname" class="form-control input" id="fname" placeholder="Full Name" required="">
	</p> <br>
<p style="width$ 350px;">
  <input type="email" name="email" class="form-control input" id="email" placeholder="Valid Email id" required="">
	</p> 
	<br>
	<p style="width$ 350px;">

  <input type="text" name="mobileno" class="form-control input" id="mobileno" maxlength="10" placeholder="10 Digit mobile No" required="">
	</p> <br>

	<p style="width$ 350px;">
 <input type="text" name="subject" class="form-control input" id="subject"  placeholder="Subject" required="">
	</p> <br><br>
	<p style="width$ 350px;">
  <textarea name="description" class="form-control input" rows="6" cols="50" id="description"  placeholder=".    Description" required=""></textarea> 
	</p> <br>

		<p style="width$ 350px;">
		<button type="submit" 
		name="submit1" class="btn-primary btn btn-1" onclick="success()">Submit</button>
		</p><br>
	
	</form>

		
	</div>
</div>
<!--- /privacy ---->
<!-- script-for alert box for successful -->
<script>
function success() {
alert("Enquiry Form Submitted Successfully!");

}
</script>

<?php include('includes/footer.php');?>
<!--- /footer-top ---->


</body>
</html>