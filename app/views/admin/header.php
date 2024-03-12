<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $meta_description ?>">
    <meta name="author" content="<?= $meta_author ?>">

    <title><?= $title ?></title>

    <link rel="icon" href="<?= SITE_URL ?>public/front/assets/images/conect_png_logo.png" type="image/svg+xml" />
    <!-- Custom fonts for this template-->
    <link href="<?= ADMIN_ASSETS_URL ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= ADMIN_ASSETS_URL ?>css/main.min.css" rel="stylesheet">
    <?php if ($show_data_table) {  ?>
        <link href="<?= ADMIN_ASSETS_URL ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <?php  } ?>
    <!-- Custom styles for this page -->


</head>

<body id="page-top" class="<?= $login_class ?? '' ?>">
    <?php if ($header_footer) {
        require_once ADMIN_VIEW_DIR . 'nav_bar_start.php';
    } ?>