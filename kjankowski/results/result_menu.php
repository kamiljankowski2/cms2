<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/config.php'; 
$query = "SELECT * FROM `menu` ORDER BY `menu_poz` ASC ";
$query2 = "SELECT * FROM `menu`";
$result = mysqli_query($conn,$query);
$result2 = mysqli_query($conn,$query2);
$menu = mysqli_fetch_all($result, MYSQLI_ASSOC);
$menu2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);




// mysqli_free_result($result);

// mysqli_close($conn);
?>