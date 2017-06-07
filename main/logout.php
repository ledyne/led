<?php
session_start();
//logout.php

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