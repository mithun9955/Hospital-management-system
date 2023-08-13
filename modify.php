<style type="text/css">
<!--
body {
	background-image: url(pcs/bb3.html.jpg);
}
.style37 {color: #FFFFFF}
.style38 {color: #FF0000}
.style43 {font-size: 24px}
.style40 {	font-size: 24px;
	color: #000000;
}
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
<p align="center"><span class="style38"><span class="style43">Search for  update</span> <img src="pcs/LenteLogo.png" width="31" height="38"></span><br>
  <span class="style40">You may enter the patient's registration</span>  <br>
  <?php
      echo "<form name=fr action=modifyrecord1.php method=POST>";
      echo "<input type=text name=studname>";
      echo "<input type=submit>";

      ?>
</p>

