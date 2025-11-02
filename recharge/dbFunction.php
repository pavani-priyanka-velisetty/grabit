<?php  
session_start();  
include_once('dbConnect.php');
class dbFunction {  
			       
        function __construct() {  
              
            // connecting to database  
            $db = new dbConnect();;  
               
        }   
        public function UserRegister($username, $emailid, $password,$mobile){  
		$conn = mysqli_connect("localhost","root","","browseplan");  
		mysqli_select_db($conn,"browseplan"); 
		    $qr = mysqli_query($conn,"INSERT INTO users(username, email, password, mobile) values('".$username."','".$emailid."','".md5($password)."','".$mobile."')") or die(mysql_error());  
                return $qr;  
               
        }  
        public function Login($emailid, $password){  
		$conn = mysqli_connect("localhost","root","","browseplan");  
		mysqli_select_db($conn,"browseplan"); 
	
	    $q="SELECT * FROM users WHERE email = '".$emailid."'  AND password = '".md5($password)."'";
            $res = mysqli_query($conn,$q); 
			$no_rows = mysqli_num_rows($res);  
            $user_data = mysqli_fetch_array($res);  
              
            if ($no_rows== 1) 
            {  
           
                $_SESSION['login'] = true;   
                $_SESSION['username'] = $user_data['username'];  
                $_SESSION['email'] = $user_data['emailid'];  
                return TRUE;  
            }  
            else  
            {  
                return FALSE;  
            }  
                       
        }  
       public function isUserExist($emailid,$username){  
		$conn = mysqli_connect("localhost","root","","browseplan");  
		mysqli_select_db($conn,"browseplan"); 
	    $q="SELECT * FROM users WHERE email = '".$emailid."' or username= '".$username."' ";
            $qr = mysqli_query($conn,$q);  
            echo $row = mysqli_num_rows($qr);  
            if($row > 0){  
               return true;  
            } else {  
                return false;  
            }  
         
    } 
	}
	?>  