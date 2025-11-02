<?php
session_start();
$conn = mysqli_connect("localhost","root","","browseplan");

mysqli_select_db($conn,"browseplan");
if($_SESSION['admin']=="")
{
	header('location:login.php');
}
$sql="DELETE from browseplan where Operators='$_GET[operators]' AND Plans='$_GET[plans]' AND Price='$_GET[price]'";
$result=mysqli_query($conn,$sql);
echo "<script>alert('Plan deleted Successfully!!')</script>";
echo '<script>location.href = "rechargeadmin.php"</script>';
?>