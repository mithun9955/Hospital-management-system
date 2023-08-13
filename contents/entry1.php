<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php
if(session_id()=='')
session_start();
else
$_SESSION['usname']=$_SESSION['usname'];
?>
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
.style85 {	font-size: 18px;
	color: #FFFFFF;
	font-weight: bold;
}
.style86 {font-size: 18px; color: #000000; }
.style79 {color: #000066; font-size: 18px; }
.style9 {color: #663300}
.style90 {font-size: 18px; font-weight: bold;}
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
      <td width="245"><div align="center"><span class="style81"><a href="entry.php"><font color="#00CC00">Patient Entry form</font></a> </span></div></td>
      <td width="246"><div align="center" class="style81"><u><a href="onlineappointment.php"><font color="#00CC00">Online Appoinment</font> </a></div></td>
      <td width="249"><div align="center"><b><u><span class="style85"><a href="logout.php"><font color="#FFFFFF">Sign Out</font></a> </span></b></div></td>
    </tr>
  </table>
  <table width="998" border="0" align="center" bgcolor="#003366">
    <tr>
      <td><div align="center" class="style72">
          <div align="center" class="style40"><u>Onlineappointment</u></div>
      </div></td>
    </tr>
  </table>
  <b><u>
  <table width="1000" height="504" border="0" align="center" bgcolor="#FFCC99">
    <tr>
      <td width="6" height="43">&nbsp;</td>
      <td width="219" class="style86"><strong> Patient Name</strong></td>
      <td width="210"><input name="t110" type="text" id="t110" onBlur="checkname('t1')" size="30"></td>
      <td width="13"><span class="style84"></span></td>
      <td width="156"><span class="style86">Registration Number </span></td>
      <td colspan="2"><div align="left" class="style84">
          <input type="text" name="t1102" size="20" id="t11023" onBlur="checkname('t1')">
      </div></td>
      <td width="15">&nbsp;</td>
    </tr>
    <tr>
      <td height="51">&nbsp;</td>
      <td><span class="style86">Father's Name/Husband Name</span></td>
      <td><input name="t111" type="text" id="t111" onBlur="checkname('t1')" size="30"></td>
      <td><span class="style84"></span></td>
      <td><span class="style86">D.O.B</span></td>
      <td colspan="2"><span class="style84"><span class="style3">DD</span><span class="style90">
        <select name="abc" size="1">
          <option value="abc">Date</option>
          <option value="abc">01</option>
          <option value="abc">02</option>
          <option value="abc">03</option>
          <option value="abc">04</option>
          <option value="abc">05</option>
          <option value="abc">06</option>
          <option value="abc">07</option>
          <option value="abc">08</option>
          <option value="abc">09</option>
          <option value="abc">10</option>
          <option value="abc">11</option>
          <option value="abc">12</option>
          <option value="abc">13</option>
          <option value="abc">14</option>
          <option value="abc">15</option>
          <option value="abc">16</option>
          <option value="abc">17</option>
          <option value="abc">18</option>
          <option value="abc">19</option>
          <option value="abc">20</option>
          <option value="abc">21</option>
          <option value="abc">22</option>
          <option value="abc">23</option>
          <option value="abc">24</option>
          <option value="abc">25</option>
          <option value="abc">26</option>
          <option value="abc">27</option>
          <option value="abc">29</option>
          <option value="abc">30</option>
          <option value="abc">31</option>
        </select>
        </span><span class="style3">MM<strong>
        <select name="abc">
          <option value="abc">Month</option>
          <option value="abc">January</option>
          <option value="abc">Febuary</option>
          <option value="abc">March</option>
          <option value="abc">April</option>
          <option value="abc">May</option>
          <option value="abc">June</option>
          <option value="abc">July</option>
          <option value="abc">Auguest</option>
          <option value="abc">September</option>
          <option value="abc">October</option>
          <option value="abc">November</option>
          <option value="abc">December</option>
        </select>
        </strong> YYYY</span>
        <select name="select">
          <option value="abc">Year</option>
          <option value="abc">2002</option>
          <option value="abc">2001</option>
          <option value="abc">2000</option>
          <option value="abc">1999</option>
          <option value="abc">1998</option>
          <option value="abc">1997</option>
          <option value="abc">1996</option>
          <option value="abc">1995</option>
          <option value="abc">1994</option>
          <option value="abc">1993</option>
          <option value="abc">1992</option>
          <option value="abc">1991</option>
          <option value="abc">1990</option>
          <option value="abc">1989</option>
          <option value="abc">1988</option>
          <option value="abc">1987</option
				   >
          <option value="abc">1986</option>
          <option value="abc">1985</option>
          <option value="abc">1984</option>
          <option value="abc">1983</option>
          <option value="abc">1982</option>
          <option value="abc">1981</option>
          <option value="abc">1980</option>
          <option value="abc">1979</option>
          <option value="abc">1978</option>
        </select>
      </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="62">&nbsp;</td>
      <td><span class="style86">Telephone/Mobile Number </span></td>
      <td class="style9"><input name="t1112" type="text" id="t1113" onBlur="checkname('t1')" size="30"></td>
      <td><span class="style84"></span></td>
      <td colspan="3"><span class="style84"><span class="style77"><a href="doctors.php">
        <input type="button" name="button32" value="Click Here To See Doctors Detail">
        </a></span><br class="style79">
      </span><span class="style84"> </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="61" rowspan="3">&nbsp;</td>
      <td><span class="style86">Email Id <br>
      </span></td>
      <td><input name="t113" type="text" id="t113" onBlur="checkname('t1')" size="30"></td>
      <td rowspan="3"><span class="style84"></span></td>
      <td height="28"><span class="style86">Consulting Doctors<br>
      </span></td>
      <td width="316" rowspan="2"><span class="style84"> </span><span class="style84"><span class="style9">
        <select name="ci" id="ci" onChange="return settextboxvalue()">
          <option value="PLEASE">Please Select Here</option>
          <option value="BCA">Dr. Mustkim Ansari</option>
          <option value="BBA">Dr. Prakash Chandra</option>
          <option value="MCA">Dr. Debasish Mitra</option>
          <option value="MBA">Dr. Bhaskar Pal</option>
          <option value="B-TECH">Dr.Aftab Khan</option>
          <option value="M-TECH">Dr.Amitawa Pahari</option>
          <option value="M-TECH">Dr.Amlan Chakarabati</option>
          <option value="M-TECH">Dr.Sultan Ansari</option>
          <option value="M-TECH">Dr.Ashok sengupta</option>
          <option value="M-TECH">Dr.S.N Singh</option>
          <option value="M-TECH">Dr.Amit Ghose</option>
          <option value="M-TECH">Dr.Dev Roy</option>
        </select>
        <br>
        <br>
        <strong></strong> <br>
        <input type="text" name="amt" id="amt" value="AMOUNT">
      </span></span></td>
      <td width="31" rowspan="2">&nbsp;</td>
      <td rowspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td><span class="style86">Gender</span><span class="style84"></span></td>
      <td><span class="style84">
        <select type="Select" name="t3" id="select7">
          <option value="select">--Select--</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </span></td>
      <br>
      <td height="54"><br>
          <span class="style3">Consulting Fees </span></td>
    </tr>
    <tr>
      <td><span class="style86">Date</span></td>
      <td><input name="t1132" type="text" id="t1132" onBlur="checkname('t1')" size="30"></td>
      <td height="49" colspan="3"><span class="style84"><span class="style77"><a href="feesstructure.php">
        <input type="button" name="button3" value="Click here to pay">
      </a></span></span></td>
    </tr>
    <tr>
      <td height="103" rowspan="2">&nbsp;</td>
      <td height="72"><span class="style86">Address</span></td>
      <td><form action="" method="post" name="form2" class="style84">
          <textarea name="textarea2"></textarea>
      </form></td>
      <td><span class="style84"></span></td>
      <td><span class="style84"><span class="style77"><a href="feesstructure.php"> </a></span></span></td>
      <td colspan="2">&nbsp;</td>
      <td rowspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td height="84" colspan="4"><form name="f" form action="file:///D|/abc.php" method="post">
          <h3>&nbsp;</h3>
          <span class="style86"></span><span class="style86"></span><span class="style86">Upload Photo </span>
          <input type="file" name="aaa2">
          <span class="style84">Only JPG or JPEG Files Allowed </span><br>
        </form>
   <span class="style86"></span></td>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
  <br>
  </U></b>
  <table width="1018" height="30" align="center">
    <tr>
      <td width="1010" height="24"><p align="center" class="style3">copyright &copy; All right reserved. Desing &amp; Maintained by: <span class="style68">Istiyak Ahmad</span></p></td>
    </tr>
  </table>
  <b><u>  </U></b>  
  <p><b><u></U></b></p>
  <b></b><br>
   <td rowspan="2"><div align="center"></div></td>
   </div>
</body>
</html>
