<?php

require("includes/config.php");

$pname=$_POST['packagename'];
$ptype=$_POST['packagetype'];	
$plocation=$_POST['packagelocation'];
$pprice=$_POST['packageprice'];	
$pfeatures=$_POST['packagefeatures'];
$pdetails=$_POST['packagedetails'];	
$pimage=$_FILES["packageimage"]["name"];
move_uploaded_file($_FILES["packageimage"]["tmp_name"],"pacakgeimages/".$_FILES["packageimage"]["name"]);

$sql="INSERT INTO tourpackagestbl(PackageName,PackageType,PackageLocation,PackagePrice,PackageFetures,PackageDetails,PackageImage) 
VALUES('" . $pname . "','" . $ptype . "','" . $plocation . "','" . $pprice ."','" . $pfeatures . "' ,'" . $pdetails . "','" . $pimage . "')";

$result =mysqli_query($con, $sql) or die(mysqli_error($con));


}
    
    ?>
