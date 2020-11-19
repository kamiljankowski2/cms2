<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/results/result_main.php';
?>
<?php include('header.php') ?>
<div class="container-fluid d-flex  justify-content-center align-items-center">
    <section class="container d-flex  justify-content-center align-items-center ">
        <div class="desc">
            <h1 class="main_heading"><?php echo $main_h1; ?></h1>
            <p class="main_desc"><?php echo $main_desc; ?></p>
            <div> <button class="btn btn-danger">Zobacz wpisy</button>
                <button class="btn btn-header">Dokumentacja</button>
            </div>
        </div>
        <img class="image-header" src="<?php echo $main_img; ?>" alt="<?php echo $main_alt_img; ?>">
    </section>
</div>
<section class="container mt-5">
    <div class="row">
        <div class="col-sm">
            <?php echo html_entity_decode($main_col1) ?>
        </div>
        <div class="col-sm">
            <?php echo html_entity_decode($main_col2) ?>
        </div>
        <div class="col-sm">
            <?php echo html_entity_decode($main_col3) ?>
        </div>
    </div>
</section>
<?php include('footer.php') ?>