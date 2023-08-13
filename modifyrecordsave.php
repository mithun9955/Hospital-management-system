<style type="text/css">
<!--
body {
	background-image: url(pcs/bb3.html.jpg);
}
.style37 {color: #FFFFFF}
.style38 {color: #FF0000}
.style40 {font-size: 24px;
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
    <td width="36" rowspan="2" valign="middle" bgcolor="#003366"><p>&nbsp;</p>
        <bgsound src="abc.mp3" loop="infinite">
&nbsp; <audio> <source src="abc.mp3" type="audio/mpeg" autostart="true"> </audio></td>
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

<?php
session_start();
$con2=mysql_connect("localhost","root","");
				if (!$con2)
 				 {
 					  die('Could not connect: ' .mysql_error());
 		 		 }
					mysql_select_db("healthcare", $con2);
					
					mysql_query("update registration set uname='$_POST[t1]',ufname='$_POST[t2]',usex='$_POST[t3]' ,udobdd='$_POST[t4]',udobmm='$_POST[t5]',udobyy='$_POST[t6]',ucno='$_POST[t7]',ueid='$_POST[t8]',utype='$_POST[t9]',date='$_POST[t102]',uid='$_POST[t10]',upass='$_POST[t11]',ucpass='$_POST[t12]',usq='$_POST[t13]',uans='$_POST[t14]',regno='$_POST[t15]' where regno='$_SESSION[sno]'");
					
					
					mysql_close($con2);
echo "<p align=center> Updated Successfully</p>";
?>
<div align="center"></div>
