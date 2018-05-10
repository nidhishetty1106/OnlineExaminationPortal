<html>
<head>
<title>
</title>
</head>
<body>
<?php

$dbhost = 'localhost';     
$dbuser = 'root';   
$dbpass = "";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass);

if(!$connection ) {  
die('Could not connect to Server' 
.mysqli_error($connection));  
}

$dbhandle=mysqli_select_db($connection, 'personaldetails');
if(!$dbhandle) {  
die('Database Selection Problem' 
.mysqli_error($connection));  
}



$a=$_POST["pic"];
$b=$_POST["sign"];
$c=$_POST["rcard"];
$d=$_POST["acard"];




	

mysqli_query($connection, "INSERT INTO `docreq` 
(`pic`,`sign`, `rcard`, `acard`) 
VALUES ('$a','$b','$c','$d')") 
or die(mysqli_error($connection));
header('Location: payment.php');






?>
</body>
</html>


