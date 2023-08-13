

<?php
session_start();
$con=mysql_connect("localhost","root","");
$p=0;
if(!$con)
{
die ('couldnot connect:'.mysql_error());
}
mysql_select_db("healthcare",$con);
$result=mysql_query("select * from news");
echo "<form name=f action=deletenews.php methos=POST><table border=1 align=center><tr><th>newsid</th><th>newsdate </th><th>news</th></tr>";
while($row=mysql_fetch_array($result))
{

if($_POST['studname']==$row['newsid'])
{
$_SESSION['sno']=$row['newsid'];
echo "<tr><td>".$row['newsid']."</td><td>".$row['newsdate']."</td><td>".$row['news']."</td></tr>";
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
