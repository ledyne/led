<?php
//php userlog.php to insert user info to userlogtbl
//<meta name="author" content="Daniel Le ver001">
include_once('../conf/dbinfo.inc.php');


if(isset($_SESSION['user'])!="")
{
 	header("Location: ../main/home.php");
}


//Track user logged on to the server
function trackuser($user)
{
	$query = "INSERT INTO userlogtbl VALUES ('','$user',now())";
	mysql_query($query);
	//echo "New Record Added";
	mysql_close();
}
?>