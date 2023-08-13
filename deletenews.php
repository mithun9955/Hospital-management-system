
<?php
session_start();
$con2=mysql_connect("localhost","root","");
				if (!$con2)
 				 {
 					  die('Could not connect: ' .mysql_error());
 		 		 }
					mysql_select_db("healthcare", $con2);
					
					mysql_query("delete from news  where newsid='$_SESSION[sno]'");
					
					
					mysql_close($con2);
echo "<p align=center> Record Deleted</p>";
?>