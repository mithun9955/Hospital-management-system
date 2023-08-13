<style type="text/css">
<!--
body {
	background-image: url(pcs/bb3.html.jpg);
}
.style37 {color: #FFFFFF}
.style38 {color: #FF0000}
.style39 {font-size: 18px}
.style40 {
	font-size: 24px;
	color: #000000;
}
.style43 {font-size: 24px}
-->
</style>
<table width="1003" height="61" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#6CA3F6" background="pcs/hospital.png" bgcolor="#6AA2F7">
  <tr>
    <td width="999"><div align="center">
        <marquee behavior="scroll" scrolldelay="80">
        <img src="pcs/head3.png" width="938" height="37">
        </marquee>
    </div></td>
  </tr>
</table>
<table width="999" height="133" align="center" background="images/paritranbg.png" bgcolor="#003366">
  <tr>
    <td width="164" height="106" rowspan="2" valign="top" bgcolor="#003366"><div align="center"><img src="pcs/heart.png" width="158" height="115"></div></td>
    <td colspan="2" valign="top" bgcolor="#003366">
      <div align="center"><img src="pcs/bac.png" width="556" height="78"></div></td>
   
    <td colspan="2" valign="bottom" bgcolor="#003366"><p>&nbsp;</p>
        <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="339" height="45" valign="top" bgcolor="#003366"><div align="center"><img src="pcs/caster.png" width="269" height="43"></div></td>
    <td width="278" valign="top" bgcolor="#003366">&nbsp;</td>
    <td width="75" valign="top" bgcolor="#003366"><div align="right" class="style37"></div></td>
    <td width="79" valign="top" bgcolor="#003366"><div align="center" class="style37"></div></td>
  </tr>
</table>
<div align="center" class="style39">
  <div align="center"><span class="style38"><span class="style43">Search for a patient</span> <img src="pcs/LenteLogo.png" width="31" height="38"><br>
    </span><span class="style40">You may  enter the patient's registration number   
    <?php
echo "<form name=fr action=searchrecord2.php method=POST>";
echo "<input type=text name=studname>";
echo "<input type=submit>";

?>
    <?php
$con=mysql_connect("localhost","root","");
$p=0;
if(!$con)
{
die ('couldnot connect:'.mysql_error());
}
mysql_select_db("healthcare",$con);
$result=mysql_query("select * from registration");
echo "<table border=1 align=center><tr><th>uname</th><th>ufname </th><th>usex</th><th>udobdd</th><th>udobmm</th><th>udobyy</th><th>ucno</th><th>ueid</th><th>utype</th><th>date</th><th>uid</th><th>upass</th><th>ucpass</th><th>usq</th><th>uans</th><th>regno</th></tr>";
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
    <br>
    <span class="style39"><a href="admineform.php"><font color="#000000">Click here to Back</font></a></span></span>
    </div>
</div>
