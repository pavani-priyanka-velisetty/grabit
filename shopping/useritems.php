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

 <a href="#" class="navbar-brand" id="padma">  GRAB IT.COM </a> 

</div> <!-- END OF  NAV BAR HEADER -->

<div class="collapse navbar-collapse" id="collapse">

<ul class="nav  navbar-nav navbar-right" >
<li><a href="userhome.php?user_id=<?php echo $u;?>" id="padma">  Home </a>  </li>
<li><a href="useritems.php?user_id=<?php echo $u;?>" id="padma">  Your Orders </a>  </li>
<li><a href="wishdis.php?user_id=<?php echo $u;?>"  id="padma">  Wishlist </a>  </li>
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
$q1="SELECT * FROM userorder WHERE user_id='$_GET[user_id]' ORDER BY order_no DESC"; 
$res=mysqli_query($conn,$q1);
echo '<center><h2> <p id="pinky"> Your Orders: </p></h2> </center>';
while($ans= mysqli_fetch_array($res))
{
echo '<div style="border:2px solid #9FB6CD; margin-left:15%;margin-right:15%;margin-top:5%;padding-bottom:10%">';
$q2="SELECT * FROM dressdetails WHERE dressid=$ans[product_id] ";
$result=mysqli_query($conn,$q2);
while($row= mysqli_fetch_array($result))
{	
$image_name=$row['folder'];
$image_path=$row['dressimage'];
echo "<img src=".$image_name."/".$image_path." width=30% style='float:right;padding-right:5%;'><br>";
}
//echo '<img src="images/pd1.jpg" width="30%" alt="" style="float:right;padding-right:5%;" />';

echo '<p id="pinky">'.'  <b>Product_id:</b> '.$ans['product_id'] .'</p>' ;
echo '<p id="pinky">'.'  <b>Ordered Date:</b> '.$ans['order_date'] .'</p>' ;
echo '<p id="pinky">'.'  <b>Account No:</b> '.$ans['accountno'] .'</p> ' ;
echo '<p id="pinky"> <b> Status : </b>Delivered </p> ' ;
echo '</div>';
}
}
else
{
	header('location:login.php');
}
?>