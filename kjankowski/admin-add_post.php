<?php 

include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/config.php'; 
if(isset($_POST['post_new'])) {
    $post_title = mysqli_real_escape_string($conn, $_POST['post_title']);
    $post_author = mysqli_real_escape_string($conn, $_POST['post_author']);
    $post_content = mysqli_real_escape_string($conn, htmlentities($_POST['post_content']));
    $post_index = mysqli_real_escape_string($conn, $_POST['post_index']);
    $query = "INSERT INTO posts(post_title,post_author,post_content,post_index) VALUES ('$post_title','$post_author','$post_content', '$post_index')";
    mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="pl">
<?php include('admin-head.php') ?>

<body>
    <div class="container-fluid">
        <?php include('admin-nav.php') ?>
        <div class="container col-4 my-5 ">
            <h2 class="mb-5">Dodaj nowy post</h2>
            <form class="form-width" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="post_title">Tytuł wpisu</label>
                    </div>
                    <input type="text" id="post_title" name="post_title" class="form-control">
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="post_author">Autor wpisu</label>
                    </div>
                    <input type="text" id="post_author" name="post_author" class="form-control">
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="post_content">Treść wpisu</label>
                    </div>
                    <textarea class="form-control" type="text" id="mytextarea" name="post_content"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="post_index">Widoczność wpisu</label>
                    <select class="form-control" name="post_index" id="post_index">
                        <option>Tak</option>
                        <option>Nie</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit" name="post_new">Dodaj</button>
            </form>
        </div>
    </div>
</body>

</html>