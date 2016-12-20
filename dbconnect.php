<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!mysql_connect("localhost","root",""))
	
{
	die('oops connection problem ! --> '.mysql_error());
	
	
}
if(!mysql_select_db("hospital"))
{
	die('oops database selection problem ! --> '.mysql_error());
	
	
}

    echo "<td align=center><font size=0.0 color=green> Continue...</a></font></td>";
	
	include "dadd.php";
?>


		
		