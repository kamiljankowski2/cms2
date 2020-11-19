<?php 

include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/results/result_sites.php'; 
if(isset($_POST['delete'])) {
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
    $query = "DELETE FROM sites WHERE site_id = $delete_id";
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
            <h2 class="mb-5">Wszystkie podstrony</h2>
            <?php

            foreach ($sites as $site): ?>
            <li class="list-group-item mb-3 single-post">
                <h3><?php echo $site["site_title"]; ?></h3>
                <div><b>SLUG:</b> site.php?id=<?php echo $site["site_id"]?></div>
                <div class="btn-container">
                    <a class="btn btn-success" href="template/site.php?id=<?php echo $site["site_id"]; ?>">Zobacz</a>
                    <a class="btn btn-primary" href="admin-edit_site.php?id=<?php echo $site["site_id"]; ?>"
                        class="btn btn-secondary">Edytuj</a>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <input type="hidden" name="delete_id" value="<?php echo $site["site_id"]?>">
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