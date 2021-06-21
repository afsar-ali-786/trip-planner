<?php
include('includes/common.php');

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trip planner | TP</title>
    <!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="index.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>
</head>

<body>
<!-- top-header -->
<?php include('includes/header.php');?>

<!--- privacy ---->
<div class="privacy">
	<div class="container">
<?php 
$pagetype=$_GET['type'];
$sql = "SELECT type,detail from pagestbl where type='$pagetype' ";
$select_query_result = mysqli_query($con, $sql) or die(mysqli_error($con));

$cnt=1;
if(mysqli_num_rows($select_query_result) > 0)
{ 
while($row = mysqli_fetch_assoc($select_query_result))
{
	echo $pagetype ;
?>



		<h3><?php 	echo $_GET['type'] ?></h3>
		
		
	<p>
	<?php 	echo $row['detail'] ; ?>
	</p> 
	<?php
 } 
}
?>
		
</div>
</div>
<!--- /privacy ---->
	
	 <!--Footer-->
	 <?php
	 include 'includes/footer.php';
	 ?>
	 <!--Footer end-->

</body>
</html>