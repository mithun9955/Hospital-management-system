
<?php
session_start();
$con2=mysql_connect("localhost","root","");
				if (!$con2)
 				 {
 					  die('Could not connect: ' .mysql_error());
 		 		 }
					mysql_select_db("healthcare", $con2);
					
					mysql_query("update news set neweid='$_POST[z1]',newsdate='$_POST[z2]',news='$_POST[z3]' where newsid='$_SESSION[sno]'");
					
					
					mysql_close($con2);
echo "<p align=center> Updated Successfully</p>";
?>