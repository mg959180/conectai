<main class="flex-grow-1">
    <?php if (isset($bread_crumb)) {
        echo $bread_crumb;
    } ?>

    <!-- Contact -->
    <section class="py-15 pt-lg-30">
        <div class="container">
            <div class="row justify-center">
                <div class="col-lg-10">
                    <div class="row row-cols-1 row-cols-md-2 gy-20 gx-lg-20">
                        <div class="col" data-aos="fade-up-sm" data-aos-delay="50">
                            <div class="text-center">
                                <div class="icon w-18 h-18 rounded-3 p-4 d-inline-flex align-center justify-center bg-primary text-white mb-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M18 6v.01M18 13l-3.5-5a4 4 0 1 1 7 0L18 13" />
                                        <path d="M10.5 4.75 9 4 3 7v13l6-3 6 3 6-3v-2M9 4v13m6-2v5" />
                                    </svg>
                                </div>
                                <h4>
                                    Mumbai - India
                                </h4>
                                <h5 class=" mb-0">PLOT NO. 123, SHREE GANESH APARTMENT, FLAT NO.202, SECTOR 19, KOPARKHAIRNE, Mumbai Suburban</h5>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up-sm" data-aos-delay="100">
                            <div class="text-center">
                                <div class="icon w-18 h-18 rounded-3 p-4 d-inline-flex align-center justify-center bg-primary text-white mb-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M18 6v.01M18 13l-3.5-5a4 4 0 1 1 7 0L18 13" />
                                        <path d="M10.5 4.75 9 4 3 7v13l6-3 6 3 6-3v-2M9 4v13m6-2v5" />
                                    </svg>
                                </div>
                                <h4>
                                    Noida, Uttar Pradesh
                                </h4>
                                <h5 class=" mb-0">A-21, 2nd Floor, Office-No.208, Block A, Sector 67, Noida, Uttar Pradesh 201301</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ratio ratio-16x9 rounded-4 overflow-hidden mt-18" data-aos="fade-up-sm" data-aos-delay="150">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.0206168581235!2d77.37685031508729!3d28.61809258241879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce506f01aa4b9%3A0x1b19ee7fcfa1607f!2sA-21%2C%202nd%20Floor%2C%20Office-No.208%2C%20Block%20A%2C%20Sector%2067%2C%20Noida%2C%20Uttar%20Pradesh%20201307!5e0!3m2!1sen!2sin!4v1646722535756" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


            <div class="row justify-center mt-18" data-aos="fade-up-sm" data-aos-delay="50">
                <div class="col-lg-8 col-xl-6">
                    <form class="vstack gap-8" id="contact-form">
                        <div id="error-div" class="">

                        </div>
                        <div class="">
                            <label for="name" class="form-label fs-lg fw-medium mb-4"> Your name* </label>
                            <div class="input-group with-icon">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <circle cx="12" cy="7" r="4" />
                                        <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2" />
                                    </svg>
                                </span>
                                <input type="text" id="name" name="name" class="form-control rounded-2" placeholder="What's your name?" required />
                            </div>
                        </div>
                        <div class="">
                            <label for="email" class="form-label fs-lg fw-medium mb-4">
                                Email Address*
                            </label>
                            <div class="input-group with-icon">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2">
                                            <path d="M2.25 5.25a1.5 1.5 0 0 1 1.5-1.5h10.5a1.5 1.5 0 0 1 1.5 1.5v7.5a1.5 1.5 0 0 1-1.5 1.5H3.75a1.5 1.5 0 0 1-1.5-1.5v-7.5Z" />
                                            <path d="M2.25 5.25 9 9.75l6.75-4.5" />
                                        </g>
                                    </svg>
                                </span>
                                <input type="email" id="email" name="email" class="form-control rounded-2" placeholder="Enter Your Email" required />
                            </div>
                        </div>
                        <div class="">
                            <label for="phone" class="form-label fs-lg fw-medium mb-4">
                                Phone Number
                            </label>
                            <div class="input-group with-icon">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2m10 3a2 2 0 0 1 2 2m-2-6a6 6 0 0 1 6 6" />
                                    </svg>
                                </span>
                                <input type="tel" id="phone" name="phone" class="form-control rounded-2" placeholder="Phone Number" />
                            </div>
                        </div>
                        <div class="">
                            <label for="message" class="form-label fs-lg fw-medium mb-4">
                                Your Message*
                            </label>
                            <textarea id="message" name="message" class="form-control rounded-2" placeholder="Write here your details message" rows="4" required></textarea>
                        </div>
                        <div class="">
                            <button type="submit" name="sendData" class="btn btn-primary">Send Message</button>
                        </div>
                        <div class="status alert mb-0 d-none"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section py-10 py-lg-15" data-aos="fade-up-sm" data-aos-offset="150">
        <div class="container">
            <div class="rounded-5 border position-relative z-1 gradient-bg">
                <div class="animate-scale position-absolute w-full h-full z-n1">
                    <img src="<?= FRONT_ASSETS_URL ?>images/shapes/blurry-shape-4.svg" alt="" class="bg-shape img-fluid" />
                </div>
                <div class="row justify-center">
                    <div class="col-lg-10">
                        <div class="text-center pt-6 px-6 pt-md-10 px-md-10 pt-lg-18 px-lg-18">
                            <h2 class="mb-6 ">
                                Using
                                <span class="text-primary">ConnectAi</span>
                                you can save hours each week creating long-form content.
                            </h2>
                            <a href="https://app.conectai.chat/" class="btn btn-primary">Get Started Free</a>
                            <div class="cta-image-container mt-10">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 34 90" class="text-primary arrow-shape">
                                    <path fill="currentColor" d="M3.724 2.303c8.095 4.54 13.968 13.648 16.408 22.434 2.336 8.415 2.426 20.276-5.705 25.79-2.961 2.01-7.092 2.24-8.781-1.444-1.571-3.422.29-7.096 3.683-8.452 9.162-3.663 16.334 8.02 18.234 15.324a30.563 30.563 0 0 1 .279 14.195c-.952 4.334-2.866 9.283-6.298 12.254-.494.427-1.3-.29-.971-.84 1.77-2.928 3.677-5.571 4.79-8.851 1.155-3.405 1.62-7.048 1.44-10.626-.358-7.103-3.568-15.745-10.125-19.354-3.476-1.912-10.316-1.353-10.055 3.973.107 2.158 1.647 4.035 3.933 3.81 2.086-.209 4.001-1.766 5.333-3.279 5.427-6.16 4.857-15.89 2.67-23.215a39.21 39.21 0 0 0-5.682-11.577c-2.69-3.76-6.017-6.61-9.592-9.472-.35-.277.039-.896.44-.67Z" />
                                    <path fill="currentColor" d="M1.562.977c9.931 2.79 17.058 11.508 19.312 21.4 1.085 4.762 1.187 9.7.548 14.54-.653 4.937-1.854 10.549-4.949 14.589-2.156 2.82-7.305 5.961-10.266 2.388-2.608-3.142-2.18-9.094.45-12.093 2.945-3.356 8.048-2.969 11.491-.718 4.112 2.688 6.675 7.596 8.265 12.12 3.48 9.905 2.395 21.33-3.11 30.327-.527.858-1.947.203-1.423-.676 3.935-6.565 5.559-14.253 4.688-21.84-.443-3.864-1.552-7.677-3.306-11.147-2.011-3.973-5.078-8.396-9.854-8.994-5.273-.66-7.99 4.089-7.3 8.82.403 2.76 1.938 4.99 5.042 4.079 2.519-.74 4.35-3.051 5.51-5.296 3.708-7.194 4.563-16.802 3.066-24.658C17.848 13.969 11.217 4.92 1.373 1.995.736 1.812.917.797 1.563.977Z" />
                                    <path fill="currentColor" d="M21.218 73.052c.375 2.062.446 4.204.634 6.29.088.987.18 1.975.266 2.964.04.457-.025 2.873.383 3.085.21.11 2.177-1.456 2.452-1.64l2.452-1.641c1.595-1.065 3.329-2.678 5.205-3.148.671-.169 1.174.542.746 1.106-.792 1.05-1.99 1.644-3.08 2.36-1.23.812-2.464 1.62-3.695 2.432-1.142.748-3.43 3.037-4.974 2.3-1.476-.7-.955-3.793-1.042-5.105-.198-2.945-.602-5.957-.531-8.906a.595.595 0 0 1 1.184-.097Z" />
                                    <path fill="currentColor" d="M21.773 73.169c-.032 2.254-.679 4.55-.972 6.789-.338 2.597-.601 5.224-.564 7.844-.465-.225-.933-.454-1.398-.68a76.772 76.772 0 0 0 6.002-4.227c1.876-1.465 3.568-3.521 5.632-4.678.6-.336 1.581.26 1.137.983-1.181 1.924-3.415 3.456-5.165 4.844a64.808 64.808 0 0 1-6.607 4.574c-.694.421-1.465-.14-1.385-.91.27-2.565.462-5.128.849-7.683.348-2.297.616-4.895 1.59-7.019.19-.398.887-.308.88.163Z" />
                                    <path fill="currentColor" d="M22.85 71.546c-.873 5.764-1.778 11.525-2.588 17.298-.462-.304-.922-.605-1.384-.91 2.439-1.254 4.864-2.527 7.207-3.954 2.158-1.317 4.212-3.127 6.536-4.109.733-.31 1.331.688.841 1.25-1.713 1.972-4.396 3.318-6.619 4.634-2.326 1.378-4.712 2.663-7.172 3.78-.633.287-1.294-.395-1.174-1.015 1.098-5.725 2.104-11.464 3.137-17.2.137-.79 1.337-.563 1.215.226Z" />
                                </svg>
                                <div class="cta-img rounded-top-4">
                                    <img src="<?= FRONT_ASSETS_URL ?>images/screens/screen-6.png" alt="" class="img-fluid w-full h-full object-cover" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
    let contact_form = document.getElementById('contact-form');
    contact_form.addEventListener('submit', (e) => {
        e.preventDefault();
        let data = new FormData();
        data.append('name', contact_form.elements['name'].value);
        data.append('email', contact_form.elements['email'].value);
        data.append('phone', contact_form.elements['phone'].value);
        data.append('message', contact_form.elements['message'].value);
        data.append('sendData', '1');

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "<?= SITE_URL . 'contact-us/send-data' ?>", true);
        xhr.onload = function() {
            let res = JSON.parse(this.response);
            custom_alert(res.type, res.msg);
        }
        xhr.send(data);
    });
</script>
<script>
    function custom_alert(type, msg) {
        let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
        let element = document.createElement('div');
        element.innerHTML = `
      <div class="alert ${bs_class} alert-dismissible fade show" role="alert">
        <strong class="me-3">${msg}</strong>
        <button type="button" class="btn-close" onclick="return remAlert();" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    `;
        let error_div = document.getElementById('error-div');
        error_div.appendChild(element);
        setTimeout(remAlert, 3000);
    }

    function remAlert() {
        if (document.getElementsByClassName('alert').length) {
            document.getElementsByClassName('alert')[0].remove();
        }

    }
</script>