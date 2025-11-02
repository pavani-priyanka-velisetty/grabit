<?php
session_start();
$conn = mysqli_connect("localhost","root","","shopping");

mysqli_select_db($conn,"shopping");
//echo $_GET['divid'];
$sql="DELETE from dressdetails where div_id='$_GET[divid]'";
$result=mysqli_query($conn,$sql);
echo "<script>alert('Product Category deleted Successfully!!')</script>";
echo '<script>location.href = "admin.php"</script>';
?>