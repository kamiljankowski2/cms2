<?php 

include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/results/result_posts.php'; 
if(isset($_POST['delete'])) {
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
    $query = "DELETE FROM posts WHERE post_id = $delete_id";
    mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="pl">

<?php include('admin-head.php') ?>

<body>
    <div class="container-fluid">
        <?php include('admin-nav.php') ?>
        <div class="container col-4 my-5">
            <h2 class="mb-5">Wszystkie posty</h2>
            <?php

            foreach ($posts as $post): ?>
            <li class="list-group-item mb-3 single-post">
                <h3><?php echo $post["post_title"]; ?></h3>
                <div>
                    <div>
                        <small><b>Autor </b><?php echo $post["post_author"]; ?></small>
                    </div>
                </div>
                <div class="btn-container">
                    <a class="btn btn-success" href="template/post.php?id=<?php echo $post["post_id"]; ?>">Zobacz</a>
                    <a class="btn btn-primary" href="admin-edit_post.php?id=<?php echo $post["post_id"]; ?>"
                        class="btn btn-secondary">Edytuj</a>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <input type="hidden" name="delete_id" value="<?php echo $post["post_id"]?>">
                        <input type="submit" name="delete" value="Usuń" class="btn btn-danger ">
                    </form>
                </div>
            </li>

            <?php endforeach; ?>

            <div class="alert alert-warning form-width" role="alert">
                Po usunięciu wpisu, odświeź stronę, aby zaktualizować listę!
            </div>
        </div>
    </div>

</body>

</html>