
<!-- Datatables Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Report Passenger Ticket Detail
        </h1>
    </div>
</div>
<ul class="breadcrumb breadcrumb-top">
    <li>Dashboard</li>
    <li><a href="?site=ticketdetail">Report Passenger Ticket Detail</a></li>
</ul>
<!-- END Datatables Header -->

<!-- Datatables Content -->
<div class="block full">
    <div class="block-title">
        <h2><strong>Report Passenger</strong> Ticket Detail</h2>
    </div>


    <div class="table-responsive">
        <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
            <thead>
                <tr>
                    <th class="text-center" width="5%">Booking No</th>
                    <th width="15%">Flight Route</th>
                    <th width="15%">Departure</th>
                    <th width="15%">Arrival</th>
                    <th class="text-center" width="5%">Checkin</th>
                    <th class="text-center" width="5%">Checkout</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $sql_flight = mysql_query("SELECT * FROM flight_details WHERE pass_id = '".$datainfo['id']."'");
                while($rows_flight = mysql_fetch_array($sql_flight)) {
                    ?>
                    <tr>
                        <td class="text-center">
                        <a href="?site=viewflights&amp;id=<?php echo $rows_flight['id']; ?>">
                        <button type="button" class="btn btn-sm btn-link"><?php echo $rows_flight['booking_no']; ?></button>
                        </a>
                        </td>
                        <td class="text-center"><?php echo $rows_flight['flight_route']; ?></td>
                        <td class="text-center"><?php echo $rows_flight['flight_depart']; ?></td>
                        <td class="text-center"><?php echo $rows_flight['flight_arrival']; ?></td>
                        <td class="text-center"><?php echo $rows_flight['checkin']; ?></td>
                        <td class="text-center"><?php echo $rows_flight['checkout']; ?></td>
                    </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Datatables Content -->