<main class="flex-grow-1">
    <!-- < ?php if (isset($bread_crumb)) {
        echo $bread_crumb;
    } ?> -->

    <!-- Our Clients -->
    <section id="OurClients">

        <div class="container">
            <h2 class="text-center mt-2" data-aos="fade-up-sm" data-aos-delay="50">Our Clients</h2>
            <p class="mt-3 text-center" data-aos="fade-up-sm" data-aos-delay="50">Everyday several businesses are adding the chatbot on their websites. Few of them are listed below. <br>
                Get a chatbot for your business now!</p>
            <div class="row">
                <?php foreach ($clients_data as $cli) { ?>
                    <div class="col-md-4 text-center mb-4" data-aos="fade-up-sm" data-aos-delay="50">
                        <div class="card mb-3 shadow border-0">
                            <img src="<?= UPLOAD_URL . 'admin/client_images/' . $cli['poi_image']; ?>" alt="<?= $cli['poi_image_alt_text'] ?>" class="img-fluid">
                        </div>
                        <a href="<?= $cli['poi_desc'] ?>" class="stretched-link" target="_blank"><?= $cli['poi_title'] ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>





</main>