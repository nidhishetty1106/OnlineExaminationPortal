<html>
<head>
<title>
</title>
</head>
<body>
<?php
session_start();
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



$_SESSION["board"]=$a=$_POST["board"];
$_SESSION["state"]=$b=$_POST["state"];
$_SESSION["mode"]=$c=$_POST["mode"];
$_SESSION["center"]=$d=$_POST["center"];
$_SESSION["medium"]=$e=$_POST["medium"];
$f=$_POST["passx"];
$g=$_POST["passxii"];
$h=$_POST["mail"];



	

mysqli_query($connection, "INSERT INTO `edet` 
(`eid`,`board`, `state`, `mode`, `center`,`medium`,`passx`,`passxii`) 
VALUES ('$h','$a', '$b', '$c','$d','$e','$f','$g')") 
or die(mysqli_error($connection));
header('Location: docreq.php');






?>
</body>
</html>


