
<?php
session_start();
$conn = mysqli_connect("localhost","root","","shopping");  
mysqli_select_db($conn,"shopping");
if(session_destroy())
{
echo '<script>alert("You have Logged out Successfully!!")</script>';
echo '<script>location.href = "shopping.php"</script>';
}

/*else
{
	header("Location: login.php");
}
  */
?>
