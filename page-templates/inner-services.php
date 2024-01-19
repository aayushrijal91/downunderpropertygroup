<?php
/*
* Template Name: Inner Service
* The inner Inner Service page
*/
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="innerServicePage">
    <div class="container">
        <section class="introduction mx-auto col-xl-8 text-center">
            <p class="font-century lh-1_5 fs-25 pb-3">Our care & consideration</p>
            <p class="text-primary fs-45 fw-500">Identifying a suitable site.</p>

            <article class="font-century py-5 lh-1_67">
                <p>Developers or investors need to identify potential sites that align with their development goals and objectives.
                    Factors to consider include...</p>
            </article>

            <div class="row justify-content-center gy-5">
                <div class="col-4">
                    <div class="h-100 d-flex flex-column align-items-center">
                        <div class="number d-inline-flex mx-auto bg-primary rounded-pill fs-25 fw-500">1</div>
                        <div class="bg-blue p-4 flex-grow-1 w-100">
                            <p class="fs-25 pb-4">Location</p>
                            <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2024/01/location.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="h-100 d-flex flex-column align-items-center">
                        <div class="number d-inline-flex mx-auto bg-primary rounded-pill fs-25 fw-500">2</div>
                        <div class="bg-blue p-4 flex-grow-1 w-100">
                            <p class="fs-25 pb-4">Zoning Regulations</p>
                            <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2024/01/zoning-regulations.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="h-100 d-flex flex-column align-items-center">
                        <div class="number d-inline-flex mx-auto bg-primary rounded-pill fs-25 fw-500">3</div>
                        <div class="bg-blue p-4 flex-grow-1 w-100">
                            <p class="fs-25 pb-4">Accessibility</p>
                            <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2024/01/accessibility.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="h-100 d-flex flex-column align-items-center">
                        <div class="number d-inline-flex mx-auto bg-primary rounded-pill fs-25 fw-500">4</div>
                        <div class="bg-blue p-4 flex-grow-1 w-100">
                            <p class="fs-25 pb-4">Infrastructure</p>
                            <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2024/01/infrastructure.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="h-100 d-flex flex-column align-items-center">
                        <div class="number d-inline-flex mx-auto bg-primary rounded-pill fs-25 fw-500">5</div>
                        <div class="bg-blue p-4 flex-grow-1 w-100">
                            <p class="fs-25 pb-4">Market Demand</p>
                            <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2024/01/market-demand.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container mt-10">
        <div class="row justify-content-between">
            <div class="col-6">
                <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2024/01/site-acquisition-analysis.jpg" alt="">
            </div>

            <div class="col-5">
                <p class="font-century lh-1_5 fs-25 pb-3">Thorough research & preparation</p>
                <p class="text-primary fs-45 fw-500">Market Analysis</p>

                <article class="font-century py-5 lh-1_67">
                    <p>Before acquiring a development site, a thorough market analysis is conducted to assess the demand and potential profitability of the proposed project. This analysis includes...</p>
                </article>

                <div class="d-flex align-items-center gap-4 border-bottom border-grey py-4">
                    <div class="number rounded-pill fs-25 fw-500 text-primary">1</div>
                    <p class="lh-1_5 fs-25 fw-300">Studying the local real estate market</p>
                </div>

                <div class="d-flex align-items-center gap-4 border-bottom border-grey py-4">
                    <div class="number rounded-pill fs-25 fw-500 text-primary">2</div>
                    <p class="lh-1_5 fs-25 fw-300">Demographics</p>
                </div>

                <div class="d-flex align-items-center gap-4 border-bottom border-grey py-4">
                    <div class="number rounded-pill fs-25 fw-500 text-primary">3</div>
                    <p class="lh-1_5 fs-25 fw-300">Competition</p>
                </div>

                <div class="d-flex align-items-center gap-4 border-bottom border-grey py-4">
                    <div class="number rounded-pill fs-25 fw-500 text-primary">4</div>
                    <p class="lh-1_5 fs-25 fw-300">Economic trends</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-10">
        <section class="process bg-blue py-6">
            <div class="col-11 col-xl-10 mx-auto">
                <div class="row justify-content-between align-items-center">
                    <div class="col-6">
                        <p class="text-primary fs-25 font-bold">Our extensive process</p>
                    </div>
                    <div class="col-auto">
                        <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 text-white px-4 px-xl-5 fs-14 fw-500">Contact Us</a>
                    </div>
                </div>

                <div class="row pt-9 gy-7 gx-xl-7">
                    <div class="col-6">
                        <div class="d-flex justify-content-between flex-column h-100">
                            <article class="pb-7">
                                <p class="d-inline-flex text-primary rounded-pill step py-2 px-3 fs-25">Step 01</p>
                                <p class="fs-45 lh-1 fw-500 py-4">Due Diligence</p>

                                <p class="fw-300 font-century lh-1_67">
                                    Once a potential site is identified, due diligence is conducted to investigate the property's legal, financial, and physical aspects. This may involve surveys, environmental assessments, title searches, zoning reviews, and other investigations to ensure there are no hidden issues or liabilities.
                                </p>
                            </article>

                            <img class="w-100" src="http://localhost/downunderpropertygroup/wp-content/uploads/2024/01/site-acquisition-due-diligence-step-1.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="d-flex justify-content-between flex-column h-100">
                            <img class="w-100" src="http://localhost/downunderpropertygroup/wp-content/uploads/2024/01/site-acquisition-due-diligence-step-2.jpg" alt="">

                            <article class="pt-7">
                                <p class="d-inline-flex text-primary rounded-pill step py-2 px-3 fs-25">Step 02</p>
                                <p class="fs-45 lh-1 fw-500 py-4">Negotiation & Purchase</p>

                                <p class="fw-300 font-century lh-1_67">
                                    The next step is negotiating the purchase of the development site with the current property owner. This involves determining the purchase price, financing terms, and other contractual agreements. Legal representation is often involved to protect the interests of both parties.
                                </p>
                            </article>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="d-flex justify-content-between flex-column h-100">
                            <article class="pb-7">
                                <p class="d-inline-flex text-primary rounded-pill step py-2 px-3 fs-25">Step 03</p>
                                <p class="fs-45 lh-1 fw-500 py-4">Financing</p>

                                <p class="fw-300 font-century lh-1_67">
                                    Securing appropriate financing for the acquisition is crucial. Developers may use a combination of equity and debt financing to fund the purchase and subsequent development.
                                </p>
                            </article>

                            <img class="w-100" src="http://localhost/downunderpropertygroup/wp-content/uploads/2024/01/site-acquisition-due-diligence-step-1.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="d-flex justify-content-between flex-column h-100">
                            <img class="w-100" src="http://localhost/downunderpropertygroup/wp-content/uploads/2024/01/site-acquisition-due-diligence-step-2.jpg" alt="">

                            <article class="pt-7">
                                <p class="d-inline-flex text-primary rounded-pill step py-2 px-3 fs-25">Step 04</p>
                                <p class="fs-45 lh-1 fw-500 py-4">Obtaining Permits & Approvals</p>

                                <p class="fw-300 font-century lh-1_67">
                                    Once the property is acquired, the developer must obtain necessary permits and approvals from local authorities to commence development. This process involves complying with zoning regulations, environmental guidelines, building codes, and other legal requirements.
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="about">
        <div class="container">
            <div class="col-xl-6 pt-9 pb-20">
                <p class="text-primary fs-45 fw-500 lh-1">We don’t just build luxury homes, we build legacies.</p>

                <div class="py-5 description font-century lh-1_5">
                    <p>We understand that a luxury home is not just a dwelling; it's a legacy. Our homes are built to stand the test of time, leaving a lasting mark for generations to come.</p>
                    <p>Discover the epitome of luxury living with DownUnder Property Group. Contact us to embark on a journey of architectural excellence, uncompromising quality, and the realisation of your most extravagant dreams.</p>
                    <p>Your address is more than a location; it's an experience.</p>
                </div>

                <div class="d-flex">
                    <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 text-white px-5 fs-14 fw-500">Enquire now</a>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('parts/section', 'whychooseus'); ?>
    <?php get_template_part('parts/section', 'journeybeginslider'); ?>
    <?php get_template_part('parts/section', 'homepageform'); ?>
</main>

<?php get_footer(); ?>