<?php
include('includes/config.php');
$pid=$_POST['PackageId'];	
$pname=$_POST['packagename'];
$pname = mysqli_real_escape_string($con, $pname);

$ptype=$_POST['packagetype'];	
$ptype = mysqli_real_escape_string($con, $ptype);

$plocation=$_POST['packagelocation'];
$plocation = mysqli_real_escape_string($con, $plocation);

$pprice=$_POST['packageprice'];	
$pprice = mysqli_real_escape_string($con, $pprice);

$pfeatures=$_POST['packagefeatures'];
$pfeatures = mysqli_real_escape_string($con, $pfeatures);

$pdetails=$_POST['packagedetails'];	
$pdetails = mysqli_real_escape_string($con, $pdetails);
//$pimage=$_FILES["Packageimage"]["name"];

$sql="update tourpackagestbl set PackageName='$pname',PackageType='$ptype',PackageLocation='$plocation',PackagePrice='$pprice',PackageFetures='$pfeatures',PackageDetails='$pdetails' where PackageId=$pid ";
$query_result = mysqli_query($con, $sql) or die(" Query UnSuccessfull. ");
echo "<h1>Package Updated Successful</h1><a href='dashboard.php'>
<h2>Click here to go Home page</h2></a>";
mysqli_close($con);
?>