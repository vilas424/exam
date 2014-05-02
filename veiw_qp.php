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
.style6 {color: #020202; padding: 10px 0px 10px 0px; font-family: Arial, Helvetica, sans-serif; font-size: 36px; font-style: italic; }
-->
</style>
</head>
<body>

<div id="container">
<div id="header"> <h2 align="right" class="style3" id="logo-text"> &nbsp;&nbsp;<strong>CHANDARGI SPORTS SCHOOL </strong></h2>
 
.</div>
<div id="nav">
<ul>
  
<?php include("student_menus.php"); ?>  
  
</ul>
</div>
<div id="site-content">
<div id="col-left">
<h1 class="style6">View Model Question Paper... </h1>
<center>
  <img src="images/ass.gif" />  <br />
  <br />
  <br />
  <form name="table" action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
    <table width="200" border="1">
       <tr>
    <td height="35"><strong>Class</strong></td>
    <td>      <select name="class">
             <?php
            session_start();
            include("dbconn.php");
            $a=$_SESSION['uids'];
            $q="select class from student where stname='$a';";
            $r=mysql_query($q);
            while($row=mysql_fetch_array($r))
                {
                echo '<option>'.$row['class'].'</option>';
            }
            ?>
	  </select></td>
	  </tr>
        <tr>
    <td height="27"><strong>Subject Name</strong></td>
    <td>      <select name="select">

      <option value="English">ENGLISH</option>
      <option value="Kannada">Kannada</option>
      <option value="Hindi">INDI</option>
      <option value="Physics">PHYSICS</option>
      <option value="Chemistry">CHEMISTRY</option>
      <option value="Biology">BIOLOGY</option>
      <option value="Maths">MATHS</option>
      <option value="Cs">COMPUTER SCIENCE</option>
      <option value="Stats">STATS</option>
      <option value="Sst">SOCIAL SCIENCE</option>
      <option value="Science">SCIENCE</option>


    </select></td>
  </tr>
   
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Search" /></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </form>   
  
  
<!--<table width="200" border="1">
  <tr>
    <td>Subject</td>
    <td>Date</td>
    <td>Time</td>
  </tr>
  -->

  
 <?php

if(isset($_POST['submit']))
{

$class = $_POST['class'];
$subject = $_POST['select'];

include("dbconn.php");

$q = "select * from qpapers where class = '$class' and subject = '$subject';";
$rs = mysql_query($q) or die("Failed to execute the query");

?>
<table width="514" border="1">
  <tr>
    <td width="142">Paper id</td>
    <td width="119">Class</td>
    <td width="119">Subject</td>
    <td width="91">Download</td>
  </tr>

<?php

while($out = mysql_fetch_array($rs))
{
?>
	<tr>
    <td><?php echo($out[0]); ?></td>
    <td><?php echo($out[1]); ?></td>
    <td><?php echo($out[2]); ?></td>
    <td><a href="<?php echo($out[3]); ?>">Download</a></td>
  </tr>
<?php
}
?>
</table>
<?php
}
?>

</center>
<br />
</div>
<div id="col-left">
<div style="padding: 30px 10px 10px;">
<br />
<br />

<h2 class="style3">&nbsp;</h2>
<p class="style3">&nbsp;</p>
</div>


<div style="padding: 5px 10px;">
<h2 class="h-text-2">
      </h2>
</div>
</div>
</div>
</div>


<div id="footer">    <p>@ Copyright &copy; 2013. Designed by<strong> <br> </br>BHARGAVI &amp; PRADEEP &amp; SONIA &amp; SURABHI </strong></p>
  <ul class="footer-nav">
  <!--<li><a href="#">Home</a></li>
  <li><a href="#">About us</a></li>
  <li><a href="#">Recent articles</a></li>
  <li><a href="#">Email</a></li>
  <li><a href="#">Resources</a></li>
  <li><a href="#">Links</a></li>-->
</ul>
</div>

</body>
</html>
