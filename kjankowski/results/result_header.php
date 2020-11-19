<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/config.php'; 
$query = 'SELECT * FROM `general` WHERE 1 ';
$result = mysqli_query($conn,$query);
$generals = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach ($generals as $general) {
    $general_title = $general['general_title'];
    $general_brand = $general['general_brand'];
    $general_desc = $general['general_desc'];
    $general_lang = $general['general_lang'];
}


// mysqli_free_result($result);

// mysqli_close($conn);
?>