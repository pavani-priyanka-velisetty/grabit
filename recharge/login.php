<?php
 include_once('dbFunction.php');  
 $conn = mysqli_connect("localhost","root","","browseplan");  
 mysqli_select_db($conn,"browseplan");      
    $funObj = new dbFunction();  
    if(isset($_POST['login'])){  
        $emailid = $_POST['emailid'];  
        $password = $_POST['password'];
// admin login		
		$_SESSION['admin']=$emailid;
		$q = "SELECT * FROM admin WHERE adm_email='$emailid' AND adm_pswd='$password'";
		$cq = mysqli_query($conn,$q);
		$ret = mysqli_num_rows($cq);
		if($ret == true)
		{
		header('location:rechargeadmin.php');
		}
		else
		{
		echo "<script>alert('Wrong Login Details, Try Again!')</script>";
		}
		
// user login	
        $user = $funObj->Login($emailid, $password);  
        if ($user) {  
            // Registration Success  
		$que="SELECT email from users WHERE email='".$emailid."'" ;
		$result=mysqli_query($conn,$que);
		$row= mysqli_fetch_array($result);
		$_SESSION['emailid']=$row['email'];
        header("location:insert1.php?emailid=$row[email]");
        } else {  
            // Registration Failed  
            echo "<script>alert('Emailid / Password Not Match')</script>";  
        }  
    } 


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<link rel="stylesheet">
<style>
input
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
</style>
</head>
<body> 
<marquee style="color:#228b22;font-size:25px">Welcome to Login Page </marquee>
<div style="width:100%;">
<b style="font-size:40px;color:#800000;margin-left:6%"> You should Login here!! </b>
</div>
<div style="width:100%; ">
<div style="width:35%;float:left;margin-left:3%">
<ol>
<li  style="font-size:28px;"> <p style="font-size:25px;text-align:justify;"> Confirm your Email Address :<br> <br>
 We'll take all the blogs under this account and switch them to your Account with you registered email address. </p></li>
<li  style="font-size:28px;"> <p style="font-size:25px;text-align:justify;"> Confirm your password: <br> <br>
Use your Blogger username and password.Do not share your password with anyone. We always try to keep your account secure. </p></li>
</ol>
</div>
<div style="float:left;width:35%;margin-left:15%;margin:top:5%" >
<form action="" method="post">
<fieldset>
<center> <img src="images/login1.png" width="40%" > </center>
<p style="font-size:25px"> Email </p> 
<input type="email" name="emailid"  placeholder="Enter Email" style="font-size:25px;width:100%;" required="required"> <br> 

<p style="font-size:25px;"> Password  </p> 
<input type="password" name="password" placeholder="Enter Password" style="font-size:25px;width:100%;" required="required"> <br> <br> <br> <br>

<input class="akhil" type="submit" value="Login" name="login" style="font-size:28px;width:100%;"> <br> <br>
<center> <a href="signup.php"> New user? then register here!! </a>  </center>
 </fieldset>
 </form>
 </div>
</div>
</body>
</html>