<?php
	session_start();
	// Create connection
	$conn = mysqli_connect("localhost","root","","browseplan") or die("Couldn't connect to the server");
	unset($_SESSION['emailid']);
	mysqli_select_db($conn,"browseplan") or die("Couldn't connect to the database");
    if(session_destroy())
	{
	echo '<script>alert("You have Logged out Successfully!!")</script>';
	echo '<script>location.href = "login.php"</script>';
	}
?>