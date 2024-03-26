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
                                        <a href="https://app.conectai.chat/" target="_blank">Sign in</a>
                                    </li>
                                    <!-- <li>
                                        <a href="< ?= SITE_URL ?>register" target="_blank">Register</a>
                                    </li> -->
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
                    <form id="website-detail-form" class="p-2">
                        <h6 class="mb-3">Website URL</h6>
                        <input type="text" name="website_url" id="website_url" class="form-control form-control-sm mb-2" value="https://www.">
                        <div id="add_Website_url_error" class="text-danger"></div>
                        <h6 class="mb-3">Website Language</h6>
                        <input type="text" name="website_lang" id="website_lang" class="form-control form-control-sm mb-2" value="English">
                        <div id="add_Website_lang_error" class="text-danger"></div>
                        <div class="d-grid gap-2 mt-5">
                            <a class="btn btn-primary" onclick="openLoginForm()">NEXT <i class="fas fa-chevron-circle-right"></i></a>
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
                    <h5 class="text-center">
                        Already have an account ? <a href="javascript:void(0);" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#ModalLogin">Login Now</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Login-->
    <div class="modal fade shadow" id="ModalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-2 border-0">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" id="CloseModalLogin" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <h4 class="text-center">Let's Create A Chatbot For Your Website</h4>
                    <div id="email-form">
                        <form id="login-form" class="p-2">
                            <h6 class="mb-3">Email</h6>
                            <input type="email" name="email" id="email" class="form-control form-control-sm mb-2" placeholder="Enter Email Address">
                            <div id="add_email_error" class="text-danger"></div>
                            <div class="d-grid gap-2 mt-5">
                                <button type="submit" id="btn-submit" class="btn btn-primary">Continue <i class="fas fa-chevron-circle-right"></i></button>
                            </div>
                            <div class="text-center mt-2">
                                <img src="<?= SITE_URL ?>public/front/assets/images/login-social-proof.png" alt="" class="img-fluid" height="60" width="450">
                            </div>
                        </form>
                    </div>
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

<link rel="stylesheet" href="<?= SITE_URL ?>public/front/assets/css/sweet_alert.css" />
<script src="<?= SITE_URL ?>public/front/assets/js/sweet_alert.js"></script>
<?php if ($show_extra_script) { ?>
    <!-- Pricing JS -->
    <script src="<?= SITE_URL ?>public/front/assets/js/price.js"></script>
<?php } ?>
<script>
    function openLoginForm() {
        let prev_model = document.getElementById('ModalRefresh');
        let model_form = document.getElementById('website-detail-form');
        let website_url = model_form.elements['website_url'].value;
        let website_lang = model_form.elements['website_lang'].value;
        let websiteURL = website_url.trim();

        // Check if the URL input is empty
        if (websiteURL === '' || websiteURL.replace("https://www.", "") == "") {
            document.getElementById("add_Website_url_error").innerHTML = "Please enter website URL to proceed further.";
            document.getElementById('website_url').focus();
            return false;
        }
        var websitePattern = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([\/\w.-]*)*\/?$/i;
        if (!websiteURL.replace("https://www.", "").match(websitePattern)) {
            document.getElementById("add_Website_url_error").innerHTML = "Invalid website URL.";
            return false;
        }


        if (website_url && website_lang) {
            prev_model.classList.remove('show');
            prev_model.setAttribute('aria-hidden', 'true');
            prev_model.setAttribute('style', 'display: none');
            const modalsBackdrops = document.getElementsByClassName('modal-backdrop');
            // remove every modal backdrop
            for (let i = 0; i < modalsBackdrops.length; i++) {
                document.body.removeChild(modalsBackdrops[i]);
            }
            let model_display = document.getElementById('ModalLogin');
            var myModal = new bootstrap.Modal(model_display, {});
            // Show the modal after 3 seconds
            myModal.show();
        } else {
            Swal.fire({
                title: "Please Fill Website Url",
                icon: "error"
            });
        }
    }

    let login_form = document.getElementById('login-form');
    if (login_form) {
        login_form.addEventListener('submit', (e) => {
            e.preventDefault();
            let model_form = document.getElementById('website-detail-form');
            let email_value = login_form.elements['email'].value;
            if (email_value) {
                if (email_value.trim()) {
                    if (email_value.length < 5 || email_value.length > 150) {
                        document.getElementById('add_email_error').innerHTML = "Email should be between 5-150 characters.";
                        document.getElementById('email').focus();
                        return false;
                    }
                    let submit_btn = document.getElementById('btn-submit');
                    let data = new FormData();
                    data.append('email', email_value);
                    data.append('website_url', model_form.elements['website_url'].value);
                    data.append('website_lang', model_form.elements['website_lang'].value);
                    data.append('send_otp', '1');
                    let send_otp = new XMLHttpRequest();
                    send_otp.open("POST", "<?= SITE_URL ?>auth/send-otp-details", true);
                    send_otp.onload = function() {
                        let res = JSON.parse(this.response);
                        if (res.sts == true) {
                            submit_btn.setAttribute('disabled', 'disabled');
                            let otp_verification = res.results;
                            let display_otp = new XMLHttpRequest();
                            let data1 = new FormData();
                            data1.append('email', email_value);
                            data1.append('display_otp', '1');
                            display_otp.open("POST", "<?= SITE_URL ?>auth/display-otp-form", true);
                            display_otp.onload = function() {
                                document.getElementById("email-form").innerHTML = this.response;
                                var mins = otp_verification; //Set the number of minutes you need
                                var secs = parseInt(mins * 60);
                                setInterval(function() {
                                    secs--;
                                    document.getElementById("show_otp_timer").innerHTML = 'Expires in ' + secs + ' Seconds';
                                    if (secs < 0) {
                                        document.getElementById("show_otp_timer").innerHTML = '<a href="javascript:void(0);" class="text-info " onclick="resendOtp(this)" data-email="' + email_value + '" data-expires="' + mins + '">Resend Otp</a>';
                                    }
                                }, 1000);
                            }
                            display_otp.send(data1);
                        } else {
                            Swal.fire({
                                title: res.msg,
                                icon: "error"
                            });
                        }
                    }
                    send_otp.send(data);
                } else {
                    document.getElementById("add_email_error").innerHTML = "Email Address Must be required!";
                    return false;
                }
            } else {
                document.getElementById("add_email_error").innerHTML = "Email Address Must be required!";
                return false;
            }
        });
    }

    let website_form = document.getElementById('website_form');
    if (website_form) {
        website_form.addEventListener('submit', (e) => {
            e.preventDefault();
            let website_url = website_form.elements['url'].value;
            if (website_url === '' || website_url.replace("https://www.", "") == "") {
                document.getElementById("add_url_error").innerHTML = "Please enter website URL to proceed further.";
                document.getElementById('website_url').focus();
                return false;
            }
            var websitePattern = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([\/\w.-]*)*\/?$/i;
            if (!website_url.replace("https://www.", "").match(websitePattern)) {
                document.getElementById("add_Website_url_error").innerHTML = "Invalid website URL.";
                return false;
            }
            let prev_model = document.getElementById('ModalRefresh');
            var myModal = new bootstrap.Modal(prev_model, {});
            // Show the modal after 3 seconds
            myModal.show();

            let model_form = document.getElementById('website-detail-form');
            model_form.elements['website_url'].value = website_url;
        });
    }

    function verification_form() {
        let verification_form = document.getElementById('verification-form');
        if (verification_form) {
            let email_value = verification_form.elements['email'].value;
            let otp_value = verification_form.elements['otp'].value;
            if (email_value) {
                if (email_value.trim()) {
                    if (otp_value.trim()) {
                        if (otp_value.length == 6) {
                            let validate_otp = new XMLHttpRequest();
                            let data1 = new FormData();
                            data1.append('email', email_value);
                            data1.append('otp', otp_value);
                            data1.append('validate_otp', '1');
                            validate_otp.open("POST", "<?= SITE_URL ?>auth/validate-otp", true);
                            validate_otp.onload = function() {
                                let res = JSON.parse(this.response);
                                if (res.sts == true) {
                                    let auth = new XMLHttpRequest();
                                    let data1 = new FormData();
                                    data1.append('email', email_value);
                                    data1.append('login', '1');
                                    auth.open("POST", "<?= SITE_URL ?>auth", true);
                                    auth.onload = function() {
                                        let res = JSON.parse(this.response);
                                        if (res.sts == true) {
                                            console.log(res);
                                            return false;
                                            window.location.href = res.results;
                                        } else {
                                            Swal.fire({
                                                title: res.msg,
                                                icon: "error"
                                            });
                                        }
                                    }
                                    auth.send(data1);
                                } else {
                                    Swal.fire({
                                        title: res.msg,
                                        icon: "error"
                                    });
                                }
                            }
                            validate_otp.send(data1);
                        } else {
                            document.getElementById('add_otp_error').innerHTML = "Otp should be 6 characters.";
                            document.getElementById('add_otp_error').focus();
                            return false;
                        }
                    } else {
                        document.getElementById('add_otp_error').innerHTML = "Otp should be required.";
                        document.getElementById('add_otp_error').focus();
                        return false;
                    }
                } else {
                    document.getElementById('add_otp_error').innerHTML = "Email Must be required!";
                    document.getElementById('add_otp_error').focus();
                    return false;
                }
            } else {
                document.getElementById('add_otp_error').innerHTML = "Email Must be required!";
                document.getElementById('add_otp_error').focus();
                return false;
            }
        }
    }

    function resendOtp(_this) {
        let email = _this.getAttribute('data-email');
        let expires = _this.getAttribute('data-expires');
        let display_otp = new XMLHttpRequest();
        let data1 = new FormData();
        data1.append('email', email);
        data1.append('resend_otp', '1');
        display_otp.open("POST", "<?= SITE_URL ?>auth/resend-otp", true);
        display_otp.onload = function() {
            let res = JSON.parse(this.response);
            if (res.sts == true) {
                var mins = expires; //Set the number of minutes you need
                var secs = parseInt(mins * 60);
                setInterval(function() {
                    secs--;
                    document.getElementById("show_otp_timer").innerHTML = 'Expires in ' + secs + ' Seconds';
                    if (secs < 0) {
                        document.getElementById("show_otp_timer").innerHTML = '<a href="javascript:void(0);" class="text-info " onclick="resendOtp(this)" data-email="' + email + '" data-expires="' + mins + '">Resend Otp</a>';
                    }
                }, 1000);
            } else {
                Swal.fire({
                    title: res.msg,
                    icon: "error"
                });
            }
        }
        display_otp.send(data1);
    }
</script>

</body>

</html>