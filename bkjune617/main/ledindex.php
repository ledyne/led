<?php
session_start();
include("../lib/authenticate.php");

if(isset($_SESSION['user'])!="")
{
 	header("Location: ../main/home.php");
}

//Check to see if login form has been submitted
if(isset($_POST['btn-login'])) {
	//Run through authenticate function from authenticate.php
	if(authenticate($_POST['user'],$_POST['password']))
	{
		//Authenticate passed
		$_SESSION['user'] = $_POST['user'];
		header("Location: ../main/home.php");
		die();
	} else {
		//Authenticate failed
		$error = 1;
	}
}

if(isset($error)) echo "Login failed: Incorrect user name, password";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Daniel Le ver001">
	<title>PSAT - LDAP Login</title>
	<link rel="stylesheet" href="../css/style.css?<?php echo time(); ?>" type="text/css" />
	<script src="../js/t.js" type="text/javascript"></script>
</head>
<body>
	<center>
		<div id="login-form">
			<form method="post" autocomplete="off">
				<table align="center" width="50%" border="0">
					<tr>
						<td><input type="text" name="user" placeholder="Username" autocomplete="off" /></td>
					</tr>
					<tr>
						<td><input type="password" name="password" placeholder="Password" autocomplete="off" /></td>
					</tr>
					<tr>
						<td><button type="submit" name="btn-login">Log in</button></td>
					</tr>
				</table>
			</form>
		</div>
	</center>
</body>
</html>
