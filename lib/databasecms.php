<?php
//php database class function to access mysql databases
//<meta name="author" content="Daniel Le ver001">
class databaseCMS
{
	var $host;
	var $username;
	var $password;
	var $databaseName;

	#Connect to the database
	public function dbConnect()
	{
		mysql_connect($this->host,$this->username,$this->password) or die("Could not connect???" . mysql_error());
		mysql_select_db($this->databaseName) or die("Could not select database." . mysql_error());

		return true;
	}
}
?>