<?php

include('includes/config.php');

$imgid=intval($_GET['imgid']);

if(isset($_POST['submit']))
{

$pimage=$_FILES["packageimage"]["name"];

move_uploaded_file($_FILES["packageimage"]["tmp_name"],"pacakgeimages/".$_FILES["packageimage"]["name"]);

$sql="update tourpackagestbl set PackageImage='$pimage' where PackageId=$imgid";
$select_query_result = mysqli_query($con, $sql) or die(mysqli_error($con));

}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>TP | Admin Package Creation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
 

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
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Update Package Image </li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
 
<!---->
  <div class="grid-form1">
  	       <h3>Update Package Image </h3>
		
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
<form class="form-horizontal"  name="package" method="post" enctype="multipart/form-data">
<?php 
$imgid=intval($_GET['imgid']);
$sql = "SELECT PackageImage from tourpackagestbl where PackageId=$imgid";
$query_result = mysqli_query($con, $sql) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($query_result);

?>
<div class="form-group">
<label for="focusedinput" class="col-sm-2 control-label"> Package Image </label>
<div class="col-sm-8">
<img src="pacakgeimages/<?php echo $row['PackageImage'];?>" width="200">
<?php echo $row['PackageImage'];?>
</div>
</div>
																					
<div class="form-group">
	<label for="focusedinput" class="col-sm-2 control-label">New Image</label>
	<div class="col-sm-8">
	<input type="file" name="packageimage" id="packageimage" required>
	</div>
</div>	
							
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
	<button type="submit" name="submit" class="btn-primary btn" onclick="success()">Update</button>
	</div>
</div>
</div>
</form>

     
      

      
      <div class="panel-footer">
		
	 </div>
    </form>
  </div>
 	</div>
 	<!--//grid-->

	 <!-- script-for alert box for successful -->
	 <script>
function success() {
  alert("Image has been updated Successfully! ");
  
}
</script>

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include('includes/footer.php');?>
<!--COPY rights end here-->
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
