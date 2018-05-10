<html>
<head>
<style type="text/css">
body
{
	background-color:#B8FFCC;
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



<h1 style="text-align:center;color:black;font-size=35px"><u>ADMIN PAGE</u></h1>
<h1 style="text-align:center;color:red;font-size=20px"><u>Registered Student Details</u></h1>

</body>
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
$query="SELECT * FROM `pdet`";


$res = mysqli_query($connection,$query);
echo "<br/><h2 style='text-align:center;'><u>Personal details</u></h2>";

echo "<table border='1'  cellspacing='3' cellpadding='5' align='center' style='background-color:white;' ><tr><th>Email</th><th>Name</th><th>DOB</th><th>Mobile Number</th><th>Address</th></tr></p>";
while($row=mysqli_fetch_array($res)) {
	
	echo "<tr><td>$row[6]</td><td>$row[0]</td><td>$row[1]</td><td>$row[5]</td><td>$row[9]</td></tr>";
  
}
echo"</table>";
echo"<br/><br/><br/>";

$query="SELECT * FROM `edet`";
echo "<h2 style='text-align:center;'><u>Examination details</u></h2>";

$res = mysqli_query($connection,$query);

echo "<table border='1' cellspacing='3' cellpadding='5'  align='center' style='background-color:white;'><tr><th>Email</th><th>Board</th><th>State</th><th>Mode</th><th>Center</th><th>Medium</th></tr>";
while($row=mysqli_fetch_array($res)) {
	
	echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
  
}
echo"</table>";
echo"<br/><br/>";
$query="SELECT * FROM `paydet`";
echo "<h2 style='text-align:center;'><u>Payment details</u></h2>";

$res = mysqli_query($connection,$query);

echo "<table border='1' cellspacing='3' cellpadding='5'  align='center' style='background-color:white;'><tr><th>Name</th><th>Challan Number</th></tr>";
while($row=mysqli_fetch_array($res)) {
	
	echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
  
}
echo"</table>";
echo" <a href='jeemains1.php'><h2 style='text-align:center;color:black;'><u>HOME</u></h2></a>";
?>
</body>
</html>

