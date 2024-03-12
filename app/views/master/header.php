<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title>Connect AI</title>

    <!-- SEO meta tags -->
    <meta name="description" content="Author: Marvel Theme, AI content writing and copywriting html5 and Bootstrap 5 landing page template" />

    <!-- Favicon -->
    <link rel="icon" href="<?= SITE_URL ?>public/front/assets/images/conect_png_logo.png" type="image/svg+xml" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?= SITE_URL ?>public/front/assets/css/plugins.css" />
    <link rel="stylesheet" href="<?= SITE_URL ?>public/front/assets/css/style.css" />
    <!--Font awesome Version--5-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <!--Font awesome Version--6-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="wrapper d-flex flex-column justify-between">
        <?php if ($header_footer) { ?>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg fixed-top bg-white">
                <div class="container">
                    <!-- Logo -->
                    <a href="<?=SITE_URL?>" class="navbar-logo">
                        <img src="<?= SITE_URL ?>public/front/assets/images/connect_ai_png.png" alt="" width="200">
                    </a>

                    <!-- Navbar toggler button -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="navbar-toggler-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>

                    <!-- Navbar content -->
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <div class="navbar-content-inner ms-lg-auto d-flex flex-column flex-lg-row align-lg-center gap-4 gap-lg-10  p-lg-0 ">

                            <ul class="navbar-nav gap-lg-2 gap-xl-5">
                                <li class="nav-item dropdown">
                                    <a class="nav-link active" href="<?= SITE_URL ?>">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="<?= SITE_URL ?>our-pricing">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#Features">Features</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Pages
                                    </a>
                                    <ul class="dropdown-menu megamenu">
                                        <li><a class="dropdown-item " href="<?= SITE_URL ?>blogs">Blogs</a></li>
                                        <li><a class="dropdown-item " href="<?= SITE_URL ?>our-clients">Our Clients</a></li>
                                        <li><a class="dropdown-item " href="<?= SITE_URL ?>conectai-api">ConnectAi API</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="<?= SITE_URL ?>contact-us">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= SITE_URL ?>login">Login/Signup</a>
                                </li>
                            </ul>
                            <div class="">
                                <a href="<?= SITE_URL ?>our-pricing" class="btn btn-outline-primary">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        <?php } ?>