<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/config.php'; 
$query = 'SELECT * FROM `main` WHERE 1 ';
$result = mysqli_query($conn,$query);
$mains = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach ($mains as $main) {
    $main_index = $main['main_index'];
    $main_h1 = $main['main_h1'];
    $main_img = $main['main_img'];
    $main_alt_img = $main['main_alt_img'];
    $main_desc = $main['main_desc'];
    $main_col1 = $main['main_col1'];
    $main_col2 = $main['main_col2'];
    $main_col3 = $main['main_col3'];
}




// mysqli_free_result($result);

// mysqli_close($conn);
?>