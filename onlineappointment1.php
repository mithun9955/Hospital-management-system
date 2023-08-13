<?php
$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			die('could not connect:'.mysql_error());
		}
			
		mysql_select_db("healthcare",$con);
		 $sql="INSERT INTO appointment(patientname,address,fname,dobdd,udobmm,udobyy,telno,emailid,consultingdoctors,consultingfees,gender,date,photo,regno)VALUES('$_POST[z1]','$_POST[z2]','$_POST[z3]','$_POST[z4]','$_POST[z5]','$_POST[z6]','$_POST[z7]','$_POST[z8]','$_POST[z9]','$_POST[z10]','$_POST[z11]','$_POST[z12]','$_POST[z13]','$_POST[z14]')";
		if(!mysql_query($sql,$con))
		{
		die('error:' .mysql_error());
		}
		
		mysql_close($con);
		echo "record inserted ";
?>
