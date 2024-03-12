<main class="flex-grow-1">
    <!-- Page header -->


    <?php if (isset($bread_crumb)) {
        echo $bread_crumb;
    } ?>

    <!-- Pricing -->
    <section class="py-10 py-lg-15">
        <div class="container-fluid">
            <div class="row justify-center mb-14">
                <div class="col-lg-10">
                    <div class="text-center">
                        <p class="text-primary" data-aos="fade-up-sm" data-aos-delay="50">
                            Pricing Plan
                        </p>
                        <h1 class=" mb-5" data-aos="fade-up-sm" data-aos-delay="100">
                            Ready to Get Started? <br />
                            Don't Worry, We'll Keep You Under Budget
                        </h1>
                        <p class="mb-0" data-aos="fade-up-sm" data-aos-delay="150">
                            Get started with a 5-day trial, <span class="text-primary">25% off</span> for Yearly Plan,
                            Cancel anytime.
                        </p>
                    </div>
                    <div class="text-center mt-12" data-aos="fade-up-sm" data-aos-delay="200">
                        <div class="switch-wrapper border d-inline-flex rounded p-2 ">
                            <input id="monthly" type="radio" name="switch" checked />
                            <input id="yearly" type="radio" name="switch" />
                            <label for="monthly">Monthly</label>
                            <label for="yearly">Yearly</label>
                            <span class="highlighter"></span>
                        </div>
                    </div>

                    <div class="text-center mt-12" data-aos="fade-up-sm" data-aos-delay="200">
                        <div class="row d-flex justify-center">
                            <div class="col-md-2">
                                <form action="">
                                    <label for="country" class="form-label fs-6">Country</label>
                                    <select id="country" class="form-select form-select-sm mb-3">
                                        <option value="India">India</option>
                                        <option value="USA" selected>USA</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-md-2">
                                <form action="">
                                    <label for="currency" class="form-label fs-6">Currency</label>
                                    <select id="currency" class="form-select form-select-sm mb-3">
                                        <option value="INR - Indian Rupee">INR - Indian Rupee</option>
                                        <option value="USD - US Dollar" selected>USD - US Dollar</option>
                                    </select>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row g-6 pricing-table">
                <div class="col-md-6 col-lg-3" data-aos="fade-up-sm" data-aos-delay="50">
                    <div class="pricing-card p-6 px-lg-10 py-lg-8 rounded-4 h-full bg-whitedark">
                        <h3 class="text-primary fw-medium mb-0">Basic</h3>
                        <h1 class="display-2 fw-semibold  mb-0 mt-4 price monthly priceInr"><i class="fas fa-rupee-sign"></i> 499</h1>
                        <h1 class="display-2 fw-semibold  mb-0 mt-4 price yearly d-none priceInr"><i class="fas fa-rupee-sign"></i> 3999</h1>
                        <h1 class="display-2 fw-semibold  mb-0 mt-4 price monthly priceUsd">$19</h1>
                        <h1 class="display-2 fw-semibold  mb-0 mt-4 price yearly d-none priceUsd">$49</h1>
                        <p class=" lead fw-normal mt-4 mb-0">
                            A 10X faster way to writing your professional copy
                        </p>
                        <a href="#" class="pricing-btn btn btn-lg w-full fs-4 lh-sm mt-9 btn-lite-blue-2" data-bs-toggle="modal" data-bs-target="#ModalPrcingForm">Try Now</a>
                        <ul class="pricing-list d-flex flex-column gap-3 fs-lg mt-9 mb-0 ps-0" style=" list-style-type: none;">
                            <li> <i class="fas fa-check-circle text-primary"></i> 20 web pages
                                <div class="tooltip-container">
                                    <span class="text-with-tooltip"><i class="fa fa-info-circle"></i></span>
                                    <div id="tooltip">
                                        A web page is any one website page URL
                                        <div class="arrow"></div>
                                    </div>
                                </div>
                            </li>
                            <li> <i class="fas fa-check-circle text-primary"></i> 1 Website
                                <div class="tooltip-container">
                                    <span class="text-with-tooltip"><i class="fa fa-info-circle"></i></span>
                                    <div id="tooltip">
                                        1 Website = 1 Chatbot.
                                        <div class="arrow"></div>
                                    </div>
                                </div>
                            </li>
                            <li><i class="fas fa-check-circle text-primary"></i> Chat Inbox</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Chat Ratings</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Chat Analytics</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Unlimited Chat Replies</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Chat History</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Remove "Powered By" Branding</li>
                            <li><i class="fas fa-check-circle text-primary"></i> WordPress Plugin</li>
                            <li><i class="fas fa-check-circle text-primary"></i> ChatGPT 3.5</li>
                            <li> <i class="fas fa-times-circle text-light"></i> ChatGPT 4.0 </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up-sm" data-aos-delay="50">
                    <div class="pricing-card p-6 px-lg-10 py-lg-8 rounded-4 h-full bg-whitedark">
                        <h3 class="text-primary fw-medium mb-0">Standard</h3>
                        <h1 class="display-2 fw-semibold  mb-0 mt-4 price monthly priceInr"><i class="fas fa-rupee-sign"></i> 999</h1>
                        <h1 class="display-2 fw-semibold  mb-0 mt-4 price yearly d-none priceInr"><i class="fas fa-rupee-sign"></i> 9999</h1>
                        <h1 class="display-2 fw-semibold  mb-0 mt-4 price monthly priceUsd">$29</h1>
                        <h1 class="display-2 fw-semibold  mb-0 mt-4 price yearly d-none priceUsd">$189</h1>
                        <p class=" lead fw-normal mt-4 mb-0">
                            A 10X faster way to writing your professional copy
                        </p>
                        <a href="#" class="pricing-btn btn btn-lg w-full fs-4 lh-sm mt-9 btn-lite-blue-2" data-bs-toggle="modal" data-bs-target="#ModalPrcingForm">Buy Now</a>
                        <ul class="pricing-list d-flex flex-column gap-3 fs-lg mt-9 mb-0 ps-0" style=" list-style-type: none;">
                            <li> <i class="fas fa-check-circle text-primary"></i> 100 web pages

                                <div class="tooltip-container">
                                    <span class="text-with-tooltip"><i class="fa fa-info-circle"></i></span>
                                    <div id="tooltip">
                                        A web page is any one website page URL
                                        <div class="arrow"></div>
                                    </div>
                                </div>
                            </li>
                            <li> <i class="fas fa-check-circle text-primary"></i> 2 Website
                                <div class="tooltip-container">
                                    <span class="text-with-tooltip"><i class="fa fa-info-circle"></i></span>
                                    <div id="tooltip">
                                        1 Website = 1 Chatbot.
                                        <div class="arrow"></div>
                                    </div>
                                </div>
                            </li>
                            <li><i class="fas fa-check-circle text-primary"></i> Chat Inbox</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Chat Ratings</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Chat Analytics</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Unlimited Chat Replies</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Chat History</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Remove "Powered By" Branding</li>
                            <li><i class="fas fa-check-circle text-primary"></i> WordPress Plugin</li>
                            <li><i class="fas fa-check-circle text-primary"></i> ChatGPT 3.5</li>
                            <li> <i class="fas fa-times-circle text-light"></i> ChatGPT 4.0 </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up-sm" data-aos-delay="150">
                    <div class="pricing-card p-6 px-lg-10 py-lg-8 rounded-4 h-full bg-whitedark shadow-lg" style="border-color: #902885">
                        <span class="badge text-bg-primary px-4 py-2 rounded-end-0">Most Popular</span>
                        <h3 class="text-primary fw-medium mb-0">Professional</h3>
                        <h1 class="display-2 fw-semibold  mb-0 mt-4 price monthly priceInr"><i class="fas fa-rupee-sign"></i> 1499</h1>
                        <h1 class="display-2 fw-semibold  mb-0 mt-4 price yearly d-none priceInr"><i class="fas fa-rupee-sign"></i> 14990</h1>
                        <h1 class="display-2 fw-semibold  mb-0 mt-4 price monthly priceUsd">$39</h1>
                        <h1 class="display-2 fw-semibold  mb-0 mt-4 price yearly d-none priceUsd">$279</h1>
                        <p class=" lead fw-normal mt-4 mb-0">
                            A 10X faster way to writing your professional copy
                        </p>
                        <a href="#" class="pricing-btn btn btn-lg w-full fs-4 lh-sm mt-9 btn-lite-blue-2" data-bs-toggle="modal" data-bs-target="#ModalPrcingForm">Buy Now</a>
                        <ul class="pricing-list d-flex flex-column gap-3 fs-lg mt-9 mb-0 ps-0" style=" list-style-type: none;">
                            <li> <i class="fas fa-check-circle text-primary"></i> 1000 web pages
                                <div class="tooltip-container">
                                    <span class="text-with-tooltip"><i class="fa fa-info-circle"></i></span>
                                    <div id="tooltip">
                                        A web page is any one website page URL
                                        <div class="arrow"></div>
                                    </div>
                                </div>
                            </li>
                            <li> <i class="fas fa-check-circle text-primary"></i> 5 Website

                                <div class="tooltip-container">
                                    <span class="text-with-tooltip"><i class="fa fa-info-circle"></i></span>
                                    <div id="tooltip">
                                        1 Website = 1 Chatbot.
                                        <div class="arrow"></div>
                                    </div>
                                </div>
                            </li>
                            <li><i class="fas fa-check-circle text-primary"></i> Chat Inbox</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Chat Ratings</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Chat Analytics</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Unlimited Chat Replies</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Chat History</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Remove "Powered By" Branding</li>
                            <li><i class="fas fa-check-circle text-primary"></i> WordPress Plugin</li>
                            <li><i class="fas fa-check-circle text-primary"></i> ChatGPT 3.5</li>
                            <li> <i class="fas fa-times-circle text-light"></i> ChatGPT 4.0 </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up-sm" data-aos-delay="100">
                    <div class="pricing-card p-6 px-lg-10 py-lg-8 rounded-4 h-full bg-whitedark">
                        <h3 class="text-primary fw-medium mb-0">Enterprise</h3>
                        <h1 class="display-2 fw-semibold  mb-0 mt-4 price monthly priceInr"><i class="fas fa-rupee-sign"></i> 4499</h1>
                        <h1 class="display-2 fw-semibold  mb-0 mt-4 price yearly d-none priceInr"><i class="fas fa-rupee-sign"></i> 29999</h1>
                        <h1 class="display-2 fw-semibold  mb-0 mt-4 price monthly priceUsd">$99</h1>
                        <h1 class="display-2 fw-semibold  mb-0 mt-4 price yearly d-none priceUsd">$559</h1>
                        <p class=" lead fw-normal mt-4 mb-0">
                            A 10X faster way to writing your professional copy
                        </p>
                        <a href="#" class="pricing-btn btn btn-lg w-full fs-4 lh-sm mt-9 btn-lite-blue-2" data-bs-toggle="modal" data-bs-target="#ModalPrcingForm">Buy Now</a>
                        <ul class="pricing-list d-flex flex-column gap-3 fs-lg mt-9 mb-0 ps-0" style=" list-style-type: none;">
                            <li> <i class="fas fa-check-circle text-primary"></i> 10000 web pages
                                <div class="tooltip-container">
                                    <span class="text-with-tooltip"><i class="fa fa-info-circle"></i></span>
                                    <div id="tooltip">
                                        A web page is any one website page URL
                                        <div class="arrow"></div>
                                    </div>
                                </div>

                            </li>
                            <li> <i class="fas fa-check-circle text-primary"></i> 10 Website
                                <div class="tooltip-container">
                                    <span class="text-with-tooltip"><i class="fa fa-info-circle"></i></span>
                                    <div id="tooltip">
                                        1 Website = 1 Chatbot.
                                        <div class="arrow"></div>
                                    </div>
                                </div>
                            </li>
                            <li><i class="fas fa-check-circle text-primary"></i> Chat Inbox</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Chat Ratings</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Chat Analytics</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Unlimited Chat Replies</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Chat History</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Remove "Powered By" Branding</li>
                            <li><i class="fas fa-check-circle text-primary"></i> WordPress Plugin</li>
                            <li><i class="fas fa-check-circle text-primary"></i> ChatGPT 3.5</li>
                            <li><i class="fas fa-check-circle text-primary"></i> ChatGPT 4.0</li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="comparision-table" class="m-3">
        <div class="container-fluid">
            <h2 class="jettext font-weight-600 text-center" data-aos="fade-up-sm" data-aos-delay="50">Comparision Plans</h2>
            <p class="text-center" data-aos="fade-up-sm" data-aos-delay="100">Can’t decide which plan is right for you? Check out feature comparision below.</p>
            <div class="table-responsive" data-aos="fade-up-sm" data-aos-delay="150">
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th></th>
                            <th>Free</th>
                            <th>Basic</th>
                            <th>Standard</th>
                            <th>Professional</th>
                            <th>Enterprise</th>
                            <!-- <th>Reseller</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">Web Pages</td>
                            <td>5</td>
                            <td>20</td>
                            <td>100</td>
                            <td>1000</td>
                            <td>10000</td>
                            <!-- <td>10000</td> -->
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">Website</td>
                            <td>1</td>
                            <td>1</td>
                            <td>2</td>
                            <td>5</td>
                            <td>10</td>
                            <!-- <td>50</td> -->
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">Open AI Key Included
                                <div class="tooltip-container">
                                    <span class="text-with-tooltip"><i class="fa fa-info-circle"></i></span>
                                    <div id="tooltip">
                                        We will use our open ai key so that you don't have to pay anything extra.
                                        <div class="arrow"></div>
                                    </div>
                                </div>

                            </td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <!-- <td><i class="fas fa-times text-primary"></i>
                                        <div class="tooltip-container ms-2">
                                            <span class="text-with-tooltip"><i class="fa fa-info-circle"></i></span>
                                            <div id="tooltip">
                                                Open AI key is not included. You have to create a new open AI account on https://openai.com/
                                              <div class="arrow"></div>
                                            </div>
                                        </div>
                                    </td> -->
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">Messages</td>
                            <td>1000</td>
                            <td>Unlimited</td>
                            <td>Unlimited</td>
                            <td>Unlimited</td>
                            <td>Unlimited</td>
                            <!-- <td>Unlimited</td> -->
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">Chatbot Creation Support</td>
                            <td><i class="fas fa-times text-primary"></i></td>
                            <td><i class="fas fa-times text-primary"></i></td>
                            <td><i class="fas fa-times text-primary"></i></td>
                            <td><i class="fas fa-times text-primary"></i></td>
                            <td>Yes</td>
                            <!-- <td><i class="fas fa-times text-primary"></i></td> -->
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">Chat Inbox</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <!-- <td>Yes</td> -->
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">Chat Ratings</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <!-- <td>Yes</td> -->
                        </tr>
                        <tr class="bg-light text-dark">
                            <td colspan="7" class="font-weight-bold text-center" style="font-weight: bold;">Create Free Chatbot Now!</td>

                        </tr>


                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">Chat Analytics</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <!-- <td>Yes</td> -->
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">Unlimited Chat Replies</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <!-- <td>Yes</td> -->
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">Chat History
                            </td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <!-- <td>Yes
                                    </td> -->
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">Customizable Chatbot Design</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <!-- <td>Yes
                                    </td> -->
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">Remove "Powered By" branding</td>
                            <td><i class="fas fa-times text-primary"></i></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <!-- <td>Yes</td> -->
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">WordPress Plugin</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <!-- <td>Yes</td> -->
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">WhatsApp Channel</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <!-- <td>Yes</td> -->
                        </tr>
                        <tr class="bg-light text-dark">
                            <td colspan="7" class="font-weight-bold text-center" style="font-weight: bold;">Create Free Chatbot Now!</td>
                        </tr>



                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">Meeting - Zoom, Calendly, etc</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <!-- <td>Yes</td> -->
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">FB Messenger</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <!-- <td>Yes</td> -->
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">Email & Callback
                            </td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <!-- <td>Yes
                                    </td> -->
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">Advance Settings</td>
                            <td><i class="fas fa-times text-primary"></i></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <!-- <td>Yes
                                    </td> -->
                        </tr>
                        <tr>
                            <td class="font-weight-bold text-center" style="background-color: #902885; color: white; font-weight: bold;">License Management For Reselling</td>
                            <td><i class="fas fa-times text-primary"></i></td>
                            <td><i class="fas fa-times text-primary"></i></td>
                            <td><i class="fas fa-times text-primary"></i></td>
                            <td><i class="fas fa-times text-primary"></i></td>
                            <td><i class="fas fa-times text-primary"></i></td>
                            <!-- <td>Yes</td> -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <!-- FAQ -->
    <section class="py-10 py-lg-15">
        <div class="container">
            <div class="row justify-center mb-18">
                <div class="col-lg-10">
                    <div class="text-center">
                        <h1 class="mb-0 " data-aos="fade-up-sm" data-aos-delay="50">
                            Questions About our ConnectAi? <br class="d-none d-md-block" />
                            We have Answers!
                        </h1>
                    </div>
                </div>
            </div>

            <div class="row justify-center">
                <div class="col-lg-8" data-aos="fade-up-sm" data-aos-delay="100">
                    <div class="accordion accordion-flush d-flex flex-column gap-6" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseOne" aria-expanded="false" aria-controls="faq-collapseOne">
                                    <span class="icon"></span>
                                    Is there a free trial available for your chatbot?
                                </button>
                            </h2>
                            <div id="faq-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we offer a free trial version of our powerful chatbot for your website. You can experience it within minutes and see the benefits for yourself.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseTwo" aria-expanded="false" aria-controls="faq-collapseTwo">
                                    <span class="icon"></span>
                                    What kind of content can be used to train the chatbot?
                                </button>
                            </h2>
                            <div id="faq-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can train the chatbot with any type of content you have. In fact, the more content you provide, the better the chatbot will be able to answer questions accurately.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseThree" aria-expanded="false" aria-controls="faq-collapseThree">
                                    <span class="icon"></span>
                                    How can I train the chatbot?
                                </button>
                            </h2>
                            <div id="faq-collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our chatbot supports training via Website Links and also by typing or pasting your content. All you need to do is enter a URL, and the chatbot will be trained on all the content present on that page. You can as much content as possible and Robofy will train it automatically.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseFour" aria-expanded="false" aria-controls="faq-collapseFour">
                                    <span class="icon"></span>
                                    How are you different than other tools like SiteGPT, Chatbase etc?
                                </button>
                            </h2>
                            <div id="faq-collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Robofy focuses on ensuring that the chatbot provides accurate answer as much as possible. As a result, we are focusing a lot on improving your website crawling algorithms and optimizing the answers. In case still the answers are not answered appropriately, we provide ways to correct the answers so that next time the same answers are answered properly. We are a small team of 12 and unlike other single founding company, we are here for a long-term.
                                </div>
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
            <div class="rounded-5 border position-relative z-1 gradient-bg" style="border-color: #640b5b!important;">
                <div class="animate-scale position-absolute w-full h-full z-n1">
                    <img src="assets/images/shapes/blurry-shape-4.svg" alt="" class="bg-shape img-fluid" />
                </div>
                <div class="row justify-center">
                    <div class="col-lg-10">
                        <div class="text-center pt-6 px-6 pt-md-10 px-md-10 pt-lg-18 px-lg-18">
                            <h2 class="mb-6 ">
                                Using
                                <span class="text-primary">ConnectAi</span>
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
                                    <img src="assets/images/screens/screen-6.png" alt="" class="img-fluid w-full h-full object-cover" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal For Pricing plan Form-->
    <div class="modal fade" id="ModalPrcingForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalPrcingFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="color: #640b5b;">
                    <h5 class="modal-title " id="ModalPrcingFormLabel">Buy Connect AI Chatbot Now!</h5>
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background: linear-gradient(91.07deg, #FFF7F9 54.37%, #FEFDFD 78%, #CEFDFF 112.55%);">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <p>You'll be redirected to a safe Payment Gateway.</p>
                            <form action="">
                                <label for="" class="form-label mb-2">Country <span class="text-danger">*</span></label>
                                <select class="form-select form-select-sm mb-2 shadow-none" name="countries" id="country">
                                    <option data-country="IN" value="INR">India</option>
                                    <option data-country="AT" value="EUR">Austria</option>
                                    <option data-country="BE" value="EUR">Belgium</option>
                                    <option data-country="EE" value="EUR">Estonia</option>
                                    <option data-country="FR" value="EUR">France</option>
                                    <option data-country="DE" value="EUR">Germany</option>
                                    <option data-country="GR" value="EUR">Greece</option>
                                    <option data-country="IE" value="EUR">Ireland</option>
                                    <option data-country="IT" value="EUR">Italy</option>
                                    <option data-country="NL" value="EUR">Netherlands</option>
                                    <option data-country="PT" value="EUR">Portugal</option>
                                    <option data-country="ES" value="EUR">Spain</option>
                                    <option data-country="PK" value="PKR">Pakistan</option>
                                    <option data-country="AE" value="AED">Dubai</option>
                                    <option data-country="BR" value="BRL">Brazil</option>
                                    <option data-country="MY" value="MYR">Malaysia</option>
                                    <option data-country="SG" value="SGD">Singapore</option>
                                    <option data-country="US" value="USD">USA</option>
                                    <option data-country="GB" value="GBP">UK</option>
                                    <option data-country="AF" value="USD">Afghanistan</option>
                                    <option data-country="AL" value="USD">Albania</option>
                                    <option data-country="DZ" value="USD">Algeria</option>
                                    <option data-country="AS" value="USD">American Samoa</option>
                                    <option data-country="AD" value="USD">Andorra</option>
                                    <option data-country="AO" value="USD">Angola</option>
                                    <option data-country="AI" value="USD">Anguilla</option>
                                    <option data-country="AQ" value="USD">Antarctica</option>
                                    <option data-country="AG" value="USD">Antigua and Barbuda</option>
                                    <option data-country="AR" value="USD">Argentina</option>
                                    <option data-country="AM" value="USD">Armenia</option>
                                    <option data-country="AW" value="USD">Aruba</option>
                                    <option data-country="AU" value="USD">Australia</option>
                                    <option data-country="AZ" value="USD">Azerbaijan</option>
                                    <option data-country="BS" value="USD">Bahamas</option>
                                    <option data-country="BH" value="USD">Bahrain</option>
                                    <option data-country="BD" value="USD">Bangladesh</option>
                                    <option data-country="BB" value="USD">Barbados</option>
                                    <option data-country="BY" value="USD">Belarus</option>
                                    <option data-country="BZ" value="USD">Belize</option>
                                    <option data-country="BJ" value="USD">Benin</option>
                                    <option data-country="BM" value="USD">Bermuda</option>
                                    <option data-country="BT" value="USD">Bhutan</option>
                                    <option data-country="BO" value="USD">Bolivia</option>
                                    <option data-country="BA" value="USD">Bosnia and Herzegovina</option>
                                    <option data-country="BW" value="USD">Botswana</option>
                                    <option data-country="IO" value="USD">British Indian Ocean Territory</option>
                                    <option data-country="VG" value="USD">British Virgin Islands</option>
                                    <option data-country="BN" value="USD">Brunei</option>
                                    <option data-country="BG" value="USD">Bulgaria</option>
                                    <option data-country="BF" value="USD">Burkina Faso</option>
                                    <option data-country="BI" value="USD">Burundi</option>
                                    <option data-country="KH" value="USD">Cambodia</option>
                                    <option data-country="CM" value="USD">Cameroon</option>
                                    <option data-country="CA" value="USD">Canada</option>
                                    <option data-country="CV" value="USD">Cape Verde</option>
                                    <option data-country="KY" value="USD">Cayman Islands</option>
                                    <option data-country="CF" value="USD">Central African Republic</option>
                                    <option data-country="TD" value="USD">Chad</option>
                                    <option data-country="CL" value="USD">Chile</option>
                                    <option data-country="CN" value="USD">China</option>
                                    <option data-country="CX" value="USD">Christmas Island</option>
                                    <option data-country="CC" value="USD">Cocos Islands</option>
                                    <option data-country="CO" value="USD">Colombia</option>
                                    <option data-country="KM" value="USD">Comoros</option>
                                    <option data-country="CK" value="USD">Cook Islands</option>
                                    <option data-country="CR" value="USD">Costa Rica</option>
                                    <option data-country="HR" value="USD">Croatia</option>
                                    <option data-country="CU" value="USD">Cuba</option>
                                    <option data-country="CW" value="USD">Curacao</option>
                                    <option data-country="CY" value="USD">Cyprus</option>
                                    <option data-country="CZ" value="USD">Czech Republic</option>
                                    <option data-country="CD" value="USD">Democratic Republic of the Congo</option>
                                    <option data-country="DK" value="USD">Denmark</option>
                                    <option data-country="DJ" value="USD">Djibouti</option>
                                    <option data-country="DM" value="USD">Dominica</option>
                                    <option data-country="DO" value="USD">Dominican Republic</option>
                                    <option data-country="TL" value="USD">East Timor</option>
                                    <option data-country="EC" value="USD">Ecuador</option>
                                    <option data-country="EG" value="USD">Egypt</option>
                                    <option data-country="SV" value="USD">El Salvador</option>
                                    <option data-country="GQ" value="USD">Equatorial Guinea</option>
                                    <option data-country="ER" value="USD">Eritrea</option>
                                    <option data-country="ET" value="USD">Ethiopia</option>
                                    <option data-country="FK" value="USD">Falkland Islands</option>
                                    <option data-country="FO" value="USD">Faroe Islands</option>
                                    <option data-country="FJ" value="USD">Fiji</option>
                                    <option data-country="FI" value="USD">Finland</option>
                                    <option data-country="PF" value="USD">French Polynesia</option>
                                    <option data-country="GA" value="USD">Gabon</option>
                                    <option data-country="GM" value="USD">Gambia</option>
                                    <option data-country="GE" value="USD">Georgia</option>
                                    <option data-country="GH" value="USD">Ghana</option>
                                    <option data-country="GI" value="USD">Gibraltar</option>
                                    <option data-country="GL" value="USD">Greenland</option>
                                    <option data-country="GD" value="USD">Grenada</option>
                                    <option data-country="GU" value="USD">Guam</option>
                                    <option data-country="GT" value="USD">Guatemala</option>
                                    <option data-country="GG" value="USD">Guernsey</option>
                                    <option data-country="GN" value="USD">Guinea</option>
                                    <option data-country="GW" value="USD">Guinea-Bissau</option>
                                    <option data-country="GY" value="USD">Guyana</option>
                                    <option data-country="HT" value="USD">Haiti</option>
                                    <option data-country="HN" value="USD">Honduras</option>
                                    <option data-country="HK" value="USD">Hong Kong</option>
                                    <option data-country="HU" value="USD">Hungary</option>
                                    <option data-country="IS" value="USD">Iceland</option>
                                    <option data-country="ID" value="USD">Indonesia</option>
                                    <option data-country="IR" value="USD">Iran</option>
                                    <option data-country="IQ" value="USD">Iraq</option>
                                    <option data-country="IM" value="USD">Isle of Man</option>
                                    <option data-country="IL" value="USD">Israel</option>
                                    <option data-country="CI" value="USD">Ivory Coast</option>
                                    <option data-country="JM" value="USD">Jamaica</option>
                                    <option data-country="JP" value="USD">Japan</option>
                                    <option data-country="JE" value="USD">Jersey</option>
                                    <option data-country="JO" value="USD">Jordan</option>
                                    <option data-country="KZ" value="USD">Kazakhstan</option>
                                    <option data-country="KE" value="USD">Kenya</option>
                                    <option data-country="KI" value="USD">Kiribati</option>
                                    <option data-country="XK" value="USD">Kosovo</option>
                                    <option data-country="KW" value="USD">Kuwait</option>
                                    <option data-country="KG" value="USD">Kyrgyzstan</option>
                                    <option data-country="LA" value="USD">Laos</option>
                                    <option data-country="LV" value="USD">Latvia</option>
                                    <option data-country="LB" value="USD">Lebanon</option>
                                    <option data-country="LS" value="USD">Lesotho</option>
                                    <option data-country="LR" value="USD">Liberia</option>
                                    <option data-country="LY" value="USD">Libya</option>
                                    <option data-country="LI" value="USD">Liechtenstein</option>
                                    <option data-country="LT" value="USD">Lithuania</option>
                                    <option data-country="LU" value="USD">Luxembourg</option>
                                    <option data-country="MO" value="USD">Macau</option>
                                    <option data-country="MK" value="USD">Macedonia</option>
                                    <option data-country="MG" value="USD">Madagascar</option>
                                    <option data-country="MW" value="USD">Malawi</option>
                                    <option data-country="MV" value="USD">Maldives</option>
                                    <option data-country="ML" value="USD">Mali</option>
                                    <option data-country="MT" value="USD">Malta</option>
                                    <option data-country="MH" value="USD">Marshall Islands</option>
                                    <option data-country="MR" value="USD">Mauritania</option>
                                    <option data-country="MU" value="USD">Mauritius</option>
                                    <option data-country="YT" value="USD">Mayotte</option>
                                    <option data-country="MX" value="USD">Mexico</option>
                                    <option data-country="FM" value="USD">Micronesia</option>
                                    <option data-country="MD" value="USD">Moldova</option>
                                    <option data-country="MC" value="USD">Monaco</option>
                                    <option data-country="MN" value="USD">Mongolia</option>
                                    <option data-country="ME" value="USD">Montenegro</option>
                                    <option data-country="MS" value="USD">Montserrat</option>
                                    <option data-country="MA" value="USD">Morocco</option>
                                    <option data-country="MZ" value="USD">Mozambique</option>
                                    <option data-country="MM" value="USD">Myanmar</option>
                                    <option data-country="NA" value="USD">Namibia</option>
                                    <option data-country="NR" value="USD">Nauru</option>
                                    <option data-country="NP" value="USD">Nepal</option>
                                    <option data-country="AN" value="USD">Netherlands Antilles</option>
                                    <option data-country="NC" value="USD">New Caledonia</option>
                                    <option data-country="NZ" value="USD">New Zealand</option>
                                    <option data-country="NI" value="USD">Nicaragua</option>
                                    <option data-country="NE" value="USD">Niger</option>
                                    <option data-country="NG" value="USD">Nigeria</option>
                                    <option data-country="NU" value="USD">Niue</option>
                                    <option data-country="KP" value="USD">North Korea</option>
                                    <option data-country="MP" value="USD">Northern Mariana Islands</option>
                                    <option data-country="NO" value="USD">Norway</option>
                                    <option data-country="OM" value="USD">Oman</option>
                                    <option data-country="PW" value="USD">Palau</option>
                                    <option data-country="PS" value="USD">Palestine</option>
                                    <option data-country="PA" value="USD">Panama</option>
                                    <option data-country="PG" value="USD">Papua New Guinea</option>
                                    <option data-country="PY" value="USD">Paraguay</option>
                                    <option data-country="PE" value="USD">Peru</option>
                                    <option data-country="PH" value="USD">Philippines</option>
                                    <option data-country="PN" value="USD">Pitcairn</option>
                                    <option data-country="PL" value="USD">Poland</option>
                                    <option data-country="PR" value="USD">Puerto Rico</option>
                                    <option data-country="QA" value="USD">Qatar</option>
                                    <option data-country="CG" value="USD">Republic of the Congo</option>
                                    <option data-country="RE" value="USD">Reunion</option>
                                    <option data-country="RO" value="USD">Romania</option>
                                    <option data-country="RU" value="USD">Russia</option>
                                    <option data-country="RW" value="USD">Rwanda</option>
                                    <option data-country="BL" value="USD">Saint Barthelemy</option>
                                    <option data-country="SH" value="USD">Saint Helena</option>
                                    <option data-country="KN" value="USD">Saint Kitts and Nevis</option>
                                    <option data-country="LC" value="USD">Saint Lucia</option>
                                    <option data-country="MF" value="USD">Saint Martin</option>
                                    <option data-country="PM" value="USD">Saint Pierre and Miquelon</option>
                                    <option data-country="VC" value="USD">Saint Vincent and the Grenadines</option>
                                    <option data-country="WS" value="USD">Samoa</option>
                                    <option data-country="SM" value="USD">San Marino</option>
                                    <option data-country="ST" value="USD">Sao Tome and Principe</option>
                                    <option data-country="SA" value="USD">Saudi Arabia</option>
                                    <option data-country="SN" value="USD">Senegal</option>
                                    <option data-country="RS" value="USD">Serbia</option>
                                    <option data-country="SC" value="USD">Seychelles</option>
                                    <option data-country="SL" value="USD">Sierra Leone</option>
                                    <option data-country="SX" value="USD">Sint Maarten</option>
                                    <option data-country="SK" value="USD">Slovakia</option>
                                    <option data-country="SI" value="USD">Slovenia</option>
                                    <option data-country="SB" value="USD">Solomon Islands</option>
                                    <option data-country="SO" value="USD">Somalia</option>
                                    <option data-country="ZA" value="USD">South Africa</option>
                                    <option data-country="KR" value="USD">South Korea</option>
                                    <option data-country="SS" value="USD">South Sudan</option>
                                    <option data-country="LK" value="USD">Sri Lanka</option>
                                    <option data-country="SD" value="USD">Sudan</option>
                                    <option data-country="SR" value="USD">Suriname</option>
                                    <option data-country="SJ" value="USD">Svalbard and Jan Mayen</option>
                                    <option data-country="SZ" value="USD">Swaziland</option>
                                    <option data-country="SE" value="USD">Sweden</option>
                                    <option data-country="CH" value="USD">Switzerland</option>
                                    <option data-country="SY" value="USD">Syria</option>
                                    <option data-country="TW" value="USD">Taiwan</option>
                                    <option data-country="TJ" value="USD">Tajikistan</option>
                                    <option data-country="TZ" value="USD">Tanzania</option>
                                    <option data-country="TH" value="USD">Thailand</option>
                                    <option data-country="TG" value="USD">Togo</option>
                                    <option data-country="TK" value="USD">Tokelau</option>
                                    <option data-country="TO" value="USD">Tonga</option>
                                    <option data-country="TT" value="USD">Trinidad and Tobago</option>
                                    <option data-country="TN" value="USD">Tunisia</option>
                                    <option data-country="TR" value="USD">Turkey</option>
                                    <option data-country="TM" value="USD">Turkmenistan</option>
                                    <option data-country="TC" value="USD">Turks and Caicos Islands</option>
                                    <option data-country="TV" value="USD">Tuvalu</option>
                                    <option data-country="VI" value="USD">U.S. Virgin Islands</option>
                                    <option data-country="UG" value="USD">Uganda</option>
                                    <option data-country="UA" value="USD">Ukraine</option>
                                    <option data-country="UY" value="USD">Uruguay</option>
                                    <option data-country="UZ" value="USD">Uzbekistan</option>
                                    <option data-country="VU" value="USD">Vanuatu</option>
                                    <option data-country="VA" value="USD">Vatican</option>
                                    <option data-country="VE" value="USD">Venezuela</option>
                                    <option data-country="VN" value="USD">Vietnam</option>
                                    <option data-country="WF" value="USD">Wallis and Futuna</option>
                                    <option data-country="EH" value="USD">Western Sahara</option>
                                    <option data-country="YE" value="USD">Yemen</option>
                                    <option data-country="ZM" value="USD">Zambia</option>
                                    <option data-country="ZW" value="USD">Zimbabwe</option>
                                    <option data-country="Other" value="USD">Other</option>
                                </select>
                                <div class="form-group">
                                    <label class="form-label mb-2">Currency<span class="text-danger">*</span></label>
                                    <div class="selection-box">
                                        <select class="form-select form-select-sm shadow-none" name="currency" id="currency">
                                            <option value="INR">INR - Indian Rupee</option>
                                            <option value="USD">USD - US Dollar</option>
                                            <option value="EUR">EUR - Euro</option>
                                            <option value="PKR">PKR - Pakistani Rupee</option>
                                            <option value="AED">AED - Emirati Dirham</option>
                                            <option value="BRL">BRL - Brazilian Real</option>
                                            <option value="MYR">MYR - Malaysian Ringgit</option>
                                            <option value="SGD">SGD - Singapore Dollar</option>
                                            <option value="GBP">GBP - British pound sterling</option>
                                        </select>
                                    </div>
                                </div>
                                <label class="form-label mb-2">Email<span class="text-danger">*</span></label>
                                <input name="mail" type="email" id="" class="form-control form-control-sm mb-2" required>
                                <label class="form-label mb-2">Phone with Country Code<span class="text-danger">*</span></label>
                                <input name="mobile" type="text" id="ContentPlaceHolder1_txtphone" class="form-control form-control-sm mb-2" maxlength="15" required>
                                <label class="form-label mb-2">GST Number (Optional)</label>
                                <input name="Gst" type="text" id="ContentPlaceHolder1_txtgst" class="form-control form-control-sm shadow-none mb-2">
                                <label class="form-label mb-2">Billing Address<span class="text-danger">*</span></label>
                                <textarea name="message" id="ContentPlaceHolder1_txtbilladdress" class="form-control mb-2" rows="5" required></textarea>
                                <label class="form-label mb-2">City<span class="text-danger">*</span></label>
                                <input name="mobile" type="text" id="ContentPlaceHolder1_txtphone" class="form-control form-control-sm mb-2" required>
                                <label class="form-label mb-2">State<span class="text-danger">*</span></label>
                                <input name="mobile" type="text" id="ContentPlaceHolder1_txtphone" class="form-control form-control-sm mb-2" required>
                                <label class="form-label mb-2">Zip Code / Pin Code<span class="text-danger">*</span></label>
                                <input name="mobile" type="text" id="ContentPlaceHolder1_txtphone" class="form-control form-control-sm mb-2" required>
                                <label for="" class="form-label">You get immediate access to the Software & Receipt with tax details (VAT / GST) once payment is made.</label>
                                <div class="d-grid gap-2 mb-4">
                                    <a type="button" class="text-center" style="background-color: #640b5b; color: white; padding: 10px 20px; font-weight: 400; border-radius: 20px; text-decoration: none; font-size: 18px;">Pay Now <i class="fa fa-chevron-right"></i> </a>
                                </div>

                            </form>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="fixDesktop" style="position: sticky;top: 150px;">
                                <div class="card cardblock pb-5" style=" border-top-left-radius: 20px; border-top-right-radius: 20px; border-color: #640b5b;">
                                    <div id="ContentPlaceHolder1_planname" class="card-title text-center p-4 mt-0" style="background-color: #640b5b; color: white; font-weight: 500;  border-top-left-radius: 20px; border-top-right-radius: 20px; font-size: 18px;">Professional - Yearly</div>
                                    <div class="card-body p-4">
                                        <div class="row">
                                            <div class="col-md-6">Plan Price :</div>
                                            <div class="col-md-6 MainPrice">
                                                ₹ 14990
                                            </div>
                                        </div>
                                        <div class="row" id="GSTTax">
                                            <div class="col-md-6">GST 18% :</div>
                                            <div class="col-md-6 GSTPrice">Rs. 728</div>
                                        </div>

                                        <hr />
                                        <div class="row">
                                            <div class="col-md-6 font-weight-bold jettext" style="font-size: 20px; font-weight: bold;">Total Price :</div>
                                            <div class="col-md-6 final-price jettext" style="font-weight: bold;">₹ 17688.2</div>
                                        </div>
                                        <div class="small note-gst">18% GST to be paid for Indian users.</div>
                                    </div>
                                </div>

                                <div class="features mt-5 mb-3" style="font-weight: bold;">Top Features</div>
                                <div id="ContentPlaceHolder1_plandescription" style="font-size: 16px;">Professional - Yearly</div>
                                <div class=" mt-3 " style="display: flex; font-size: 16px;">
                                    <div class="px-2">Support : Email: hi@connectai.com</div>
                                    |<div class="px-2">WhatsApp : 91 9999999999</div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>