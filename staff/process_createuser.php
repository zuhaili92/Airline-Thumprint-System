<?php
session_start();
include('../config.php');

/* RETRIEVE DATA FROM REGISTRATION FORM */

$firstname = mysql_real_escape_string($_POST['first_name']);
$lastname = mysql_real_escape_string($_POST['last_name']);
$noic = mysql_real_escape_string($_POST['ic_no']);
$gender = mysql_real_escape_string($_POST['gender']);
$phone = mysql_real_escape_string($_POST['telephone_no']);
$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['passwordreg']);
$passwordverify = mysql_real_escape_string($_POST['cpasswordreg']);


if($firstname != '' && $lastname != '' && $noic != '' && $gender != ''  && $phone != '' && $email != '' && $password != '' && $passwordverify != '')
{
	$result = mysql_query("SELECT username FROM users WHERE username = '".$email."'");
	$checkuser = mysql_num_rows($result);

	if($checkuser==0)
	{
		$result_ic = mysql_query("SELECT ic_no FROM imigration WHERE ic_no = '".$noic."'");
		$checkuic = mysql_num_rows($result_ic);
		if($checkuic==0)
		{
			$insertreglog=mysql_query("INSERT INTO users (username, password, role, created_at) VALUES ('$email', '".sha1($password)."', 'Immigration', now())");
			$userid=mysql_insert_id();
			$insertregcust=mysql_query("INSERT INTO imigration(user_id,first_name, last_name, ic_no, telephone_no, gender, email, created_at) VALUES 
				('".$userid."', '".strtoupper($firstname)."', '".strtoupper($lastname)."', '".$noic."', '".$phone."','".$gender."', '".$email."', NOW())");

			header("Location:index.php?site=createuser&msg=1");
		}
		else
		{

			header("Location:index.php?site=createuser&msg=4");
		}
	}
	else
	{

		header("Location:index.php?site=createuser&msg=2");
	}
}
else
{
		header("Location:index.php?site=createuser&msg=3");
}
