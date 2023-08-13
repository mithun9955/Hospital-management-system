<style type="text/css">
<!--
body {
	background-image: url(pcs/bb3.html.jpg);
}
-->
</style>

<?php
session_start();
$con=mysql_connect("localhost","root","");
$p=0;
if(!$con)
{
die ('couldnot connect:'.mysql_error());
}
mysql_select_db("healthcare",$con);
$result=mysql_query("select * from appointment");
echo "<form name=f action=deleteappointment.php methos=POST><table border=1 align=center><tr><th>patientname</th><th>address </th><th>fname</th><th>dobdd</th><th>udobmm</th><th>udobyy</th><th>telno</th><th>emailid</th><th>consultingdoctors</th><th>consultingfees</th><th>gender</th><th>date</th><th>photo</th><th>regno</th></tr>";
while($row=mysql_fetch_array($result))
{

if($_POST['studname']==$row['regno'])
{
$_SESSION['sno']=$row['regno'];
echo "<tr><td>".$row['patientname']."</td><td>".$row['address']."</td><td>".$row['fname']."</td><td>".$row['dobdd']."</td><td>".$row['udobmm']."</td><td>".$row['udobyy']."</td><td>".$row['telno']."</td><td>".$row['emailid']."</td><td>".$row['consultingdoctors']."</td><td>".$row['consultingfees']."</td><td>".$row['gender']."</td><td>".$row['date']."</td><td>".$row['photo']."</td><td>".$row['regno']."</td></tr>";
$p=1;
}
}
echo "</table>";
if($p==0)
echo"<table border=1 align=center><tr><td> No Record Found</td></tr></table>";
else
echo"<table border=1 align=center><tr><td> <input type=submit value=Delete></td></tr></table>";
mysql_close($con);
?>
