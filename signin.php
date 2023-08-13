<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
session_start();
$_SESSION['view']=0;
$_SESSION['usname']='NULL';
$m=0;
$uid=$_POST['userid'];
$pa=$_POST['password'];
$ut=$_POST['t9'];
$con=mysql_connect("localhost","root","");
if(!$con)
	{
	die('could not connect:'.mysql_error());
	}
mysql_select_db("healthcare",$con);
$result=mysql_query("select * from registration");
$m=0;
while($row=mysql_fetch_array($result))
{
if ($uid==$row['uid'] && $pa==$row['upass'] && $ut=='user')

		{
		$m=1;
		$_SESSION['view']=1;
		$_SESSION['usname']=$row['uname'];
		$_SESSION['uname']=$row['uname'];
		
		}
 if ($uid==$row['uid'] && $pa==$row['upass'] && $ut=='admin')
		{
		$m=2;
		$_SESSION['view']=2;
		$_SESSION['usname']=$row['uname'];
	
		}
}
mysql_close($con);
if($m==1)	
	{
	include("index 2.php");
	}
else if($m==2)
	{
	include("admineform.php");
	}
?>

</body>
</html>
