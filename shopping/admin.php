<?php
session_start(); 
if($_SESSION['admin']=="")
{
	header('location:login.php');
}
$conn = mysqli_connect("localhost","root","","shopping");  
mysqli_select_db($conn,"shopping"); 
 $q1="SELECT div_id FROM dressdetails";
$result=mysqli_query($conn,$q1);
while($row= mysqli_fetch_array($result))
{
$div_id=$row['div_id'];
}

 $divid=$div_id+1;
?>


<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="style.css" />
	<style type="text/css"> 

	</style>
</head>
<body>
<div class="container">

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
<li><a href="addproduct.php?div_id=<?php echo $divid;?>"  id="padma">  Add Products </a>  </li>
<li><a href="logout.php" id="padma">  Log Out </a>  </li>
</ul>

</div>  <!-- END OF DIV CLASS AFTER NAVBAR HEADER -->

</nav>
<br> <br> <br>
<?php
$x=0;

while($x<$divid)
{
	$slider="slider".$x;
	$y=0;
?>
<div id="<?php echo $slider?>" class="carousel slide" data-ride="carousel" style="" >
<div class="carousel-inner" >
<div class="item active" >
<?php

$q1="SELECT * FROM dressdetails where tab_id=$y and div_id=$x";
$result=mysqli_query($conn,$q1);
$num=mysqli_num_rows($result);

while($row= mysqli_fetch_array($result))
{
$did=$row['dressid'];

echo ' <div style="width:25%;float:left;padding-left:6%;padding-bottom:2%;">';
 echo ' <a href="admindetails.php?did='.$did .'">   <img src="images/'.$row['dressimage']. '" width=40%" style="padding-top:2%"><br> </a>
	 <br> ';
echo '	<p style="text-indent:0px;"> '.$row['dressname']. '</p>
	  <p style="text-indent:25px"> '.$row['dressprice']. ' </p>';
echo'</div>';
}
?>
</div>
<div class="item" >
<?php
$y++;
$q1="SELECT * FROM dressdetails where tab_id=$y and div_id=$x";
$result=mysqli_query($conn,$q1);
while($row= mysqli_fetch_array($result))
{
$did=$row['dressid'];

echo ' <div style="width:25%;float:left;padding-left:6%;padding-bottom:2%;">';
 echo ' <a href="admindetails.php?did='.$did .'">   <img src="images/'.$row['dressimage']. '" width="40%" style="padding-top:2%"><br> </a>
	 <br> ';
echo '	<p style="text-indent:0px;"> '.$row['dressname']. '</p>
	  <p style="text-indent:25px"> '.$row['dressprice']. ' </p>';
echo'</div>';
}
?>
</div>

<div class="item" >
<?php
$y++;
$q1="SELECT * FROM dressdetails where tab_id=$y and div_id=$x";
$result=mysqli_query($conn,$q1);
$num=mysqli_num_rows($result);
while($row= mysqli_fetch_array($result))
{
$did=$row['dressid'];

echo ' <div style="width:25%;float:left;padding-left:6%;padding-bottom:4%;">';
 echo ' <a href="admindetails.php?did='.$did .'">   <img src="images/'.$row['dressimage']. '" width="40%" style="padding-top:2%"><br> </a>
	 <br> ';
echo '	<p style="text-indent:0px;"> '.$row['dressname']. '</p>
	  <p style="text-indent:25px"> '.$row['dressprice']. ' </p>';
echo'</div>';
}
?>
</div>

</div><!--	END OF CAROUSEL INNER CLASS -->

 <a href="#<?php echo $slider?>" class="left carousel-control" data-slide="prev" style="width:3%;"> 

<span class="glyphicon glyphicon-chevron-left" > </span>

</a> 

<a href="#<?php echo $slider?>" class="right carousel-control" data-slide="next" style="width:3%;">

<span class="glyphicon glyphicon-chevron-right"> </span>

</a> 

</div><!-- END OF SLIDER DIV -->
<p style="text-indent:50px;"> <a href="deleteproduct.php?divid=<?php echo $div_id;?> " style="text-decoration:none;"> <input type="button" value="Remove"> </a> </center>
<br><br>
<?php
 $x++;
}
?>	
<br> <br>		
</div> <!-- END OF CONTAINER -->

	<script type="text/javascript" src="jquery-1.12.4.js"> </script>
	<script type="text/javascript" src="js/bootstrap.js"> </script>

	<script type="text/javascript">
var $ = jQuery.noConflict();
$(document).ready(function() { 
  $('#<?php echo $slider?>').carousel({ interval: 1000000, cycle: true });
});
</script>
</body>
</html>