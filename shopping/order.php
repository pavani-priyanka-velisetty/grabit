
<?php
session_start(); 
$conn = mysqli_connect("localhost","root","","shopping");  
mysqli_select_db($conn,"shopping");
$count=0;
if($_SESSION['user_id']=="$_GET[user_id]")
{
$q2="SELECT * FROM dressdetails WHERE dressid='$_GET[did]' ";
$result2=mysqli_query($conn,$q2);
$row2= mysqli_fetch_array($result2);
$d=$_GET['did'];
$createdate=date('y-m-d h:i:s');
$quantity=$row2['quantity'];
$quantity--;

$u=$_GET['user_id']; 
if(isset($_POST['submit']))
{
 
 $q1="SELECT dressprice FROM dressdetails WHERE dressid='$_GET[did]' ";
	$res1=mysqli_query($conn,$q1);
	$ro= mysqli_fetch_array($res1);
	$price=$ro['dressprice'];
	$cn=$_POST['accountno'] ;
      $cvv=$_POST['cvv'];
	  //$_SESSION["amou
      $que="SELECT * FROM transaction" ;
		$res=mysqli_query($conn,$que);
		$ret = mysqli_num_rows($res);
		while($row1= mysqli_fetch_assoc($res))
		{
			if($cn==$row1['accountno'] && $cvv==$row1['cvv']){
		   $count++;
		 $rembal=$row1['balance'];
		 if($rembal<$price){
		  			 echo '<script>alert("Insufficient Balance!!") </script>';
		 }
		 else{
			 $rembal=$rembal- $price;
		    $sql="UPDATE transaction SET balance=$rembal WHERE accountno='$cn'";
		  $result=mysqli_query($conn,$sql);
		  $qr1 = mysqli_query($conn,"INSERT INTO userorder(user_id, product_id, order_date, quantity_available) values('".$u."','".$d."','".$createdate."','".$quantity."')") or die(mysql_error());  
 $qr = mysqli_query($conn,"UPDATE userorder SET accountno='".$_POST['accountno']."',cvv='".$_POST['cvv']."' WHERE user_id='$u' and product_id=$_GET[did]");
 $qr1= mysqli_query($conn,"UPDATE dressdetails SET quantity='$quantity' WHERE dressid=$_GET[did]");
		  echo '<script>alert("Ordered Successfully!!") </script>';
	echo '<script> location.href="userhome.php?user_id='.$u.'" </script>';

		 }
			}
		}			

	if($count==0){
			echo '<script>alert("Invalid Card Details!!") </script>';
	}
 
 }
 

$q1="SELECT * FROM dressdetails WHERE dressid='$_GET[did]' ";
$result=mysqli_query($conn,$q1);

while($row= mysqli_fetch_array($result))
{	
	
	$details=$row['details'] ;
	$image_name=$row['folder'];
	$image_path=$row['dressimage'];
	echo '<center><h2> Your Order Details are </h2></center>';
	echo '<fieldset style="margin-left:15%;margin-right:15%;border:2px solid #00BFFF;">';
	echo '<div style="width:100%;">';

	echo ' <h2>' .'<p id="pinki" style="text-indent:45px">'.$row['dressname'] .'</p>' .' </h2>' ;
	echo '<div style="width:35%;float:left;margin-left:3%" class="homestyle">';	

	echo "<img src=".$image_name."/".$image_path." height=250 width=75%><br>";
	echo '</div>';
	echo '<div style="width:45%;" class="rightstyle">';
	echo '<p id="pinky" style="font-size:20px;">';
	echo '<b>Price :</b>'.$row['dressprice']. '</p>';
	echo '<p id="pinky" style="font-size:20px;">';
	echo '<b>Details :</b>'.$row['details'].'</p>';
	echo '<p id="pinky" style="font-size:20px;">';
	echo '<b>Date :</b>'.$row['ordereddate'].'</p>';
	echo '</div>';
	echo '</div>';
	echo '</fieldset>';
	echo '<br>';
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
ol
{
	color:blue;
}
ol p{
	color:black;
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
margin-top:2%;
margin-left:5%;
padding-left:7px;padding-right:15px;
padding-bottom: 35px;
}
</style>

</head>
<body>
<?php 
$q="SELECT accountno FROM userorder";
$qr = mysqli_query($conn,$q);  
$row = mysqli_num_rows($qr);  
?>
<form action="" method="post"> 
	<fieldset style="border:2px solid #9FB6CD;padding:3%;margin-left:15%;margin-right:15%">

<br>
<p style="font-size:25px"> Bank Account Number </p> 
<input type="text" name="accountno"  placeholder="Enter Account number" style="font-size:25px;width:100%;" required="required"> <br> 
<p style="font-size:25px"> CVV </p> 
<input type="text" name="cvv"  placeholder="Enter CVV" style="font-size:25px;width:100%;" required="required"> <br>  <br> <br> 
<input class="akhil" type="submit" value="Proceed to Pay" name="submit" style="font-size:28px;width:100%;"> <br> <br>
</fieldset>

</form>
</body>
</html>

