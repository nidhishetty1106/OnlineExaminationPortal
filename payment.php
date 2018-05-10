
<!DOCTYPE HTML>
<html>
<head><title>PAYMENT DETAILS</TITLE>
<style type="text/css">
.right
{
float:right;
}
.left
{
float:left;
}
.button {
    background-color:darkcyan;
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
label
{
font-size:20px;
color:black;
}
.one
{
color:black;
font-size:25px;}
body
{
	background-image:url("http://www.inversk.co.ke/wp-content/uploads/2016/02/exam-preparation.jpg");
	background-size: cover;
    background-repeat: bottomrepeat;
}	
</style>
<script type="text/javascript">
function namevalidate()
{
var test=document.getElementById("name").value;
var res=test.search(/^[A-Za-z]*$/); 
if(res==-1)
alert("Please enter a valid name");

}
function challanvalidate()
{
var test=document.getElementById("challan").value;
var res=test.search(/[0-9]/); // ^ means beginning and $ means end
if(res==-1)
alert("Challan number not valid");

}
</script>

</head>
<body>
<img class="right" src="http://cdn1.askiitians.com/Images/20141014-111017435-484-JEE-Main-2014-Result.gif" height="130" width="170"/>
<img class="left" src="http://cdn1.askiitians.com/Images/20141014-111017435-484-JEE-Main-2014-Result.gif" height="130" width="170"/>
<h1 style="text-align:center;color:white;font-size=25px"><pre>JEE MAIN APPLICATION FORM
2017</pre></b></h1>
<h2 style="text-align:center;color:#009999;font-size=25px">                 CENTRAL BOARD OF SECONDARY EDUCATION</h2>
<form action="pay.php" method="POST" style="background:linear-gradient( #99FF99,#99CCFF)">
<fieldset>
<legend><p class="one">PAYMENT DETAILS</p></legend><br/><br/>
<label>Enter your name:<br/><input type="text" name="name" onchange="namevalidate();" id="name" required /></label><br/>
<label>Enter the challan number:<br/><input type="text" name="challan" onchange="challanvalidate();" required id="challan"/>
<pre> <button class="button">SUBMIT</button>    </pre>
</fieldset>
</FORM>
</body>
</html>