<?php
if($_POST['t9']=="admin")
{

if($_POST['av']==11111)
{
$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			die('could not connect:'.mysql_error());
		}
			
		mysql_select_db("healthcare",$con);
		 $sql="INSERT INTO registration(uname,ufname,usex,udobdd,udobmm,udobyy,ucno,ueid,utype,date,uid,upass,ucpass,usq,uans)VALUES('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]','$_POST[t9]','$_POST[t102]','$_POST[t10]','$_POST[t11]','$_POST[t12]','$_POST[t13]','$_POST[t14]')";
		if(!mysql_query($sql,$con))
		{
		die('error:' .mysql_error());
		}
		
		mysql_close($con);
		echo "record inserted ";
	}
		else
		
		echo "Invalid Unique Code";
		}
else
{
$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			die('could not connect:'.mysql_error());
		}
			
		mysql_select_db("healthcare",$con);
		 $sql="INSERT INTO registration(uname,ufname,usex,udobdd,udobmm,udobyy,ucno,ueid,utype,date,uid,upass,ucpass,usq,uans)VALUES('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]','$_POST[t9]','$_POST[t102]','$_POST[t10]','$_POST[t11]','$_POST[t12]','$_POST[t13]','$_POST[t14]')";
		if(!mysql_query($sql,$con))
		{
		die('error:' .mysql_error());
		}
		
		mysql_close($con);
		echo "record inserted ";
		}
?>
