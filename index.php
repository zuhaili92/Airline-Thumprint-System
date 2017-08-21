<?php
session_start();
include('login_header.php');
$errormessage= isset($_SESSION['msg']) ? $_SESSION['msg'] : '';
$msg= isset($_GET['msg']) ? $_GET['msg'] : '';
?>
<!-- Login Full Background -->
<!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
<img src="img/wallpaper.jpg" alt="Login Full Background" class="full-bg animation-pulseSlow">
<!-- END Login Full Background -->

<!-- Login Container -->
<div id="login-container" class="animation-fadeIn">
    <!-- Login Title -->
    <div class="login-title text-center">
        <img src="img/logo2.png" width="50%">
        <h1><small>Please <strong>Login</strong> or <strong>Register</strong></small></h1>
    </div>
    <!-- END Login Title -->

    <!-- Login Block -->
    <div class="block push-bit">
        <!-- Login Form -->
        <form action="check_login.php" method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
            <?php if($errormessage==4) { ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-times-circle"></i> Error</h4> Password is incorrect!
            </div>
            <?php } elseif ($errormessage==5) { ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-times-circle"></i> Error</h4> Username or Email address is incorrect!
            </div>
            <?php }  elseif ($msg==6) { ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-check"></i> Success</h4> You have logout from your account!
            </div>
            <?php } elseif ($errormessage==1) { ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-check"></i> Success</h4> You have successfully registered!
            </div>
            <?php } ?>

            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        <input type="text" id="login-email" name="login-email" class="form-control input-lg" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        <input type="password" id="login-password" name="login-password" class="form-control input-lg" placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-xs-4">
                    <label class="switch switch-primary" data-toggle="tooltip" title="Remember Me?">
                        <input type="checkbox" id="login-remember-me" name="login-remember-me" checked>
                        <span></span>
                    </label>
                </div>
                <div class="col-xs-8 text-right">

                    <button type="submit" class="btn btn-sm btn-primary" ><i class="fa fa-angle-right"></i> Login </button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 text-center">
                    <a href="javascript:void(0)" id="link-reminder-login"><small>Forgot password?</small></a> -
                    <a href="javascript:void(0)" id="link-register-login"><small>Create a new account</small></a>
                </div>
            </div>
        </form>
        <!-- END Login Form -->

        <!-- Reminder Form -->
        <form action="resetpass.php" method="post" id="form-reminder" class="form-horizontal form-bordered form-control-borderless display-none">

            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        <input type="text" id="email" name="email" class="form-control input-lg" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-xs-12 text-right">
                    <button type="submit" class="btn btn-sm btn-primary" ><i class="fa fa-angle-right"></i> Reset Password</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 text-center">
                    <small>Did you remember your password?</small> <a href="javascript:void(0)" id="link-reminder"><small>Login</small></a>
                </div>
            </div>
        </form>
        <!-- END Reminder Form -->

        <!-- Register Form -->
        <form action="check_register.php" method="post" id="form-register" class="form-horizontal form-bordered form-control-borderless display-none">
            <?php if($errormessage==2) { ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-times-circle"></i> Error</h4> Email address already exist!
            </div>
            <?php } elseif ($errormessage==3) { ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-times-circle"></i> Error</h4> Please fill in blanks!
            </div>
            <?php } elseif ($errormessage==7) { ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="fa fa-times-circle"></i> Error</h4> Identification Card already exist!
            </div>
            <?php } ?>

            <div class="form-group">
                <div class="col-xs-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-user"></i></span>
                        <input type="text" id="reg-firstname" name="reg-firstname" class="form-control input-lg" placeholder="Firstname">
                    </div>
                </div>
                <div class="col-xs-6">
                    <input type="text" id="reg-lastname" name="reg-lastname" class="form-control input-lg" placeholder="Lastname">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="hi hi-list-alt"></i></span>
                        <input type="text" id="reg-noic" name="reg-noic" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control input-lg" placeholder="Identification Card">
                    </div>
                </div>
            </div>
            <div class="form-group">
             <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-t-shirt"></i></span>
                    <select id="reg-gender" name="reg-gender" class="form-control" size="1">
                        <option value="">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="hi hi-road"></i></span>
                    <textarea id="reg-address" name="reg-address" rows="9" class="form-control" placeholder="Address.."></textarea>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-phone_alt"></i></span>
                    <input type="text" id="reg-phone" name="reg-phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control input-lg" placeholder="Phone No">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                    <input type="text" id="reg-email" name="reg-email" class="form-control input-lg" placeholder="Email">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                    <input type="password" id="reg-password" name="reg-password" class="form-control input-lg" placeholder="Password">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                    <input type="password" id="reg-password-verify" name="reg-password-verify" class="form-control input-lg" placeholder="Retype-Password">
                </div>
            </div>
        </div>
        <div class="form-group form-actions">
            <div class="col-xs-6">

            </div>
            <div class="col-xs-6 text-right">
                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Register Account</button>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12 text-center">
                <small>Do you have an account?</small> <a href="javascript:void(0)" id="link-register"><small>Login</small></a>
            </div>
        </div>
    </form>
    <!-- END Register Form -->
</div>
<!-- END Login Block -->
</div>
<!-- END Login Container -->
<?php include('login_footer.php') ?>