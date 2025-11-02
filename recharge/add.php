<?php
session_start();
$conn = mysqli_connect("localhost","root","","browseplan");

mysqli_select_db($conn,"browseplan");
if($_SESSION['admin']=="")
{
	header('location:login.php');
}
if(isset($_POST['proceed'])){
$op=$_POST['operator'];
$pl=$_POST['plan'];
$tt=$_POST['talktime'];
$val=$_POST['validity'];
$des=$_POST['description'];
$price=$_POST['price'];
$sql="INSERT into browseplan values('$op','$pl','$tt','$val','$des','$price')";
$result=mysqli_query($conn,$sql);
echo "<script>alert('Plan added Successfully!!')</script>";
echo '<script>location.href = "rechargeadmin.php"</script>';
}
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="customstyle.css" />
<style>
div.homestyle
{

border:1px solid #00BFFF;
 margin-top:2%;
padding-top:40px;
padding-right:25px;
padding-left:25px;
padding-bottom: 10px;
}
input
{
	width:100%;
	font-size:25px;
}
textarea{
font-size:25px;	
}
</style>
</head>
<body>
<br>
<h2 align="center">Add Plans<h2>
<div style="width:50%;margin-left:25%" class="homestyle" align="center">
<form  action ="" method="post"> 
  <input type="text" placeholder="Operator" name="operator" required="required" >  <br><br> 
  <input type="text" placeholder="Plan" name="plan" required="required" >  <br><br>
  <input type="text" placeholder="Talktime" name="talktime" required="required" >  <br><br>
  <input type="text" placeholder="validity" name="validity" required="required">  
	<p style="font-size:25px"> <textarea rows="10" cols="35" name="description" placeholder="Description" required="required" ></textarea></p>
  <input type="text" placeholder="Price" name="price" required="required">  <br><br>
<input type="submit" value="Add Plan" name="proceed"> <br> <br>
</form>
</div>