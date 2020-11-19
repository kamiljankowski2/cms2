<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/config.php'; 
$query = "SELECT * FROM `posts` WHERE `post_id` = 1";
$result = mysqli_query($conn,$query);
$post = mysqli_fetch_all($result, MYSQLI_ASSOC);




// mysqli_free_result($result);

// mysqli_close($conn);
?>