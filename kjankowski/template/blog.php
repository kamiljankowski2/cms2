<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/results/result_posts.php'; 
?>
<?php include('header.php') ?>
<main class="container blog" style="text-align: center;">
    <h1 class="mt-5">Najnowsze wpisy</h1>
    <br>
    <br>
    <ul class="list-group list-group-striped">
        <?php
foreach ($posts as $post): ?>
        <?php if($post["post_index"] == "Tak"): ?>
        <li class="list-group-item mb-3 single-post">
            <h3><?php echo $post["post_title"]; ?></h3>
            <div>
                <div>
                    <small><?php echo $post["post_author"]; ?></small>
                </div>
            </div>
            <a class="btn btn-danger btn_show" href="post.php?id=<?php echo $post['post_id'];?>">Czytaj
                całość
            </a>
        </li>
        <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</main>
<?php include('footer.php'); ?>