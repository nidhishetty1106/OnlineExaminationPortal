<html>
<head>
<title>
</title>
<style type="text/css">
body
{
	background-image:url("https://hdwallsource.com/img/2016/2/books-wallpaper-49796-51475-hd-wallpapers.jpg");
	background-size: cover;
    background-repeat: bottomrepeat;
}	
.right
{
float:right;
}
.left
{
float:left;
}
h3{
	text-align:left;
}
</style>
</head>
<body>


<img class="right" src="http://cdn1.askiitians.com/Images/20141014-111017435-484-JEE-Main-2014-Result.gif" height="130" width="160"/>
<img class="left" src="http://cdn1.askiitians.com/Images/20141014-111017435-484-JEE-Main-2014-Result.gif" height="130" width="160"/>

<h1 style="text-align:center;color:white;font-size=50px;font-family:Verdana;">JEE MAINS APPLICATION FORM
2017</h1>
<h2 style="text-align:center;color:white;font-size=35px">                  CENTRAL BOARD OF SECONDARY EDUCATION</h2>
</body>
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

$a=$_SESSION["eid"];
$query="SELECT * FROM pdet WHERE eid like '$a'";


$res = mysqli_query($connection,$query);

echo "<h2 style='color:white;text-align:left;'>  <u>  <br/><br/>                     DETAILS </u><br/></h2>";

while($row=mysqli_fetch_assoc($res)) {
	
  echo "<h3 style=' position=absolute;top=1000;left:450px; font-family:sans-serif;color:white;'><br/> NAME: <b>".$row['Name']."<br/></b></h3>";
  echo "<h3 style=' position=absolute;left:450px; font-family:sans-serif;color:white;'>  DATE OF BIRTH:  <b>".$row["DOB"]."<br/></b></h3>";
  echo "<h3 style='position=absolute;left:450px; font-family:sans-serif;color:white;'>   MOBILE NUMBER: <b>".$row["pno"]."<br/></b></u></h3>";
  echo "<h3 style=' position=absolute;left:450px; font-family:sans-serif;color:white;'>  EMAIL:<b>".$row["eid"]."<br/></b></h3>";
  echo "<h3 style=' position=absolute;sleft:450px; font-family:sans-serif;color:white;'> ADDRESS:<b>".$row["addr"]."<br/></b></h3>";
  
}
$querry="SELECT * FROM edet WHERE eid like '$a'";


$ress = mysqli_query($connection,$querry);


while($row=mysqli_fetch_assoc($ress)) {
	
  echo "<h3 style=' position=absolute;top=1000;left:450px; font-family:sans-serif;color:white;'>EXAMINATION BOARD: <b>".$row['board']."<br/></b></h3>";
  echo "<h3 style=' position=absolute;left:450px; font-family:sans-serif;color:white;'>STATE:  <b>".$row["state"]."<br/></b></h3>";
  echo "<h3 style='position=absolute;left:450px; font-family:sans-serif;color:white;'>MODE OF EXAMINATION: <b>".$row["mode"]."<br/></b></u></h3>";
  echo "<h3 style=' position=absolute;left:450px; font-family:sans-serif;color:white;'>CENTER OF EXAMINATION:<b>".$row["center"]."<br/></b></h3>";
  
  
}


?>

</html>


