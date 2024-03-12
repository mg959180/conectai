<main class="flex-grow-1">

    <?php if (isset($bread_crumb)) {
        echo $bread_crumb;
    } ?>

    <!-- About -->
    <section class="py-15">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 col-xl-5" data-aos="fade-up-sm" data-aos-delay="50">
                    <div class="text-center text-lg-start">
                        <p class="text-primary fs-sm">About ConnectAI.</p>
                        <h2 class="mb-4">
                            10,000+ Writers, Marketers, & Business owners Love ConnectAI.
                        </h2>
                        <p class="mb-8">
                            With a few clicks of a button, you can create a whole outline, opening
                            paragraph, and body for your blog.
                        </p>
                        <a href="<?= SITE_URL ?>login" class="btn btn-lg btn-gradient-1">Start Writing - It's Free</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-xl-1" data-aos="fade-up-sm" data-aos-delay="100">
                    <div class="text-center">
                        <img class="img-fluid d-inline-block" src="<?= FRONT_ASSETS_URL?>images/screens/screen-8.png" alt="" />
                    </div>
                </div>
            </div>
            <hr class="border-top border-lite-blue-4 opacity-100" />
            <div class="d-flex gap-8 align-center justify-center mt-12 review-badges">
                <img class="img-fluid" src="<?= FRONT_ASSETS_URL?>images/review-logos/trustpilot_reviews_2.svg" alt="" />
                <img class="img-fluid" src="<?= FRONT_ASSETS_URL?>images/review-logos/capterra_reviews_2.svg" alt="" />
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-10 py-lg-15">
        <div class="container">
            <div class="text-center mb-18">
                <h2 class=" mb-0" data-aos="fade-up-sm" data-aos-delay="50">
                    Connecterate Creative AI Copy On-The-Spot, <br class="d-none d-lg-block" />
                    Across Your Favorite Tools
                </h2>
            </div>

            <div class="row row-cols-1 row-cols-lg-3 g-6 g-xl-14">
                <div class="col" data-aos="fade-up-sm" data-aos-delay="50">
                    <div class="d-flex flex-column gap-6 flex-lg-row">
                        <div class="icon w-14 h-14 flex-shrink-0 d-flex align-center justify-center rounded-3 p-2 border bg-primary bg-opacity-10 text-primary border-primary border-opacity-25">
                            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 40 40">
                                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M30.167 10c-1.833 4.855-3.167 8.188-4 10m0 0c-3.132 6.813-6.188 10-10 10-4 0-8-4-8-10s4-10 8-10c3.778 0 6.892 3.31 10 10Zm0 0c.853 1.837 2.187 5.17 4 10" />
                                </g>
                            </svg>
                        </div>
                        <div class="content">
                            <h4 class=" mb-4">Connecterates quality contents</h4>
                            <p>
                                This tool helps you find the right keywords to target for your content. By using the Google
                                Keyword Planner, you can see how often people
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up-sm" data-aos-delay="100">
                    <div class="d-flex flex-column gap-6 flex-lg-row">
                        <div class="icon w-14 h-14 flex-shrink-0 d-flex align-center justify-center rounded-3 p-2 border bg-primary bg-opacity-10 text-primary border-primary border-opacity-25">
                            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 40 40">
                                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M3.333 20 20 32.37 36.666 20" />
                                    <path d="M11.667 15 20 21.667 28.334 15m-10.001-5L20 11.333 21.666 10 20 8.666 18.333 10Z" />
                                </g>
                            </svg>
                        </div>
                        <div class="content">
                            <h4 class=" mb-4">Provides Useful Suggestions</h4>
                            <p>
                                ConnectAI writing tools can analyze data and generate insights to help writers create more
                                compelling and informative content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up-sm" data-aos-delay="150">
                    <div class="d-flex flex-column gap-6 flex-lg-row">
                        <div class="icon w-14 h-14 flex-shrink-0 d-flex align-center justify-center rounded-3 p-2 border bg-primary bg-opacity-10 text-primary border-primary border-opacity-25">
                            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 40 40">
                                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M10 29.334 6.667 27.5v-4.166m0-6.668V12.5L10 10.666m6.667-3.833L20 5l3.334 1.833M30 10.666l3.333 1.834v4.166m0 6.668V27.5L30 29.367m-6.666 3.799L20 35l-3.333-1.834M20 20l3.333-1.834M30 14.333l3.333-1.833M20 20v4.167m0 6.667V35m0-15-3.333-1.867M10 14.333 6.667 12.5" />
                                </g>
                            </svg>
                        </div>
                        <div class="content">
                            <h4 class=" mb-4">Improves Products Productivity</h4>
                            <p>
                                Emotions are a powerful tool in advertising. Use emotions that resonate with your audience
                                to create a connection.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-popup-container position-relative" data-aos="fade-up-sm" data-aos-delay="50">
                <div class="ratio ratio-16x9 rounded-4 overflow-hidden mt-16">
                    <img src="<?= FRONT_ASSETS_URL?>images/thumbnails/video-thumb.jpg" alt="" class="img-fluid w-full h-full object-cover" />
                </div>
                <a class="video-play-btn bg-primary text-white" href="https://youtu.be/OUFcCoTx8zM" data-vbtype="video" data-autoplay="true" data-maxwidth="1320px" data-overlay="rgba(23, 24, 37, 0.95)">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="icon" viewBox="0 0 16 16">
                        <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                    </svg>
                </a>
            </div>
        </div>
    </section>


    <!-- Team -->
    <section class="py-10 py-lg-15">
        <div class="container">
            <div class="row justify-center mb-18">
                <div class="col-lg-9">
                    <div class="text-center" data-aos="fade-up-sm" data-aos-delay="50">
                        <h1 class="">
                            <span class="text-primary">ConnectAI.</span> is Powered by a <br class="d-none d-xl-block" />
                            Dynamic Team.
                        </h1>
                    </div>
                </div>
            </div>

            <div class="row justify-center row-cols-1 row-cols-md-3 row-cols-xl-4 gy-10 gy-md-12 gy-lg-18">
                <div class="col" data-aos="fade-up-sm" data-aos-delay="50">
                    <div class="team-card text-center">
                        <img src="<?= FRONT_ASSETS_URL?>images/team/1.png" alt="" class="img-fluid team-member-img mb-6" />
                        <h4 class=" mb-1">Annette Black</h4>
                        <p class="fs-sm mb-2">Digital Marketer</p>
                        <ul class="list-unstyled d-flex flex-wrap justify-center align-center gap-3 social-list mb-0">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6v6A3.75 3.75 0 0 1 12 15.75H6A3.75 3.75 0 0 1 2.25 12V6A3.75 3.75 0 0 1 6 2.25h6A3.75 3.75 0 0 1 15.75 6Z" />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 15.75V9c0-1.641.375-3 3-3m-4.5 3.75h4.5" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2 2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 0 0-1.3-3.2 4.2 4.2 0 0 0-.1-3.2s-1.1-.3-3.5 1.3a12.3 12.3 0 0 0-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 0 0-.1 3.2A4.6 4.6 0 0 0 4 9.5c0 4.6 2.7 5.7 5.5 6-.6.6-.6 1.2-.5 2V21" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 2.258s-1.514.894-2.355 1.147A3.36 3.36 0 0 0 9 5.655v.75a7.995 7.995 0 0 1-6.75-3.397s-3 6.75 3.75 9.75a8.73 8.73 0 0 1-5.25 1.5c6.75 3.75 15 0 15-8.625a3.34 3.34 0 0 0-.06-.623c.765-.754 1.56-2.752 1.56-2.752Z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col" data-aos="fade-up-sm" data-aos-delay="100">
                    <div class="team-card text-center">
                        <img src="<?= FRONT_ASSETS_URL?>images/team/2.png" alt="" class="img-fluid team-member-img mb-6" />
                        <h4 class=" mb-1">Jenny Wilson</h4>
                        <p class="fs-sm mb-2">Product Designer</p>
                        <ul class="list-unstyled d-flex flex-wrap justify-center align-center gap-3 social-list mb-0">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6v6A3.75 3.75 0 0 1 12 15.75H6A3.75 3.75 0 0 1 2.25 12V6A3.75 3.75 0 0 1 6 2.25h6A3.75 3.75 0 0 1 15.75 6Z" />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 15.75V9c0-1.641.375-3 3-3m-4.5 3.75h4.5" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2 2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 0 0-1.3-3.2 4.2 4.2 0 0 0-.1-3.2s-1.1-.3-3.5 1.3a12.3 12.3 0 0 0-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 0 0-.1 3.2A4.6 4.6 0 0 0 4 9.5c0 4.6 2.7 5.7 5.5 6-.6.6-.6 1.2-.5 2V21" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 2.258s-1.514.894-2.355 1.147A3.36 3.36 0 0 0 9 5.655v.75a7.995 7.995 0 0 1-6.75-3.397s-3 6.75 3.75 9.75a8.73 8.73 0 0 1-5.25 1.5c6.75 3.75 15 0 15-8.625a3.34 3.34 0 0 0-.06-.623c.765-.754 1.56-2.752 1.56-2.752Z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col" data-aos="fade-up-sm" data-aos-delay="150">
                    <div class="team-card text-center">
                        <img src="<?= FRONT_ASSETS_URL?>images/team/3.png" alt="" class="img-fluid team-member-img mb-6" />
                        <h4 class=" mb-1">Guy Hawkins</h4>
                        <p class="fs-sm mb-2">Marketing Coordinator</p>
                        <ul class="list-unstyled d-flex flex-wrap justify-center align-center gap-3 social-list mb-0">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6v6A3.75 3.75 0 0 1 12 15.75H6A3.75 3.75 0 0 1 2.25 12V6A3.75 3.75 0 0 1 6 2.25h6A3.75 3.75 0 0 1 15.75 6Z" />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 15.75V9c0-1.641.375-3 3-3m-4.5 3.75h4.5" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2 2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 0 0-1.3-3.2 4.2 4.2 0 0 0-.1-3.2s-1.1-.3-3.5 1.3a12.3 12.3 0 0 0-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 0 0-.1 3.2A4.6 4.6 0 0 0 4 9.5c0 4.6 2.7 5.7 5.5 6-.6.6-.6 1.2-.5 2V21" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 2.258s-1.514.894-2.355 1.147A3.36 3.36 0 0 0 9 5.655v.75a7.995 7.995 0 0 1-6.75-3.397s-3 6.75 3.75 9.75a8.73 8.73 0 0 1-5.25 1.5c6.75 3.75 15 0 15-8.625a3.34 3.34 0 0 0-.06-.623c.765-.754 1.56-2.752 1.56-2.752Z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col" data-aos="fade-up-sm" data-aos-delay="200">
                    <div class="team-card text-center">
                        <img src="<?= FRONT_ASSETS_URL?>images/team/4.png" alt="" class="img-fluid team-member-img mb-6" />
                        <h4 class=" mb-1">Jane Cooper</h4>
                        <p class="fs-sm mb-2">Digital Creator</p>
                        <ul class="list-unstyled d-flex flex-wrap justify-center align-center gap-3 social-list mb-0">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6v6A3.75 3.75 0 0 1 12 15.75H6A3.75 3.75 0 0 1 2.25 12V6A3.75 3.75 0 0 1 6 2.25h6A3.75 3.75 0 0 1 15.75 6Z" />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 15.75V9c0-1.641.375-3 3-3m-4.5 3.75h4.5" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2 2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 0 0-1.3-3.2 4.2 4.2 0 0 0-.1-3.2s-1.1-.3-3.5 1.3a12.3 12.3 0 0 0-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 0 0-.1 3.2A4.6 4.6 0 0 0 4 9.5c0 4.6 2.7 5.7 5.5 6-.6.6-.6 1.2-.5 2V21" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 2.258s-1.514.894-2.355 1.147A3.36 3.36 0 0 0 9 5.655v.75a7.995 7.995 0 0 1-6.75-3.397s-3 6.75 3.75 9.75a8.73 8.73 0 0 1-5.25 1.5c6.75 3.75 15 0 15-8.625a3.34 3.34 0 0 0-.06-.623c.765-.754 1.56-2.752 1.56-2.752Z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col" data-aos="fade-up-sm" data-aos-delay="50">
                    <div class="team-card text-center">
                        <img src="<?= FRONT_ASSETS_URL?>images/team/5.png" alt="" class="img-fluid team-member-img mb-6" />
                        <h4 class=" mb-1">Courtney Henry</h4>
                        <p class="fs-sm mb-2">Web Designer</p>
                        <ul class="list-unstyled d-flex flex-wrap justify-center align-center gap-3 social-list mb-0">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6v6A3.75 3.75 0 0 1 12 15.75H6A3.75 3.75 0 0 1 2.25 12V6A3.75 3.75 0 0 1 6 2.25h6A3.75 3.75 0 0 1 15.75 6Z" />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 15.75V9c0-1.641.375-3 3-3m-4.5 3.75h4.5" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2 2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 0 0-1.3-3.2 4.2 4.2 0 0 0-.1-3.2s-1.1-.3-3.5 1.3a12.3 12.3 0 0 0-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 0 0-.1 3.2A4.6 4.6 0 0 0 4 9.5c0 4.6 2.7 5.7 5.5 6-.6.6-.6 1.2-.5 2V21" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 2.258s-1.514.894-2.355 1.147A3.36 3.36 0 0 0 9 5.655v.75a7.995 7.995 0 0 1-6.75-3.397s-3 6.75 3.75 9.75a8.73 8.73 0 0 1-5.25 1.5c6.75 3.75 15 0 15-8.625a3.34 3.34 0 0 0-.06-.623c.765-.754 1.56-2.752 1.56-2.752Z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col" data-aos="fade-up-sm" data-aos-delay="100">
                    <div class="team-card text-center">
                        <img src="<?= FRONT_ASSETS_URL?>images/team/6.png" alt="" class="img-fluid team-member-img mb-6" />
                        <h4 class=" mb-1">Ralph Edwards</h4>
                        <p class="fs-sm mb-2">Software Engineer</p>
                        <ul class="list-unstyled d-flex flex-wrap justify-center align-center gap-3 social-list mb-0">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6v6A3.75 3.75 0 0 1 12 15.75H6A3.75 3.75 0 0 1 2.25 12V6A3.75 3.75 0 0 1 6 2.25h6A3.75 3.75 0 0 1 15.75 6Z" />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 15.75V9c0-1.641.375-3 3-3m-4.5 3.75h4.5" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2 2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 0 0-1.3-3.2 4.2 4.2 0 0 0-.1-3.2s-1.1-.3-3.5 1.3a12.3 12.3 0 0 0-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 0 0-.1 3.2A4.6 4.6 0 0 0 4 9.5c0 4.6 2.7 5.7 5.5 6-.6.6-.6 1.2-.5 2V21" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 2.258s-1.514.894-2.355 1.147A3.36 3.36 0 0 0 9 5.655v.75a7.995 7.995 0 0 1-6.75-3.397s-3 6.75 3.75 9.75a8.73 8.73 0 0 1-5.25 1.5c6.75 3.75 15 0 15-8.625a3.34 3.34 0 0 0-.06-.623c.765-.754 1.56-2.752 1.56-2.752Z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col" data-aos="fade-up-sm" data-aos-delay="150">
                    <div class="team-card text-center">
                        <img src="<?= FRONT_ASSETS_URL?>images/team/7.png" alt="" class="img-fluid team-member-img mb-6" />
                        <h4 class=" mb-1">Arlene McCoy</h4>
                        <p class="fs-sm mb-2">Lead Developer</p>
                        <ul class="list-unstyled d-flex flex-wrap justify-center align-center gap-3 social-list mb-0">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6v6A3.75 3.75 0 0 1 12 15.75H6A3.75 3.75 0 0 1 2.25 12V6A3.75 3.75 0 0 1 6 2.25h6A3.75 3.75 0 0 1 15.75 6Z" />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 15.75V9c0-1.641.375-3 3-3m-4.5 3.75h4.5" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2 2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 0 0-1.3-3.2 4.2 4.2 0 0 0-.1-3.2s-1.1-.3-3.5 1.3a12.3 12.3 0 0 0-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 0 0-.1 3.2A4.6 4.6 0 0 0 4 9.5c0 4.6 2.7 5.7 5.5 6-.6.6-.6 1.2-.5 2V21" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 2.258s-1.514.894-2.355 1.147A3.36 3.36 0 0 0 9 5.655v.75a7.995 7.995 0 0 1-6.75-3.397s-3 6.75 3.75 9.75a8.73 8.73 0 0 1-5.25 1.5c6.75 3.75 15 0 15-8.625a3.34 3.34 0 0 0-.06-.623c.765-.754 1.56-2.752 1.56-2.752Z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col" data-aos="fade-up-sm" data-aos-delay="200">
                    <div class="team-card text-center">
                        <img src="<?= FRONT_ASSETS_URL?>images/team/8.png" alt="" class="img-fluid team-member-img mb-6" />
                        <h4 class=" mb-1">Devon Lane</h4>
                        <p class="fs-sm mb-2">President of Sales</p>
                        <ul class="list-unstyled d-flex flex-wrap justify-center align-center gap-3 social-list mb-0">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6v6A3.75 3.75 0 0 1 12 15.75H6A3.75 3.75 0 0 1 2.25 12V6A3.75 3.75 0 0 1 6 2.25h6A3.75 3.75 0 0 1 15.75 6Z" />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 15.75V9c0-1.641.375-3 3-3m-4.5 3.75h4.5" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2 2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 0 0-1.3-3.2 4.2 4.2 0 0 0-.1-3.2s-1.1-.3-3.5 1.3a12.3 12.3 0 0 0-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 0 0-.1 3.2A4.6 4.6 0 0 0 4 9.5c0 4.6 2.7 5.7 5.5 6-.6.6-.6 1.2-.5 2V21" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 2.258s-1.514.894-2.355 1.147A3.36 3.36 0 0 0 9 5.655v.75a7.995 7.995 0 0 1-6.75-3.397s-3 6.75 3.75 9.75a8.73 8.73 0 0 1-5.25 1.5c6.75 3.75 15 0 15-8.625a3.34 3.34 0 0 0-.06-.623c.765-.754 1.56-2.752 1.56-2.752Z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Reviews -->
    <section class="overflow-hidden py-10 py-lg-15">
        <div class="container">
            <div class="row justify-center mb-18">
                <div class="col-lg-9">
                    <div class="text-center">
                        <h1 class="" data-aos="fade-up-sm" data-aos-delay="50">
                            <span class="text-primary">ConnectAI.</span>
                            Received <img src="<?= FRONT_ASSETS_URL?>images/icons/star.png" alt="" /> 4.8/5 Stars in Over 10,000+ Reviews.
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="review-rolling-carousel-container">
            <div class="swiper review-rolling-carousel">
                <div class="swiper-wrapper rolling-carousel-wrapper">
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/1.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Wade Warrent</h6>
                                    <p class="mb-0 fs-sm">Marketing Coordinator</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    This is the best thing that has happened to my team in a while! Makes post text
                                    something we barely need to think about!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/2.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Dianne Russell</h6>
                                    <p class="mb-0 fs-sm">Content Creator</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur
                                    duis deserunt mollit dolore cillum minim tempor enim.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/3.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Jenny Wilson</h6>
                                    <p class="mb-0 fs-sm">Product Designer</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    Comfortable to wear for long periods of time. The battery life is impressive, providing
                                    up to 8 hours of listening time on a single charge. The earbuds are also sweat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/4.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Guy Hawkins</h6>
                                    <p class="mb-0 fs-sm">Digital Marketer</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    Through my interactions with users, I have seen how technology has made life easier and
                                    more convenient for people.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/1.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Bessie Cooper</h6>
                                    <p class="mb-0 fs-sm">SEO Expert</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    I feel proud to be part of this technological advancement and to be able to help people
                                    in their day-to-day activities. It is truly amazing how technology has the power to
                                    connect
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/1.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Wade Warrent</h6>
                                    <p class="mb-0 fs-sm">Marketing Coordinator</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    This is the best thing that has happened to my team in a while! Makes post text
                                    something we barely need to think about!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/2.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Dianne Russell</h6>
                                    <p class="mb-0 fs-sm">Content Creator</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur
                                    duis deserunt mollit dolore cillum minim tempor enim.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/3.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Jenny Wilson</h6>
                                    <p class="mb-0 fs-sm">Product Designer</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    Comfortable to wear for long periods of time. The battery life is impressive, providing
                                    up to 8 hours of listening time on a single charge. The earbuds are also sweat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/4.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Guy Hawkins</h6>
                                    <p class="mb-0 fs-sm">Digital Marketer</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    Through my interactions with users, I have seen how technology has made life easier and
                                    more convenient for people.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/1.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Bessie Cooper</h6>
                                    <p class="mb-0 fs-sm">SEO Expert</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    I feel proud to be part of this technological advancement and to be able to help people
                                    in their day-to-day activities. It is truly amazing how technology has the power to
                                    connect
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="review-rolling-carousel-container-reversed mt-6">
            <div class="swiper review-rolling-carousel-reversed">
                <div class="swiper-wrapper rolling-carousel-wrapper">
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/1.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Wade Warrent</h6>
                                    <p class="mb-0 fs-sm">Marketing Coordinator</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    This is the best thing that has happened to my team in a while! Makes post text
                                    something we barely need to think about!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/2.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Dianne Russell</h6>
                                    <p class="mb-0 fs-sm">Content Creator</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur
                                    duis deserunt mollit dolore cillum minim tempor enim.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/3.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Jenny Wilson</h6>
                                    <p class="mb-0 fs-sm">Product Designer</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    Comfortable to wear for long periods of time. The battery life is impressive, providing
                                    up to 8 hours of listening time on a single charge. The earbuds are also sweat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/4.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Guy Hawkins</h6>
                                    <p class="mb-0 fs-sm">Digital Marketer</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    Through my interactions with users, I have seen how technology has made life easier and
                                    more convenient for people.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/1.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Bessie Cooper</h6>
                                    <p class="mb-0 fs-sm">SEO Expert</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    I feel proud to be part of this technological advancement and to be able to help people
                                    in their day-to-day activities. It is truly amazing how technology has the power to
                                    connect
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/1.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Wade Warrent</h6>
                                    <p class="mb-0 fs-sm">Marketing Coordinator</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    This is the best thing that has happened to my team in a while! Makes post text
                                    something we barely need to think about!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/2.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Dianne Russell</h6>
                                    <p class="mb-0 fs-sm">Content Creator</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur
                                    duis deserunt mollit dolore cillum minim tempor enim.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/3.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Jenny Wilson</h6>
                                    <p class="mb-0 fs-sm">Product Designer</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    Comfortable to wear for long periods of time. The battery life is impressive, providing
                                    up to 8 hours of listening time on a single charge. The earbuds are also sweat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/4.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Guy Hawkins</h6>
                                    <p class="mb-0 fs-sm">Digital Marketer</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    Through my interactions with users, I have seen how technology has made life easier and
                                    more convenient for people.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide h-auto">
                        <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                            <div class="d-flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 rounded-circle overflow-hidden">
                                    <img src="<?= FRONT_ASSETS_URL?>images/review/1.png" alt="" class="w-full h-full object-cover" />
                                </div>
                                <div class="">
                                    <h6 class=" mb-1">Bessie Cooper</h6>
                                    <p class="mb-0 fs-sm">SEO Expert</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="stars d-flex items-center gap-1 mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                        <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                    </svg>
                                </div>
                                <p class="review-text mb-0">
                                    I feel proud to be part of this technological advancement and to be able to help people
                                    in their day-to-day activities. It is truly amazing how technology has the power to
                                    connect
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Brands -->
    <section class="py-10 py-lg-15">
        <div class="container">
            <div class="row justify-center">
                <div class="col-lg-10">
                    <div class="text-center">
                        <h4 class="mb-10" data-aos="fade-up-sm" data-aos-delay="50">
                            <span class="text-gradient-1">20,000+</span>
                            Professionals & Teams Choose
                            <span class="text-primary">ConnectAI.</span>
                        </h4>

                        <div class="row align-center justify-center row-cols-3 row-cols-md-5 g-6 g-lg-10 g-xl-20">
                            <div class="col" data-aos="fade-up-sm" data-aos-delay="100" data-aos-offset="10">
                                <img src="<?= FRONT_ASSETS_URL?>images/brands/1.png" alt="" class="img-fluid brand-img" />
                            </div>
                            <div class="col" data-aos="fade-up-sm" data-aos-delay="150" data-aos-offset="10">
                                <img src="<?= FRONT_ASSETS_URL?>images/brands/2.png" alt="" class="img-fluid brand-img" />
                            </div>
                            <div class="col" data-aos="fade-up-sm" data-aos-delay="200" data-aos-offset="10">
                                <img src="<?= FRONT_ASSETS_URL?>images/brands/3.png" alt="" class="img-fluid brand-img" />
                            </div>
                            <div class="col" data-aos="fade-up-sm" data-aos-delay="250" data-aos-offset="10">
                                <img src="<?= FRONT_ASSETS_URL?>images/brands/4.png" alt="" class="img-fluid brand-img" />
                            </div>
                            <div class="col" data-aos="fade-up-sm" data-aos-delay="300" data-aos-offset="10">
                                <img src="<?= FRONT_ASSETS_URL?>images/brands/5.png" alt="" class="img-fluid brand-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- CTA -->
    <section class="cta-section py-10 py-lg-15" data-aos="fade-up-sm" data-aos-offset="150">
        <div class="container">
            <div class="rounded-5 border position-relative z-1 gradient-bg">
                <div class="animate-scale position-absolute w-full h-full z-n1">
                    <img src="<?= FRONT_ASSETS_URL?>images/shapes/blurry-shape-4.svg" alt="" class="bg-shape img-fluid" />
                </div>
                <div class="row justify-center">
                    <div class="col-lg-10">
                        <div class="text-center pt-6 px-6 pt-md-10 px-md-10 pt-lg-18 px-lg-18">
                            <h2 class="mb-6 ">
                                Using
                                <span class="text-primary">ConnectAI</span>
                                you can save hours each week creating long-form content.
                            </h2>
                            <a href="<?= SITE_URL ?>login" class="btn btn-primary">Get Started Free</a>
                            <div class="cta-image-container mt-10">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 34 90" class="text-primary arrow-shape">
                                    <path fill="currentColor" d="M3.724 2.303c8.095 4.54 13.968 13.648 16.408 22.434 2.336 8.415 2.426 20.276-5.705 25.79-2.961 2.01-7.092 2.24-8.781-1.444-1.571-3.422.29-7.096 3.683-8.452 9.162-3.663 16.334 8.02 18.234 15.324a30.563 30.563 0 0 1 .279 14.195c-.952 4.334-2.866 9.283-6.298 12.254-.494.427-1.3-.29-.971-.84 1.77-2.928 3.677-5.571 4.79-8.851 1.155-3.405 1.62-7.048 1.44-10.626-.358-7.103-3.568-15.745-10.125-19.354-3.476-1.912-10.316-1.353-10.055 3.973.107 2.158 1.647 4.035 3.933 3.81 2.086-.209 4.001-1.766 5.333-3.279 5.427-6.16 4.857-15.89 2.67-23.215a39.21 39.21 0 0 0-5.682-11.577c-2.69-3.76-6.017-6.61-9.592-9.472-.35-.277.039-.896.44-.67Z" />
                                    <path fill="currentColor" d="M1.562.977c9.931 2.79 17.058 11.508 19.312 21.4 1.085 4.762 1.187 9.7.548 14.54-.653 4.937-1.854 10.549-4.949 14.589-2.156 2.82-7.305 5.961-10.266 2.388-2.608-3.142-2.18-9.094.45-12.093 2.945-3.356 8.048-2.969 11.491-.718 4.112 2.688 6.675 7.596 8.265 12.12 3.48 9.905 2.395 21.33-3.11 30.327-.527.858-1.947.203-1.423-.676 3.935-6.565 5.559-14.253 4.688-21.84-.443-3.864-1.552-7.677-3.306-11.147-2.011-3.973-5.078-8.396-9.854-8.994-5.273-.66-7.99 4.089-7.3 8.82.403 2.76 1.938 4.99 5.042 4.079 2.519-.74 4.35-3.051 5.51-5.296 3.708-7.194 4.563-16.802 3.066-24.658C17.848 13.969 11.217 4.92 1.373 1.995.736 1.812.917.797 1.563.977Z" />
                                    <path fill="currentColor" d="M21.218 73.052c.375 2.062.446 4.204.634 6.29.088.987.18 1.975.266 2.964.04.457-.025 2.873.383 3.085.21.11 2.177-1.456 2.452-1.64l2.452-1.641c1.595-1.065 3.329-2.678 5.205-3.148.671-.169 1.174.542.746 1.106-.792 1.05-1.99 1.644-3.08 2.36-1.23.812-2.464 1.62-3.695 2.432-1.142.748-3.43 3.037-4.974 2.3-1.476-.7-.955-3.793-1.042-5.105-.198-2.945-.602-5.957-.531-8.906a.595.595 0 0 1 1.184-.097Z" />
                                    <path fill="currentColor" d="M21.773 73.169c-.032 2.254-.679 4.55-.972 6.789-.338 2.597-.601 5.224-.564 7.844-.465-.225-.933-.454-1.398-.68a76.772 76.772 0 0 0 6.002-4.227c1.876-1.465 3.568-3.521 5.632-4.678.6-.336 1.581.26 1.137.983-1.181 1.924-3.415 3.456-5.165 4.844a64.808 64.808 0 0 1-6.607 4.574c-.694.421-1.465-.14-1.385-.91.27-2.565.462-5.128.849-7.683.348-2.297.616-4.895 1.59-7.019.19-.398.887-.308.88.163Z" />
                                    <path fill="currentColor" d="M22.85 71.546c-.873 5.764-1.778 11.525-2.588 17.298-.462-.304-.922-.605-1.384-.91 2.439-1.254 4.864-2.527 7.207-3.954 2.158-1.317 4.212-3.127 6.536-4.109.733-.31 1.331.688.841 1.25-1.713 1.972-4.396 3.318-6.619 4.634-2.326 1.378-4.712 2.663-7.172 3.78-.633.287-1.294-.395-1.174-1.015 1.098-5.725 2.104-11.464 3.137-17.2.137-.79 1.337-.563 1.215.226Z" />
                                </svg>
                                <div class="cta-img rounded-top-4">
                                    <img src="<?= FRONT_ASSETS_URL?>images/screens/screen-6.png" alt="" class="img-fluid w-full h-full object-cover" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>