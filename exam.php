
<!DOCTYPE HTML>
<html>
<head>
<title>WPProject</title>
<style type="text/css">
.one
{
color:black;
font-size:25px;}

.right
{
float:right;
}
.left
{
float:left;
}
.button {
    background-color: darkcyan;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
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
input[type=email] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 3px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color:white;

}
select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 3px solid #ccc;
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

function centervalidate()
{
var exmcen=document.getElementById("center").value;
var res=exmcen.search(/^[A-Za-z]*$/); 
if(res==-1)
alert("Please enter a valid exam center name");

}
function statevalidate()
{
var test=document.getElementById("state").value;
var res=test.search(/^[A-Za-z]*$/); 
if(res==-1)
alert("Incorrect state name");
}
</script>
</head>
<body>
<img class="right" src="http://cdn1.askiitians.com/Images/20141014-111017435-484-JEE-Main-2014-Result.gif" height="130" width="170"/>
<img class="left" src="http://cdn1.askiitians.com/Images/20141014-111017435-484-JEE-Main-2014-Result.gif" height="130" width="170"/>
<h1 style="text-align:center;color:white;font-size=25px"><pre>JEE MAINS APPLICATION FORM
2017 </pre></h1>
<h2 style="text-align:center;color:#009999;font-size=25px">                  CENTRAL BOARD OF SECONDARY EDUCATION</h2>
<form action="examdet.php" name="form" method="POST" style="background:linear-gradient(#CCCCFF,#99FFCC);">
<fieldset>
<legend><p class="one"> EXAMINATION DETAILS</p></legend>
<br/>
<label>EMAIL ID:<br/><input type="email" name="mail" id="mail"   /></label><br/>
<br/>
<label>CLASS XII BOARD:<br/>
<select name="board" id="board" >
<option value="select">Select one</option>
<option value="cbse" selected>CBSE</option>
<option value="kar">KARNATAKA PU BOARD</OPTION>
<option value="others">OTHERS</option>
</select></label>
<br/>
<label><pre/> STATE:<br/>
 <input type="text" name="state" id="state" onchange="statevalidate();" required /><br/>
<label>MODE OF EXAMINATION:<br/>
<select name="mode" id="mode" >
<option value="select">Select one</option>
<option value="online" selected>ONLINE</option>
<option value="offline">OFFLINE</option>
</select></label><br/>
<label>EXAM CENTER:<br/>
<input type="text" name="center" id="center" onchange="centervalidate();" required /><br/>
</select></label><br/>
<label>MEDIUM OF EXAMINATION:<br/>
<select name="medium" id="medium">
<option value="select">Select one</option>
<option value="English" selected >ENGLISH</option>
<option value="Hindi">HINDI</option>
</select></label><br/>
<label>YEAR OF PASSING 10TH:<br/>
<select name="passx" id="passx">
<option value="select">Select one</option>
<option value="1" selected>2016</option>
<option value="2">2015</option>
<option value="3">2014</option>
</select></label><br/>
<label>YEAR OF PASSING 12TH:<br/>
<select name="passxii" id="passxii" >
<option value="select">Select one</option>
<option value="1" selected>2018</option>
<option value="2">2017</option>
<option value="3">2016</option>
</select></label><br/>

</fieldset>
<pre>                                                                       <button class="button">SUBMIT</button> </pre>
                                         
</body>
</html>
 