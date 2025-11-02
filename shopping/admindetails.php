<?php
session_start();
if($_SESSION['admin']=="")
{
	header('location:login.php');
} 
$conn = mysqli_connect("localhost","root","","shopping");  
mysqli_select_db($conn,"shopping"); 
$d=$_GET['did'];
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="style.css" />
	<style type="text/css"> 
	#pinky
{
	margin-left:5%;
	margin-right:5%;
	font-size:20px;
	text-align:justify;
}
.pinki{
	font-size:20px;
	background-color:#AAAAAA;
	color:black;
}
#pinki
{
	margin-left:5%;

}
div.homestyle
{
 margin-top:0%;
padding-top:2px;
padding-right:15px;
padding-left:15px;
padding-bottom: 10px;
}
div.rightstyle{
float:left;
margin-top:5%;
margin-left:5%;
padding-left:7px;padding-right:15px;
padding-bottom: 35px;
}
</style>
</head>
<body>
<div class="container">

<!-- <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">  -->
<nav class="navbar navbar-fixed-top" role="navigation" style="background-color:#0040ff;"> 
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">  

<span class="icon-bar">  </span>
<span class="icon-bar">  </span>
<span class="icon-bar">  </span>
<a href=""></a>

</button>

 <a href="#" class="navbar-brand" id="padma"> GRAB IT.COM </a> 

</div> <!-- END OF  NAV BAR HEADER -->

<div class="collapse navbar-collapse" id="collapse">

<ul class="nav  navbar-nav navbar-right" >
<li><a href="admin.php" id="padma">  Home </a>  </li>
<li><a href="logout.php" id="padma">  Log Out </a>  </li>

</ul>

</div>  <!-- END OF DIV CLASS AFTER NAVBAR HEADER -->

</nav>

<br> <br> <b> <br>
<div  class="pinky"> 


</div>


</div> <!-- END OF CONTAINER CLASS -->
<body>
</html>


<?php
$q1="SELECT * FROM dressdetails WHERE dressid='$_GET[did]' ";
$result=mysqli_query($conn,$q1);

while($row= mysqli_fetch_array($result))
{	
	
	$details=$row['details'] ;
	$image_name=$row['folder'];
	$image_path=$row['dressimage'];
	echo '<fieldset style="margin-left:15%;margin-right:15%;border:2px solid #00BFFF;">';
	echo '<div style="width:100%;">';
	echo ' <h2>' .'<p id="pinki">'.$row['dressname'] .'</p>' .' </h2>' ;
	
	echo '<a href="edit.php?d_id='.$d.'" style="text-decoration:none;" > 
	<input type="button" value="Update" name="update" style="font-size:25px;margin-left:80%">  </a>';
	
	echo '<div style="width:35%;float:left;margin-left:5%" class="homestyle">';	

	echo "<img src=".$image_name."/".$image_path." height=250 width=60%><br>";
	echo '</div>';

	echo '<div style="width:45%;" class="rightstyle">';
	echo '<p id="pinky" style="font-size:20px;">';
	echo '<b>Price :</b>'.$row['dressprice']. '</p>';
	echo '<p id="pinky" style="font-size:20px;">';
	echo '<b>Details :</b>'.$row['details'].'</p>';
	echo '<p id="pinky" style="font-size:20px;">';
	echo '<b>Quantity :</b>'.$row['quantity'].'</p>';
	echo '<p id="pinky" style="font-size:20px;">';
	echo '<b>Status :</b>'.$row['status'].'</p>';
	
	
	echo '</div>';
	echo '</div>';
	echo '</fieldset>';
}


?>
