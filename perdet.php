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



$_SESSION["name"]=$a=$_POST["name"];
$_SESSION["dob"]=$b=$_POST["dob"];
$_SESSION["gender"]=$c=$_POST["gender"];
$d=$_POST["fname"];
$e=$_POST["mname"];
$_SESSION["pno"]=$f=$_POST["pno"];
$_SESSION["mail"]=$g=$_POST["mail"];
$h=$_POST["pword"];
$i=$_POST["ano"];
$_SESSION["add"]=$j=$_POST["add"];


	

mysqli_query($connection, "INSERT INTO `pdet` 
(`Name`, `DOB`, `Gender`, `Fname`,`Mname`,`pno`,`eid`,`password`,`ano`,`addr`) 
VALUES ('$a', '$b', '$c','$d','$e','$f','$g','$h','$i','$j')") 
or die(mysqli_error($connection));
header('Location: exam.php');





?>
</body>
</html>


