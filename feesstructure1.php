<?php
$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			die('could not connect:'.mysql_error());
		}
			
		mysql_select_db("healthcare",$con);
		 $sql="INSERT INTO feesstructure(bankname,ifsccode,branchname,ddno,datedd,datemm,dateyy,ddamount,regno)VALUES('$_POST[c1]','$_POST[c2]','$_POST[c3]','$_POST[c4]','$_POST[c5]','$_POST[c6]','$_POST[c7]','$_POST[c8]','$_POST[c9]')";
		if(!mysql_query($sql,$con))
		{
		die('error:' .mysql_error());
		}
		
		mysql_close($con);
		echo "record inserted ";
?>
