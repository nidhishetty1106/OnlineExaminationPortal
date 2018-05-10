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



$a=$_POST["mail"];
$b=$_POST["pword"];



	

mysqli_query($connection, "INSERT INTO `login` 
(`eid`, `password`) 
VALUES ('$a', '$b')") 
or die(mysqli_error($connection));
header('Location: pro.php');





?>
</body>
</html>


