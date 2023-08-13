<style type="text/css">
<!--
body {
	background-image: url(pcs/bb3.html.jpg);
}
.style37 {color: #FFFFFF}
.style58 {font-size: 18px}
.style68 {color: #000033; font-weight: bold; }
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
    <td width="36" rowspan="2" valign="middle" bgcolor="#003366"><p>&nbsp;</p>
        <bgsound src="abc.mp3" loop="infinite">
&nbsp; <audio> <source src="abc.mp3" type="audio/mpeg" autostart="true"> </audio></td>
    <td colspan="2" valign="bottom" bgcolor="#003366"><p>&nbsp;</p>
        <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="339" height="45" valign="top" bgcolor="#003366"><div align="center"><img src="pcs/caster.png" width="269" height="43"></div></td>
    <td width="278" valign="top" bgcolor="#003366">&nbsp;</td>
    <td width="75" valign="top" bgcolor="#003366">&nbsp;</td>
    <td width="79" valign="top" bgcolor="#003366"><div align="center"><span class="style37"></span></div></td>
  </tr>
</table>
<br>
<br>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die ('couldnot connect:'.mysql_error());
}
mysql_select_db("healthcare",$con);
$result=mysql_query("select * from registration ");
echo "<table border=1 align=center><tr><th>uname</th><th>ufname </th><th>usex</th><th>udobdd</th><th>udobmm</th><th>udobyy</th><th>ucno</th><th>ueid</th><th>utype</th><th>uid</th><th>upass</th><th>ucpass</th><th>usq</th><th>uans</th><th>regno</th></tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr><td>".$row['uname']."</td><td>".$row['ufname']."</td><td>".$row['usex']."</td><td>".$row['udobdd']."</td><td>".$row['udobmm']."</td><td>".$row['udobyy']."</td><td>".$row['ucno']."</td><td>".$row['ueid']."</td><td>".$row['utype']."</td><td>".$row['uid']."</td><td>".$row['upass']."</td><td>".$row['ucpass']."</td><td>".$row['usq']."</td><td>".$row['uans']."</td><td>".$row['regno']."</td></tr>";

}
echo "</table>";
mysql_close($con);
?>
<table width="1030" height="724" border="0" align="center">
  <tr>
    <td width="342" height="204"><img src="images/b.jpg" width="339" height="212"></td>
    <td width="327"><img src="images/d.jpg" width="331" height="211"></td>
    <td width="347"><img src="images/image-of-ambulance-outside-nonprofit-hospital.jpg" width="349" height="207"></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="200"><img src="images/c.jpg" width="338" height="206"></td>
    <td><img src="images/n.jpg" width="325" height="207"></td>
    <td><img src="images/health%20care%20rear%20view.jpg" width="349" height="207"></td>
  </tr>
  <tr>
    <td height="34">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="204"><img src="pcs/hope2.jpg" width="342" height="208"></td>
    <td><img src="images/a.jpg" width="327" height="209"></td>
    <td><img src="images/c1.jpg" width="347" height="200"></td>
  </tr>
  <tr>
    <td height="21" colspan="3">&nbsp;</td>
  </tr>
</table>
<table width="1018" height="30" align="center">
  <tr>
    <td width="1010" height="24"><p align="center" class="style58">copyright &copy; All right reserved. Desing &amp; Maintained by: <span class="style68">Istiyak Ahmad</span></p></td>
  </tr>
</table>
<p>&nbsp;</p>
