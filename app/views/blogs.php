<main class="flex-grow-1">
    <!-- Page Header -->

    <?php if (isset($bread_crumb)) {
        echo $bread_crumb;
    } ?>

    <!-- Blog -->
    <section class="py-15">
        <div class="container" id="Knowledge2">
            <h3 data-aos="fade-up-sm" data-aos-delay="10" class="mt-5">
                Integration guide for Chatbot using Google Tag Manager
            </h3>
            <div class="row  mb-18 pt-5 ">
                <?php $counter = $i = 0;
                foreach ($blogs_data as $bk => $bv) {
                    if ($bk % 2 == 0) {
                        ++$counter;
                    }
                    ++$i;
                ?>
                    <div class="col-md-6 col-lg-4 col-xl-4 col-sm-12 mb-5 text-center" data-aos="fade-up-sm" data-aos-delay="50">
                        <div class="card p-2 shadow" id="Step<?= (($bk % 2 == 0) ? 1 : 2) ?>Card">
                            <h6 class="text-start">Blog <?= $i; ?></h6>
                            <div class="text-center">
                                <a href="<?= SITE_URL ?>blogs/detail/<?= $bv['blo_slug'] ?>">
                                    <img src="<?= UPLOAD_URL . 'admin/blog_images/' . $bv['blo_images']; ?>" alt="<?= $bv['blo_image_alt_text'] ?>" class="img-fluid text-center" width="100">
                                </a>
                            </div>
                            <a href="<?= SITE_URL ?>blogs/detail/<?= $bv['blo_slug'] ?>" class="text-center mt-1">
                                <?= $bv['blo_title'] ?>
                            </a>
                        </div>
                        <a href="<?= SITE_URL ?>blogs/detail/<?= $bv['blo_slug'] ?>" target="_blank" class="text-center title stretched-link"> <?= $bv['blo_desc'] ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>


</main>