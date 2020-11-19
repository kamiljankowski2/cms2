<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/results/result_menu.php'; 

if(isset($_POST['menu_add'])) {
    $menu_name = mysqli_real_escape_string($conn, $_POST['menu_name']);
    $menu_url = mysqli_real_escape_string($conn, $_POST['menu_url']);
    $query = "INSERT INTO menu(menu_name, menu_url) VALUES ('$menu_name','$menu_url')";
    mysqli_query($conn, $query);
}
if(isset($_POST['delete'])) {
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
    $query = "DELETE FROM menu WHERE menu_id = $delete_id";
    mysqli_query($conn, $query);
}


?>

<?php foreach ($menu2 as $el) {
    
    if(isset($_POST[$el["menu_name"]."1"])){
        $poz = mysqli_real_escape_string($conn, $_POST[$el["menu_name"]]);
        $query = "UPDATE menu SET menu_poz='$poz' WHERE menu_name = '".$el["menu_name"]."'";
        mysqli_query($conn, $query);
           
    }
}


        ?>

<?php include('admin-head.php') ?>
<div class="container-fluid">
    <?php include('admin-nav.php') ?>
    <div class="container col-4 my-5">
        <h2 class="mb-4">Dodaj nowy odnośnik</h2>


        <form class="form-width" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
            <div class="input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="menu_name">Etykieta</label>
                </div>
                <input type="text" id="menu_name" name="menu_name" class="form-control">
            </div>
            <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="menu_url">Adres URL</label>
                </div>
                <input type="text" id="menu_url" name="menu_url" class="form-control">
            </div>


            <br>

            <button class="btn btn-primary" type="submit" name="menu_add">Dodaj</button>
        </form>
        <br><br>

        <hr>
        <h2 class="mb-4">Kolejność elementów menu</h2>
        <?php foreach ($menu2 as $el): ?>
        <form class="form-width" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
                <label for="<?php echo $el["menu_name"] ?>"><b><?php echo $el["menu_name"] ?></b> – Aktualna pozycja:
                    <b><?php echo $el["menu_poz"] ?>.</b>
                </label>
                <select class="form-control" name="<?php echo $el["menu_name"] ?>" id="<?php echo $el["menu_name"] ?>">
                    <option><?php echo $el["menu_poz"] ?></option>
                    <?php for ($i=1; $i <= count($menu) ; $i++) : ?>
                    <option><?php echo $i?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <button class="btn btn-primary" type="submit" name="<?php echo $el["menu_name"]."1" ?>">Ustaw</button>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="hidden" name="delete_id" value="<?php echo $el["menu_id"]?>">
                <input type="submit" name="delete" value="Usuń" class="btn btn-danger ">
            </form>
        </form>
        <br>

        <?php endforeach; ?>
        <br>
        <div class="alert alert-warning form-width" role="alert">
            <b>UWAGA!</b> Jeżeli ustawiłeś, a aktualna pozycja się nie zmieniła – spróbuj odświeżyć stronę.
        </div>
        <div class="alert alert-danger form-width" role="alert">
            <b>UWAGA!</b> Każda pozycja musi posiadać swój jeden unikalny numer! Jeżeli się powtarza, zmień ASAP!
        </div>
        <div class="alert alert-primary form-width" role="alert">
            <b>UWAGA!</b> <br>
            Strona główna: index.php<br>
            Blog: blog.php
        </div>
    </div>
</div>