<!DOCTYPE HTML>
<head>
<style>
body {margin:0;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
    position: fixed;
    top: 0;
    width: 100%;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: grey;
}


#bg {
  position: fixed; 
  top: -50%; 
  left: -50%; 
  width: 200%; 
  height: 200%;
}
#bg img {
  position: absolute; 
  top: 25%; 
  left: 0; 
  right: 0; 
  bottom: 0; 
  margin: auto; 
  min-width: 50%;
  min-height: 50%;
}
</style>

</head>
<body>
<div id="bg" >
  <img src="bg.jpg" alt="">
</div>

<ul>
  <li style="float:left;"><a href="">GRAB IT.COM</a></li>
  <li><a href="shopping/shopping.php">ONLINE SHOPPING</a></li>
  <li><a href="recharge/newhome.php">ONLINE RECHARGE</a></li>
</ul>


</body>
</html>