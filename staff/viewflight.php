<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
$sql_detail = mysql_query("SELECT * FROM flight_details WHERE id = '".$id."'");
$rows_detail = mysql_fetch_array($sql_detail);
$sql_pass = mysql_query("SELECT * FROM passenger WHERE id = '".$rows_detail['pass_id']."'");
$rows_pass = mysql_fetch_array($sql_pass);
?>
<!-- Forms General Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="gi gi-show_big_thumbnails"></i>Detail Flight
        </h1>
    </div>
</div>
<ul class="breadcrumb breadcrumb-top">
    <li>Dashboard</li>
    <li><a href="?site=createflight">Detail Flight</a></li>
</ul>
<!-- END Forms General Header -->

<div class="row">
    <div class="col-md-12">
        <!-- Basic Form Elements Block -->
        <div class="block">
            <!-- Basic Form Elements Title -->
            <div class="block-title">
                <h2><strong>Detail</strong> Flight</h2>
            </div>
            <!-- END Form Elements Title -->

            <!-- Basic Form Elements Content -->
            <div class="form-horizontal form-bordered">
                <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Name</label>
                    <div class="col-md-9">
                        <p class="form-control-static"><?php echo $rows_pass['first_name']." ".$rows_pass['last_name']; ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="ic_no">Identification Card</label>
                    <div class="col-md-9">
                        <p class="form-control-static"><?php echo $rows_pass['ic_no']; ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="telephone_no">Telephone Number</label>
                    <div class="col-md-9">
                        <p class="form-control-static"><?php echo $rows_pass['telephone_no']; ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="email">Email</label>
                    <div class="col-md-9">
                        <p class="form-control-static"><?php echo $rows_pass['email']; ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="booking_no">Booking Number</label>
                    <div class="col-md-9">
                        <p class="form-control-static"><?php echo $rows_detail['booking_no']; ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="total_paid">Total Paid (RM)</label>
                    <div class="col-md-9">
                        <p class="form-control-static">RM <?php echo $rows_detail['total_paid']; ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="booking_date">Booking Date</label>
                    <div class="col-md-9">
                       <p class="form-control-static"><?php echo $rows_detail['booking_date']; ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="flight_type">Flight Name</label>
                    <div class="col-md-9">
                        <p class="form-control-static"><?php echo $rows_detail['flight_type']; ?></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 control-label" for="flight_no">Flight No</label>
                    <div class="col-md-9">
                        <p class="form-control-static"><?php echo $rows_detail['flight_no']; ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="flight_route_from">Flight Route</label>
                    <div class="col-md-9">
                        <p class="form-control-static"><?php echo $rows_detail['flight_route']; ?></p>
                    </div>
                </div>

                <div class="form-group">
                <label class="col-md-3 control-label" for="flight_depart_date">Departure Date &amp; Time</label>
                    <div class="col-md-9">
                        <p class="form-control-static"><?php echo $rows_detail['flight_depart']; ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="flight_arrival_date">Arrival Date &amp; Time</label>
                    <div class="col-md-9">
                        <p class="form-control-static"><?php echo $rows_detail['flight_arrival']; ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="flight_arrival_date">Checkin Status</label>
                    <div class="col-md-9">
                        <p class="form-control-static"><?php echo $rows_detail['checkin']; ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="flight_arrival_date">Checkout Status</label>
                    <div class="col-md-9">
                        <p class="form-control-static"><?php echo $rows_detail['checkout']; ?></p>
                    </div>
                </div>

                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <a href="?site=reportticket"><button type="submit" class="btn btn-sm btn-info"><i class="fa fa-angle-left"></i> Back</button></a>
                    </div>
                </div>

            </div>
            <!-- END Basic Form Elements Content -->
        </div>
        <!-- END Basic Form Elements Block -->

    </div>
</div>