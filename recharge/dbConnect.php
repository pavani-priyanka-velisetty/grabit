<?php  
    class dbConnect {  
        function __construct() {   
		$conn = mysqli_connect("localhost","root","","shopping");  
		mysqli_select_db($conn,"shopping"); 
            if(!$conn)// testing the connection  
            {  
                die ("Cannot connect to the database");  
            }   
            return $conn;  
        }  
    /*    public function Close(){  
            mysql_close();  
        }  */
    }  
?>  