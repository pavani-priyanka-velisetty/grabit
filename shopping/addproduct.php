<?php
session_start(); 
$conn = mysqli_connect("localhost","root","","shopping");  
mysqli_select_db($conn,"shopping"); 
$div_id=$_GET['div_id'];
$fold="images";
if(isset($_POST['submit']))
{
	
	$upload_image=$_POST['imageUpload'];
	if($upload_image=='')
	{
		echo "<script>alert('Please Select an Image')</script>";
	}
	else
	{
		$y=0;
		while($y<3)
		{
		$q1="INSERT INTO dressdetails SET dressname='".$_POST['dname']."',folder='$fold',dressimage='$upload_image',dressprice='".$_POST['dprice']."',details='".$_POST['details']."',tab_id='$y',div_id='$div_id',quantity='".$_POST['quantity']."',status='".$_POST['status']."'";
		$res=mysqli_query($conn,$q1);
		$y++;
		
		}
	}
	header("location:admin.php");
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<style>
input,textarea
{
border:1px solid #9FB6CD;
font-size:20px;
}
input.akhil
{
	font-size:20px;
	background-color:pink;
	color:black;
	cursor:pointer;
}
body {
    background-image: url("images/bg4.jpg");
	 background-size: 100% 100%;
	background-repeat: no-repeat;
}
ol
{
	color:blue;
}
ol p{
	color:black;
}

</style>

</head>
<body>
<form action="" method="post"> 
<center style="font-size:25px;color:black"> Add a Product to home page here!!</center> <br> <br>
	<fieldset style="border:2px solid #9FB6CD;padding:3%;margin-left:25%;margin-right:25%">

<br>

<p style="font-size:25px"> Product Name </p> 
<input type="text" name="dname"  placeholder="Enter Product Name" style="font-size:25px;width:100%;" required="required"> <br> 
<p style="font-size:25px"> Product Cost </p> 
<input type="text" name="dprice"  placeholder="Enter Product Cost" style="font-size:25px;width:100%;" required="required"> <br> 
<p style="font-size:25px"> Quantity </p> 
<input type="text" name="quantity"  placeholder="Enter quantity" style="font-size:25px;width:100%;" required="required"> <br> 
<p style="font-size:25px"> Status </p> 
<input type="text" name="status"  placeholder="Enter Status" style="font-size:25px;width:100%;" required="required"> <br> 

<p style="font-size:25px"> Details <br> <textarea rows="10" cols="40" name="details"  required="required"> </textarea> </p>

<p style="font-size:25px"> Insert Image :  <input class="pinki" type="file" name="imageUpload" id="imageUpload"/> </p> <br> <br> 
<input class="akhil" type="submit" value="Add a Product" name="submit" style="font-size:28px;width:100%;"> <br> <br>
</fieldset>

</form>

</body>
</html>