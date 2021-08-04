<?php
require("includes/config.php");

	// code for cancel
if(isset($_REQUEST['bkid']))
	{
$bid=intval($_GET['bkid']);
$status=2;
$cancelby='a';
$sql = "UPDATE tblbooking SET status=:status,CancelledBy=:cancelby WHERE  BookingId=:bid";

$select_query_result = mysqli_query($con, $sql) or die(mysqli_error($con));

$msg="Booking Cancelled successfully";
}


if(isset($_REQUEST['bckid']))
	{
$bcid=intval($_GET['bckid']);
$status=1;
$cancelby='a';
$sql = "UPDATE tblbooking SET status=:status WHERE BookingId=:bcid";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':bcid',$bcid, PDO::PARAM_STR);
$query -> execute();
$msg="Booking Confirm successfully";
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Admin manage Bookings</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
 <script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script> 
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
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Manage Bookings</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Manage Bookings</h2>
					    <table id="table">
						<thead>
						  <tr>
						  <th>Booikn id</th>
							<th>Name</th>
							<th>Mobile No.</th>
							<th>Email Id</th>
							<th>RegDate </th>
							<th>From /To </th>
							<th>Comment </th>
							<th>Status </th>
							<th>Action </th>
						  </tr>
						</thead>
						<tbody>

<?php 
$sql = "SELECT tblbooking.BookingId as bookid,userstbl.FullName as fname,userstbl.MobileNumber as mnumber,userstbl.EmailId 
as email,tourpackagestbl.PackageName as pckname,tblbooking.PackageId as
 pid,tblbooking.FromDate as fdate,tblbooking.ToDate as tdate,tblbooking.Comment as comment,tblbooking.status 
 as status,tblbooking.CancelledBy as cancelby,tblbooking.UpdationDate as upddate from userstbl join  tblbooking on
   tblbooking.UserEmail=userstbl.EmailId join tourpackagestbl on tourpackagestbl.PackageId=tblbooking.PackageId";

$select_query_result = mysqli_query($con, $sql) or die(mysqli_error($con));

$cnt=1;

	while ($row = mysqli_fetch_array($select_query_result)) {?>		
						  <tr>
							<td>#BK-<?php echo $row['bookid'];?></td>
							<td><?php echo $row['fname']; ?></td>
							<td><?php echo $row['mnumber'] ;?></td>
							<td><?php echo $row['email'];?></td>
							<td><a href="update-package.php?pid=<?php echo $row['pid'] ;?>">
							<?php echo $row['pckname'];?></a></td>
							<td><?php echo $row['fdate'];?> To <?php echo $row['tdate'];?></td>
								<td><?php echo $row['comment'];?></td>
								<td><?php


echo "Pending";


echo "Confirmed";

//if($select_query_result->status==2 and  $select_query_result->cancelby=='a')

//echo "Canceled by you at " .$select_query_result->upddate;
 
//if($select_query_result->status==2 and $select_query_result->cancelby=='u')

//echo "Canceled by User at " .$select_query_result->upddate;



?></td>

<?php 

	?><td>Cancelled</td>
<?php  ?>
<td><a href="manage-bookings.php?bkid=<?php echo $row['bookid'];?>"
 onclick="return confirm('Do you really want to cancel booking')" >
 Cancel</a> / <a href="manage-bookings.php?bckid=<?php echo $row['bookid'];?>"
  onclick="return confirm('Do you really want to cancel booking')" >
  Confirm</a></td>
<?php }?>

						  </tr>
						 <?php $cnt=$cnt+1;?>
						</tbody>
					  </table>
					</div>
				  </table>

				
			</div>
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
