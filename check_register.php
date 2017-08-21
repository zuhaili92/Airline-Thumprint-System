<?php
session_start();
include('config.php');

/* RETRIEVE DATA FROM REGISTRATION FORM */

$firstname = mysql_real_escape_string($_POST['reg-firstname']);
$lastname = mysql_real_escape_string($_POST['reg-lastname']);
$noic = mysql_real_escape_string($_POST['reg-noic']);
$gender = mysql_real_escape_string($_POST['reg-gender']);
$address = mysql_real_escape_string($_POST['reg-address']);
$phone = mysql_real_escape_string($_POST['reg-phone']);
$email = mysql_real_escape_string($_POST['reg-email']);
$password = mysql_real_escape_string($_POST['reg-password']);
$passwordverify = mysql_real_escape_string($_POST['reg-password-verify']);


if($firstname != '' && $lastname != '' && $noic != '' && $gender != '' && $address != ''  && $phone != '' && $email != '' && $password != '' && $passwordverify != '')
{
	$result = mysql_query("SELECT username FROM users WHERE username = '".$email."'");
	$checkuser = mysql_num_rows($result);

	if($checkuser==0)
	{
		$result_ic = mysql_query("SELECT ic_no FROM passenger WHERE ic_no = '".$noic."'");
		$checkuic = mysql_num_rows($result_ic);
		if($checkuic==0)
		{
			$insertreglog=mysql_query("INSERT INTO users (username, password, role, created_at) VALUES ('$email', '".sha1($password)."', 'Passenger', now())");
			$userid=mysql_insert_id();
			$insertregcust=mysql_query("INSERT INTO passenger(user_id, first_name, last_name, ic_no, gender, address, telephone_no, email, created_at) VALUES 
				('".$userid."', '".$firstname."', '".$lastname."', '".$noic."', '".$gender."', '".$address."', '".$phone."', '".$email."', NOW())");
			$_SESSION['msg']=1;
			header("Location:index.php");
		}
		else
		{
			$_SESSION['msg']=7;
			header("Location:index.php#register");
		}
	}
	else
	{
		$_SESSION['msg']=2;
		header("Location:index.php#register");
	}
}
else
{
		$_SESSION['msg']=3;
		header("Location:index.php#register");
}
