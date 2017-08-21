<?php
session_start();
require ("../config.php");

$site= isset($_GET['site']) ? $_GET['site'] : '';
$loginusername= isset($_SESSION['loginusername']) ? $_SESSION['loginusername'] : '';
$loginrole= isset($_SESSION['role']) ? $_SESSION['role'] : '';

$sqlinfo=mysql_query("SELECT * FROM imigration WHERE email='".$loginusername."'");
$datainfo=mysql_fetch_array($sqlinfo);

$msg= isset($_GET['msg']) ? $_GET['msg'] : '';
if($loginrole == 'Immigration') //User only can view this site
{
    include('inc/main_header.php'); ?>
    <!-- Page content -->
    <div id="page-content">

        <?php
        if($site =="profile")
        {
            include "profile.php";
        }
        else if($site == "checkin")
        {
            include "checkin.php";
        }
        else if($site == "search_data")
        {
            include "search_data.php";
        }
        else if($site == "search_data_out")
        {
            include "search_data_out.php";
        }
        else if($site == "checkout")
        {
            include "checkout.php";
        }
        else if($site == "ticketdetail")
        {
            include "ticketdetail.php";
        }
        else if($site == "blacklist")
        {
            include "blacklist.php";
        }
        else if($site == "viewflights")
        {
            include "viewflight.php";
        }
        else if($site == "wantedlist")
        {
            include "wantedlist.php";
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
