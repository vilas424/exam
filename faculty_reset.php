<?php
//session_start();

?>
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
<div id="header"> <h2 align="right" class="style3" id="logo-text"> &nbsp;&nbsp;&nbsp;&nbsp;<strong>Faculties Home Page. </strong></h2>

</div>
<div id="nav">
  <ul>


<?php include("faculty_menus.php"); ?>


</ul>
</div>
<div id="site-content">
<div id="col-left">
<h1 class="h-text-1"></h1>

<div id="site-content">
<div id="col-left">
<h1 align="left" class="h-text-1"><em>WELCOME TO FACULTY INFO...</em></h1>
<center>
  <br />
 <form id="reset_passForm" name="reset_passForm" method="post" action="<?php ?>">
       <table width="300" border="0" align="center" cellpadding="2" cellspacing="0" class="qqq">
        <tr>
      <th>Enter Current Password<font color="#FF0000">*</font></th>
      <td><input name="currpass" type="password" id="currpass" placeholder="current password"/></td>
    </tr>
    <tr>
      <th>New Password<font color="#FF0000">*</font></th>
      <td><input type="password" id="pwd" name="pwd" placeholder="new password"/></td>
    </tr>
    <tr>
      <th>Re-enter New Password<font color="#FF0000">*</font></th>
      <td><input name="cpassword" type="password" id="cpassword" placeholder="confirm password"/></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Update"/></td>
    </tr>
  </table>
</form>
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
/*if(isset($_POST['submit']))
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
}*/
?>
      <?php
session_start();
$a=$_SESSION['uid'];
$errflag=false;
if(isset($_POST['submit']))
{

	$currpass =$_POST['currpass'];
	$pass1= $_POST['pwd'];
        $cpass=$_POST['cpassword'];

        if($pass1==''||$cpass==''||$currpass=='')//||$currpass=='')
        {
            echo "<script>
            alert('Please Fill all the details!!!');";
            //window.location.href='reset_stud_pass.php'
            echo "</script> ";
            $errflag = true;

        }

            include 'dbconn.php';
            $sql="select * from reg where name='$a' and password='".($currpass)."'";
            $result=mysql_query($sql);
            $row=mysql_num_rows($result);

            echo "<script>kkkkkkkkkkkkkk+$row</script>";
            if($row!=1)
            {
                echo "<script>
                alert('Invalid Current password');";
               // window.location.href='reset_stud_pass.php'
               echo "</script> ";
                $errflag = true;
            }


        if(strcmp($pass1, $cpass) != 0 )
            {
		echo "<script>
                alert('password Does't match!!!');";
                //window.location.href='stud_pass_reset.php'
                echo "</script>";
                $errflag = true;
	    }


        if($errflag==false)
            {
                include 'dbconn.php';
            //    $query="update users SET PASSWORD='$pass1' where USERNAME='$name'";
                $query="update reg SET password='".($pass1)."' WHERE name='$a'";
                trim($query);
                $query=stripcslashes($query);
                $query_html=htmlspecialchars($query);
                $result=mysql_query($query);
                $row=mysql_affected_rows();
                if(!$row)
                {
                    echo "<script>
                    alert('Update failed try Again!!!');
                    //window.location.href='student_change_pass.php'
                    </script> ";
                }
                else
                {
                    echo "<script>";
                    echo "alert('Password is successfully updated');
                   // window.location.href='add_company.php'
                    </script> ";
                }
           }
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

<!--<html>
    <head>
        <style>

        </style>
    <h2 align="center">Change Password</h2>
    <hr width="80%">
    <br><br>
    </head>
    <body>
   <form id="reset_passForm" name="reset_passForm" method="post" action="<?php ?>">
       <table width="300" border="0" align="center" cellpadding="2" cellspacing="0" class="qqq">
        <tr>
      <th>Enter Current Password<font color="#FF0000">*</font></th>
      <td><input name="currpass" type="password" id="currpass" placeholder="current password"/></td>
    </tr>
    <tr>
      <th>New Password<font color="#FF0000">*</font></th>
      <td><input type="password" id="pwd" name="pwd" placeholder="new password"/></td>
    </tr>
    <tr>
      <th>Re-enter New Password<font color="#FF0000">*</font></th>
      <td><input name="cpassword" type="password" id="cpassword" placeholder="confirm password"/></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Update"/></td>
    </tr>
  </table>
</form>

<?php
session_start();
$a=$_SESSION['uid'];
$errflag=false;
if(isset($_POST['submit']))
{
       
	$currpass =$_POST['currpass'];
	$pass1= $_POST['pwd'];
        $cpass=$_POST['cpassword'];

        if($pass1==''||$cpass==''||$currpass=='')//||$currpass=='')
        {
            echo "<script>
            alert('Please Fill all the details!!!');";
            //window.location.href='reset_stud_pass.php'
            echo "</script> ";
            $errflag = true;

        }
       
            include 'dbconn.php';
            $sql="select * from reg where name='$a' and password='".($currpass)."'";
            $result=mysql_query($sql);
            $row=mysql_num_rows($result);

            echo "<script>kkkkkkkkkkkkkk+$row</script>";
            if($row!=1)
            {
                echo "<script>
                alert('Invalid Current password');";
               // window.location.href='reset_stud_pass.php'
               echo "</script> ";
                $errflag = true;
            }

        
        if(strcmp($pass1, $cpass) != 0 )
            {
		echo "<script>
                alert('password Does't match!!!');";
                //window.location.href='stud_pass_reset.php'
                echo "</script>";
                $errflag = true;
	    }


        if($errflag==false)
            {
                include 'dbconn.php';
            //    $query="update users SET PASSWORD='$pass1' where USERNAME='$name'";
                $query="update reg SET password='".($pass1)."' WHERE name='$a'";
                trim($query);
                $query=stripcslashes($query);
                $query_html=htmlspecialchars($query);
                $result=mysql_query($query);
                $row=mysql_affected_rows();
                if(!$row)
                {
                    echo "<script>
                    alert('Update failed try Again!!!');
                    //window.location.href='student_change_pass.php'
                    </script> ";
                }
                else
                {
                    echo "<script>";
                    echo "alert('Password is successfully updated');
                   // window.location.href='add_company.php'
                    </script> ";
                }
           }
}

?>
</body>
</html>-->
