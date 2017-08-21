<?php
session_start();
require ("../config.php");

$site= isset($_GET['site']) ? $_GET['site'] : '';
$loginusername= isset($_SESSION['loginusername']) ? $_SESSION['loginusername'] : '';
$loginrole= isset($_SESSION['role']) ? $_SESSION['role'] : '';

$sqlinfo=mysql_query("SELECT * FROM passenger WHERE email='".$loginusername."'");
$datainfo=mysql_fetch_array($sqlinfo);

$msg= isset($_GET['msg']) ? $_GET['msg'] : '';
if($loginrole == 'Passenger') //User only can view this site
{
    include('inc/main_header.php'); ?>
    <!-- Page content -->
    <div id="page-content">

        <?php
        if($site =="profile")
        {
            include "profile.php";
        }
        else if($site == "createflight")
        {
            include "createflight.php";
        }
        else if($site == "manageflight")
        {
            include "manageflight.php";
        }
        else if($site == "viewflights")
        {
            include "viewflight.php";
        }
        else if($site == "editflight")
        {
            include "editflight.php";
        }
        else
        {
            include "dashboard.php";
        }
        ?>
    </div>
    <!-- END Page Content -->
    <?php include('inc/main_footer.php'); 
} else { ?>
<script>
    alert('You are not authorized to access this page.');
    window.location='../logout.php';
</script>
<?php } ?>
