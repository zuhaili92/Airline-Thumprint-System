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
    <li><a href="?site=checkout">Check Out</a></li>
</ul>
<!-- END Forms General Header -->

<div class="row">
    <div class="col-md-12">
        <!-- Basic Form Elements Block -->
        <div class="block">
            <!-- Basic Form Elements Title -->
            <div class="block-title">
                <h2><strong>Check Out</strong></h2>
            </div>
            <!-- END Form Elements Title -->
            <?php if ($msg==1) { ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="fa fa-times-circle"></i> Error</h4> Please fill in the blanks, Thank you.
                </div>
                <?php } ?>
            <!-- Basic Form Elements Content -->
            <form action="index.php?site=search_data_out" method="post" class="form-horizontal form-bordered">
                <div class="form-group">
                    <label class="col-md-3 control-label" for="booking_no">Booking No</label>
                    <div class="col-md-9">
                        <input type="text" id="booking_no" name="booking_no" style="text-transform:uppercase;" class="form-control" required="true" >
                        <span class="help-block">Example : A8CURV</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="thumb_id">Thumbprint</label>
                    <div class="col-md-9">
                        <input type="text" id="thumb_id" name="thumb_id" style="text-transform:uppercase;" class="form-control" required="true" >
                        <span class="help-block">Example : 81282645671254182</span>
                    </div>
                </div>

                
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Check Out</button>
                        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                    </div>
                </div>
            </form>
            <!-- END Basic Form Elements Content -->
        </div>
        <!-- END Basic Form Elements Block -->

    </div>
</div>