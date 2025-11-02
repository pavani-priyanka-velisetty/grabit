<?php
session_start(); 
$conn = mysqli_connect("localhost","root","","shopping");  
mysqli_select_db($conn,"shopping");
if($_SESSION['user_id']=="$_GET[user_id]")
{ 
$u=$_GET['user_id'];
$d=$_GET['did'];
$q2="SELECT * FROM dressdetails WHERE dressid='$_GET[did]' ";
$result1=mysqli_query($conn,$q2);
$row1= mysqli_fetch_array($result1);
$quantity=$row1['quantity'];
if($quantity==0)
{
	$qr2=mysqli_query($conn,"UPDATE dressdetails SET status='not available' WHERE dressid=$_GET[did]");
}
}
else
{
	header('location:login.php');
}
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
 margin-top:2%;
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
<li><a href="userhome.php?user_id=<?php echo $u;?>" id="padma">  Home </a>  </li>
<li><a href="useritems.php?user_id=<?php echo $u;?>" id="padma">  Your Orders </a>  </li>
<li><a href="wishdis.php?user_id=<?php echo $u;?>" id="padma">  Wishlist </a>  </li>
<li><a href="logout.php" id="padma">  Log Out </a>  </li>

</ul>

</div>  <!-- END OF DIV CLASS AFTER NAVBAR HEADER -->

</nav>

<br> <br> <b> <br>
<div  class="pinky"> 


</div>


</div> <!-- END OF CONTAINER CLASS -->
<script type="text/javascript" src="jquery-1.12.4.js"> </script>
	<script type="text/javascript" src="js/bootstrap.js"> </script>

<body>
</html>


<?php
if($_SESSION['user_id']=="$_GET[user_id]")
{
$q1="SELECT * FROM dressdetails WHERE dressid='$_GET[did]' ";
$result=mysqli_query($conn,$q1);

while($row= mysqli_fetch_array($result))
{	
	
	$details=$row['details'] ;
	$image_name=$row['folder'];
	$image_path=$row['dressimage'];
	echo '<fieldset style="margin-left:15%;margin-right:15%;border:2px solid #00BFFF;">';
	echo '<div style="width:100">';
	
	echo ' <h2>' .'<p id="pinki">'.$row['dressname'] .'</p>' .' </h2>' ;
	if($quantity>0)
	{ 
	echo '<a href="order.php?user_id='.$u.'&did='.$d.'" style="text-decoration:none;" > 
	<input type="button" value="Buy Now" name="order" style="font-size:20px;margin-left:60%">  </a>';
	echo '<a href="wishlist.php?user_id='.$u.'&did='.$d.'" style="text-decoration:none;" >  &nbsp;&nbsp;
	<input type="button" value="Add to Wishlist" name="wishlist" style="font-size:20px;">  </a>';
	}
	
	echo '<div style="width:35%;float:left;margin-left:5%" class="homestyle">';
		
	echo "<img src=".$image_name."/".$image_path." height=250 width=70%><br>";
	
	echo '</div>';
	
	echo '<div style="width:45%;" class="rightstyle">';
	
	echo '<p id="pinky" style="font-size:20px;">';
	echo '<b>Price :</b>'.$row['dressprice']. '</p>';
	echo '<p id="pinky" style="font-size:20px;">';
	echo '<b>Details :</b>'.$row['details'].'</p>';
	echo '<p id="pinky" style="font-size:20px;">';
	echo '<b>Status :</b>'.$row['status'].'</p>';
	echo '<p id="pinky" style="font-size:20px;"> <b>Delivery would take place in 3 days</b></p>';
	echo '</div>';
	echo '</div>';
	echo '</fieldset>';
}
}
else
{
	header('location:login.php');
}
?>

