<?php
include('includes/common.php');

if(isset($_POST['submit2']))
{
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['email'];
$useremail = mysqli_real_escape_string($con, $useremail);

$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];

$comment=$_POST['comment'];
$comment = mysqli_real_escape_string($con, $comment);

$status=0;
$sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,ToDate,Comment,status) VALUES('" . $pid . "','" . $useremail . "','" . $fromdate . "','" . $todate ."','" . $comment . "' ,'" . $status . "')";

 $result =mysqli_query($con, $sql) or die(mysqli_error($con));

}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>TP | Package Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="index.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/bootstrap.min.js"></script>
<script>
		 new WOW().init();
	</script>
<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>


<?php include('includes/header.php');?>

<!--- selectroom ---->
<div class="selectroom">
	<div class="container">	
		
		<?php 
$pid=intval($_GET['pkgid']);
$select_query1 = "SELECT * from tourpackagestbl where PackageId=$pid";
$select_query_result = mysqli_query($con, $select_query1) or die(mysqli_error($con));
																					
if(mysqli_num_rows($select_query_result) > 0)
{ 
while($row = mysqli_fetch_assoc($select_query_result))
{
?>


<form name="book" method="post">
		<div class="selectroom_top">
			
		<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
			<img src="admin/pacakgeimages/<?php echo $row['PackageImage'];?>" class="img-responsive" alt="">
		</div>

		<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
		<h2><?php echo $row ['PackageName'];?></h2>

		<p class="dow">#PKG-<?php echo $row ['PackageId'];?></p>
		
		<p><b>Package Type :</b> <?php echo $row['PackageType'];?></p>
		<p><b>Package Location :</b> <?php echo $row['PackageLocation'];?></p>
		<p><b>Features</b> <?php echo $row['PackageFetures']?> </p>
	
		<div class="ban-bottom">
			<div class="bnr-right">
				<label class="inputLabel">From</label>
				<input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy"  name="fromdate" required="">
					
			</div>
			<div class="bnr-right">
				<label class="inputLabel">To</label>
				<input class="date" id="datepicker1" type="text" placeholder="dd-mm-yyyy" name="todate" required="">
			</div>
		</div>
	<div class="clearfix"></div>
		<div class="grand">
					<p>Grand Total</p>
					<h3>INR.<?php echo $row['PackagePrice'];?> </h3>
		</div>
	</div>
		
	<h3>Package Details</h3>
		<p style="padding-top: 1%"><?php echo $row['PackageDetails'];?> </p>	
		<div class="clearfix"></div>
	</div>
		
	<?php } } ?>
	
	<div class="selectroom_top">
		<h2>Travels</h2>
		<div class="selectroom-info animated wow fadeInUp animated"   style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
				<ul>
				
					<li class="spe">
						<label class="inputLabel">Comment</label>
						<input class="special" type="text" name="comment" required="">
					</li>
					<?php if(isset($_SESSION['email']))
					{?>
						<li class="spe" align="center">
					<button type="submit" name="submit2" class="btn-primary btn" onclick="success()">Book</button>
						</li>
						<?php } else {?>
							<li class="sigi" align="center" style="margin-top: 1%">
							<a href="login.php" data-toggle="modal" data-target="#myModal4" class="btn-primary btn" > Book</a></li>
							<?php } ?>
					<div class="clearfix"></div>
				</ul>
			</div>
			
		</div>
		</form>
<?php  ?>


	</div>
</div>

 <!-- script-for alert box for successful -->
 <script>
function success() {
  alert("Package has been Booked Successfully! ");
  
}
</script>
<!--- /selectroom ---->

<!--- footer- ---->
<?php include('includes/footer.php');?>
<!--- /footer- ---->
</body>
</html>