<?php
session_start();
require ("../config.php");
$currentpasswordreg = sha1($_POST['currentpasswordreg']);
$passwordreg = sha1($_POST['passwordreg']);
$cpasswordreg = sha1($_POST['cpasswordreg']);

if($passwordreg != $cpasswordreg) {

	header("Location:index.php?site=profile&msg=4");
}
else
{
	$chckpass = mysql_query("SELECT password FROM users WHERE username='".$_SESSION['loginusername']."'");
	$rowpass = mysql_fetch_array($chckpass);
	$current1=$rowpass['password'];
	if($current1==$currentpasswordreg)
	{

		$updatepass= mysql_query("UPDATE users SET password='$passwordreg' WHERE username='".$_SESSION['loginusername']."'");
		header("Location:index.php?site=profile&msg=3");
	}
	else
	{
		header("Location:index.php?site=profile&msg=5");
	}
}
?>