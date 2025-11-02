<?php
session_start();
$conn = mysqli_connect("localhost","root","","shopping");  
mysqli_select_db($conn,"shopping");
if($_SESSION['user_id']=="$_GET[user_id]")
{
$q2="SELECT * FROM userorder WHERE user_id='$_GET[user_id]' "; 
$result=mysqli_query($conn,$q2);
$row= mysqli_fetch_array($result);
$u=$_GET['user_id'];
$d=$_GET['did'];
$q3= "INSERT INTO wishlist SET product_id='$d',user_id='$u'";
$result3=mysqli_query($conn,$q3);

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
<link rel="stylesheet" href="style.css" >
<style type="text/css"> 
#pinky
{
	margin-left:5%;
	margin-right:5%;
	font-size:20px;
	text-align:justify;
}
.pinki{
	font-size:10px;
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
<li><a href="useritems.php?user_id=<?php echo $u;?>"id="padma">  Your Orders </a>  </li>
<li><a href="wishdis.php?user_id=<?php echo $u;?>" id="padma">  Wishlist </a>  </li>
<li><a href="logout.php" id="padma">  Log Out </a>  </li>

</ul>

</div>  <!-- END OF DIV CLASS AFTER NAVBAR HEADER -->

</nav>
</div> <!-- END OF CONTAINER -->
<script type="text/javascript" src="jquery-1.12.4.js"> </script>
<script type="text/javascript" src="js/bootstrap.js"> </script>


<br> <br> <br> <br> 
</body>
</html>


<?php
if($_SESSION['user_id']=="$_GET[user_id]")
{

$q1="SELECT * FROM wishlist WHERE user_id='$_GET[user_id]' ORDER BY id DESC"; 
$res=mysqli_query($conn,$q1);
echo '<center> <h3>  Your Wishlist: </h3> </center>';
while($ans= mysqli_fetch_array($res))
{
$q2="SELECT * FROM dressdetails WHERE dressid='$ans[product_id]' ";
$result=mysqli_query($conn,$q2);

while($row= mysqli_fetch_array($result))
{
echo '<fieldset style="margin-left:15%;margin-right:15%;border:2px solid #00BFFF;">';
echo '<div style="width:100%">';
	
echo ' <h2>' .'<p id="pinki">'.$row['dressname'] .'</p>' .' </h2>' ;	
$image_name=$row['folder'];
$image_path=$row['dressimage'];
echo '<a href="order.php?user_id='.$u.'&did='.$d.'" style="text-decoration:none;" > 
	<input type="button" value="Buy Now" name="order" style="font-size:25px;margin-left:80%">  </a>';
echo '<div style="width:35%;float:left;margin-left:5%" class="homestyle">';
		
echo "<img src=".$image_name."/".$image_path." height=250 width=70%><br>";
	
echo '</div>';
	
echo '<div style="width:45%;" class="rightstyle">';
	
echo '<p id="pinky" style="font-size:20px;">';
	echo '<b>Dress Name :</b>'.$row['dressname']. '</p>';
	echo '<p id="pinky" style="font-size:20px;">';
	echo '<b>Dress Price :</b>'.$row['dressprice']. '</p>';
	echo '<p id="pinky" style="font-size:20px;">';
	echo '<b>Details :</b>'.$row['details'].'</p>';
	echo '<p id="pinky" style="font-size:20px;">';
	echo '<b>Status :</b>'.$row['status'].'</p>';
	echo '<p id="pinky" style="font-size:20px;"> <b>Delivery would take place in 3 days</b></p>';
	echo '</div>';
	echo '</div>';
	echo '</fieldset>';
	echo '<br>';
	
	
}
}
}
else
{
	header('location:login.php');
}
?>