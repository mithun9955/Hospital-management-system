<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die ('couldnot connect:'.mysql_error());
}
mysql_select_db("healthcare",$con);
$result=mysql_query("select * from appointment");
echo "<table border=1 align=center><tr><th>patientname</th><th>address </th><th>fname</th><th>dobdd</th><th>udobmm</th><th>udobyy</th><th>telno</th><th>emailid</th><th>consultingdoctors</th><th>consultingfees</th><th>gender</th><th>date</th><th>photo</th><th>regno</th></tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr><td>".$row['patientname']."</td><td>".$row['adderss']."</td><td>".$row['fname']."</td><td>".$row['dobdd']."</td><td>".$row['udobmm']."</td><td>".$row['udobyy']."</td><td>".$row['telno']."</td><td>".$row['emailid']."</td><td>".$row['consultingdoctors']."</td><td>".$row['consultingfees']."</td><td>".$row['gender']."</td><td>".$row['date']."</td><td>".$row['photo']."</td><td>".$row['regno']."</td></tr>";

}
echo "</table>";
mysql_close($con);
?>
