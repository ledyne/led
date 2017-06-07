<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("Location: ../main/ledindex.php");
}
$user=$_SESSION['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Daniel Le ver001">
	<title>PSAT - Home Page</title>
	<link rel="stylesheet" href="../css/style.css?<?php echo time(); ?>" type="text/css" />
</head>
<body>
	<div id="header">
		<div id="lHeader">
			<lable> PSAT - PAC System Automation Testing</lable>
		</div>
		<div id="rHeader">
			<div id="content">
				Hi' <?php echo $user; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
			</div>
		</div>
	</div>
	<div id="navMenu">
		<?php
			include("navMenu.html");
		?>
	</div>
	<div id="Menu">
			<?php

			?>
	</div>
</body>
</html>