<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/results/result_single-site.php'; 
$id = mysqli_real_escape_string($conn, $_GET['id']);
$query = "SELECT * FROM `sites` WHERE `site_id` = $id";
$result = mysqli_query($conn,$query);
$site = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<?php include('header.php') ?>

<main class="container blog mt-5">

    <div>
        <div><?php echo html_entity_decode($site[0]["site_content"]);?></div>



    </div>
</main>
<?php include('footer.php') ?>