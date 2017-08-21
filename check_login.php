<?php
session_start();
include_once("config.php");

$loginusername	= mysql_real_escape_string($_POST['login-email']);
$loginpassword 	= mysql_real_escape_string($_POST['login-password']);

$checkuser = mysql_query("SELECT * FROM users where username='$loginusername'");
$rowcheckuser = mysql_num_rows($checkuser);

if($rowcheckuser == TRUE)
{
	$result = mysql_query("SELECT password,role FROM users where username='$loginusername'");
	$row	= mysql_fetch_array($result);
	$role=$row['role'];
	if(sha1($loginpassword) != $row['password'])
	{
		$_SESSION['msg']=4;
		echo '<script>document.location.href="index.php" </script>';
	}
	else
	{
		$updatequery=mysql_query("UPDATE users SET updated_at=NOW() WHERE username='$loginusername'");
		$_SESSION['loginusername']=$loginusername;
		$_SESSION['role']=$role;
		if($role=='Staff')
		{
			header("Location:staff/index.php?site=dashboard");
		}
		else if($role=='Immigration')
		{
			header("Location:immigration/index.php?site=dashboard");
		}
		else
		{
			header("Location:passenger/index.php?site=dashboard");
		}

	}

}
else
{
	$_SESSION['msg']=5;
	echo '<script>document.location.href="index.php" </script>';
}
?>