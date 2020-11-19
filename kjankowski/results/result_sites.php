<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/config.php'; 
$query = "SELECT * FROM `sites` ORDER BY site_id DESC";
$result = mysqli_query($conn,$query);
$sites = mysqli_fetch_all($result, MYSQLI_ASSOC);




// mysqli_free_result($result);

// mysqli_close($conn);
?>