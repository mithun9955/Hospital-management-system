<?php
if(session_id()=='')
session_start();
else
$_SESSION['uname']=$_SESSION['uname'];
?>
WELCOME Mr.<?php if( session_id()!='')
	echo $_SESSION['uname'];?>