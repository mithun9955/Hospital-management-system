<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>hospitality</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-image:  url(pcs/bb3.html.jpg);
}
.style3 {font-size: 18px}
.style40 {color: #FFFFFF}
.style68 {color: #000033; font-weight: bold; }
.style72 {color: #FFFFFF; font-size: 24px;}
.style77 {color: #000033}
.style81 {font-size: 24px; color: #00CC00; }
.style84 {color: #000000}
.style85 {
	font-size: 18px;
	color: #FFFFFF;
	font-weight: bold;
}
.style86 {font-size: 18px; color: #000000; }
.style87 {font-size: 16px}
-->
</style></head>

<body>
<div align="center">
  <table width="1002" height="61" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#6CA3F6" background="pcs/hospital.png" bgcolor="#6AA2F7">
    <tr>
      <td width="998"><div align="center">
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
      <td width="75" valign="top" bgcolor="#003366"><div align="right" class="style40"></div></td>
      <td width="79" valign="top" bgcolor="#003366"><div align="center"><span class="style40"></span></div></td>
    </tr>
  </table>
  <table width="995" border="0" align="center" bgcolor="#006699">
    <tr>
      <td width="237"><div align="center"></div></td>
      <td width="245"><div align="center"><u><span class="style81"><a href="entry.php"><font color="#00CC00">Patient Entry form</font></a> </span></u></div></td>
      <td width="246"><div align="center" class="style81"><u><a href="onlineappointment.php"><font color="#00CC00">Online Appoinment</font> </a></u></div></td>
      <td width="249"><div align="center"><b><u><span class="style85"><a href="logout.php"><font color="#FFFFFF">Sign Out</font></a> </span></u></b></div></td>
    </tr>
  </table>
  <table width="998" border="0" bgcolor="#003366">
    <tr>
      <td><div align="center" class="style72">
        <div align="center" class="style40">Patient Entry form </div>
      </div></td>
    </tr>
  </table>
  <form name="form1 action="entry.php" method="post">
  <table width="998" height="494" border="0" bgcolor="#FFCC99">
    <tr>
      <td width="20" height="56">&nbsp;</td>
      <td width="208"><span class="style86">Registration Number </span></td>
      <td width="218"><input name="t1" type="text" id="t110" onBlur="checkname('t1')" size="35"></td>
      <td width="1"><span class="style84"></span></td>
      <td colspan="2"><span class="style86"> Date<span class="style87">(DD/MM/YYYY)</span></span></td>
      <td width="210"><input name="t16" type="text" id="t16" onBlur="checkname('t1')" size="30"></td>
      <td width="22">&nbsp;</td>
    </tr>
    <tr>
      <td height="45">&nbsp;</td>
      <td height="45"><span class="style86">Patient Name </span></td>
      <td><input name="t12" type="text" id="t12" onBlur="checkname('t1')" size="35"></td>
      <td><span class="style84"></span></td>
      <td colspan="2"><span class="style86">Gender</span></td>
      <td><span class="style84">
        <select type="Select" name="t3" id="t3">
          <option value="select">--Select--</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="72">&nbsp;</td>
      <td height="72"><span class="style86">Patient Address </span></td>
      <td><form action="" method="post" name="form1" class="style84">
        <textarea name="textarea"></textarea>
      </form></td>
      <td><span class="style84"></span></td>
      <td colspan="2"><span class="style86">Blood Group</span></td>
      <td><input name="t17" type="text" id="t17" onBlur="checkname('t1')" size="35"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="52">&nbsp;</td>
      <td height="52"><span class="style86">Father's/Husband Name </span></td>
      <td><input name="t13" type="text" id="t13" onBlur="checkname('t1')" size="35"></td>
      <td><span class="style84"></span></td>
      <td colspan="2"><span class="style86">Telephone/Mobile Number </span></td>
      <td><input name="t18" type="text" id="t18" onBlur="checkname('t1')" size="35"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="53">&nbsp;</td>
      <td height="53"><span class="style86">City</span></td>
      <td><input name="t14" type="text" id="t14" onBlur="checkname('t1')" size="35"></td>
      <td><span class="style84"></span></td>
      <td colspan="2"><span class="style86">State</span></td>
      <td><input name="t19" type="text" id="t19" onBlur="checkname('t1')" size="35"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="84" rowspan="4">&nbsp;</td>
      <td height="43"><span class="style86">Weight<br>
        <br>
      </span></td>
      <td><span class="style84">
        <input type="text" name="t15" size="35" id="t152" onBlur="checkname('t1')">        
        <br>
        <br>
      </span></td>
      <td><span class="style84"></span></td>
      <td height="43" colspan="2"><div align="left" class="style84"><span class="style3">Age
            <input type="text" name="t1102" size="10" id="t1103" onBlur="checkname('t1')">
    Yrs <br>
      </span>
      </div></td>
      <td><span class="style84"></span></td>
    </tr>
    <tr>
      <td height="41"><span class="style86">Consulting Fees </span></td>
      <td><input name="t152" type="text" id="t15" onBlur="checkname('t1')" size="35"></td>
      <td><span class="style84"></span></td>
      <td width="131" height="41"><div align="left" class="style77"><span class="style84"></span></div>        <span class="style84">
      <span class="style77"><a href="feesstructure1.php">
      <a href="feesstructure1.php">
      <input type="button" name="button3" value="Click here to pay">
      </a></span> </span></td>
      <td width="154">&nbsp;</td>
      <td><span class="style84"></span> </td>
    </tr>
    <tr>
      <td height="48"><span class="style86">Upload Photo </span></td>
      <td><input name="aaa2" type="file"></td>
      <td height="48" colspan="3"><span class="style84">Only JPG or JPEG Files Allowed </span></td>
      <td><span class="style84"></span></td>
    </tr>
    <tr>
      <td height="32"><span class="style84"></span></td>
      <td height="32" colspan="4"><div align="center" class="style84">
         <a href="feesstructure1.php">  <input name="Submit" type="submit"  value="Submit">
          <input name="Reset" type="reset"  value="Reset">
      </div></td></a>
      <td><span class="style84"></span></td>
    </tr>
  </table>
   <br>
   <br>
  <td rowspan="2"><div align="center"></div></td>
   <table width="1018" height="30" align="center">
    <tr>
      <td width="1010" height="24"><p align="center" class="style3">copyright &copy; All right reserved. Desing &amp; Maintained by: <span class="style68">Istiyak Ahmad</span></p></td>
  </form>  </tr>
  </table>
</div>
</body>
</html>
