<?php 


include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/results/result_header.php'; 
if(isset($_POST['general_title'])){
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $query = "UPDATE general SET general_title='$title' WHERE 1";
    mysqli_query($conn, $query);
    header('Refresh: ' . 1);
    
    
} 
if(isset($_POST['general_brand'])){
    $brand = mysqli_real_escape_string($conn, $_POST['brand']);
    $query = "UPDATE general SET general_brand='$brand' WHERE 1";
    mysqli_query($conn, $query);
}
if(isset($_POST['general_desc'])){
    $desc = mysqli_real_escape_string($conn, $_POST['desc']);
    $query = "UPDATE general SET general_desc='$desc' WHERE 1";
    mysqli_query($conn, $query);
      
    
    
}
if(isset($_POST['general_lang'])){
    $lang = mysqli_real_escape_string($conn, $_POST['lang']);
    $query = "UPDATE general SET general_lang='$lang' WHERE 1";
    mysqli_query($conn, $query);
}
?>

<?php include('admin-head.php') ?>

<body>
    <div class="container-fluid">
        <?php include('admin-nav.php') ?>
        <div class="container col-4 my-5">
            <h2 class="mb-5">Brand, Tytuł, Opis</h2>
            <form class="form-width" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="general_brand">Nazwa firmy</label>
                    </div>
                    <input type="text" id="general_brand" name="brand" class="form-control"
                        placeholder="Nazwa firmy, będzie zawarta w tytule">
                    <div class="input-group-append">
                        <button type="submit" name="general_brand" class="btn btn-primary">Ustaw</button>
                    </div>
                </div>
                <small class="form-text text-muted">Aktualna nazwa firmy to <b><?php echo $general_brand ?>.</b>
                </small>
            </form>
            <br>
            <form class="form-width" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="general_title">Tytuł strony</label>
                    </div>
                    <input class="form-control" type="text" id="general_title" name="title"
                        placeholder="Tytuł strony głównej (max. 100 znaków)">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="general_title">Ustaw</button>
                    </div>
                </div>
                <small class="form-text text-muted">Aktualny tytuł strony głównej to
                    <b><?php echo $general_title ?>.</b>
                </small>
            </form>
            <br>
            <form class="form-width" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="general_desc">Opis strony</label>
                    </div>
                    <textarea class="form-control" type="text" id="general_desc" name="desc"
                        placeholder="Opis strony głównej (max. 200 znaków)"></textarea>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="general_desc">Ustaw</button>
                    </div>
                </div>
                <small class="form-text text-muted">Aktualny opis strony głównej to
                    <b><?php echo $general_desc ?>.</b></small>
            </form>
            <br>
            <form class="form-width" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="form-group">

                    <label for="language">Język strony</label>
                    <select class="form-control" name="lang" id="language">
                        <option>pl</option>
                        <option>en</option>
                    </select>
                </div>
                <small class="form-text text-muted">Aktualny język strony to <b><?php echo $general_lang ?>.</b>
                </small>
                <br>
                <button class="btn btn-primary" type="submit" name="general_lang">Ustaw</button>
            </form>
            <br>
            <div class="alert alert-warning form-width" role="alert">
                Jeżeli po ustawieniu dana pozycja się nie zmieni, spróbuj odświeżyć stronę.
            </div>
        </div>
    </div>
    </div>
</body>

</html>