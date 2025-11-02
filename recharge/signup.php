<?php
 include_once('dbFunction.php');  
       
    $funObj = new dbFunction();  
	$username = isset($_POST['username'])?$_POST['username']:"";
	$emailid=  isset($_POST['emailid'])?$_POST['emailid']:"";
	$mobile=  isset($_POST['mobile'])?$_POST['mobile']:"";
	
 if(isset($_POST['register'])){  
        $username = $_POST['username'];  
        $emailid = $_POST['emailid'];  
        $password = $_POST['password'];  
        $confirmPassword = $_POST['confirm_password'];  
		$mobile = $_POST['mobile'];  
        if($password == $confirmPassword){  
            $email = $funObj->isUserExist($emailid,$username);  
            if(!$email){  
			 if(strlen($password) < 6 )
			{
			
				echo "<script>alert('Password must be 6 characters')</script>";
			}
			else if(strlen(trim($mobile)) < 10 )
			{
				echo "<script>alert('mobile number must be 10 numbers')</script>";
			}
			else
			{
                $register = $funObj->UserRegister($username, $emailid, $password,$mobile);  
                if($register){  
                    echo "Registration Successful";  
					header("location:login.php");
					//echo "<script>alert('Registration Successful')</script>";
					
                }else{  
                    echo "<script>alert('Registration Not Successful')</script>";  
                } 
			}				
            } else {  
                echo "<script>alert('Email/Username Already Exist')</script>";  
            }  
        } else {  
            echo "<script>alert('Password Not Match')</script>";  
          
        }  
    }  

?>
<!DOCTYPE html>
<head> 
<link rel="stylesheet" href="" />
<style type="text/css"> 

td
{
	font-family:Segoe Print;
}
input
{
border:1px solid #9FB6CD;	
font-size:20px;
}
input.akhil
{
	font-size:20px;
	background-color:#27408B;
	color:white;
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
<body >
<div style="width:100%;">
<b style="font-size:30px;color:#800000;"> <center> You Should Signup here </center> </b> 
</div> <br> <br>
<div style="width:100%; ">
<div style="width:28%;float:left;margin-left:3%">
<ol>
<li  style="font-size:28px;text-align:justify;"> <p style="font-size:25px;text-align:justify;"> Choose a Google Account: <br> <br>
After you sign in, we'll have you choose which Google Account you'll use to sign in with from now on. 
You can create a new Google Account or link to your existing one. </p></li>
<li  style="font-size:28px;text-align:justify;"> <p style="font-size:25px;text-align:justify;"> Confirm your Details: <br> <br>
Make sure all your details are correct before registering and fill all the mandatory fields. </p></li>
</ol>
</div>
<div style="float:left;width:50%;margin-left:10%;margin:top:5%" >
<fieldset align="center">
<img src="images/signup1.gif" width="25%" alt="" />

<form name="signup" action="" method="post">
<table align="center" cellspacing="12" cellpadding="10"> 
<tr> <td> <b> User Name : </b> </td> <td> <input type="text" name="username" value="<?php echo $username; ?>" required>  </td> </tr> 
<tr> <td>  <b> Password : </b> </td> <td>  <input type="password" name="password" required="required"> </td> </tr> 
<tr> <td> <b> Confirm Password : </b> </td> <td>  <input type="password" name="confirm_password" required="required">  </td> </tr> 
<tr> <td> <b> Email : </b> </td> <td>  <input type="email" name="emailid" id="emailid" value="<?php echo $emailid; ?>"  required="required"> </td> </tr>
<tr> <td> <b> Mobile : </b> </td> <td>  <input type="tel" name="mobile" pattern="[789][0-9]{9}" id="mobile" value="<?php echo $mobile; ?>" required="required">  </td> </tr>
</table>
<input type="submit" class="akhil"value="Register" name="register"> &nbsp;&nbsp;&nbsp; <input class="akhil"type="reset" value="Reset"> <br><br>
<a href="login.php"> Already registered? then login here!! </a>
</form>
</fieldset>
 </div>
</div>
</body>
</html>