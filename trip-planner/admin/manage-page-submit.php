<?php

include('includes/config.php');

if($_POST['submit']=="Update")
{
	$pagetype=$_GET['type'];
	$pagedetails=$_POST['pgedetails'];
$sql = "UPDATE pagestbl SET detail=$pagedetails WHERE type=$pagetype";
$result =mysqli_query($con, $sql) or die(mysqli_error($con));

echo "Succesful " ;
 }
?>