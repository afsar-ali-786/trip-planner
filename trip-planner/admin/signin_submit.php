<?php
// Database connection here 
require("includes/config.php");

$uname=$_POST['username'];
$password=$_POST['password'];

// Query checks if the email and password are present in the database.
$sql ="SELECT UserName,Password FROM admin WHERE UserName= '" . $uname . "'and Password='" . $password . "' ";

$result = mysqli_query($con, $sql)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

// If the email and password are not present in the database, 
//the mysqli_num_rows returns 0, 
//it is assigned to $num.
if ($num == 0) {
  
  echo "<script>alert('Invalid Details');</script>";

} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['EmailId'];
  $_SESSION['user_id'] = $row['user_id'];
  $_SESSION['email'] = $email;
  $_SESSION['user_id'] = $user_id;
  header('location: dashboard.php');
}


?>