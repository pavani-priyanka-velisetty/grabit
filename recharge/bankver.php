<?php
   session_start();
   $conn = mysqli_connect("localhost","root","","browseplan") or die ("could not connect to mysql");
   mysqli_select_db($conn,"browseplan");
	$count=0;
   $email=$_GET['emailid'];
   if(isset($_POST['submit'])) {
      $cn=$_POST['CardNumber'] ;
      $cvv=$_POST['CVVNumber'];
      $que="SELECT * FROM bank" ;
		$result=mysqli_query($conn,$que);
		while($row= mysqli_fetch_array($result))
		{
		
	  if($cn==$row['accno'] && $cvv==$row['cvv']){
		  $count++;
		 $rembal=$row['balance'];
		  $x=$_GET['amount'];
		  if($rembal<$x){
		  			 echo '<script>alert("Insufficient Balance!!") </script>';
		 }
		 else{
		  $rembal=$rembal- $x;
		  $sql="UPDATE bank SET balance=$rembal WHERE accno='$cn'";
		  $result=mysqli_query($conn,$sql);
		   $que1="SELECT wallet FROM users WHERE email='$email'" ;
		$result1=mysqli_query($conn,$que1);
		while($row1= mysqli_fetch_array($result1))
			{
		   $wallet=$row1['wallet'];
		  
		  $y=$_GET['amount'];
		  $wallet=$y+$wallet;
		  $wsql="UPDATE users SET wallet=$wallet WHERE email='$email'";
		  $result=mysqli_query($conn,$wsql);  
	  }
	  		   	echo '<script>alert("Transaction is Successfull!!") </script>';
			echo '<script> location.href="insert1.php?emailid='.$email.'" </script>';
	  
	  
		 }
		}
		 	}
			 	if($count==0){
			echo '<script>alert("Invalid Card Details!!") </script>';
	}

	
	
   }

     // $x=$_GET['amount'];
	    $que2="SELECT wallet FROM users WHERE email='$email'" ;
		$result2=mysqli_query($conn,$que2);
		$row2= mysqli_fetch_array($result2);
		   $wallet=$row2['wallet'];
	  
	  
   if(isset($_POST['proceed'])) {
	 $z=$_GET['amount'];
	  if($wallet<$z){
		  			 echo '<script>alert("Insufficient Balance!!") </script>';
		 }
		 else{
	 $wallet=$wallet-$z;
	 $wsql1="UPDATE users SET wallet=$wallet WHERE email='$email'";
	 $result1=mysqli_query($conn,$wsql1);  
	 echo '<script>alert("Transaction is Successfull!!") </script>';
	echo '<script> location.href="insert1.php?emailid='.$email.'" </script>';

   }
   }
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="" />
</head>
<body>
 <div style="float:left;margin-top:10%;margin-left:10%">
<img src="images/bankbag.jpg" style="">
</div>	
<div class="container">
 
<div class="panel-group" id="accordion" style="float:left;margin-top:12%;width:50%;margin-left:15%">

<div class="panel panel-default">

<div class="panel-heading" style="background-color:#33c7ff;color:#102F3B;">

<h4 class="panel-title">
 
<a href="#firstcontent" data-parent="accordion" data-toggle="collapse" class="accordion-toggle"> Pay from Wallet </a>  </h4>

</div> <!-- END OF PANEL-HEADING -->

<div class="panel-collapse in collapse" id="firstcontent"> 

<div class="panel-body"> <p>
 <form action = "" method = "post"> 
  <label>Your Wallet  : Rs.</label>   <?php echo $wallet?> <br> <br> 
 <input type = "submit" value = "Pay from Wallet" name="proceed"/><br />
 </form>

</p>

</div> <!-- END OF PANEL-BODY -->

</div> <!-- END OF PANEL-COLLAPSE -->

</div> <!-- END OF PANEL-DEFALUT -->


<div class="panel panel-default">

<div class="panel-heading" style="background-color:#33c7ff;color:#102F3B;">

<h4 class="panel-title">
 
<a href="#secondcontent" data-parent="accordion" data-toggle="collapse" class="accordion-toggle"> Pay from Card </a>  </h4>

</div> <!-- END OF PANEL-HEADING -->

<div class="panel-collapse collapse" id="secondcontent"> 

<div class="panel-body"> <p>
 <form action = "" method = "post">
  <label>Card Number  : </label><input type = "text" name = "CardNumber" placeholder="Enter Card Number"/><br /><br />
  <label>CVV Number  &nbsp;: </label><input type = "text" name = "CVVNumber"  placeholder="Enter CVV" /><br/><br />
<input type = "submit" value = "Proceed to Pay" name="submit"/><br />
 </form>

</p>

</div> <!-- END OF PANEL-BODY -->

</div> <!-- END OF PANEL-COLLAPSE -->

</div> <!-- END OF PANEL-DEFALUT -->

</div> <!-- END OF PANEL-GROUP -->


	
</div> <!-- END OF CONTAINER -->



	<script type="text/javascript" src="jquery-1.12.4.js"> </script>
		<script type="text/javascript" src="js/bootstrap.js"> </script>
</body>
</html>