<?php
//php database info
//<meta name="author" content="Daniel Le ver001">

include_once('../lib/databasecms.php');

#
$psatObj = new databaseCMS();
$psatObj->host = 'localhost';
$psatObj->username = 'psat';
$psatObj->password = 'nonenone';
$psatObj->databaseName = 'psat';
$psatObj->dbConnect();
?>
