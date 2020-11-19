<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/results/result_header.php'; 
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/results/result_single-post.php'; 
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/results/result_single-site.php'; 
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/results/result_main.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/kjankowski/results/result_menu.php'; 
?>
<!DOCTYPE html>
<html lang="<?php echo $general_lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    //TITLESY
    if (stristr($_SERVER["REQUEST_URI"], "blog")) {
        $title = "Najnowsze wpisy – $general_brand";    
    } elseif (($_SERVER["REQUEST_URI"] == "/kjankowski/template/" || stristr($_SERVER["REQUEST_URI"], "index") )) {
        $title = $general_title." – ".$general_brand ;
    } elseif (stristr($_SERVER["REQUEST_URI"], "post")) {
        $title = $post[0]['post_title']." – ".$general_brand;
    } 
     elseif (stristr($_SERVER["REQUEST_URI"], "dokumentacja")) {
        $title = "Dokumentacja";
    } elseif (stristr($_SERVER["REQUEST_URI"], "site")) {
        $title = $site[0]['site_title']." – ".$general_brand;
    } 
     ?>
    <title><?php echo $title?></title>
    <?php 
    //INDEXY
          $r = "index";
         if (($_SERVER["REQUEST_URI"] == "/kjankowski/template/" || stristr($_SERVER["REQUEST_URI"], "index") )) {
            if($main['main_index'] == "Tak") {
                $r = "index";
            } elseif($main['main_index'] == "Nie")  {
                $r = "noindex";
            }
        }elseif (stristr($_SERVER["REQUEST_URI"], "post")) {
        if($post[0]['post_index'] == "Tak") {
            $r = "index";
        } elseif($post[0]['post_index'] == "Nie")  {
            $r = "noindex";
        }
    } elseif (stristr($_SERVER["REQUEST_URI"], "site")) {
        if($site[0]['site_index'] == "Tak") {
            $r = "index";
        } elseif($site[0]['site_index'] == "Nie")  {
            $r = "noindex";
        }
    } 
     ?>
    <meta name="robots" content="<?php echo $r ?>" />
    <?php
    if (stristr($_SERVER["REQUEST_URI"], "post")) {
        $d = "";
    }elseif (($_SERVER["REQUEST_URI"] == "/kjankowski/template/" || stristr($_SERVER["REQUEST_URI"], "index") )){
        $d = $general_desc;
    }elseif (stristr($_SERVER["REQUEST_URI"], "site")) {
        $d = $site[0]['site_desc'];
    }

    ?>
    <meta name="description" content="<?php echo $d; ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-nav">
            <div class="container">
                <a class="navbar-brand" href="index.php"><?php echo $general_brand; ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-0" id="navbarNavAltMarkup">
                    <ul class="navbar-nav">
                        <?php
                    foreach ($menu as $el): ?>
                        <li class="nav-item">
                            <a class="nav-link" href=" <?php echo $el["menu_url"] ?>"><?php echo $el["menu_name"] ?></a>
                        </li>
                        <?php endforeach; ?>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary btn-primary-admin"
                                href="/kjankowski/admin-general.php">Panel
                                administratora</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>