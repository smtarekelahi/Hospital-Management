<?php
   session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: ddel.php");
}
include_once 'dbconnect.php';
?>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html>
<head>
<meta name="spm" content="Hosital Management System">
<title>Delete Doctor Profile</title>
</head>
<body>
<table width=760 height="270" align=center cellpadding=5 cellspacing=0>
<tr bgcolor=blue><td width="750" align=center><font SIZE=6 color=white>HOSPITAL MANAGEMENT SYSTEM</font></td></tr>
<td><table align=center width=750 cellspacing=0 cellpadding=5>
<tr><td align=center><a href=dlist.php>Doctors</td><td align=center><a href=plist.php>Patients</td><td align=center><a href=app.php>Appointments</td>
</table></td></tr>
<tr bgcolor=red><td ><font size=4 color=white>Doctors List</font></td></tr>

<!--<tr><td><a href=dadd.php>Add New Record</a></td></tr>-->

<?php

if(!mysql_connect("localhost","root",""))
{
echo "<tr><td><font color=red size=4>Connection Error</font></td></tr>";
die();
}

$query = "SELECT * FROM doct";
$result=mysql_query($query) or die("Query Failed : ".mysql_error());
$i=0;
while($rows=mysql_fetch_array($result))
	
{
$name[$i]=$rows['dname'];
$i++;
}
$total_elmt=count($name);
?>
<form method="POST" action="">
  <td align=center> <h3> Select the Name to Delete:</h3> 
	 <select name="sel">
<option>Select</option>
<?php 
for($j=0;$j<$total_elmt;$j++)
{
?><option><?php 
echo $name[$j];
?></option><?php
}
?>
</select><br />

<input name="submit" type="submit" value="Delete"/><br />

</form>


<?php

if(isset($_POST['submit']))
{
$name=$_POST['sel'];


$query = "DELETE FROM doct WHERE dname='$name'";
$result=mysql_query($query) or die("Query Failed : ".mysql_error());
echo "<tr><td align=center><font size=4 color=green>Successfully Records Deleted </font></td></tr>";
echo "<tr><td align=center><font size=4 color=red>Records Not Found</font></td></tr>";
echo "tr><td align=center><font size=4 color=green><a href=dlist.php>Continue...</a></font></td></tr>";
}

?>


</table>
</td></tr>
</table>
</body>
</html>