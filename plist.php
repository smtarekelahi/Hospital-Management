<?php
   session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: dlist.php");
}
include_once 'dbconnect.php';
?>

        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta name="spm" content="Hosital Management System">
<title></title>
</head>
<body>

<table align=center width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>HOSPITAL
MANAGEMENT SYSTEM</font></td></tr>
<tr><td><table align=center width=750 cellspacing=0 cellpadding=5>
<tr><td align=center><a href="index.php">Doctors</td><td align=center><a
href=plist.php>Patients</td><td align=center><a
href=alist.php>Appointments</td>
</table></td></tr>
<tr bgcolor=red align=center><td ><font size=4 color=white>Paitent
List</font></td></tr>
<tr><td align=center><a href=padd.php>Add New Record</a></td></tr>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>S No</td><td align=center>Patient
Name</td><td align=center>Patient Address</td><td
align=center>SEX

<?php

    $result = mysql_query("SELECT * FROM patient");

    while($row = mysql_fetch_array($result))
      {
      echo "<tr><td align=center>{$row['pno']}</td><td align=center>{$row['pname']}</td><td align=center>{$row['padd']}</td><td align=center>{$row['psex']}</td></tr>\n";

      echo "<br />" ;

      }


    ?></td></tr>

</table></td></tr>
<tr><td align=center><hr></td></tr>
<tr align=center bgcolor=red><td><font size=4 color=white>Paitent
List</font></td></tr>


</table></td></tr>
</table>
</body>
</html>
