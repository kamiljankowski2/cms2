<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/config.php'; 
$query = "SELECT * FROM `sites` WHERE `site_id` = 1";
$result = mysqli_query($conn,$query);
$site = mysqli_fetch_all($result, MYSQLI_ASSOC);




// mysqli_free_result($result);

// mysqli_close($conn);
?>