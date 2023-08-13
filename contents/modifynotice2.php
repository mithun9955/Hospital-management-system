<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php
if(session_id()=='')
session_start();
else
$_SESSION['uname']=$_SESSION['uname'];
?>

<title>Online examination</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-image: url(image/bgg.jpg);
}
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {color: #FF9933}
.style3 {color: #FF9933; font-weight: bold; }
.style4 {
	color: #d4492c;
	font-weight: bold;
}
.style5 {color: #0000FF}
-->
a
	{
	text-decoration:none;
	}
body
a:hover{color:#FF0000}
	td.menu{background:#2E3F75}
	table.menu

	{
		font-size:100%;
		position:absolute;
		visibility:hidden;
	}
body
a:hover{color:#FF0000}
	td.true{background:#2E3F75}
	table.true

	{
		font-size:100%;
		position:absolute;
		visibility:hidden;
	}
.style6 {
	color: #FF993F;
	font-weight: bold;
}
.style7 {	color: #0000FF;
	font-weight: bold;
}
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
</head>

<body>
<div align="center">
  <table width="900" border="0" align="center" bgcolor="#FFFFFF">
    <tr>
      <td width="240" rowspan="2"><img src="image/l3.jpg" width="240" height="120"></td>
      <td width="406" height="66"><div align="center"><img src="image/onlin3.png" width="380" height="62"></div></td>
      <td width="240" rowspan="2"><img src="image/l3.jpg" width="240" height="120"></td>
    </tr>
    <tr>
      <td><div align="center"><img src="image/exam%20admin.png" width="222" height="47"></div></td>
    </tr>
</table>
  <table width="900" border="0" align="center" bgcolor="#2e3f75">
    <tr>
      <td width="121"><div align="center" class="style1 style2"><a href="index.php"><font color="#ff9900">Home</font></a></div></td>
      <td width="166" onmouseover="showmenu('examination')" onmouseout="hidemenu('examination')">
	    <div align="left"><span class="style3"> Student Details </span></div>
	    <div>
        </div>	    <div align="right">        <table class="menu" id="examination"  width="120">
	      </div>
          <tr>
            <td class="menu"><div align="center"><a href="displaystudentdetails.php"><span class="style2">Display student details</span></a></div></td>
          </tr>
          <tr>
            <td class="menu"><div align="center"><a href="searchfordelete.php"><span class="style2">Delete student details</span></a></div></td>
          </tr>
		   <tr>
            <td class="menu"><div align="center"><a href="modifyrecord.php"><span class="style2">Modify student details</span></a></div></td>
          </tr>
		   <tr>
            <td class="menu"><div align="center"><a href="searchstudent.php"><span class="style2">Search student details</span></a></div></td>
          </tr>
          </table>
            <div align="center" class="style3">
	  <td width="145" onmouseover="showmenu('false')" onmouseout="hidemenu('false')">
        <div align="left" class="style6">Question Papers </div>
       <div align="right">        <table class="true" id="false"  width="120">
	      </div>
          <tr>
            <td class="true"><div align="center"><a href="aquestion papers.php"><span class="style2">True & false</span></a></div></td>
          </tr>
          <tr>
            <td class="true"><div align="center"><a href="aquestion papers.php"><span class="style2">MCQ</span></a></div></td>
          </tr>
		   </table>
      <td width="166" onmouseover="showmenu('notice')" onmouseout="hidemenu('notice')"><div align="center"><span class="style3">Notice </span></div>
	         <div>
        </div>	    <div align="center">        <table class="menu" id="notice"  width="120">
	      </div>
          <tr>
            <td class="menu"><div align="center"><a href="addnotice.php"><span class="style2">Add notice </span></a></div></td>
          </tr>

          <tr>
            <td class="menu"><div align="center"><a href="deletenotice.php"><span class="style2">Delete notice</span></a></div></td>
          </tr>
		   <tr>
            <td class="menu"><div align="center"><a href="modifynotice.php"><span class="style2">Modify notice</span></a></div></td>
          </tr>
		   
          </table>
      <td width="173"><div align="center" class="style3"><a href="result.php"><font color="#ff9933">Results</font></a></div></td>
      <td width="102"><div align="center" class="style3"><a href="logout.php"><font color="#ff9933">Sign out</font></a></div></td>
    </tr>
</table>
  <table width="900" height="56" border="0" align="center" bgcolor="#FFFFFF">
    <tr>
      <td width="38" height="52">&nbsp;</td>
      <td width="812"><div align="center"><img src="image/modnotice.png" width="158" height="40"></div></td>
      <td width="36">&nbsp;</td>
    </tr>
  </table>
  <?php
  if(session_id()=='')
session_start();
$con2=mysql_connect("localhost","root","");
				if (!$con2)
 				 {
 					  die('Could not connect: ' .mysql_error());
 		 		 }
					mysql_select_db("onlineexamination", $con2);
					
					mysql_query("update notice set noticeid='$_POST[t2]',noticedate='$_POST[t3]',notice='$_POST[t4]'");
					
					
					mysql_close($con2);
echo "<p align=center><font color=#0000ff> Updated Successfully</font></p>";
?>