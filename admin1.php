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
$a=$_POST["mail"];
$b=$_POST["pword"];
$query = "SELECT * FROM `admin`
WHERE eid='$a' AND password='$b'";
$result=mysqli_query($connection,$query);
if(!$result )
{
die('Could not retrieve data: '
.mysqli_error($connection));
}
 
$count= mysqli_num_rows($result);
if($count==1)
{   
$_SESSION["eid"]=$_POST["mail"];
header("location:admin.php");
}
else { 
   
   ?>
   <script>alert('Your Login Name or Password is invalid');
   window.location.href ="adminlogin.php";
   </script>
   <?php
   }
?>