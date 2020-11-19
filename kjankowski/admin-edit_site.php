<?php 

include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/config.php'; 
$id = mysqli_real_escape_string($conn, $_GET['id']);
$query = "SELECT * FROM `sites` WHERE `site_id` = $id";
$result = mysqli_query($conn,$query);
$site = mysqli_fetch_all($result, MYSQLI_ASSOC);
if(isset($_POST['site_new'])) {
$site_title = mysqli_real_escape_string($conn, $_POST['site_title']);
$site_content = mysqli_real_escape_string($conn, htmlentities($_POST['site_content']));
$site_index = mysqli_real_escape_string($conn, $_POST['site_index']);
$query = "UPDATE sites SET site_title='$site_title', site_content='$site_content', site_index='$site_index' WHERE site_id = $id";
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
            <h2 class="mb-5">Edytuj podstronę: <b><?php echo $site[0]["site_title"]; ?></b></h2>
            <form class="form-width" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="post_title">Tytuł podstrony</label>
                    </div>
                    <input type="text" id="site_title" name="site_title" class="form-control"
                        value="<?php echo $site[0]["site_title"]; ?>">
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="site_desc">Opis podstrony</label>
                        </div>
                        <textarea class="form-control" type="text" id="site_desc"
                            name="site_desc"><?php echo $site[0]["site_desc"]; ?></textarea>

                    </div>
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="site_content">Treść podstrony</label>
                    </div>
                    <textarea class="form-control" type="text" id="mytextarea"
                        name="site_content"><?php echo $site[0]["site_content"]; ?></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="post_index">Widoczność podstrony</label>
                    <select class="form-control" name="site_index" id="site_index">
                        <option>Tak</option>
                        <option>Nie</option>
                    </select>
                    <small class="form-text text-muted">Aktualna widoczność:
                        <b><?php echo $site[0]["site_index"] ?>.</b>
                    </small>
                </div>
                <button class="btn btn-primary" type="submit" name="site_new">Zaktualizuj</button>
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