<?php
require("includes/config.php");         

?>
<!DOCTYPE HTML>
<html>
<head>
<title>TP | Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript">
 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 


<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
<!--header start here  00  -->
<?php include('includes/header.php');?>
<!--header end here-->

<!-- for directin in which page 01 -->
		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a> <i class="fa fa-angle-right"></i></li>
        </ol>
<!-- four-grids here 02 -->
		<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>User</h3>
<?php
$sql1 = "SELECT count(*) as count from userstbl";
$select_query_result = mysqli_query($con, $sql1) or die(mysqli_error($con));             
while($row = mysqli_fetch_assoc($select_query_result)){
	$cnt= $row['count'];
}
?>			
					<h4> <?php echo $cnt ; ?> </h4>
				
								
							</div>
							
						</div>
					</div>
					
				<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Bookings</h3>
								<?php
$sql1 = "SELECT count(*) as count from userstbl";
$select_query_result = mysqli_query($con, $sql1) or die(mysqli_error($con));             
while($row = mysqli_fetch_assoc($select_query_result)){
	$cnt= $row['count'];
}
?>			
					<h4> <?php echo $cnt ; ?> </h4>
	


								</div>	
						</div>
					</div>

					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Enquiries</h3>
								<?php
$sql1 = "SELECT count(*) as count from userstbl";
$select_query_result = mysqli_query($con, $sql1) or die(mysqli_error($con));             
while($row = mysqli_fetch_assoc($select_query_result)){
	$cnt= $row['count'];
}
?>			
					<h4> <?php echo $cnt ; ?> </h4>

								
							</div>
							
						</div>
				   </div>
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
							</div>
							<div class="four-text">
						
								<h3>Toatal packages</h3>
								
								<?php
$sql1 = "SELECT count(*) as count from tourpackagestbl";
$select_query_result = mysqli_query($con, $sql1) or die(mysqli_error($con));             
while($row = mysqli_fetch_assoc($select_query_result)){
	$cnt= $row['count'];
}
?>			
					<h4> <?php echo $cnt ; ?> </h4>

							</div>
							
						</div>
					   </div>
						<div class="clearfix"></div>
					</div>

	
					<div class="clearfix"></div>
				
<!--//four-grids here -->


<br>
<br><br><br>
<br>
<!-- ?php include('includes/footer.php');?> -->
</div>
</div>

			<!--/sidebar-menu-->
			<?php include('includes/sidebarmenu.php');?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>




<?php include('includes/footer.php');?> 
	   

</body>
</html>
