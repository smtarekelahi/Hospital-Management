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
<tr><td align=center><a href=dlist.php>Doctors</td><td align=center><a
href=plist.php>Patients</td><td align=center><a
href=app.php>Appointments</td></table></td></tr><tr bgcolor=red><td ><font size=4 color=white>Doctors List</font></td></tr>

<!--<tr><td><a href=dadd.php>Add New Record</a></td></tr>-->

<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>S No</td><td align=center>Doctor
Name</td><td align=center>Specialization</td><td
align=center>Options</td></tr>

<?php

    $result = mysql_query("SELECT * FROM doct");

	      $sno=1;
    while($row = mysql_fetch_array($result))
      {
      echo "<tr><td align=center>$sno</td><td align=center>$row[1]</td><td align=center>$row[2]</td><td align=center><a href=dmod.php?rno=".$row[0].">Modify</a> | <a href=ddel.php?rno=".$row[0].">Delete</a></td></tr>";
          $sno++;
		
      }
	  
    ?>

</table></td></tr>
<tr><td align=center><hr></td></tr>


</table></td></tr>
</table>
</body>
</html>
	
