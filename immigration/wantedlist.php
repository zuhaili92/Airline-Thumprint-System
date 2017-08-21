
<!-- Datatables Header -->
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>Wanted List Report
        </h1>
    </div>
</div>
<ul class="breadcrumb breadcrumb-top">
    <li>Dashboard</li>
    <li><a href="?site=wantedlist">Wanted List Report</a></li>
</ul>
<!-- END Datatables Header -->

<!-- Datatables Content -->
<div class="block full">
    <div class="block-title">
        <h2><strong>Wanted List</strong> Report</h2>
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
                $sql_wanted = mysql_query("SELECT * FROM wantedlist");
                while($rows_wanted = mysql_fetch_array($sql_wanted)) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td class="text-center"><?php echo $rows_wanted['name']; ?></td>
                        <td class="text-center"><?php echo $rows_wanted['ic_no']; ?></td>
                        <td class="text-center"><?php echo $rows_wanted['thumb_id']; ?></td>
                        <td class="text-center"><?php echo $rows_wanted['type']; ?></td>
                        <td class="text-center"><?php echo $rows_wanted['description']; ?></td>
                    </tr>
                    <?php $i++; } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Datatables Content -->
