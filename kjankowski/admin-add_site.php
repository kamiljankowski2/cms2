<?php 

include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/config.php'; 
if(isset($_POST['site_new'])) {
    $site_content = mysqli_real_escape_string($conn, htmlentities($_POST['site_content']));
    $site_index = mysqli_real_escape_string($conn, $_POST['site_index']);
    $site_title = mysqli_real_escape_string($conn, $_POST['site_title']);
    $site_desc = mysqli_real_escape_string($conn, $_POST['site_desc']);
    $query = "INSERT INTO sites(site_content,site_index, site_title,site_desc) VALUES ('$site_content', '$site_index', '$site_title', '$site_desc')";
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
            <h2 class="mb-5">Dodaj nową podstronę</h2>
            <form class="form-width" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="site_title">Tytuł podstrony</label>
                    </div>
                    <input type="text" id="site_title" name="site_title" class="form-control">
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="site_desc">Opis podstrony</label>
                        </div>
                        <textarea class="form-control" type="text" id="site_desc" name="site_desc"
                            placeholder="Opis podstrony (max. 200 znaków)"></textarea>

                    </div>
                </div>
                <br>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="site_content">Zawartość podstrony</label>
                    </div>
                    <textarea class="form-control" type="text" id="mytextarea" name="site_content"></textarea>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label for="post_index">Widoczność podstrony</label>
                    <select class="form-control" name="site_index" id="site_index">
                        <option>Tak</option>
                        <option>Nie</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit" name="site_new">Dodaj</button>
            </form>
        </div>
    </div>
</body>

</html>