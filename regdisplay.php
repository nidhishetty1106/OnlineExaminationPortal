<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body
{
	background-image:url("http://newallpaper.com/wp-content/uploads/2014/01/Dark-Blue-Damask-Wallpaper-Surface-620x387.jpg");
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
p,h1,h2
{
	text-align:center;
}
</style>

<title>display</title>
</head>
<body>
<img class="right" src="http://cdn1.askiitians.com/Images/20141014-111017435-484-JEE-Main-2014-Result.gif" height="130" width="160"/>
<img class="left" src="http://cdn1.askiitians.com/Images/20141014-111017435-484-JEE-Main-2014-Result.gif" height="130" width="160"/>

<h1 style="text-align:center;color:white;font-size=50px;font-family:Verdana;">JEE MAINS APPLICATION FORM
2017</h1>
<h2 style="text-align:centre;color:white;font-size=35px">                       CENTRAL BOARD OF SECONDARY EDUCATION</h2>
</body>
 <?php
 session_start();
 echo "<h1 style='color:Red;'> Registration successful!<br/></h1>";
 
 echo "<h2 style='color:white;'>  <u>                       DETAILS </u><br/></h2>";
 
 echo " <p style='color:white;font-size:22px;'> NAME : " .$_SESSION["name"]."<br/></p>"; 
 echo " <p style='color:white;font-size:22px;'> DATE OF BIRTH : " .$_SESSION["dob"]."<br/></p>"; 
 echo " <p style='color:white;font-size:22px;'> GENDER : " .$_SESSION["gender"]."<br/></p>"; 
 echo " <p style='color:white;font-size:22px;'> PHONE NUMBER : " .$_SESSION["pno"]."<br/></p>"; 
 echo " <p style='color:white;font-size:22px;'> EMAIL ID : " .$_SESSION["mail"]."<br/></p>"; 
 echo " <p style='color:white;font-size:22px;'> ADDRESS : " .$_SESSION["add"]."<br/></p>"; 
 echo " <p style='color:white;font-size:22px;'> BOARD : " .$_SESSION["board"]."<br/></p>"; 
 echo " <p style='color:white;font-size:22px;'> STATE : " .$_SESSION["state"]."<br/></p>"; 
 echo " <p style='color:white;font-size:22px;'> MODE OF EXAMINATION: " .$_SESSION["mode"]."<br/></p>"; 
 echo " <p style='color:white;font-size:22px;'> CENTER : " .$_SESSION["center"]."<br/></p>"; 
 echo " <p style='color:white;font-size:22px;'> MEDIUM: " .$_SESSION["medium"]."<br/></p>"; 
 echo " <p style='color:white;font-size:22px;'> PAYMENT STATUS : Paid"."<br/></p><br/>";
 
  echo "<h2 style='color:red;text-align:left;'>NOTE:We will get back to you on your email and the hall tickets will be issued shortly.</h2>";
  echo "<h1 style='color:white;text-align:center;'>                               ******ALL THE BEST******</h1>"; 
 ?>

</html>
