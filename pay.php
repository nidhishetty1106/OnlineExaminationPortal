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



$a=$_POST["name"];
$b=$_POST["challan"];





	

mysqli_query($connection, "INSERT INTO `paydet` 
(`name`,`challan`) 
VALUES ('$a','$b')") 
or die(mysqli_error($connection));
header('Location: regdisplay.php');






?>
</body>
</html>


