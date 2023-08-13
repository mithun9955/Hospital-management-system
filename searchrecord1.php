<style type="text/css">
<!--
body {
	background-image: url(pcs/bb3.html.jpg);
}
.style37 {color: #FFFFFF}
-->
</style>
<div align="center">
  </div>


<?php
$con=mysql_connect("localhost","root","");
$p=0;
if(!$con)
{
die ('couldnot connect:'.mysql_error());
}
mysql_select_db("healthcare",$con);
$result=mysql_query("select * from registration");
echo "<table border=1 align=center><tr><th>uname</th><th>ufname </th><th>usex</th><th>udobdd</th><th>udobmm</th><th>udobyy</th><th>ucno</th><th>ueid</th><th>utype</th><th>date</th><th>uid</th><th>upass</th><th>ucpass</th><th>usq</th><th>uans</th><th>regno></th></tr>";
while($row=mysql_fetch_array($result))
{

if($_POST['studname']==$row['regno'])
{
echo "<tr><td>".$row['uname']."</td><td>".$row['ufname']."</td><td>".$row['usex']."</td><td>".$row['udobdd']."</td><td>".$row['udobmm']."</td><td>".$row['udobyy']."</td><td>".$row['ucno']."</td><td>".$row['ueid']."</td><td>".$row['utype']."</td><td>".$row['date']."</td><td>".$row['uid']."</td><td>".$row['upass']."</td><td>".$row['ucpass']."</td><td>".$row['usq']."</td><td>".$row['uans']."</td><td>".$row['regno']."</td></tr>";
$p=1;
}
}
echo "</table>";
if($p==0)
echo"<table border=1 align=center><tr><td> No Record Found</td></tr></td>";
mysql_close($con);
?>
