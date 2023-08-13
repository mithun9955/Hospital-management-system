

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
$result=mysql_query("select * from news");
echo "<form name=fr action=modifysavenews.php method=POST><table border=1 align=center><tr><th>newsid</th><th>newsdate </th><th>news</th></tr>";
while($row=mysql_fetch_array($result))
{

if($_POST['studname']==$row['newsid'])
{
echo "<tr><td><input type=text name=z1 value=".$row['newsid']."></td><td><input type=text name=z2 value=".$row['newsdate']."></td><td><input type=text name=z3 value=".$row['news']."></td></tr>";
$p=1;
}
}
echo "</table><input type=submit value=Update></form>";
if($p==0)
echo"<table border=1 align=center><tr><td> No Record Found</td></tr></td>";
mysql_close($con);
?>
