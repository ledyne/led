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
	public $con;
	public function dbConnect()
	{
		//mysql_connect($this->host,$this->username,$this->password) or die("Could not connect???" . mysql_error());
		//mysql_select_db($this->databaseName) or die("Could not select database." . mysql_error());

		//Make connection
		$con = mysqli_connect($this->host,$this->username,$this->password,$this->databaseName);

		// Check connection
		if (mysqli_connect_errno())
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}
  		else
  		{
  			return true;
  			return $con;
  		}
	}
}
?>