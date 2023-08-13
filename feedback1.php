<?php
$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			die('could not connect:'.mysql_error());
		}
			
		mysql_select_db("healthcare",$con);
		 $sql="INSERT INTO feedback(yname,address,email,phone,subject,comment)VALUES('$_POST[f1]','$_POST[f2]','$_POST[f3]','$_POST[f4]','$_POST[f5]','$_POST[f6]')";
		if(!mysql_query($sql,$con))
		{
		die('error:' .mysql_error());
		}
		
		mysql_close($con);
		echo "record inserted ";
?>
