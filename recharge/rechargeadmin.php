<?php
session_start();
if($_SESSION['admin']=="")
{
	header('location:login.php');
}
$conn = mysqli_connect("localhost","root","","browseplan");
mysqli_select_db($conn,"browseplan");
$op = isset($_POST['operator'])?$_POST['operator']:"Vodafone";
if(isset($_POST['submit']))
{
$op=$_POST['operator'];
}

?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="customstyle.css">
<style> 
input.akhil{
	font-size:22px;
	background-color:#27408B;
	color:white;
	cursor:pointer;
}
input.pinki
{
	cursor:pointer;
}

td,th{
	font-size:20px;
	padding:2%;
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

 <a href="#" id="padma" class="navbar-brand"> GRAB IT.COM </a> 

</div> <!-- END OF  NAV BAR HEADER -->

<div class="collapse navbar-collapse" id="collapse">

<ul class="nav  navbar-nav navbar-right" >
<li><a href="rechargeadmin.php" id="padma">  Home </a>  </li>
<li><a href="add.php" id="padma">  Add Plans </a>  </li>
<li><a href="adminlogout.php" id="padma"> Log Out </a>  </li>
</ul>

</div>  <!-- END OF DIV CLASS AFTER NAVBAR HEADER -->

</nav>
<br> <br> 
 <center><h3> BROWSE PLANS LIST </h3></center>
 <center> 
<form method="post"> 
  <input type="text" placeholder="Enter Operator" name="operator" id="name" value="<?php echo $op; ?>"> &nbsp;

  <input value="Select Operator" type="submit" name="submit"> <br> <br>
</form>

</center>

</div> <!-- END OF CONTAINER -->

	<script type="text/javascript" src="jquery-1.12.4.js"> </script>
	<script type="text/javascript" src="js/bootstrap.js"> </script>
	<script type="text/javascript"> 
	
	$(function(){
	
	$('.nav-tabs a:first').tab('show');
	
	
	
	});
	
	</script>


</body>
</html>

<?php
if(isset($_POST['submit']))
{
$op=$_POST['operator'];
}
$p="SELECT * FROM browseplan WHERE Operators='$op'"; 
$que = mysqli_query($conn, $p)or die(mysqli_error($conn));
	
	echo "<div align='center'>";
	echo "<table width='70%' border='1' >";
	echo "<tr><th>Operators</th><th>Plans</th><th>Talktime</th><th>Validity</th><th>Description</th><th>Price</th><th>Option</th></tr>";
	
	while($row= mysqli_fetch_array($que))
	{
	echo "<tr>";
	echo "<td>".$row['Operators']."</td>";
	echo "<td>".$row['Plans']."</td>";
	echo "<td>".$row['Talktime']."</td>";
	echo "<td>".$row['Validity']."</td>";
	echo "<td>".$row['Description']."</td>";
	echo "<td>".$row['Price']."</td>";
	echo '<td> <a href="deleteplan.php?operators='.$row['Operators'].'&plans='.$row['Plans'].'&price='.$row['Price'].'"><input type="button" class="pinki" value="Delete"> </a> </td>';

	echo "</tr>";
	}
	echo "</table>";
	echo '<br><br>';
	echo "</div>";

?>