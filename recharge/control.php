<?php
$error = "";
$name = isset($_POST["name"])?$_POST["name"]:""; //Added condition

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST["name"];

   // Verify $_POST['name'] greater than 4 chars
   if ( strlen($name) < 4 ){
        $error= 'Name too short!';
    }
}
?>

<html>
<head>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="myForm" id="idForm">
       <input type="text" placeholder="Name" id="name" name="name" value="<?php echo $name; ?>"/>
       <input type="submit" value="submit"/>
    </form>
        <?php 
            echo "<h2>Input:</h2>"; 
            echo $name;
            if($error) {
                // No Update AND refresh page with $name in text field
                echo "<br/>" . $error; 
            } else {
                // Update name in DB
            }
       ?>
</body>
</html>