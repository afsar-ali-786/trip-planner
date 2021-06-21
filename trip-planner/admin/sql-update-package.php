<?php
include('includes/config.php');
$pid=$_POST['PackageId'];	
$pname=$_POST['packagename'];
$ptype=$_POST['packagetype'];	
$plocation=$_POST['packagelocation'];
$pprice=$_POST['packageprice'];	
$pfeatures=$_POST['packagefeatures'];
$pdetails=$_POST['packagedetails'];	
//$pimage=$_FILES["Packageimage"]["name"];

$sql="update tourpackagestbl set PackageName='$pname',PackageType='$ptype',PackageLocation='$plocation',PackagePrice='$pprice',PackageFetures='$pfeatures',PackageDetails='$pdetails' where PackageId=$pid ";
$query_result = mysqli_query($con, $sql) or die(" Query UnSuccessfull. ");
echo "<h1>Package Updated Successful</h1><a href='dashboard.php'><h2>Click here to go Home page</h2></a>";
mysqli_close($con);
?>