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
<div id="header"> <h2 align="right" class="style3" id="logo-text"> &nbsp;&nbsp;<strong>Exam Time Table </strong></h2>
 
.</div>
<div id="nav">
<ul>


<?php include("admin11.php"); ?>
  
</ul>
</div>
<div id="site-content">
<div id="col-left">
<h1 class="style6">Exam time table... </h1>
<center>
  <img src="images/ass.gif" />  <br />
  <br />
  <br />
  <form name="table" action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
    <table width="200" border="1">
    <tr>
    <td height="35"><strong>Class</strong></td>
    <td>      <select name="class">
            <option value="6th">6th</option>
	  <option value="7th">7th</option>
           <option value="8th">8th</option>
            <option value="9th">9th</option>
             <option value="10th">10th</option>
              <option value="11th">11th</option>
               <option value="12th">12th</option>
	  </select></td>
	  </tr>

 
    </table>
    <table width="200" border="1">
      <tr>
        <td>Id</td>
        <td>Subject</td>
        <td>Date</td>
        <td>Time</td>
      </tr>
      <tr>
        <td><input name="id1" type="text" size="20" maxlength="30" /></td>
        <td><input name="subject1" type="text" size="20" maxlength="30" /></td>
        <td><input name="date1" type="date" size="20" maxlength="30" /></td>
        <td><input name="time1" type="time" size="20" maxlength="30" /></td>
      </tr>
      <tr>
        <td><input name="id2" type="text" size="20" maxlength="30" /></td>
        <td><input name="subject2" type="text" size="20" maxlength="30" /></td>
        <td><input name="date2" type="date" size="20" maxlength="30" /></td>
        <td><input name="time2" type="time" size="20" maxlength="30" /></td>
      </tr>
      <tr>
       <td><input name="id3" type="text" size="20" maxlength="30" /></td>
         <td><input name="subject3" type="text" size="20" maxlength="30" /></td>
        <td><input name="date3" type="date" size="20" maxlength="30" /></td>
        <td><input name="time3" type="time" size="20" maxlength="30" /></td>
      </tr>
      <tr>
        <td><input name="id4" type="text" size="20" maxlength="30" /></td>
        <td><input name="subject4" type="text" size="20" maxlength="30" /></td>
        <td><input name="date4" type="date" size="20" maxlength="30" /></td>
        <td><input name="time4" type="time" size="20" maxlength="30" /></td>
      </tr>
      <tr>
        <td><input name="id5" type="text" size="20" maxlength="30" /></td>
        <td><input name="subject5" type="text" size="20" maxlength="30" /></td>
        <td><input name="date5" type="date" size="20" maxlength="30" /></td>
        <td><input name="time5" type="time" size="20" maxlength="30" /></td>
      </tr>
      <tr>
        <td><input name="id6" type="text" size="20" maxlength="30" /></td>
        <td><input name="subject6" type="text" size="20" maxlength="30" /></td>
        <td><input name="date6" type="date" size="20" maxlength="30" /></td>
        <td><input name="time6" type="time" size="20" maxlength="30" /></td>
      </tr>
    </table>
	
    <table width="59" border="1">
	 <tr>
        <td width="30"><input type="submit" name="submit" value="Insert" /></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </form>   
 <?php
if(isset($_POST['submit']))
{
	
$class = $_POST['class'];

$id1=$_POST['id1'];
$subject1 = $_POST['subject1'];
$date1 = $_POST['date1'];
$time1 = $_POST['time1'];
//echo $subject1."=>".$date1."=>".$time1;

$id2=$_POST['id2'];
$subject2 = $_POST['subject2'];
$date2 = $_POST['date2'];
$time2 = $_POST['time2'];

$id3=$_POST['id3'];
$subject3 = $_POST['subject3'];
$date3 = $_POST['date3'];
$time3 = $_POST['time3'];

$id4=$_POST['id4'];
$subject4 = $_POST['subject4'];
$date4 = $_POST['date4'];
$time4 = $_POST['time4'];

$id5=$_POST['id5'];
$subject5 = $_POST['subject5'];
$date5 = $_POST['date5'];
$time5 = $_POST['time5'];

$id6=$_POST['id6'];
$subject6 = $_POST['subject6'];
$date6 = $_POST['date6'];
$time6 = $_POST['time6'];

include("dbconn.php");


$q="insert into timetable values('$id1','$class','$subject1','$date1','$time1');";
$rs=mysql_query($q) or die("Failed to execute the query");

$q="insert into timetable values('$id2','$class','$subject2','$date2','$time2');";
$rs=mysql_query($q) or die("Failed to execute the query");


$q="insert into  timetable values('$id3','$class','$subject3','$date3','$time3');";
$rs=mysql_query($q) or die("Failed to execute the query");


$q="insert into timetable values('$id4','$class','$subject4','$date4','$time4');";
$rs=mysql_query($q) or die("Failed to execute the query");


$q="insert into timetable values('$id5','$class','$subject5','$date5','$time5');";
$rs=mysql_query($q) or die("Failed to execute the query");


$q="insert into  timetable values('$id6','$class','$subject6','$date6','$time6');";
$rs=mysql_query($q) or die("Failed to execute the query");

echo("Record Added!!!");
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
