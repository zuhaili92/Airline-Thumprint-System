 <!-- Forms General Header -->
 <div class="content-header">
    <div class="header-section">
        <h1>
            <i class="gi gi-notes_2"></i>Profile
        </h1>
    </div>
</div>
<ul class="breadcrumb breadcrumb-top">
    <li>Dashboard</li>
    <li><a href="?site=profile">Profile</a></li>
</ul>
<!-- END Forms General Header -->

<div class="row">
    <div class="col-md-12">
        <!-- Basic Form Elements Block -->
        <div class="block">
            <!-- Basic Form Elements Title -->
            <div class="block-title">
                <h2><strong>Profile</strong></h2>
            </div>
            <!-- END Form Elements Title -->

            <!-- Basic Form Elements Content -->
            <form action="process_profile.php" method="post" class="form-horizontal form-bordered">
                <?php if($msg==1) { ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="fa fa-times-check"></i> Success</h4> Profile have been saved successfully.
                </div>
                <?php } elseif ($msg==2) { ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="fa fa-times-circle"></i> Error</h4> Please fill in the blanks, Thank you.
                </div>
                <?php } ?>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="first_name">First Name</label>
                    <div class="col-md-9">
                        <input type="text" id="first_name" name="first_name" value="<?php echo $datainfo['first_name']; ?>" style="text-transform:uppercase;" class="form-control" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="last_name">Last Name</label>
                    <div class="col-md-9">
                        <input type="text" id="last_name" name="last_name" value="<?php echo $datainfo['last_name']; ?>" style="text-transform:uppercase;" class="form-control" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="ic_no">Identification Card</label>
                    <div class="col-md-9">
                        <input type="text" id="ic_no" name="ic_no" value="<?php echo $datainfo['ic_no']; ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" >
                    </div>
                </div>

                <div class="form-group">
                <label class="col-md-3 control-label" for="gender">Gender</label>
                    <div class="col-md-9">
                          <select id="gender" name="gender" class="form-control" size="1">
                        <option value="">Gender</option>
                        <option value="Male" <?php if($datainfo['gender'] == "Male") { echo "selected"; } ?>>Male</option>
                        <option value="Female" <?php if($datainfo['gender'] == "Female") { echo "selected"; } ?>>Female</option>
                    </select>
                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-md-3 control-label" for="address">Address</label>
                    <div class="col-md-9">
                         <textarea id="address" name="address" rows="9" class="form-control" placeholder="Address.."><?php echo $datainfo['address']; ?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="telephone_no">Telephone Number</label>
                    <div class="col-md-9">
                        <input type="text" id="telephone_no" name="telephone_no" value="<?php echo $datainfo['telephone_no']; ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="email">Email</label>
                    <div class="col-md-9">
                     <p class="form-control-static"><?php echo $datainfo['email']; ?></p>
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

<div class="row">
    <div class="col-md-12">
        <!-- Basic Form Elements Block -->
        <div class="block">
            <!-- Basic Form Elements Title -->
            <div class="block-title">
                <h2><strong>Change Password</strong></h2>
            </div>
            <!-- END Form Elements Title -->

            <!-- Basic Form Elements Content -->
            <form action="process_settings.php" method="post" class="form-horizontal form-bordered" name="updatepass">
              <?php if($msg==3) { ?>
              <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-times-check"></i> Success</h4> New Password had been updated.
            </div>
            <?php } elseif ($msg==4) { ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-times-circle"></i> Error</h4> Password not matched! Please enter your password again.
            </div>
            <?php } elseif ($msg==5) { ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-times-circle"></i> Error</h4> Your password was incorrect. 
            </div>
            <?php }  ?>
           
            <div class="form-group">
                <label class="col-md-3 control-label" for="example-text-input">Current Password</label>
                <div class="col-md-9">
                    <input type="password" id="currentpasswordreg" name="currentpasswordreg" class="form-control">
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

<script language="JavaScript" src="../js/gen_validatorv4.js" type="text/javascript"></script>
<script language="JavaScript" type="text/javascript">
//You should create the validator only after the definition of the HTML form
var frmvalidator  = new Validator("updatepass");

frmvalidator.EnableMsgsTogether();
frmvalidator.addValidation("currentpasswordreg","req","Please type your current password");
frmvalidator.addValidation("passwordreg","req","Please type your password");
frmvalidator.addValidation("passwordreg","minlen=8","Minimum password is 8 character!");
frmvalidator.addValidation("cpasswordreg","req","Please type confirm password");
frmvalidator.addValidation("cpasswordreg","minlen=8","Minimum confirm password is 8 character!");


</script>
