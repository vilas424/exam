<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1" />
<title>CHANDARGI SPORTS SCHOOL</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<style type="text/css">
<!--
.style3 {
	color:#020202;
	padding:10px 0px 10px 0px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-style: italic;
}
.style4 {font-size: 18px}
.style5 {
	font-size: 16px;
	font-weight: bold;
	font-style: italic;
}
.style6 {font-size: 16}
.style7 {font-size: 16; font-weight: bold; font-style: italic; }
-->
</style>
</head>
<body>

<div id="container">
<div id="header"> <h2 align="right" class="style3" id="logo-text"> &nbsp;&nbsp;&nbsp;&nbsp;<strong>Admin Home Page. </strong></h2>

</div>
<div id="nav">
  <ul>


<?php include("admin11.php"); ?>


</ul>
</div>
<div id="site-content">
<div id="col-left">
<h1 class="h-text-1"></h1>

<div id="site-content">
<div id="col-left">
<h1 align="left" class="h-text-1"><em>WELCOME TO ADMIN INFO...</em></h1>
<center>
  <br />
  <img src="images/teac.jpg" width="70%" height="70%" style="margin-left: 10px"></img>
</center>
</div>



</div>
</div>
<!--<p class="style6"><strong> &nbsp;</strong></p>
<p align="left" class="style7">&nbsp;</p>

<p align="left" class="style5">&nbsp;</p>
<p align="left" class="style5">&nbsp;</p>
<p align="left" class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">&nbsp;</p>
<p class="style5">
      -->
      <!--<img src="images/students.jpeg" width="357" height="213"  />--!>
</center>
<br />
</div>
<div id="col-right">
<div style="padding: 30px 10px 10px;">
<h2 class="style3">&nbsp;</h2>
<?php
if(isset($_POST['submit']))
{
$Userid=$_POST['txt_userid'];
$Name=$_POST['txt_name'];
$Mobile=$_POST['txt_molile'];
$Email=$_POST['txt_email'];
$Password=$_POST['txt_pass'];
$usertype=$_POST['txt_usertype'];

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "admin";
mysql_connect($host,$dbuser,$dbpass) or die("Cannot Connect to Database Server");
mysql_select_db($db) or die("database does not exist");
$q="insert into reg values('','$Name','$Mobile','$Email','$Password','$usertype');";
$rs=mysql_query($q) or die("Failed to execute the query");
echo("Record Added!!!");
}
?>
<p class="style3">&nbsp;</p>
</div>


<div style="padding: 5px 10px;">
<h2 class="h-text-2"><br>
      </h2>
</div>
<div
 style="padding: 5px 10px 15px; background: rgb(216, 214, 215) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;">
  <p class="text-2">&nbsp;</p>
</div>
</div>
</div>
</div>


<div id="footer">
    <p>@ Copyright &copy; 2013. Designed by<strong> <br> </br>BHARGAVI &amp; PRADEEP &amp; SONIA &amp; SURABHI </strong></p>
<ul class="footer-nav">
  <!--<li><a href="#">Home</a></li>
  <li><a href="#">About us</a></li>
  <li><a href="#">Recent articles</a></li>
  <li><a href="#">Email</a></li>
  <li><a href="#">Resources</a></li>
  <li><a href="#">Links</a></li>-->

</p>
</div>
</div>

</body>
</html>
