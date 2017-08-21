
<!-- Datatables Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Manage User Immigration
        </h1>
    </div>
</div>
<ul class="breadcrumb breadcrumb-top">
    <li>Dashboard</li>
    <li><a href="?site=blacklist">Manage User Immigration</a></li>
</ul>
<!-- END Datatables Header -->

<!-- Datatables Content -->
<div class="block full">
    <div class="block-title">
        <h2><strong>Manage User</strong> Immigration</h2>
    </div>


    <div class="table-responsive">
        <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th class="text-center">Identification No</th>
                    <th>Telephone No</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Last Login</th>   
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $sql_imi = mysql_query("SELECT * FROM imigration");
                while($rows_imi = mysql_fetch_array($sql_imi)) {
                    $fullname = $rows_imi['first_name']." ".$rows_imi['last_name'];
                    $sql_imi_login = mysql_query("SELECT * FROM users WHERE id ='".$rows_imi['user_id']."'");
                    $rows_imi_login = mysql_fetch_array($sql_imi_login);
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td class="text-center"><?php echo $fullname; ?></td>
                        <td class="text-center"><?php echo $rows_imi['ic_no']; ?></td>
                        <td class="text-center"><?php echo $rows_imi['telephone_no']; ?></td>
                        <td class="text-center"><?php echo $rows_imi['email']; ?></td>
                        <td class="text-center"> <a href="resetimi.php?id=<?php echo $rows_imi['user_id']; ?>"><button class="btn btn-danger"> Reset Password </button></a></td>
                         <td class="text-center"><?php echo $rows_imi_login['updated_at']; ?></td>
                    </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Datatables Content -->
