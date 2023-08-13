

<?php
session_start();
$_SESSION['sno']=$_POST['studname'];
$con=mysql_connect("localhost","root","");
$p=0;

if(!$con)
{
die ('couldnot connect:'.mysql_error());
}
mysql_select_db("healthcare",$con);
$result=mysql_query("select * from appointment");
echo "<form name=fr action=modifyappointmentsave.php method=POST><table border=1 align=center><tr><th>patientname</th><th>address </th><th>fname</th><th>dobdd</th><th>udobmm</th><th>udobyy</th><th>telno</th><th>emailid</th><th>consultingdoctors</th><th>consultingfees</th><th>gender</th><th>date</th><th>photo</th><th>regno</th></tr>";
while($row=mysql_fetch_array($result))
{

if($_POST['studname']==$row['regno'])
{
echo "<tr><td><input type=text name=z1 value=".$row['patientname']."></td><td><input type=text name=z2 value=".$row['address']."></td><td><input type=text name=z3 value=".$row['fname']."><td><input type=text name=z4 value=".$row['dobdd']."></td><td><input type=text name=z5 value=".$row['udobmm']."><td><input type=text name=z6 value=".$row['dobyy']."></td><td><input type=text name=z7 value=".$row['telno']."></td><td><input type=text name=z8 value=".$row['emailid']."></td><td><input type=text name=z9 value=".$row['consultingdoctors']."></td><td><input type=text name=z10 value=".$row['consultingfees']."></td><td><input type=text name=z11 value=".$row['gender']."></td><td><input type=text name=z12 value=".$row['date']."></td><td><input type=text name=z13 value=".$row['photo']."></td><td><input type=text name=z14 value=".$row['regno']."></td></tr>";
$p=1;
}
}
echo "</table><input type=submit value=Update></form>";
if($p==0)
echo"<table border=1 align=center><tr><td> No Record Found</td></tr></td>";
mysql_close($con);
?>
