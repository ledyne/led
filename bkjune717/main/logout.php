<?php
//logout.php
//<meta name="author" content="Daniel Le ver001">
session_start();

if(!isset($_SESSION['user']))
{
 	header("Location: ../main/ledindex.php");
}
else if(isset($_SESSION['user'])!="")
{
 	header("Location: ../main/home.php");
}

if(isset($_GET['logout']))
{
 	session_destroy();
 	unset($_SESSION['user']);
 	header("Location: ../main/ledindex.php");
}
?>