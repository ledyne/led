<?php
	$lru = $gatewayName = '';
	$gwUser = 'user';
	$gwPwd = 'user123';

	//Check to see if button send form has been submitted
	if(isset($_POST['rebootLRUSubmit'])) {
		$gatewayName = cleanInput($_POST['gatewayName']);
		$lru = cleanInput($_POST['lru']);
		//echo "$gatewayName";
		//echo "$lru";
		connectGateway($gatewayName,$gwUser,$gwPwd);
		//test1($gatewayName);
}

function connectGateway($gatewayName,$gwUser,$gwPwd)
{
	if ($connection = ssh2_connect($gatewayName, 22))
		{
			ssh2_auth_password($connection, $gwUser, $gwPwd);
			echo 'connected to gateway - '.$gatewayName;
		}
		else
		{
			echo 'cannot connect to gateway -'.$gatewayName;
		}
}
function test1($gatewayName)
{
  $gatewayName = cleanInput($_POST['gatewayName']);
  //$gatewayName = 'ek9';
  $cmd = 'ping '.$gatewayName;

  $output = shell_exec($cmd);

  echo "<pre>$output</pre>";
  echo "$gatewayName";
}

function cleanInput($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>AUST - Login</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
	<table>
		<form method="post">
			<tr>
				<th> Reboot LRU </th>
					<td>
						LRU: <input type="text" name="lru" value="<?php echo $lru;?>"/>
					</td>
					<td>
						Gateway name: <input type="text" name="gatewayName" value="<?php echo $gatewayName;?>"/>
					</td>
					<td id="submitCell">
					<input type="submit" name="rebootLRUSubmit" value="Send">
					</td>
			</tr>
		</table>
</body>
</html>