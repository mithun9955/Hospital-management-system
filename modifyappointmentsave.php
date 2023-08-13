
<?php
session_start();
$con2=mysql_connect("localhost","root","");
				if (!$con2)
 				 {
 					  die('Could not connect: ' .mysql_error());
 		 		 }
					mysql_select_db("healthcare", $con2);
					
					mysql_query("update appointment set patientname='$_POST[z1]',address='$_POST[z2]',fname='$_POST[z3]',dobdd='$_POST[z4]',udobmm='$_POST[z5]',udobyy='$_POST[z6]',telno='$_POST[z7]',emailid='$_POST[z8]',consultingdoctors='$_POST[z9]',consultingfees='$_POST[z10]',gender='$_POST[z11]',date='$_POST[z12]',photo='$_POST[z13]',regno='$_POST[z14]' where regno='$_SESSION[sno]'");
					
					
					mysql_close($con2);
echo "<p align=center> Updated Successfully</p>";
?>
