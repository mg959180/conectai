<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index,follow" />
    <!-- Title -->
    <title><?= $meta_title ?? 'Connect AI' ?></title>
    <!-- SEO meta tags -->
    <meta name="description" content="<?= $meta_description ?? 'Author: Marvel Theme, AI content writing and copywriting html5 and Bootstrap 5 landing page template' ?>" />
    <meta name="keywords" content="<?= $meta_keyword ?? 'Author: Marvel Theme, AI content writing and copywriting html5 and Bootstrap 5 landing page template' ?>" />
    <!-- Favicon -->
    <link rel="icon" href="<?= FRONT_ASSETS_URL ?>images/conect_png_logo.png" type="image/svg+xml" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?= FRONT_ASSETS_URL ?>css/plugins.css" />
    <link rel="stylesheet" href="<?= FRONT_ASSETS_URL ?>css/style.css" />
    <!--Font awesome Version--5-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <!--Font awesome Version--6-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="canonical" href="<?= (isset($_SERVER['SCRIPT_URI'])) ?  $_SERVER['SCRIPT_URI'] : 'http://conectai.chat/'; ?>" />
    <meta property="og:title" content="<?= $meta_title ?? 'Website Design Development & Digital Marketing Company in India- MWS' ?>" />
    <meta property="og:description" content="<?= $meta_description ?? 'Boost your online presence with our expert website design, development, and digital marketing services in Mumbai, India at MagicWebService. Call Now!' ?>" />
    <meta property="og:image" content="<?= $meta_image ?? FRONT_ASSETS_URL . 'images/conect_png_logo.png' ?>" />
    <meta property="og:image:alt" content="<?= $meta_image_alt ?? '' ?>" />
    <meta property="og:site_name" content="Magic Web Services" />
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:url" content="<?= (isset($_SERVER['SCRIPT_URI'])) ?  $_SERVER['SCRIPT_URI'] : 'http://conectai.chat/'; ?>" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@MagicWebService">
    <meta name="twitter:creator" content="@MagicWebService">
    <meta property="twitter:title" content="<?= $meta_title ?? 'Website Design Development & Digital Marketing Company in India , Website Design Company in Mumbai, India, Website Development Services in Mumbai, Website Design & Development Company India - MWS' ?>" />
    <meta property="twitter:description" content="<?= $meta_description ?? 'Boost your online presence with our expert website design, development, and digital marketing services in Mumbai, India at MagicWebService. Call Now!' ?>" />
    <meta property="twitter:url" content="<?= (isset($_SERVER['SCRIPT_URI'])) ?  $_SERVER['SCRIPT_URI'] : 'http://conectai.chat/'; ?>" />
    <meta name="twitter:image" content="<?= $meta_image ??  FRONT_ASSETS_URL . 'images/conect_png_logo.png' ?>">
    <meta property="twitter:image:alt" content="<?= $meta_image_alt ?? '' ?>" />
    <meta name="twitter:image:width" content="1200">
    <meta name="twitter:image:height" content="566">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "MagicWebServices",
            "alternateName": "Magic Web Services",
            "url": "https://www.magicwebservices.com/",
            "logo": <?= SITE_URL . 'public/front/assets/images/conect_png_logo.png' ?>,
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91-9594349228",
                "contactType": "customer service",
                "contactOption": "HearingImpairedSupported",
                "areaServed": "IN",
                "availableLanguage": "en"
            },
            "sameAs": [
                "https://www.facebook.com/magicwebservices/",
                "https://twitter.com/MagicWebService",
                "https://www.linkedin.com/company/magic-web-services/"
            ]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "MagicWebServices",
            "image": "<?= SITE_URL . 'public/front/assets/images/conect_png_logo.png' ?>",
            "@id": "https://www.magicwebservices.com/",
            "url": "https://www.magicwebservices.com//",
            "telephone": "+91-9594349228",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Office 208, 21 Block A, Sector 67, Noida, Uttar Pradesh",
                "addressLocality": "Noida",
                "postalCode": "201305",
                "addressCountry": "IN"
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday"
                ],
                "opens": "10:30",
                "closes": "19:00"
            }
        }
    </script>
</head>

<body>
    <div class="wrapper d-flex flex-column justify-between">
        <?php if ($header_footer) { ?>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg fixed-top bg-white">
                <div class="container">
                    <!-- Logo -->
                    <a href="<?= SITE_URL ?>" class="navbar-logo">
                        <img src="<?= FRONT_ASSETS_URL ?>images/connect_ai_png.png" alt="" width="200">
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
                                    <a class="nav-link " href="<?= SITE_URL ?>features">Features</a>
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
                                    <a class="nav-link" href="javascript:void(0);" onclick="openModel()">Get Started</a>
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