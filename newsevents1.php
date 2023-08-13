<title>hospitality</title><?php
$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			die('could not connect:'.mysql_error());
		}
			
		mysql_select_db("healthcare",$con);
		 $sql="INSERT INTO news(newsid,newsdate,news)VALUES('$_POST[z1]','$_POST[z2]','$_POST[z3]')";
		if(!mysql_query($sql,$con))
		{
		die('error:' .mysql_error());
		}
		
		mysql_close($con);
		echo "record inserted ";
?>
