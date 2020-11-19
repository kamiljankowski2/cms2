<?php 

include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/results/result_main.php'; 
if(isset($_POST['main_h1'])){
    $main_h1 = mysqli_real_escape_string($conn, $_POST['h1']);
    $query = "UPDATE main SET main_h1='$main_h1' WHERE 1";
    mysqli_query($conn, $query);
} 
if(isset($_POST['main_desc'])){
    $main_desc = mysqli_real_escape_string($conn, $_POST['desc']);
    $query = "UPDATE main SET main_desc='$main_desc' WHERE 1";
    mysqli_query($conn, $query);
}
if(isset($_POST['main_img'])){
    $main_img = mysqli_real_escape_string($conn, $_POST['img']);
    $query = "UPDATE main SET main_img='$main_img' WHERE 1";
    mysqli_query($conn, $query);
}
if(isset($_POST['main_alt_img'])){
    $main_alt_img = mysqli_real_escape_string($conn, $_POST['alt_img']);
    $query = "UPDATE main SET main_alt_img='$main_alt_img' WHERE 1";
    mysqli_query($conn, $query);    
}

if(isset($_POST['main_col1'])){
    $main_col1= mysqli_real_escape_string($conn, htmlentities($_POST['col1']));
    $query = "UPDATE main SET main_col1='$main_col1' WHERE 1";
    mysqli_query($conn, $query);
}
if(isset($_POST['main_col2'])){
    $main_col2 = mysqli_real_escape_string($conn, htmlentities($_POST['col2']));
    $query = "UPDATE main SET main_col2='$main_col2' WHERE 1";
    mysqli_query($conn, $query);
}
if(isset($_POST['main_col3'])){
    $main_col3 = mysqli_real_escape_string($conn, htmlentities($_POST['col3']));
    $query = "UPDATE main SET main_col3='$main_col3' WHERE 1";
    mysqli_query($conn, $query);
}

if(isset($_POST['main_index'])){
    $main_index = mysqli_real_escape_string($conn, $_POST['index']);
    $query = "UPDATE main SET main_index='$main_index' WHERE 1";
    mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />
    <title>Panel administracyjny</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src='https://cdn.tiny.cloud/1/ipvkrqow5pluvawx8ekmvzubgd9wgc2u7hli66ciow2kj4at/tinymce/5/tinymce.min.js'
        referrerpolicy="origin">
    </script>
    <script>
    tinymce.init({
        selector: '.rich',
    });
    </script>
    <link rel="stylesheet" href="./assets/admin.css">
</head>

<body>
    <div class="container-fluid">
        <?php include('admin-nav.php') ?>
        <div class="container col-4 my-5">
            <h2 class="mb-5">H1, opis, kolumny</h2>
            <form class="form-width" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="main_h1">Nagłówek h1</label>
                    </div>
                    <input type="text" id="main_h1" name="h1" class="form-control">
                    <div class="input-group-append">
                        <button type="submit" name="main_h1" class="btn btn-primary">Ustaw</button>
                    </div>
                </div>
                <small class="form-text text-muted">Aktualna treść nagłówka: <b><?php echo $main_h1 ?>.</b>
                </small>
            </form>
            <br>
            <form class="form-width" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="main_desc">Opis pod h1</label>
                    </div>
                    <textarea class="form-control" type="text" id="main_desc" name="desc"></textarea>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="main_desc">Ustaw</button>
                    </div>
                </div>
                <small class="form-text text-muted">Aktualny opis pod h1: <b><?php echo $main_desc ?>.</b>
                </small>
            </form>
            <br>
            <form class="form-width" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="main_img">Obrazek (adres URL)</label>
                    </div>
                    <input type="text" id="main_img" name="img" class="form-control" placeholder="Uwaga! Musi być PNG!">
                    <div class="input-group-append">
                        <button type="submit" name="main_img" class="btn btn-primary">Ustaw</button>
                    </div>
                </div>
                <small class="form-text text-muted"><b>Domyślny:</b>
                    https://themes.startbootstrap.com/sb-ui-kit-pro/assets/img/drawkit/color/drawkit-content-man-color.svg
                </small>
            </form>
            <br>
            <form class="form-width" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="main_alt_img">Tekst alternatywny</label>
                    </div>
                    <input type="text" id="main_alt_img" name="alt_img" class="form-control">
                    <div class="input-group-append">
                        <button type="submit" name="main_alt_img" class="btn btn-primary">Ustaw</button>
                    </div>
                </div>
                <small class="form-text text-muted"><b>Wyjaśnienie:</b>
                    Tekst alternatywny będzię wyświetlany w przypadku, gdy obrazek nie będzie w stanie się załadować
                </small>
                <br>
            </form>
            <br>
            <form class="form-width" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="main_col1">Tekst 1. kolumna</label>
                    </div>
                    <textarea class="form-control rich" type="text" id="main_col1"
                        name="col1"><?php echo $main_col1; ?></textarea>
                    <button class="btn btn-primary margin-button" type="submit" name="main_col1">Ustaw</button>
                </div>
            </form>
            <br>
            <form class="form-width" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="main_col2">Tekst 2. kolumna</label>
                    </div>
                    <textarea class="form-control rich" type="text" id="main_col2"
                        name="col2"><?php echo $main_col2; ?></textarea>

                    <button class="btn btn-primary margin-button" type="submit" name="main_col2">Ustaw</button>
                </div>
            </form>
            <br>
            <form class="form-width" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="main_col3">Tekst 3. kolumna</label>
                    </div>
                    <textarea class="form-control rich" type="text" id="main_col3"
                        name="col3"><?php echo $main_col3; ?></textarea>
                    <button class="btn btn-primary margin-button" type="submit" name="main_col3">Ustaw</button>
                </div>
            </form>
            <br>
            <form class="form-width" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="form-group">

                    <label for="main_index">Widoczność strony – Aktualnie: <b><?php echo $main_index?></b></label>
                    <select class="form-control" name="index" id="main_index">
                        <option>Tak</option>
                        <option>Nie</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit" name="main_index">Ustaw</button>
                <br>

            </form>
            <br>
            <div class="alert alert-warning form-width" role="alert">
                Jeżeli po ustawieniu dana pozycja się nie zmieni, spróbuj odświeżyć stronę.
            </div>
        </div>
    </div>
</body>

</html>