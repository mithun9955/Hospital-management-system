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

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
<style type="text/css">
a{
text-decoration:none;
color:#FFFFFF;
}
<!--
table.menu
{
position:absolute;
visibility:hidden;
}
body {
	background-image: url(pcs/bb3.html.jpg);
}
-->
</style>
<script type="text/javascript">
function showmenu(elmnt)
{
document.getElementById(elmnt).style.visibility="visible";
}
function hidemenu(elmnt)
{
document.getElementById(elmnt).style.visibility="hidden";
}

</script>

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine2/style.css" />
	<script type="text/javascript" src="engine2/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
    <style type="text/css">
<!--
.style37 {color: #FFFFFF}
.style44 {
	font-size: 18px;
	color: #33FF00;
}
.style46 {color: #33FF00}
.style47 {font-size: 18px}
.style48 {
	font-size: 24px;
	font-weight: bold;
	color: #000000;
}
-->
    </style>
</head>

<body>
<table width="1003" height="61" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#6CA3F6" background="pcs/hospital.png" bgcolor="#6AA2F7">
  <tr>
    <td width="999"><div align="center">
        <marquee behavior="scroll" scrolldelay="80">
        <img src="pcs/head3.png" width="938" height="37">
        </marquee>
    </div></td>
  </tr>
</table>
<table width="999" height="178" align="center" background="images/paritranbg.png" bgcolor="#003366">
  <tr>
    <td width="164" height="106" rowspan="2" valign="top" bgcolor="#003366"><div align="center"><img src="pcs/heart.png" width="158" height="115"></div></td>
    <td colspan="2" valign="top" bgcolor="#003366">
      <div align="center"><img src="pcs/bac.png" width="556" height="78"></div></td>
    <td width="36" rowspan="2" valign="middle" bgcolor="#003366"><p>&nbsp;</p>
        <bgsound src="abc.mp3" loop="infinite">
&nbsp; <audio> <source src="abc.mp3" type="audio/mpeg" autostart="true"> </audio></td>
    <td colspan="2" valign="bottom" bgcolor="#003366"><p>&nbsp;</p>
        <p>WELCOME Mr.<?php if( session_id()!='')echo $_SESSION['usname'];?></span></td>
  </tr> </p></td>
  </tr>
  <tr>
    <td width="339" height="45" valign="top" bgcolor="#003366"><div align="center"><img src="pcs/caster.png" width="269" height="43"></div></td>
    <td width="278" valign="top" bgcolor="#003366">&nbsp;</td>
    <td width="75" valign="top" bgcolor="#003366">&nbsp;</td>
    <td width="79" valign="top" bgcolor="#003366"><div align="center"><span class="style37"></span></div></td>
  </tr>
</table>
<table width="1009" border="0" align="center" cellpadding="0" cellspacing="0" background="menubg4.png">
  <tr valign="top" bordercolor="#003366">
    <td width="103" height="22" valign="top" onmouseover="showmenu('tutorials')" onmouseout="hidemenu('tutorials')">
      <div align="center"><span class="style37"><a href="index.php" class="style37"><font color="#FFFFFF">Home</font></a></span></div></td>
   
            
    <td width="257" valign="top" onmouseover="showmenu('hospital')" onmouseout="hidemenu('hospital')"><div align="center"><span class="style37">Patient Online Appointment Details </span>
            <table class="menu" id="hospital" width="190" background="images/menubg.jpg" border="2"  bordercolor="#999900" bgcolor="#003366">
              <tr>
                <td class="menu"> <a href="aboutus.php"><font color="#FFFFFF">Display Record</font></a></td>
              </tr>
              <tr>
                <td class="menu"> <a href="specialservices.php"><font color="#FFFFFF">Search Record</font></a></td>
              </tr>
              <tr>
                <td class="menu "> <a href="hospitalintroduction.php"><font color="#FFFFFF">Update Record</font></a></td>
              </tr>
              <tr>
                <td class="menu "> <a href="infrastructure.php"><font color="#FFFFFF">Delete Record</font></a></td>
              </tr>
             
            </table>
    </div></td>
    <td width="176" valign="top" onmouseover="showmenu('gallery')" onmouseout="hidemenu('gallery')">
      <div align="center"><span class="style37"> Patient LogIn Information 
          </span>
        <table class="menu" id="services" width="190" background="images/menubg.jpg" border="2"   bordercolor="#999900" bgcolor="#003366">
          <tr>
            <td class="menu"> <a href="displayrecord.php"><font color="#FFFFFF">Display Record</font></a></td>
          </tr>
          <tr>
            <td class="menu"> <a href="searchfordelete.php"><font color="#FFFFFF">deleterecord</font></a></td>
          </tr>
          <tr>
            <td class="menu"> <a href="searchrecord.php"><font color="#FFFFFF">Search Record</font></a></td>
          </tr>
          <tr>
            <td class="menu"> <a href="modify.php"><font color="#FFFFFF">Update Record</font></a></td>
          </tr>
        </table>
      </div></td>
    <td width="197" valign="top" onmouseover="showmenu('services')" onmouseout="hidemenu('services')">
      <div align="center"><span class="style37">Patient LogIn Information </span>
          <table class="menu" id="services" width="190" background="images/menubg.jpg" border="2"   bordercolor="#999900" bgcolor="#003366">
           
            <tr>
              <td class="menu"> <a href="displayrecord.php"><font color="#FFFFFF">Display Record</font></a></td>
            </tr>
            <tr>
              <td class="menu"> <a href="searchfordelete.php"><font color="#FFFFFF">deleterecord</font></a></td>
            </tr>
            <tr>
              <td class="menu"> <a href="searchrecord.php"><font color="#FFFFFF">Search Record</font></a></td>
            </tr>
            <tr>
              <td class="menu"> <a href="modify.php"><font color="#FFFFFF">Update Record</font></a></td>
            </tr>
          </table>
    </div></td>
    
    <td width="132" align="center" valign="top" onmouseover="showmenu('membership')" onmouseout="hidemenu('membership')">
      <div align="center"><a href="logout.php"><font color="#FFFFFF">Log Out </font></a></div></td>
</table>
<table width="1014" height="184" border="0" align="center">
  <tr>
    <td width="360">&nbsp;</td>
  <td width="644">&nbsp;</td>
  </tr>
</table>
<p><br>
  <br>
  <br>
</p>
</body>
</html>
