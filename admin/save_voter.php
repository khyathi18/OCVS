<?php

include('dbcon.php');
 
 
$FullName=$_POST['FullName'];
$UserName=$_POST['UserName'];
$Year=$_POST['Year'];
$Password=$_POST['Password'];

$pc_date = $_POST['pc_date'];
$pc_time = $_POST['pc_time'];
$user_name=$_POST['user_name'];
mysqli_query($conn,"insert into voters (FullName,UserName,Password,Status,Year)
values('$FullName','$UserName','$Password','Unvoted','$Year')");

mysqli_query($conn,"INSERT INTO history (data,action,date,user)VALUES('$FullName', 'Added Voter', '$pc_date $pc_time','$user_name')")or die(mysqli_error());
?>
