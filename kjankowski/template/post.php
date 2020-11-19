<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/results/result_single-post.php'; 
$id = mysqli_real_escape_string($conn, $_GET['id']);
$query = "SELECT * FROM `posts` WHERE `post_id` = $id";
$result = mysqli_query($conn,$query);
$post = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<?php include('header.php') ?>
<main class="container blog" style="text-align: center;">
    <div>
        <h1 class="mt-5"><?php echo $post[0]["post_title"];?></h1>
        <small><?php echo $post[0]["post_author"];?></small>
        <?php echo html_entity_decode($post[0]["post_content"]);?>
        <a href="blog.php" class="btn btn-primary">Powrót</a>
    </div>
</main>
<?php include('footer.php') ?>