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
		while($y<3){
		$count=0;
		while($count<4)
		{
		$q1="INSERT INTO dressdetails SET dressname='".$_POST['dname']."',folder='$fold',dressimage='$upload_image',dressprice='".$_POST['dprice']."',details='".$_POST['details']."',tab_id='$y',div_id='$div_id'";
		$res=mysqli_query($conn,$q1);
		$count++;
		}
		$y++;
		}
	}
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<style>
body {
    background-image: url("images/bg4.jpg");
	 background-size: 100% 100%;
	background-repeat: no-repeat;
}
#pinky
{
	margin-left:5%;
	margin-right:5%;
	font-size:20px;
	text-align:justify;
}
input,textarea
{
border:1px solid #9FB6CD;	
font-size:20px;
}
input.akhil{
	font-size:25px;
	background-color:#27408B;
	color:white;
	cursor:pointer;
}
.pinki{
	font-size:20px;
	background-color:#AAAAAA;
	color:black;
}
</style>

</head>
<body>
	<fieldset style="border:2px solid #9FB6CD;margin-left:15%;margin-right:15%;">
<form action="" method="post"> 
<br>
<img src="images/newblog.jpg" width="28%" alt=""style="float:right" />
<p id="pinky"> Product Name &nbsp;&nbsp; :  <input type="text" name="dname" required="required"> <br> <br> Cost : <input type="text" name="dprice" required="required"> </p>
<p id="pinky"> Details&nbsp;&nbsp;&nbsp;: <br> <textarea rows="10" cols="40" name="details"  required="required"> </textarea> </p>
<p id="pinky"> Insert Image :  <input class="pinki" type="file" name="imageUpload" id="imageUpload"/> </p>
<div style="margin-left:25%">  <input class="akhil" type="submit" value="Post" name="submit"> </div>
</form>
</fieldset>
</body>
</html>