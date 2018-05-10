<!DOCTYPE HTML>
<html>
<head>
<title>Personal Details</title>
<style type="text/css">
.one
{
color:black;
font-size:25px;}
label
{
font-size:15px;
color:black;
}
.right
{
float:right;
}
.left
{
float:left;
}
.button {
    background-color:DarkCyan;
    color: white;
    padding: 15px 32px;
    text-align: center;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
}
input[type=text] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 3px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color:white;

}
input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 3px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color:white;

}

input[type=number] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color:white;
}
input[type=email] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color:white;
}
textarea {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color:white;
}
input[type=date] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color:white;
}
body
{
	background-image:url("http://www.inversk.co.ke/wp-content/uploads/2016/02/exam-preparation.jpg");
	background-size: contain;
    background-repeat: bottomrepeat;
}	
</style>
<script type="text/javascript">
function numvalidate()
{
var test=document.getElementById("pno").value;
var res=test.search(/^[0-9]{10}$/); 
if(res==-1)
alert("Phone number not valid");

}
function mailvalidate()
{
var test=document.getElementById("mail").value;
var res=test.search(/\w@[a-z]{5}.com/); 
if(res==-1)
alert("Please enter a valid Email ID");

}
function aadhvalidate()
{
var test=document.getElementById("ano").value;
var res=test.search(/^[0-9]{12}$/); 
if(res==-1)
alert("Please enter 12 digit aadhar number");

}
function namevalidate()
{
var test=document.getElementById("name").value;
var res=test.search(/^[A-Za-z]*$/); 
if(res==-1)
alert("Please enter a valid name");

}
function fnamevalidate()
{
var test=document.getElementById("fname").value;
var res=test.search(/^[A-Za-z]*$/); 
if(res==-1)
alert("Please enter a valid name");

}
function mnamevalidate()
{
var test=document.getElementById("mname").value;
var res=test.search(/^[A-Za-z]*$/); 
if(res==-1)
alert("Please enter a valid name");

}

</script>


</head>
<body>
<img class="right" src="http://cdn1.askiitians.com/Images/20141014-111017435-484-JEE-Main-2014-Result.gif" height="130" width="170"/>
<img class="left" src="http://cdn1.askiitians.com/Images/20141014-111017435-484-JEE-Main-2014-Result.gif" height="130" width="170"/>
<h1 style="text-align:center;color:white;font-size=50px;font-family:Verdana;"><pre>JEE MAINS APPLICATION FORM
2017</pre></h1>
<h2 style="text-align:center;color:#009999;font-size=35px">                  CENTRAL BOARD OF SECONDARY EDUCATION</h2>
<form action="perdet.php" name="form"  method="POST" style="background:linear-gradient( #C2FF7A,#99FFCC);">
<fieldset>
<legend><p class="one"> PERSONAL DETAILS </p></legend>
<br/>
<label>FULL NAME:<br/><input type="text" name="name" id="name" size="30" onchange="namevalidate();" required /></label>
<br/>
<label><pre/> DOB: <br/><input type="date" value="dob" name="dob" id="dob" min="1995-12-31" max="2002-12-31" required /><br/>
<label>GENDER:<br/><pre>     <input type="radio" name="gender" id="gender" value="male"/>MALE</pre><br/><pre>     <input type="radio" name="gender" id="gender" value="female" required />FEMALE</label><pre>
<br/>
<label>FATHER'S NAME:<br/><input type="text" name="fname" id="fname" onchange="fnamevalidate();" required /></label>
<br/>
<label>MOTHER'S NAME:<br/><input type="text" name="mname" id="mname" onchange="mnamevalidate();" required /></label>
<br/>
<label>CONTACT NUMBER:<br/><input type="text" name="pno" maxlength="10" id="pno" onchange="numvalidate();" required /></label>
<br/>
<label>EMAIL ID:<br/><input type="email" name="mail" id="mail" onchange="mailvalidate();"  required /></label>
<br/>
<label>Password:<br/><input type="password" name="pword" id="pword" required /></label>
<br/>
<label>AADHAR NUMBER :<br/> <input type="number" name="ano" id="ano" maxlength="12" onchange="aadhvalidate();"  size="20"/><br/>
<p>ADDRESS:</p><br/><textarea name="add" id="add" rows="3" cols="40" required /></textarea>
</fieldset>
<pre>                                                                       <button class="button" >SUBMIT </button>  </pre>
 


</body>
</html>
