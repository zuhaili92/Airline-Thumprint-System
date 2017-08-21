<?php
session_start();
require ("../config.php");
$loginusername= isset($_SESSION['loginusername']) ? $_SESSION['loginusername'] : '';

$sqlinfo=mysql_query("SELECT * FROM imigration WHERE email='".$loginusername."'");
$datainfo=mysql_fetch_array($sqlinfo);


$first_name = mysql_real_escape_string($_POST['first_name']);
$last_name = mysql_real_escape_string($_POST['last_name']);
$ic_no = mysql_real_escape_string($_POST['ic_no']);
$gender = mysql_real_escape_string($_POST['gender']);
$telephone_no = mysql_real_escape_string($_POST['telephone_no']);

if($first_name != '' && $last_name != '' && $ic_no != '' && $gender != '' && $telephone_no != '')
{
	$query = mysql_query("UPDATE imigration SET first_name = '".$first_name."', last_name = '".$last_name."', ic_no = '".$ic_no."', gender = '".$gender."', telephone_no = '".$telephone_no."'
		WHERE id = '".$datainfo['id']."'");
	header("Location:index.php?site=profile&msg=1");
}
else
{
	header("Location:index.php?site=profile&msg=2");
}

?>