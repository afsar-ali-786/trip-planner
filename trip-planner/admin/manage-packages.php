<?php

include('includes/config.php');
	?>


<!DOCTYPE HTML>
<html>
<head>
<title>TP | admin manage packages</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>

<!-- //tables -->
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
            <!--header start here-->
				<?php include('includes/header.php');?>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Manage Packages</li>
            </ol>
<div class="agile-grids">	
				
				<!-- tables -->
				
<div class="agile-tables">
	<div class="w3l-table-info">
	<h2>Manage Packages</h2>
	<table id="table">
	<thead>
	<tr>
	<th>S.No</th>
	<th >Name</th>
	<th>Type</th>
	<th>Location</th>
	<th>Price</th>
	<th>Creation Date</th>
	<th>Action</th>
	</tr>
	</thead>

<tbody>
	<?php 
	$select_query = "SELECT  * FROM tourpackagestbl ";
	$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));

	while ($row = mysqli_fetch_array($select_query_result)) {?>		
		<tr>
		<td><?php echo $row['PackageId']; ?></td>
		<td><?php echo $row ['PackageName'];?></td>
		<td><?php echo $row['PackageType'];?></td>
		<td><?php echo $row['PackageLocation'];?></td>
		<td>Rs<?php echo $row['PackagePrice'];?></td>
		<td><?php echo $row['Creationdate'];?></td>
		
		<td><a href="update-package.php?pid=<?php echo $row['PackageId'];?>">
		<button type="button" class="btn btn-primary btn-block">EDIT</button></a></td>
</tr>
		<?php  }?>
	</tbody>
</table>
</div>


<!--- footer- ---->
<?php include('includes/footer.php');?>
<!--- footer-end ---->
</div>
</div>
  <!--//content-inner-->
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

</body>
</html>
