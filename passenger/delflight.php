<?php
require ("../config.php");
$id = isset($_GET['id']) ? trim($_GET['id']) : "";

if ($id!=""){	
	$delflight=mysql_query("delete from flight_details where id = '".$id."'");
	echo '<script>document.location.href="index.php?site=manageflight" </script>';
	
	}
	?>
