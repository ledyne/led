<?php
//php function to perform LDAP authenticate
//<meta name="author" content="Daniel Le ver001">
function authenticate($user, $password)
{
	//Check to see if empty $user or empty $password provided
	if(empty($user) || empty($password)) return false;

	//Active LDAP server host & domain
	$ldaphost   = "ldap.mascorp.com";
	$ldapdomain = "mascorp";

	//Connect to Active LDAP server host
	$ldapconn = ldap_connect($ldaphost);

	//Verify user and password
	if (!$ldapconn) {
	                $msg = 'Connection to Auth Server '.$ldaphost.' failed!';
	                //trigger_error($msg.'. Username='.$user);
	} else {
	                $username = $ldapdomain ? $ldapdomain.'\\'.$user : $user;
	                if ($ldapconn && !empty($username) && !empty($password) && ldap_bind($ldapconn, $username, $password)) {
	                                return true;
	                } else {
	                                return false;
	                }
	}
ldap_unbind($ldapconn);
}
?>