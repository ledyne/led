<?php
//session_start();
//Already called from other page so do not need or else will get warning:
//Notice: A session had already been started - ignoring session_start() in C:\xampp\htdocs\led\main\userlog.php
//php userlog.php to insert user info to userlogtbl
//<meta name="author" content="Daniel Le ver001">


if(isset($_SESSION['user'])!="")
{
 	header("Location: ../main/home.php");
}


//Track user logged on to the server
function trackuser($user)
{
	$host = 'localhost';
	$username = 'psat';
	$password= 'nonenone';
	$databaseName = 'psat';
	$con = mysqli_connect($host,$username,$password,$databaseName) or die("Could not connect???" . mysqli_error($con));
	$query = "INSERT INTO userlogtbl VALUES ('','$user',now())";
	mysqli_query($con, $query);
	//echo "New Record Added";
	mysqli_close($con);
}
//trackuser($user);
?>
