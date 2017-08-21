<?php

/*
Connection with MYSQL
 */

$con = mysql_connect("localhost", "root", "") or die("Can't connect to database server");
$dbselect = mysql_select_db("flightv2",$con);

?>