<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: dsave.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
 $uname = mysql_real_escape_string($_POST['name']);
 $add = mysql_real_escape_string($_POST['spec']);
 $sex = mysql_real_escape_string($_POST['sex']);



 if(mysql_query("INSERT INTO `patient`(`pname`, `padd`, `psex`) VALUES ('$uname','$add','$sex')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta name="spm" content="Hosita Management System">
<title>Add New Doctor</title>
</head>
<body>
<table align=center width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>HOSPITAL
MANAGEMENT SYSTEM</font></td></tr>
<tr><td><table align=center width=750 cellspacing=0 cellpadding=5>
<tr><td align=center><a href="index.php">Doctors</td><td align=center><a
href=plist.php>Patients</td><td align=center><a
href=app.php>Appointments</td>

</table></td></tr>
<tr bgcolor=red><td ><font size=4 color=white>New
Doctor</font></td></tr>
<form method=post >
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr><td>Patient Name</td><td><input type=text name=name size=30
maxlength=30 required=""></td></tr>
<tr><td>Patient Address</td><td><input type=text name=spec size=30
maxlength=30 required=""></td></tr>
<tr><td>Sex</td><td><input type=text name=sex size=30
maxlength=30 required=""></td></tr>
</table></td></tr>
<tr><td align=center><button type="submit" name="btn-signup">Sign Me Up</button></td></tr>
</form>
</table>

</body>
</html>
