<?php
require("includes/common.php");         //tabase conection 
$select_query = "SELECT  * FROM tourpackagestbl order by rand() limit 4";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
?>

<!DOCTYPE html>
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
<!-- Header -->
		<?php include 'includes/header.php';  ?>
  <!--Header end---->
<div id="content">
     <!--Main banner image-->
     <div id = "banner_image">
   		  <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>TRIP PLANNER.</h1>
                            <p>Flat 40% OFF on Winter Vacation </p>
                            <br/>
                            <a  href="package-list.php" class="btn btn-danger btn-lg active">Book Now</a>
                        </div>
                    </center>
                </div>
            </div>
<!--Main banner image end-->

<!--- rooms ---->

<!--- rooms ---->
<div class="rooms">
	<div class="container">
		<div class="room-bottom">
			<h3>Package List</h3>
			<?php while ($row = mysqli_fetch_array($select_query_result)) { ?>
			
		<div class="rom-btm ">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="admin/pacakgeimages/<?php echo $row['PackageImage'];?>" class="img-responsive" alt="">
				
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: <?php echo $row ['PackageName'];?></h4>
					<h6>Package Type : <?php echo $row['PackageType'];?></h6>
					<p><b>Package Location :</b> <?php echo $row['PackageLocation'];?></p>
					<p><b>Features</b> <?php echo $row['PackageFetures']?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>INR<?php echo $row['PackagePrice'];?></h5>
					<a href="package-details.php?pkgid=<?php echo $row['PackageId'];?>" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>
			
        <?php } ?>
			</div>		
	</div>
</div>
<!--- /rooms ---->



	 <!--Footer-->
	 <?php
	 include 'includes/footer.php';
	 ?>
	 <!--Footer end-->
	
</body>
</html>	