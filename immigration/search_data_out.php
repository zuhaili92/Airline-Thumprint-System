 <?php
 $thumb_id = isset($_POST['thumb_id']) ? $_POST['thumb_id'] : '';
 $booking_no = isset($_POST['booking_no']) ? $_POST['booking_no'] : '';

 if($thumb_id != '' AND $booking_no != '')
 {
    $blcheck = mysql_query("SELECT * FROM blacklist WHERE thumb_id = '".$thumb_id."'");
    $rowblcheck = mysql_num_rows($blcheck);
    
    $wlcheck = mysql_query("SELECT * FROM wantedlist WHERE thumb_id = '".$thumb_id."'");
    $rowwlcheck = mysql_num_rows($wlcheck);
    
    if($rowblcheck == TRUE || $rowwlcheck == TRUE)
    {
        $sqlup = mysql_query("UPDATE flight_details SET checkout = 'Not Pass' WHERE booking_no = '".$booking_no."'");
    }
    else
    {
        $sqlup = mysql_query("UPDATE flight_details SET checkout = 'Pass' WHERE booking_no = '".$booking_no."'");
    }
    $sql_flight = mysql_query("SELECT * FROM flight_details WHERE booking_no = '".$booking_no."'");
    $rows_flight = mysql_fetch_array($sql_flight);
}
else
{
    header("Location: index.php?site=checkout&msg=1");
}

?>
<!-- Forms General Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="gi gi-notes_2"></i>Check Out
        </h1>
    </div>
</div>
<ul class="breadcrumb breadcrumb-top">
    <li>Dashboard</li>
    <li><a href="?site=checkin">Check Out</a></li>
</ul>
<!-- END Forms General Header -->

<div class="row">
    <div class="col-md-12">
        <!-- Basic Form Elements Block -->
        <div class="block">
            <!-- Basic Form Elements Title -->
            <div class="block-title">
                <h2><strong>Passenger Detail</strong> Flight</h2>
            </div>
            <!-- END Form Elements Title -->

            <!-- Basic Form Elements Content -->
            <div class="form-horizontal form-bordered">
                <div class="form-group">
                    <label class="col-md-3 control-label" for="booking_no">Booking Number</label>
                    <div class="col-md-9">
                        <p class="form-control-static"><?php echo $rows_flight['booking_no']; ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="total_paid">Total Paid (RM)</label>
                    <div class="col-md-9">
                        <p class="form-control-static">RM <?php echo $rows_flight['total_paid']; ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="booking_date">Booking Date</label>
                    <div class="col-md-9">
                       <p class="form-control-static"><?php echo $rows_flight['booking_date']; ?></p>
                   </div>
               </div>

               <div class="form-group">
                <label class="col-md-3 control-label" for="flight_no">Flight No</label>
                <div class="col-md-9">
                    <p class="form-control-static"><?php echo $rows_flight['flight_no']; ?></p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="flight_route_from">Flight Route</label>
                <div class="col-md-9">
                    <p class="form-control-static"><?php echo $rows_flight['flight_route']; ?></p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="flight_depart_date">Departure Date &amp; Time</label>
                <div class="col-md-9">
                    <p class="form-control-static"><?php echo $rows_flight['flight_depart']; ?></p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="flight_arrival_date">Arrival Date &amp; Time</label>
                <div class="col-md-9">
                    <p class="form-control-static"><?php echo $rows_flight['flight_arrival']; ?></p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="flight_arrival_date">Checkin Status</label>
                <div class="col-md-9">
                    <p class="form-control-static"><?php echo $rows_flight['checkin']; ?></p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="flight_arrival_date">Checkout Status</label>
                <div class="col-md-9">
                    <p class="form-control-static"><?php echo $rows_flight['checkout']; ?></p>
                </div>
            </div>

            <div class="form-group form-actions">
                <div class="col-md-9 col-md-offset-3">
                    <a href="?site=checkout"><button type="submit" class="btn btn-sm btn-info"><i class="fa fa-angle-left"></i> Back</button></a>
                </div>
            </div>

        </div>
        <!-- END Basic Form Elements Content -->
    </div>
    <!-- END Basic Form Elements Block -->

</div>
</div>






<div class="row">
    <div class="col-md-12">
        <!-- Basic Form Elements Block -->
        <div class="block">
            <!-- Basic Form Elements Title -->
            <div class="block-title">
                <h2><strong>Black List</strong></h2>
            </div>
            <!-- END Form Elements Title -->
            <div class="table-responsive">
                <table class="table table-vcenter table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="text-center">Identication No</th>
                            <th class="text-center">Thumbprint ID</th>
                            <th>Type Problem</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if($rowblcheck == TRUE)
                        {
                            while($rowsbl = mysql_fetch_array($blcheck)) { ?>
                            <tr>
                                <td><?php echo $rowsbl['name']; ?></td>
                                <td><?php echo $rowsbl['ic_no']; ?></td>
                                <td><?php echo $rowsbl['thumb_id']; ?></td>
                                <td><?php echo $rowsbl['type']; ?></td>
                                <td><?php echo $rowsbl['description']; ?></td>  
                            </tr>
                            <?php } 
                        }
                        else { ?>
                        <tr>
                            <td colspan="5" class="text-center"><h4>Record Not Found</h4></td>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Basic Form Elements Block -->

    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <!-- Basic Form Elements Block -->
        <div class="block">
            <!-- Basic Form Elements Title -->
            <div class="block-title">
                <h2><strong>Wanted List</strong></h2>
            </div>
            <!-- END Form Elements Title -->

            <div class="table-responsive">
                <table class="table table-vcenter table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="text-center">Identication No</th>
                            <th class="text-center">Thumbprint ID</th>
                            <th>Type Problem</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php
                     if($rowwlcheck == TRUE)
                     {
                         while($rowswl = mysql_fetch_array($wlcheck)) { ?>
                         <tr>
                            <td><?php echo $rowswl['name']; ?></td>
                            <td><?php echo $rowswl['ic_no']; ?></td>
                            <td><?php echo $rowswl['thumb_id']; ?></td>
                            <td><?php echo $rowswl['type']; ?></td>
                            <td><?php echo $rowswl['description']; ?></td>  
                        </tr>
                        <?php } 
                    }
                    else { ?>
                    <tr>
                        <td colspan="5" class="text-center"><h4>Record Not Found</h4></td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
    <!-- END Basic Form Elements Block -->

</div>
</div>