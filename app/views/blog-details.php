<main class="flex-grow-1">
    <!-- Blog -->
    <section class="">
        <div class="container" id="step1">
            <h3 data-aos="fade-up-sm" data-aos-delay="10" class="mt-5">
                <?= $blogs_data['blo_desc'] ?>
            </h3>
            <div class=" mb-18 pt-5 p-5" style="display: flex; justify-content: center;">
                <div class="" data-aos="fade-up-sm" data-aos-delay="50">
                    <div class="card  p-5 shadow" id="Step1Card">
                        <div class="text-center">
                            <a href="javascript:void(0);">
                                <img src="<?= UPLOAD_URL . 'admin/blog_images/' . $blogs_data['blo_images']; ?>" alt="<?= $blogs_data['blo_image_alt_text']; ?>" class="img-fluid text-center image-icon">
                            </a>
                        </div>
                        <a href="javascript:void(0);" class="text-center mt-1 pb-4 pt-4">
                            <?= $blogs_data['blo_title'] ?>
                        </a>
                    </div>
                    <a href="javascript:void(0);" class="text-center title stretched-link"></a>
                </div>
            </div>
        </div>
    </section>
</main>


<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BlogPosting",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?= (isset($_SERVER['SCRIPT_URI'])) ?  $_SERVER['SCRIPT_URI'] : 'http://conectai.chat/'; ?>"
        },
        "headline": " <?= $blogs_data['blo_meta_title'] ?>",
        "description": " <?= $blogs_data['blo_meta_description'] ?>",
        "image": "<?= UPLOAD_URL . 'admin/blog_images/' . $blogs_data['blo_images']; ?>",
        "author": {
            "@type": "Organization",
            "name": "Magic Web Services",
            "url": "https://www.magicwebservices.com"
        },
        "publisher": {
            "@type": "Organization",
            "name": "",
            "logo": {
                "@type": "ImageObject",
                "url": ""
            }
        },
        "datePublished": ""
    }
</script>