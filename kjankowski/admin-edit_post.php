<?php 

include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/config.php'; 
$id = mysqli_real_escape_string($conn, $_GET['id']);
$query = "SELECT * FROM `posts` WHERE `post_id` = $id";
$result = mysqli_query($conn,$query);
$post = mysqli_fetch_all($result, MYSQLI_ASSOC);
if(isset($_POST['post_new'])) {
$post_title = mysqli_real_escape_string($conn, $_POST['post_title']);
$post_author = mysqli_real_escape_string($conn, $_POST['post_author']);
$post_content = mysqli_real_escape_string($conn, htmlentities($_POST['post_content']));
$post_index = mysqli_real_escape_string($conn, $_POST['post_index']);
$query = "UPDATE posts SET post_title='$post_title', post_author='$post_author', post_content='$post_content', post_index='$post_index' WHERE post_id = $id";
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
            <h2 class="mb-5">Edytuj post: <b><?php echo $post[0]["post_title"]; ?></b></h2>
            <form class="form-width" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="post_title">Tytuł wpisu</label>
                    </div>
                    <input type="text" id="post_title" name="post_title" class="form-control"
                        value="<?php echo $post[0]["post_title"]; ?>">
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="post_author">Autor wpisu</label>
                    </div>
                    <input type="text" id="post_author" name="post_author" class="form-control"
                        value="<?php echo $post[0]["post_author"]; ?>">
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="post_content">Treść wpisu</label>
                    </div>
                    <textarea class="form-control" type="text" id="mytextarea"
                        name="post_content"><?php echo $post[0]["post_content"]; ?></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="post_index">Widoczność wpisu</label>
                    <select class="form-control" name="post_index" id="post_index">
                        <option>Tak</option>
                        <option>Nie</option>
                    </select>
                    <small class="form-text text-muted">Aktualna widoczność:
                        <b><?php echo $post[0]["post_index"] ?>.</b>
                    </small>
                </div>
                <button class="btn btn-primary" type="submit" name="post_new">Zaktualizuj</button>
            </form>
            <br>
            <div class="alert alert-warning form-width" role="alert">
                Jeżeli po ustawieniu dana pozycja się nie zmieni, spróbuj odświeżyć stronę.
            </div>
            <div class="alert alert-danger form-width" role="alert">
                <b>UWAGA!</b> Tutaj jest problem z aktualizacją treści w edytorze tekstu! <b>Pomaga CTRL+F5</b>.
            </div>
        </div>
    </div>
</body>

</html>