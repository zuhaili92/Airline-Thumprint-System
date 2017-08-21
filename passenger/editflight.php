 <?php
 $id = isset($_GET['id']) ? $_GET['id'] : '';
 $sql_detail = mysql_query("SELECT * FROM flight_details WHERE id = '".$id."'");
 $rows_detail = mysql_fetch_array($sql_detail);

$edit_booking_date = date_create($rows_detail['booking_date']);
$new_booking_date = date_format($edit_booking_date, "d-m-Y");

$flight_route = explode(" - " ,$rows_detail['flight_route']);

$edit_flight_depart_date = date_create($rows_detail['flight_depart']);
$new_flight_depart_date = date_format($edit_flight_depart_date, "d-m-Y");

$edit_flight_depart_time = date_create($rows_detail['flight_depart']);
$new_flight_depart_time = date_format($edit_flight_depart_time, "H:i:s");

$edit_flight_arrival_date = date_create($rows_detail['flight_arrival']);
$new_flight_arrival_date = date_format($edit_flight_arrival_date, "d-m-Y");

$edit_flight_arrival_time = date_create($rows_detail['flight_arrival']);
$new_flight_arrival_time = date_format($edit_flight_arrival_time, "H:i:s");
 ?>
 <!-- Forms General Header -->
 <div class="content-header">
    <div class="header-section">
        <h1>
            <i class="gi gi-notes"></i>Edit Flight
        </h1>
    </div>
</div>
<ul class="breadcrumb breadcrumb-top">
    <li>Dashboard</li>
    <li><a href="?site=createflight">Edit Flight</a></li>
</ul>
<!-- END Forms General Header -->

<div class="row">
    <div class="col-md-12">
        <!-- Basic Form Elements Block -->
        <div class="block">
            <!-- Basic Form Elements Title -->
            <div class="block-title">
                <h2><strong>Flight Detail</strong> Form</h2>
            </div>
            <!-- END Form Elements Title -->

            <!-- Basic Form Elements Content -->
            <form action="process_editflight.php" method="post" class="form-horizontal form-bordered">
                <?php if($msg==1) { ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="fa fa-times-check"></i> Success</h4> Flight Details have been updated successfully.
                </div>
                <?php } elseif ($msg==2) { ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="fa fa-times-circle"></i> Error</h4> Please fill in the blanks, Thank you.
                </div>
                <?php } ?>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="booking_no">Booking Number</label>
                    <div class="col-md-9">
                    <input type="text" id="booking_no" name="booking_no" style="text-transform:uppercase;" value="<?php echo $rows_detail['booking_no']; ?>" class="form-control" >
                        <span class="help-block">Example : A8CURV</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="total_paid">Total Paid (RM)</label>
                    <div class="col-md-9">
                        <input type="number" step="0.01" id="total_paid" name="total_paid" class="form-control" value="<?php echo $rows_detail['total_paid']; ?>" >
                        <span class="help-block">Example : 499.16</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="booking_date">Booking Date</label>
                    <div class="col-md-9">
                        <input type="text" id="booking_date" name="booking_date" class="form-control input-datepicker" data-date-format="dd-mm-yyyy" value="<?php echo $new_booking_date; ?>" placeholder="dd-mm-yyyy" >
                        <span class="help-block">Example : dd-mm-yyyy</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="flight_type">Flight Name</label>
                    <div class="col-md-9">
                        <input type="text" id="flight_type" name="flight_type" class="form-control" value="<?php echo $rows_detail['flight_type']; ?>"  >
                        <span class="help-block">Example : MAS</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="flight_no">Flight No</label>
                    <div class="col-md-9">
                        <input type="text" id="flight_no" name="flight_no" class="form-control" value="<?php echo $rows_detail['flight_no']; ?>" >
                        <span class="help-block">Example : AK 703</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="flight_route_from">Flight Route From</label>
                    <div class="col-md-9">
                        <input type="text" id="flight_route_from" name="flight_route_from" value="<?php echo $flight_route[0]; ?>" class="form-control" >
                        <span class="help-block">Example : Kuala Lumpur (KUL)</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="flight_route_to">Flight Route To</label>
                    <div class="col-md-9">
                        <input type="text" id="flight_route_to" name="flight_route_to" value="<?php echo $flight_route[1]; ?>" class="form-control" >
                        <span class="help-block">Example : Singapore (SIN)</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="flight_depart_date">Date Departure</label>
                    <div class="col-md-9">
                        <input type="text" id="flight_depart_date" name="flight_depart_date" class="form-control input-datepicker" value="<?php echo $new_flight_depart_date; ?>" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" >
                        <span class="help-block">Example : dd-mm-yyy</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="flight_depart_time">Time Departure</label>
                    <div class="col-md-3">
                        <div class="input-group bootstrap-timepicker">
                            <input type="text" id="flight_depart_time" name="flight_depart_time" class="form-control input-timepicker24" value="<?php echo $new_flight_depart_time; ?>">
                            <span class="input-group-btn">
                                <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-clock-o"></i></a>
                            </span>
                        </div>
                        <span class="help-block">Example : hh:mm:ss</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="flight_arrival_date">Date Arrival</label>
                    <div class="col-md-9">
                        <input type="text" id="flight_arrival_date" name="flight_arrival_date" class="form-control input-datepicker" data-date-format="dd-mm-yyyy" value="<?php echo $new_flight_arrival_date; ?>" placeholder="dd-mm-yyyy" >
                        <span class="help-block">Example : dd-mm-yyy</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="flight_arrival_time">Time Arrival</label>
                    <div class="col-md-3">
                        <div class="input-group bootstrap-timepicker">
                            <input type="text" id="flight_arrival_time" name="flight_arrival_time" value="<?php echo $new_flight_arrival_time; ?>" class="form-control input-timepicker24">
                            <span class="input-group-btn">
                                <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-clock-o"></i></a>
                            </span>
                        </div>
                        <span class="help-block">Example : hh:mm:ss</span>
                    </div>
                </div>

                
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                    </div>
                </div>
            </form>
            <!-- END Basic Form Elements Content -->
        </div>
        <!-- END Basic Form Elements Block -->

    </div>
</div>