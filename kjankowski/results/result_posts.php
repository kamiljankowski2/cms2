<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/config.php'; 
$query = "SELECT * FROM `posts` ORDER BY post_id DESC";
$result = mysqli_query($conn,$query);
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);




// mysqli_free_result($result);

// mysqli_close($conn);
?>