<?php if ($header_footer) { ?>

    <!-- Footer -->
    <footer class="footer bg-color-blur pt-10 pt-lg-15 text-white">
        <div class="container">
            <div class="row g-10">
                <div class="col-lg-9 col-xl-8 order-lg-2">
                    <div class="row g-6">
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-widget text-center text-md-start">
                                <h4 class=" mb-2">Links</h4>
                                <ul class="link-list list-unstyled mb-0">
                                    <li>
                                        <a href="<?= SITE_URL ?>">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?= SITE_URL ?>blogs" target="_blank">Blog</a>
                                    </li>
                                    <li>
                                        <a href="<?= SITE_URL ?>login" target="_blank">Sign in</a>
                                    </li>
                                    <li>
                                        <a href="<?= SITE_URL ?>register" target="_blank">Register</a>
                                    </li>
                                    <li>
                                        <a href="<?= SITE_URL ?>contact-us" target="_blank">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-widget text-center text-md-start">
                                <h4 class=" mb-2">Browse</h4>
                                <ul class="link-list list-unstyled mb-0">
                                    <li>
                                        <a href="<?= SITE_URL ?>pages/fair-use-policy" target="_blank">Fair Use Policy</a>
                                    </li>
                                    <li>
                                        <a href="<?= SITE_URL ?>pages/cancellation" target="_blank">Cancellation & Refund</a>
                                    </li>
                                    <li>
                                        <a href="<?= SITE_URL ?>pages/terms" target="_blank">Terms of Service</a>
                                    </li>
                                    <li>
                                        <a href="<?= SITE_URL ?>pages/privacy" target="_blank">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-widget text-center text-md-start">
                                <h4 class=" mb-2">Blogs</h4>
                                <ul class="link-list list-unstyled mb-0">
                                    <li>
                                        <a href="<?= SITE_URL ?>blogs/detail/integration-guide-for-chatbot-using-google-tag-manager" target="_blank"> Integration guide for Chatbot using Google Tag
                                            Manager</a>
                                    </li>
                                    <li>
                                        <a href="<?= SITE_URL ?>blogs/detail/how-to-improve-chatbot-response" target="_blank">How to
                                            improve Connect AI chatbot</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 order-lg-1 me-auto">
                    <div class="footer-widget text-center text-lg-start">
                        <a href="<?= SITE_URL ?>">
                            <img src="<?= SITE_URL ?>public/front/assets/images/conncect_logo_white.png" alt="" class="img-fluid" width="200">
                        </a>
                        <p class=" mb-0 mt-4">
                            hi@connectai.com
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid p-2" style="background-color: #640b5b;">

            <div class="text-center">
                <p class=" mb-0">
                    Copyright <span class="">ConnectAi</span>.
                    Powered By <a href="https://magicwebservices.com/" target="_blank" class="text-white ms-3">
                        Magic Web Services</a>
                </p>
            </div>
        </div>
    </footer>

    <?php if ($show_project_model == true) { ?>
        <!-- Auto Modal -->
        <div class="modal fade shadow" id="ModalRefresh" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header p-2 border-0">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">
                        <h4 class="text-center">Let's Create A Chatbot For Your Website</h4>
                        <form action="" class="p-2">
                            <h6 class="mb-3">Website URL
                            </h6>
                            <input type="text" class="form-control form-control-sm mb-2" value="https://www.">
                            <h6 class="mb-3">Website Language
                            </h6>
                            <input type="text" class="form-control form-control-sm mb-2" value="English">
                            <div class="d-grid gap-2 mt-5">
                                <a class="btn btn-primary">NEXT <i class="fas fa-chevron-circle-right"></i></a>

                            </div>
                        </form>
                        <div class="row">
                            <div class="col-md-4">
                                <p> <i class="fas fa-check-circle text-primary" style="font-size: 12px;"></i>
                                    Multilingual Support</p>
                            </div>
                            <div class="col-md-4">
                                <p> <i class="fas fa-check-circle text-primary" style="font-size: 12px;"></i> Free
                                    forever plan</p>
                            </div>
                            <div class="col-md-4">
                                <p> <i class="fas fa-check-circle text-primary" style="font-size: 12px;"></i> No credit
                                    card required</p>
                            </div>
                        </div>
                        <span>Note: With the free plan you can only add a single website. So ensure you add right
                            website links above.
                        </span>
                        <h5 class="text-center">Already have an account ? <a href="javascript:void(0);" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#ModalLogin">Login Now</a>

                        </h5>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- Modal Login-->
    <div class="modal fade shadow" id="ModalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-2 border-0">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <h4 class="text-center">Let's Create A Chatbot For Your Website</h4>
                    <form action="" class="p-2">

                        <h6 class="mb-3">Email
                        </h6>
                        <input type="text" class="form-control form-control-sm mb-2" placeholder="Enter Email Address">
                        <div class="d-grid gap-2 mt-5">
                            <a class="btn btn-primary">Continue <i class="fas fa-chevron-circle-right"></i></a>

                        </div>
                        <div class="text-center mt-2">
                            <a href="https://accounts.google.com/o/oauth2/auth/oauthchooseaccount?client_id=1031032234556-8j15t0r4j6vd5sn57720pejifu6mf6us.apps.googleusercontent.com&redirect_uri=https%3A%2F%2Fwww.robofy.ai%2FGoogleCallback.aspx&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&response_type=code&service=lso&o2v=1&theme=glif&flowName=GeneralOAuthFlow">

                                <img src="<?= SITE_URL ?>public/front/assets/images/google-signin-button-1024x260.png" alt="" class="img-fluid" height="60" width="250">
                            </a>

                        </div>
                        <div class="text-center mt-2">
                            <img src="<?= SITE_URL ?>public/front/assets/images/login-social-proof.png" alt="" class="img-fluid" height="60" width="450">
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-4">
                            <p> <i class="fas fa-check-circle text-primary" style="font-size: 12px;"></i>
                                Multilingual Support</p>
                        </div>
                        <div class="col-md-4">
                            <p> <i class="fas fa-check-circle text-primary" style="font-size: 12px;"></i> Free
                                forever plan</p>
                        </div>
                        <div class="col-md-4">
                            <p> <i class="fas fa-check-circle text-primary" style="font-size: 12px;"></i> No credit
                                card required</p>
                        </div>
                    </div>
                    <span>Note: With the free plan you can only add a single website. So ensure you add right
                        website links above.
                    </span>

                </div>
            </div>
        </div>
    </div>

<?php } ?>
</div>



<!-- JS -->
<script src="<?= SITE_URL ?>public/front/assets/js/plugins.js"></script>
<script src="<?= SITE_URL ?>public/front/assets/js/main.js"></script>

<?php if ($show_extra_script) { ?>
    <!-- Pricing JS -->
    <script src="<?= SITE_URL ?>public/front/assets/js/price.js"></script>
<?php } ?>
</body>

</html>