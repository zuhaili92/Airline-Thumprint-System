
<!-- Datatables Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Black List Report
        </h1>
    </div>
</div>
<ul class="breadcrumb breadcrumb-top">
    <li>Dashboard</li>
    <li><a href="?site=blacklist">Black List Report</a></li>
</ul>
<!-- END Datatables Header -->

<!-- Datatables Content -->
<div class="block full">
    <div class="block-title">
        <h2><strong>Black List</strong> Report</h2>
    </div>


    <div class="table-responsive">
        <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th class="text-center">Identication No</th>
                    <th class="text-center">Thumbprint ID</th>
                    <th>Type Problem</th>
                    <th>Description</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $sql_black = mysql_query("SELECT * FROM blacklist");
                while($rows_black = mysql_fetch_array($sql_black)) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td class="text-center"><?php echo $rows_black['name']; ?></td>
                        <td class="text-center"><?php echo $rows_black['ic_no']; ?></td>
                        <td class="text-center"><?php echo $rows_black['thumb_id']; ?></td>
                        <td class="text-center"><?php echo $rows_black['type']; ?></td>
                        <td class="text-center"><?php echo $rows_black['description']; ?></td>
                    </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Datatables Content -->
