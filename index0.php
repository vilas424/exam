<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type"
 content="text/html; charset=iso-8859-1" />
<title >CHANDARGI SPORTS SCHOOL</title>
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
.style1 {color: #000000}
.style2 {color: #0000FF}
.style4 {
	font-size: 24px;
	font-style: italic;
}

-->
</style>
</head>
<body>

<div id="container">
    <div id="header"> <h1 id="logo-text"><img src="images/image1.jpeg" width="113" height="132"  /><strong> &nbsp;&nbsp;CHANDARGI SPORTS SCHOOL</strong></h1>
 
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
<h1 align="left" class="h-text-1 style2"><MARQUEE>WELCOME TO THE WEBSITE...</MARQUEE></h1>
<center>
  <img src="images/add.jpg" width="564" height="335" />
</center>
<br />
</div>
<div id="col-right">
<div style="padding: 30px 10px 10px;">
<h2 class="h-text-2">LOGIN...</h2>
<form name="admin" action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
<table width="213" height="119" border="1">
  <tr>
    <td width="74"><span class="style1">User Name</span></td>
    <td width="110"><input name="txt_user_name" type="text" id="name" size="20" maxlength="30" /></td>
  </tr>
  <tr>
    <td><span class="style1">Password</span></td>
    <td><input name="txt_password" type="password" size="20" maxlength="30" /></td>
    

  </tr>
  <tr>
    <td><span class="style1">User</span></td>
    <td>      
        <select name="usertype">
		<option>STUDENT</option>
	<option>FACULTY</option>
        <option>ADMIN</option>
	
        </select>
      </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <div align="center">
        <input type="submit" name="submit" value="login"/>
      </div>
    </td>
  </tr>
</table>
</from>
<?php
session_start();
 if(isset($_POST['submit']))
{  
   include("dbconn.php");
  $user_name = $_POST['txt_user_name'];
   $password = $_POST['txt_password'];
   $usetype = $_POST['usertype'];
   
   $q="select * from reg where name = '$user_name' and password = '$password' and usertype='$usetype';";
   $rs = mysql_query($q);

      $count = mysql_num_rows($rs);

      if($count==0)
      {

         echo("<br>Invalid Username/Password");
	   }

      else
	  {
	  if($usetype=='STUDENT')
      {
              $_SESSION['uids']=$_POST['txt_user_name'];
              //echo $_SESSION['uid'];

		header("Location: student.php");  
	  }
	  else 
	  if($usetype=='FACULTY')
      {
              $_SESSION['uid']=$_POST['txt_user_name'];
              //echo $_SESSION['uid'];
		header("Location: faculty_home.php");
	  }
	  else
	  if($usetype=='ADMIN')
      {
          $_SESSION['uida']=$_POST['txt_user_name'];
              //echo $_SESSION['uid'];
		header("Location: admin_home.php");
	  }
	  
    }
}

?>

<p class="h-text-2">&nbsp;</p>
<p align="center" class="h-text-2 style4"><a href="admin.php">Admin</a></p>
</div>
<div style="padding: 5px 10px;">
  <h2 class="h-text-2">Contact Info</h2>
</div>
<div
 style="padding: 5px 10px 15px; background: rgb(216, 214, 215) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;">

                                              <p align="left">COMPOSITE SPORTS RESIDENTIAL SCHOOL AND PU COLLEGE </p>
                                              <p align="left">CHANDARGI-591114</p>
                                              <p align="left">Tq: ramdurg, Dist Belgaum (karnataka)</p>
                                              <p align="left">ph: office: (08335)237342,237345,237340,</p>
                                              <p align="left">res: (08335)237344 mob:9449285188</p>
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
</ul>
</div>
</div>

</body>
</html>
