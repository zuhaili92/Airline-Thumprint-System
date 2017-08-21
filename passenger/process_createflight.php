<?php
session_start();
require ("../config.php");
$loginusername= isset($_SESSION['loginusername']) ? $_SESSION['loginusername'] : '';

$sqlinfo=mysql_query("SELECT * FROM passenger WHERE email='".$loginusername."'");
$datainfo=mysql_fetch_array($sqlinfo);

$booking_no = mysql_real_escape_string($_POST['booking_no']);
$total_paid = mysql_real_escape_string($_POST['total_paid']);
$booking_date = mysql_real_escape_string($_POST['booking_date']);
$flight_no = mysql_real_escape_string($_POST['flight_no']);
$flight_type = mysql_real_escape_string($_POST['flight_type']);
$flight_route_from = mysql_real_escape_string($_POST['flight_route_from']);
$flight_route_to = mysql_real_escape_string($_POST['flight_route_to']);
$flight_depart_date = mysql_real_escape_string($_POST['flight_depart_date']);
$flight_depart_time = mysql_real_escape_string($_POST['flight_depart_time']);
$flight_arrival_date = mysql_real_escape_string($_POST['flight_arrival_date']);
$flight_arrival_time = mysql_real_escape_string($_POST['flight_arrival_time']);

if($booking_no != '' && $total_paid != '' && $booking_date != '' && $flight_no != '' && $flight_type != '' && $flight_route_from != '' && $flight_route_to != ''
	&& $flight_depart_date != '' && $flight_depart_time != '' && $flight_arrival_date != '' && $flight_arrival_time != '')
{
$edit_booking_date = date_create($booking_date);
$new_booking_date = date_format($edit_booking_date, "Y-m-d");

$flight_route = $flight_route_from." - ".$flight_route_to; // Flight route

$flight_depart_datetime = $flight_depart_date." ".$flight_depart_time;
$flight_arrival_datetime = $flight_arrival_date." ".$flight_arrival_time;

$edit_flight_depart_datetime = date_create($flight_depart_datetime);
$new_flight_depart_datetime = date_format($edit_flight_depart_datetime, "Y-m-d H:i:s"); //datetime departure
$edit_flight_arrival_datetime = date_create($flight_arrival_datetime);
$new_flight_arrival_datetime = date_format($edit_flight_arrival_datetime, "Y-m-d H:i:s"); //datetime arrival

$query = mysql_query("INSERT INTO flight_details (pass_id, booking_no, total_paid, booking_date, flight_no, flight_type, flight_route, flight_depart, flight_arrival, checkin, checkout, created_at)
	VALUES ('".$datainfo['id']."', '".strtoupper($booking_no)."', '".$total_paid."', '".$new_booking_date."', '".$flight_no."', '".$flight_type."', '".$flight_route."', '".$new_flight_depart_datetime."', '".$new_flight_arrival_datetime."', 'Pending', 'Pending', NOW())");
header("Location:index.php?site=createflight&msg=1");
//Success

}
else
{
	header("Location:index.php?site=createflight&msg=2");
//Error
}
?>