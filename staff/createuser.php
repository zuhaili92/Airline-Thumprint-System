 <!-- Forms General Header -->
 <div class="content-header">
    <div class="header-section">
        <h1>
            <i class="gi gi-notes_2"></i>Create Immigration User
        </h1>
    </div>
</div>
<ul class="breadcrumb breadcrumb-top">
    <li>Dashboard</li>
    <li><a href="?site=createuser">Create Immigration User</a></li>
</ul>
<!-- END Forms General Header -->

<div class="row">
    <div class="col-md-12">
        <!-- Basic Form Elements Block -->
        <div class="block">
            <!-- Basic Form Elements Title -->
            <div class="block-title">
                <h2><strong>Create Immigration User</strong></h2>
            </div>
            <!-- END Form Elements Title -->

            <!-- Basic Form Elements Content -->
            <form id="form-validation" action="process_createuser.php" method="post" class="form-horizontal form-bordered">
             <?php if ($msg==1) { ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-check"></i> Success</h4> You have successfully registered!
            </div>
             <?php } else if($msg==2) { ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="fa fa-times-circle"></i> Error</h4> Email address already exist!
                </div>
                <?php } elseif ($msg==3) { ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="fa fa-times-circle"></i> Error</h4> Please fill in blanks!
                </div>
                <?php } elseif ($msg==4) { ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-times-circle"></i> Error</h4> Identification Card already exist!
            </div>
            <?php } ?>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="first_name">First Name</label>
                    <div class="col-md-9">
                        <input type="text" id="first_name" name="first_name" style="text-transform:uppercase;" class="form-control" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="last_name">Last Name</label>
                    <div class="col-md-9">
                        <input type="text" id="last_name" name="last_name" style="text-transform:uppercase;" class="form-control" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="ic_no">Identification Card</label>
                    <div class="col-md-9">
                        <input type="text" id="ic_no" name="ic_no"  onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="gender">Gender</label>
                    <div class="col-md-9">
                      <select id="gender" name="gender" class="form-control" size="1">
                        <option value="">Gender</option>
                        <option value="Male" >Male</option>
                        <option value="Female" >Female</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="telephone_no">Telephone Number</label>
                <div class="col-md-9">
                    <input type="text" id="telephone_no" name="telephone_no" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="email">Email</label>
                <div class="col-md-9">
                 <input type="email" id="email" name="email" class="form-control" >
               </div>
           </div>

           <div class="form-group">
            <label class="col-md-3 control-label" for="example-text-input">New Password</label>
            <div class="col-md-9">
                <input type="password" id="passwordreg" name="passwordreg" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="example-text-input">Confirm Password</label>
            <div class="col-md-9">
                <input type="password" id="cpasswordreg" name="cpasswordreg" class="form-control">
            </div>
        </div>

        <div class="form-group form-actions">
            <div class="col-md-9 col-md-offset-3">
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
