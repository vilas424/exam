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
-->
</style>
</head>
<body>

<div id="container">
<div id="header"> <h2 align="right" class="style3" id="logo-text"> &nbsp;&nbsp;&nbsp;<strong>Model Question Papers. </strong></h2>
 
</div>
<div id="nav">
<ul>

<?php include("faculty_menus.php"); ?>  
  
</ul>
</div>
<div id="site-content">
<h1 class="h-text-1">WELCOME...</h1><br />
<center>

<form name="add_qp" method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">

<img src="images/students.jpeg" /><br /><br />
  <br /><table width="423" height="133" border="1">
    
      <tr>
    <td height="35"><strong>Class</strong></td>
    <td>      <select name="class">
             <?php
            session_start();
            include("dbconn.php");
            $a=$_SESSION['uid'];
            $q="select class from faculty where facultyname='$a';";
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
<?php
      include("dbconn.php");
            $a=$_SESSION['uid'];
            $q="select subject from faculty where facultyname='$a';";
            $r=mysql_query($q);
            while($row=mysql_fetch_array($r))
                {
                echo '<option>'.$row['subject'].'</option>';
            }
            ?>

    </select></td>
  </tr>
    <tr>
      <td height="28">Add</td>
      <td> <input type="file" name="qp_file"/>
      </td>
    </tr>
    <tr>
      <td height="31">&nbsp;</td>
      <td><input type="submit" name="submit" value="submit" />
      </td>
    </tr>
  </table>


</form>

<?php


if(isset($_POST['submit']))
{

   
   
$class = $_POST['class'];
$subject = $_POST['select'];
$qp_file = $_FILES['qp_file']['tmp_name'];
$qp_path = "qp/".$class.$subject.".pdf";



include("dbconn.php");

move_uploaded_file($qp_file,$qp_path);

$q = "insert into qpapers values(NULL,'$class','$subject','$qp_path');";
$rs = mysql_query($q) or die("Failed to execute the query");
echo("files uploaded");

}

?>


</center>








<div id="col-left">
  <center>
</center>
<br />
</div>
<div id="col-right">
<div style="padding: 30px 10px 10px;">
<h2 class="style3">&nbsp;</h2>
</div>


<div style="padding: 5px 10px;">
<h2 class="h-text-2"><br/>
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
</ul>
</div>


</body>
</html>
