<?php
session_start();
if($_SESSION['admin']=="")
{
	header('location:login.php');
}
$conn = mysqli_connect("localhost","root","","shopping");  
mysqli_select_db($conn,"shopping");
$d=$_GET['d_id'];

$q1="SELECT * FROM dressdetails WHERE dressid='$_GET[d_id]' ";
$result=mysqli_query($conn,$q1);
$row= mysqli_fetch_array($result);


if(isset($_POST['update']))
{
	$upload_image=$_POST['imageUpload'];
	if($upload_image=='')
	{
		echo "<script>alert('Please Select an Image')</script>";
	}
	else
	{	
		
		$q3= "UPDATE dressdetails SET dressname='".$_POST['dname']."', dressprice='".$_POST['dprice']."', details='".$_POST['details']."',updateddate = CURDATE(),dressimage='$upload_image' WHERE dressid='$_GET[d_id]'" or die(mysqli_error($conn));;
		$result3=mysqli_query($conn,$q3);
		echo '<script>alert("Updated Successfully!!")</script>';
		echo '<script>location.href = "admin.php"</script>';

	}
}


/*$q2="UPDATE dressdetails SET updateddate = CURDATE() WHERE dressid='$_GET[d_id]'";
$result1=mysqli_query($conn,$q2);
*/
?>
<!DOCTYPE HTML>
<html>
<head> 
<style>
#pinky
{
	margin-left:10%;
	margin-right:10%;
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
input.pinki{
	font-size:20px;
	background-color:#AAAAAA;
	color:black;
}
</style>
</head>
<body>
<center> <h2> Update Product </h2> </center>
<fieldset style="border:2px solid #9FB6CD;margin-left:20%;margin-right:20%;">
<form action="" method="post"> 
<br>
<p id="pinky"> Dress Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  <input type="text" name="dname" value="<?php echo $row['dressname'];?>"> <br> <br>
Dress Price : <input type="text" name="dprice" value="<?php echo $row['dressprice'];?>" > </p>
<p id="pinky"> Details : <br>  <textarea rows="10" cols="50" name="details"> <?php echo $row['details'];?> </textarea> </p>
<p id="pinky"> INSERT IMAGE :  <input class="pinki" type="file" name="imageUpload" id="imageUpload"  /> </p> <br>
<div style="margin-left:40%"> <input class="akhil" type="submit" value="Update" name="update"> </div>
</form>
</fieldset>
</body>
</html>