<main class="flex-grow-1">
    <section class="account-section login-page py-6 h-full">
        <div class="container-fluid h-full">
            <div class="row h-full">
                <div class="col-lg-6 d-none d-lg-block" data-aos="fade-up-sm" data-aos-delay="50">
                    <div class="bg-lite-blue border border-lite-blue-2 rounded-4 h-full p-6 p-md-20 text-center d-flex flex-column justify-center">
                        <h2 class="mb-12">
                            Unlock the Power of <br class="d-none d-xl-block" />
                            <span class="text-primary">ConnectAI</span> Copywriting Tool
                        </h2>
                        <img src="<?= FRONT_ASSETS_URL?>images/screens/screen-8.png" alt="" class="img-fluid w-full mt-n24 mb-n10" />
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up-sm" data-aos-delay="100">
                    <div class="close-btn">
                        <a href="<?= SITE_URL ?>" class="icon w-12 h-12 rounded p-3 d-flex align-center justify-center ms-auto bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M18 6 6 18M6 6l12 12" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="account-wrapper h-full d-flex flex-column justify-center">
                        <div class="text-center">
                            <a href="">
                                <img src="<?= FRONT_ASSETS_URL?>images/connect ai png.png" alt="" class="img-fluid" width="165" />
                            </a>
                            <div class="vstack gap-4 mt-10">
                                <button type="button" class="btn account-btn py-4">
                                    <img src="<?= FRONT_ASSETS_URL?>images/icons/google.svg" alt="" width="24" class="img-fluid icon" />
                                    <span>Continue With Google</span>
                                </button>
                                <button type="button" class="btn account-btn py-4">
                                    <img src="<?= FRONT_ASSETS_URL?>images/icons/apple-dark.svg" alt="" width="24" class="img-fluid icon" />
                                    <span>Continue With Apple</span>
                                </button>
                            </div>

                            <div class="divider-with-text my-10">
                                <span>Or register with email</span>
                            </div>

                            <form action="#" class="vstack gap-4">
                                <div class="text-start">
                                    <div class="input-group with-icon">
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2">
                                                    <path d="M2.25 5.25a1.5 1.5 0 0 1 1.5-1.5h10.5a1.5 1.5 0 0 1 1.5 1.5v7.5a1.5 1.5 0 0 1-1.5 1.5H3.75a1.5 1.5 0 0 1-1.5-1.5v-7.5Z" />
                                                    <path d="M2.25 5.25 9 9.75l6.75-4.5" />
                                                </g>
                                            </svg>
                                        </span>
                                        <input type="email" class="form-control rounded-2 py-4" placeholder="Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <div class="input-group with-icon">
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <path d="M12 3a12 12 0 0 0 8.5 3A12 12 0 0 1 12 21 12 12 0 0 1 3.5 6 12 12 0 0 0 12 3" />
                                                <circle cx="12" cy="11" r="1" />
                                                <path d="M12 12v2.5" />
                                            </svg>
                                        </span>
                                        <input type="password" class="form-control rounded-2 py-4" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <div class="input-group with-icon">
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <path d="M12 3a12 12 0 0 0 8.5 3A12 12 0 0 1 12 21 12 12 0 0 1 3.5 6 12 12 0 0 0 12 3" />
                                                <circle cx="12" cy="11" r="1" />
                                                <path d="M12 12v2.5" />
                                            </svg>
                                        </span>
                                        <input type="password" class="form-control rounded-2 py-4" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary w-full py-4">
                                        Create an account
                                    </button>
                                </div>
                                <div class="text-center">
                                    <p>
                                        Already have an account?
                                        <a href="<?= SITE_URL ?>login" class="text-decoration-none"> Log in </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>