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
.style1 {font-size: larger}
.style3 {
	color:#020202;
	padding:10px 0px 10px 0px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-style: italic;
}
.style4 {
	color: #020202;
	padding: 10px 0px 10px 0px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-style: italic;
	font-weight: bold;
}
.style5 {
	font-size: 24px;
	font-weight: bold;
	font-style: italic;
	color: #000099;
}
-->
</style>
</head>
<body>

<div id="container">
<div id="header"> <h2 align="right" class="style3" id="logo-text"> &nbsp;&nbsp;&nbsp;&nbsp;  ADMIN </h2>
 
</div>
<div id="nav">
<ul>
  <li></li>
  <li></li>
  <li></li>
  <li></li>   <li></li>   <li></li> 
  
</ul>
</div>
<div id="site-content">
<div id="col-left">
<h1 class="h-text-1">WELCOME...</h1>
<center>
  <img src="images/students.jpeg" width="357" height="213"  />
</center>
<br />
</div>
<div id="col-right">
<div style="padding: 30px 10px 10px;">
<h2 class="style4">Admin...</h2>
<form name="admn" action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
<table width="213" height="119" border="1">
  <tr>
    <td width="74"><p class="style1">Admin</p>
      <p class="style1">name</p></td>
    <td width="110"><input name="txt_admin" type="text" size="20" maxlength="30" /></td>
  </tr>
  <tr>
    <td><span class="style1">Password</span></td>
    <td><input name="txt_pass" type="password" size="20" maxlength="30" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <div align="center">
        <input type="submit" name="submit" value="login" />
	 </div>
	  </td>
  </tr>
  </table>
</form>
<?php
 if(isset($_POST['submit']))
{  
   include("dbconn.php");
   
   $adminname = $_POST['txt_admin'];
   $password = $_POST['txt_pass'];

   $q="select * from admn where Adminname = '$adminname' and Password = '$password';";
   $rs = mysql_query($q);

      $count = mysql_num_rows($rs);

      if($count==0)
      {

         echo("<br>Invalid Username/Password");
	   }

      else
      {
          
		header("Location: registration.php");  
	  }

}

?>



</p>

<br /><br />
<span class="style5"></span></div>
<div style="padding: 5px 10px;">
<h2 class="h-text-2"><br>
      </h2>
</div>

<div
 style="padding: 5px 10px 15px; background: rgb(216, 214, 215) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;">
  <p class="text-2">&nbsp;</p>
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
</ul>
</div>
</div>

</body>
</html>
