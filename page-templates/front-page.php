<?php
/*
* Template Name: Front Page
* The front page
*/
get_header();
get_template_part('parts/section', 'nav');
?>

<main class="frontpage mt-0">
    <section class="banner">
        <div class="container">
            <p class="fs-25">Welcome to <?= bloginfo('name'); ?>...</p>
            <p class="fs-65 fw-500 text-capitalize lh-1 pt-4">Building Dreams, Creating Futures</p>
        </div>

        <hr class="my-5" />

        <div class="services pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <p class="fs-25 fw-500">
                            <span class="pe-4">Our Services</span>
                            <a href="">
                                <svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24.9512" cy="25.1802" r="24.9131" fill="#B083FB" />
                                    <path d="M26.1077 15.9346L35.3539 25.1808L26.1077 34.4271" stroke="#F3FAFC" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M35.3541 25.1807H14.55" stroke="#F3FAFC" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </p>

                        <ul class="ps-0 mt-3 d-flex flex-column gap-1">
                            <?php
                            $args = array(
                                'post_type'      => 'page',
                                'posts_per_page' => -1,
                                'order'          => 'ASC',
                                'orderby'        => 'publish_date',
                                'meta_query' => array(
                                    array(
                                        'key' => '_wp_page_template',
                                        'value' => array('page-templates/inner-services.php'),
                                    ),
                                )
                            );
                            $the_query = new WP_Query($args);
                            if ($the_query->have_posts()) :
                                while ($the_query->have_posts()) : $the_query->the_post();
                            ?>
                                    <li><a href="<?= get_the_permalink() ?>" class="text-white text-capitalize font-century"><?= get_the_title() ?></a></li>
                            <?php endwhile;
                            endif;
                            wp_reset_query(); ?>
                        </ul>
                    </div>

                    <div class="col-5">
                        <p class="fs-25 fw-500">
                            <span class="pe-4">Our Projects</span>
                            <a href="">
                                <svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24.9512" cy="25.1802" r="24.9131" fill="#B083FB" />
                                    <path d="M26.1077 15.9346L35.3539 25.1808L26.1077 34.4271" stroke="#F3FAFC" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M35.3541 25.1807H14.55" stroke="#F3FAFC" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </p>

                        <ul class="ps-0 mt-3 d-flex flex-column gap-1">
                            <li><a href="" class="text-white text-capitalize font-century">Project Name 01</a></li>
                            <li><a href="" class="text-white text-capitalize font-century">Project Name 02</a></li>
                            <li><a href="" class="text-white text-capitalize font-century">Project Name 03</a></li>
                            <li><a href="" class="text-white text-capitalize font-century">Project Name 04</a></li>
                            <li><a href="" class="text-white text-capitalize font-century">Project Name 05</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-flex justify-content-center py-10">
        <div class="col-xl-5 text-center">
            <p class="text-primary fs-45 fw-500">Discover a world of luxury, sophistication, & modern living.</p>
            <p class="pt-5 fs-25">We're not just another property development company.</p>
            <p class="font-century py-5 lh-1_5">Welcome to DownUnder Property Group, where luxury, sophistication, and modern living converge to create extraordinary properties that redefine the art of living. We are not just another property development company; we are visionaries who breathe life into dreams, architects of luxury, and creators of exceptional living spaces. Our unwavering commitment to quality, innovation, and customer-centricity sets us apart in the world of property development.</p>

            <div class="col-auto row justify-content-center gx-3">
                <div class="col-auto">
                    <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 text-white px-5 fs-14 fw-500">Contact Us Today</a>
                </div>

                <div class="col-auto">
                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn border-2 border-purple rounded-1 text-purple px-5 fs-14 fw-500"><?= get_field('phone_number', 'options') ?></a>
                </div>
            </div>
        </div>
    </section>

    <section class="envision d-flex align-items-end">
        <div class="container">
            <div class="col-xl-5 py-9" data-aos="slide-down">
                <p class="text-primary fs-45 fw-500 lh-1">We only envision the best future for you.</p>

                <div class="pt-5 description font-century lh-1_5">
                    <p>At DownUnder Property Group, our vision is crystal clear: to craft exceptional living spaces that transcend the ordinary and redefine luxury.</p>
                    <p>We don't just build structures; we create lifestyle experiences. With every project, we aim to raise the bar higher, pushing the boundaries of what's possible in the world of real estate.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10">
        <div class="container">
            <div class="col-xl-10 text-center mx-auto">
                <p class="text-primary fs-45 fw-500">Our commitment to quality...</p>
                <p class="font-century pt-5 lh-1_5">Quality is the cornerstone of everything we do. From the meticulous selection of prime sites to the finest details in our craftsmanship, we spare no effort in delivering uncompromising quality. Every project is a testament to our commitment to excellence.</p>
            </div>

            <div class="row justify-content-between align-items-center my-8">
                <div class="col-6">
                    <p class="text-capitalize fs-25 font-bold">Explore Our Projects</p>
                </div>
                <div class="col-auto">
                    <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 text-white px-4 fs-14 fw-500">View all projects</a>
                </div>
            </div>
        </div>

        <div id="homepageProjectsSlider">
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <div>
                    <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/project-1.jpg" class="h-100 w-100 object-fit-cover" alt="" />

                    <div class="inner">
                        <div class="inner-left">
                            <p class="text-primary">Project finalised 5 October 2023</p>

                            <a href="#" class="fs-25 fw-500 py-3 d-flex align-items-center text-white mt-3 mb-5">
                                <span>Lorem Ipsum Project Name</span>
                                <span>
                                    <svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="24.9512" cy="25.1802" r="24.9131" fill="#B083FB" />
                                        <path d="M26.1077 15.9346L35.3539 25.1808L26.1077 34.4271" stroke="#F3FAFC" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M35.3541 25.1807H14.55" stroke="#F3FAFC" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>

                            <p class="border border-primary rounded-pill p-2 d-inline-flex align-items-center gap-2 text-primary fs-12">
                                <svg width="13" height="18" viewBox="0 0 13 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.59259 17.4417C6.59259 17.4417 12.8358 11.766 12.8358 6.6579C12.8358 5.00209 12.178 3.4141 11.0072 2.24327C9.83639 1.07244 8.2484 0.414673 6.59259 0.414673C4.93678 0.414673 3.3488 1.07244 2.17796 2.24327C1.00713 3.4141 0.349365 5.00209 0.349365 6.6579C0.349365 11.766 6.59259 17.4417 6.59259 17.4417ZM9.4304 6.65787C9.4304 8.22516 8.15986 9.4957 6.59257 9.4957C5.02528 9.4957 3.75474 8.22516 3.75474 6.65787C3.75474 5.09058 5.02528 3.82004 6.59257 3.82004C8.15986 3.82004 9.4304 5.09058 9.4304 6.65787Z" fill="#F3FAFC" />
                                </svg>
                                Location
                            </p>

                            <p class="font-century lh-1_5 pt-3 pb-5">Parramatta, NSW</p>

                            <p class="border border-primary rounded-pill p-2 d-inline-flex align-items-center gap-2 text-primary fs-12">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9124 10.8144C17.8908 10.9907 17.7325 11.1238 17.5527 11.1238H16.7C16.5309 11.1238 16.3906 11.2389 16.351 11.4044C16.1604 12.2175 15.8438 12.9802 15.4157 13.6674C15.3257 13.8113 15.3437 13.9947 15.4624 14.1135L16.0668 14.7215C16.1927 14.8474 16.2107 15.0525 16.0992 15.1928C15.6351 15.79 15.0991 16.326 14.5018 16.7901C14.3615 16.9016 14.1565 16.8837 14.0306 16.7577L13.4261 16.1533C13.3074 16.0346 13.1239 16.0166 12.98 16.1066C12.2929 16.5347 11.5302 16.8513 10.7171 17.042C10.5552 17.0815 10.4365 17.2218 10.4365 17.3909V18.2508C10.4365 18.4307 10.307 18.5889 10.1271 18.6105C9.75654 18.6573 9.38238 18.6825 8.99743 18.6825C8.61248 18.6825 8.23833 18.6573 7.86777 18.6105C7.69148 18.5889 7.55837 18.4307 7.55837 18.2508V17.3909C7.55837 17.2218 7.44325 17.0815 7.27775 17.042C6.46468 16.8513 5.70198 16.5347 5.01483 16.1066C4.87092 16.0166 4.68744 16.0346 4.56872 16.1533L3.96431 16.7577C3.8384 16.8837 3.63333 16.9016 3.49302 16.7901C2.89581 16.326 2.35976 15.79 1.89566 15.1928C1.78414 15.0525 1.80212 14.8474 1.92804 14.7215L2.53245 14.1135C2.65117 13.9947 2.66916 13.8113 2.57922 13.6674C2.1511 12.9802 1.8345 12.2175 1.64383 11.4044C1.60425 11.2425 1.46394 11.1238 1.29485 11.1238H0.435015C0.255132 11.1238 0.0968349 10.9943 0.075249 10.8144C0.0284795 10.4439 0.0032959 10.0697 0.0032959 9.68475C0.0032959 9.2998 0.0284795 8.92565 0.075249 8.55509C0.0968349 8.3788 0.255132 8.24569 0.435015 8.24569H1.34522C1.48553 8.24569 1.60065 8.14855 1.63303 8.01184C1.82371 7.16639 2.15469 6.37131 2.6044 5.65898C2.67635 5.54025 2.66556 5.38915 2.56483 5.28842L1.88847 4.61206C1.78414 4.50773 1.76974 4.33864 1.85969 4.21992C2.33817 3.59392 2.90301 3.03269 3.529 2.5506C3.64772 2.46066 3.81681 2.47505 3.92114 2.57938L4.5975 3.25574C4.69824 3.35648 4.84934 3.37087 4.96806 3.29532C5.6804 2.84561 6.47548 2.51463 7.32093 2.32395C7.45764 2.29517 7.55477 2.17645 7.55477 2.03614V1.07197C7.55477 0.924464 7.6663 0.791351 7.8138 0.773362C8.19875 0.722995 8.5945 0.694214 8.99384 0.694214C9.39318 0.694214 9.78892 0.722995 10.1739 0.773362C10.3214 0.791351 10.4329 0.920866 10.4329 1.07197V2.03614C10.4329 2.17645 10.53 2.29157 10.6667 2.32395C11.5122 2.51463 12.3073 2.84561 13.0196 3.29532C13.1383 3.36727 13.2894 3.35648 13.3902 3.25574L14.0665 2.57938C14.1709 2.47505 14.34 2.46066 14.4587 2.5506C15.0847 3.02909 15.6459 3.59392 16.128 4.21992C16.2179 4.33864 16.2035 4.50773 16.0992 4.61206L15.4228 5.28842C15.3221 5.38915 15.3077 5.54025 15.3833 5.65898C15.8222 6.36052 16.1496 7.13761 16.3438 7.96507C16.3834 8.12697 16.5237 8.24569 16.6928 8.24569H17.5527C17.7325 8.24569 17.8908 8.37521 17.9124 8.55509C17.9592 8.92565 17.9844 9.2998 17.9844 9.68475C17.9844 10.0697 17.9592 10.4439 17.9124 10.8144ZM11.5122 9.66357C11.5122 11.0564 10.3831 12.1855 8.99023 12.1855C7.59739 12.1855 6.46826 11.0564 6.46826 9.66357C6.46826 8.27073 7.59739 7.1416 8.99023 7.1416C10.3831 7.1416 11.5122 8.27073 11.5122 9.66357Z" fill="#F3FAFC" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1263 9.68843C14.1263 12.523 11.8284 14.8208 8.99388 14.8208C6.15933 14.8208 3.86148 12.523 3.86148 9.68843C3.86148 6.85388 6.15933 4.55603 8.99388 4.55603C11.8284 4.55603 14.1263 6.85388 14.1263 9.68843ZM11.4902 9.68831C11.4902 11.069 10.3709 12.1882 8.99025 12.1882C7.60958 12.1882 6.49032 11.069 6.49032 9.68831C6.49032 8.30763 7.60958 7.18837 8.99025 7.18837C10.3709 7.18837 11.4902 8.30763 11.4902 9.68831Z" fill="#3597AF" />
                                </svg>
                                Services used
                            </p>

                            <p class="font-century lh-1_5 pt-3">
                                Site Acquisition & Due Diligence Development management Duplexes & Townhouses
                            </p>
                        </div>

                        <div class="inner-right">
                            <div>
                                <div class="innerSlider">
                                    <div>
                                        <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/project-1.jpg" alt="" />
                                    </div>
                                    <div>
                                        <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/project-1.jpg" alt="" />
                                    </div>
                                    <div>
                                        <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/project-1.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </section>

    <section class="who-we-are">
        <div class="container">
            <div class="row gy-4 gx-3">
                <div class="col-5">
                    <div class="bg-white p-4">
                        <p class="fs-45 text-teal fw-500">Learn more about who we are...</p>

                        <article class="description font-century text-deep-blue py-5 lh-1_5">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                        </article>

                        <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple d-inline-flex rounded-1 text-white px-5 fs-14 fw-500">Learn more</a>
                    </div>
                </div>

                <div class="col-7">
                    <div class="h-100">
                        <iframe class="w-100 h-100" src="https://www.youtube.com/embed/x3bfa3DZ8JM" title="Khalid - Better (Official Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-4">
                    <div class="cta-box bg-teal h-100">
                        <p class="fs-45 text-deep-blue fw-500 text-capitalize">Innovation at The Core</p>

                        <div class="img my-4">
                            <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/core.png" alt="" />
                        </div>

                        <article class="font-century lh-1_5 text-deep-blue">
                            Innovation fuels our creativity. We constantly challenge convention, seeking fresh ideas and innovative solutions to create spaces that inspire and enrich lives. Our team of experts is always on the lookout for the latest trends and technologies to ensure our projects are at the forefront of modern living.
                        </article>
                    </div>
                </div>

                <div class="col-4">
                    <div class="cta-box bg-primary h-100">
                        <p class="fs-45 text-deep-blue fw-500 text-capitalize">Financial Stability</p>

                        <div class="img my-4">
                            <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/financial-stablity.png" alt="" />
                        </div>

                        <article class="font-century lh-1_5 text-deep-blue">
                            Our rock-solid financial stability ensures that your investment is secure with us. We take a prudent and responsible approach to financial management, providing you with peace of mind throughout your property journey.
                        </article>
                    </div>
                </div>

                <div class="col-4">
                    <div class="cta-box bg-teal h-100">
                        <p class="fs-45 text-deep-blue fw-500 text-capitalize">Company Responsibility</p>

                        <div class="img my-4">
                            <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/globe.png" alt="" />
                        </div>

                        <article class="font-century lh-1_5 text-deep-blue">
                            We understand the importance of our projects' impact on society and the environment. At DownUnder Property Group, we are committed to sustainable development practices that minimise our carbon footprint and contribute positively to the communities we work in.
                        </article>
                    </div>
                </div>
            </div>
        </div>

        <div class="services">
            <div class="container text-center pt-12 mb-7">
                <p class="text-primary fs-45 fw-500">Explore our services...</p>
                <p class="font-century fs-20 pt-4 pb-5 lh-1_5">Discover elegance redefined: your gateway to luxury living</p>
                <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 d-inline-flex text-white px-4 fs-14 fw-500">View all projects</a>
            </div>

            <div class="service-fold service-fold-1">
                <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/service-fold-1.jpg" alt="" class="position-absolute top-0 left-0 w-full h-full object-fit-cover">

                <div class="overlay position-relative">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-xxl-5">
                                <p class="fs-35 fw-500">Site Acquisition &amp;<br /> Due Diligence</p>
                                <a href="#" class="d-inline-flex mt-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="84" height="85" viewBox="0 0 84 85" fill="none">
                                        <circle cx="42.1597" cy="42.4906" r="41.5659" fill="#B083FB" />
                                        <path d="M44.0879 27.0643L59.5147 42.4911L44.0879 57.9179" stroke="#F3FAFC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M59.5149 42.4909H24.8047" stroke="#F3FAFC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>

                                <article class="fw-300 font-century description lh-1_5 mt-8">
                                    We have a keen eye for identifying prime locations that promise exceptional returns on your investment. Our thorough due diligence ensures that your property acquisition is a sound decision.
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-fold service-fold-negative-margin service-fold-2">
                <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/service-fold-2.jpg" alt="" class="position-absolute top-0 left-0 w-full h-full object-fit-cover">

                <div class="overlay position-relative">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-xxl-5">
                                <p class="fs-35 fw-500">Site Acquisition &amp;<br /> Due Diligence</p>
                                <a href="#" class="d-inline-flex mt-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="84" height="85" viewBox="0 0 84 85" fill="none">
                                        <circle cx="42.1597" cy="42.4906" r="41.5659" fill="#B083FB" />
                                        <path d="M44.0879 27.0643L59.5147 42.4911L44.0879 57.9179" stroke="#F3FAFC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M59.5149 42.4909H24.8047" stroke="#F3FAFC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>

                                <article class="fw-300 font-century description lh-1_5 mt-8">
                                    We have a keen eye for identifying prime locations that promise exceptional returns on your investment. Our thorough due diligence ensures that your property acquisition is a sound decision.
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-fold service-fold-negative-margin service-fold-3">
                <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/service-fold-3.jpg" alt="" class="position-absolute top-0 left-0 w-full h-full object-fit-cover">

                <div class="overlay position-relative">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-xxl-5">
                                <p class="fs-35 fw-500">Site Acquisition &amp;<br /> Due Diligence</p>
                                <a href="#" class="d-inline-flex mt-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="84" height="85" viewBox="0 0 84 85" fill="none">
                                        <circle cx="42.1597" cy="42.4906" r="41.5659" fill="#B083FB" />
                                        <path d="M44.0879 27.0643L59.5147 42.4911L44.0879 57.9179" stroke="#F3FAFC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M59.5149 42.4909H24.8047" stroke="#F3FAFC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>

                                <article class="fw-300 font-century description lh-1_5 mt-8">
                                    We have a keen eye for identifying prime locations that promise exceptional returns on your investment. Our thorough due diligence ensures that your property acquisition is a sound decision.
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-fold service-fold-negative-margin service-fold-4">
                <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/service-fold-4.jpg" alt="" class="position-absolute top-0 left-0 w-full h-full object-fit-cover">

                <div class="overlay position-relative">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-xxl-5">
                                <p class="fs-35 fw-500">Site Acquisition &amp;<br /> Due Diligence</p>
                                <a href="#" class="d-inline-flex mt-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="84" height="85" viewBox="0 0 84 85" fill="none">
                                        <circle cx="42.1597" cy="42.4906" r="41.5659" fill="#B083FB" />
                                        <path d="M44.0879 27.0643L59.5147 42.4911L44.0879 57.9179" stroke="#F3FAFC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M59.5149 42.4909H24.8047" stroke="#F3FAFC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>

                                <article class="fw-300 font-century description lh-1_5 mt-8">
                                    We have a keen eye for identifying prime locations that promise exceptional returns on your investment. Our thorough due diligence ensures that your property acquisition is a sound decision.
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-fold service-fold-negative-margin service-fold-5">
                <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/service-fold-5.jpg" alt="" class="position-absolute top-0 left-0 w-full h-full object-fit-cover">

                <div class="overlay position-relative">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-xxl-5">
                                <p class="fs-35 fw-500">Site Acquisition &amp;<br /> Due Diligence</p>
                                <a href="#" class="d-inline-flex mt-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="84" height="85" viewBox="0 0 84 85" fill="none">
                                        <circle cx="42.1597" cy="42.4906" r="41.5659" fill="#B083FB" />
                                        <path d="M44.0879 27.0643L59.5147 42.4911L44.0879 57.9179" stroke="#F3FAFC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M59.5149 42.4909H24.8047" stroke="#F3FAFC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>

                                <article class="fw-300 font-century description lh-1_5 mt-8">
                                    We have a keen eye for identifying prime locations that promise exceptional returns on your investment. Our thorough due diligence ensures that your property acquisition is a sound decision.
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="journey-begins-slider bg-teal py-4" id="journey-begins-slider">
        <p class="text-capitalize fs-25 fw-300">Your journey begins now, unlock your future here!</p>
        <p class="text-capitalize fs-25 fw-300">Your journey begins now, unlock your future here!</p>
        <p class="text-capitalize fs-25 fw-300">Your journey begins now, unlock your future here!</p>
        <p class="text-capitalize fs-25 fw-300">Your journey begins now, unlock your future here!</p>
    </section>

    <section class="form d-flex">
        <div class="col-lg-6">
            <div class="form-first-fold d-flex justify-content-end">
                <div class="col-lg-9 px-8 py-9">
                    <p class="fs-45 fw-500 text-deep-blue">Your future home awaits you at a click of a button</p>
                    <article class="description fs-20 text-deep-blue py-5">
                        Contact us today to start your extraordinary property journey with DownUnder Property Group.
                    </article>

                    <a href="tel:<?= get_field('phone_number', 'options') ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 d-inline-flex text-white px-4 fs-14 fw-500"><?= get_field('phone_number', 'options') ?></a>

                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-second-fold">
                <div class="col-lg-11 px-8 py-9">
                    <p class="fs-25 fw-500">Fill in your details and we'll get<br /> back to you ASAP!</p>

                    <form action="" class="pt-4">
                        <div class="row gy-4">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Your name*" />
                            </div>

                            <div class="col-6">
                                <input type="tel" class="form-control" placeholder="Contact no.*" />
                            </div>

                            <div class="col-6">
                                <input type="email" class="form-control" placeholder="Email address*" />
                            </div>

                            <div class="col-6">
                                <select name="" id="" class="form-control form-select">
                                    <option>Select service of interest</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Street address" />
                            </div>

                            <div class="col-12">
                                <textarea rows="5" class="form-control" placeholder="Type your inquiry here..."></textarea>
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="bg-transparent border-0 d-flex align-items-center gap-4 text-white fs-20">
                                    <span>Submit</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74" fill="none">
                                            <circle cx="37.3743" cy="36.7527" r="36.6258" fill="#B083FB" />
                                            <path d="M39.0732 23.1602L52.6665 36.7534L39.0732 50.3467" stroke="#F3FAFC" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M52.6668 36.7532H22.0819" stroke="#F3FAFC" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container text-center">
            <p class="text-primary fs-45 fw-500">Our customer-centric approach proves itself...</p>

            <article class="description col-lg-8 mx-auto font-century fw-200 text-light-blue pt-4 pb-5 lh-1_5">At DownUnder Property Group, you, our valued client, are at the heart of everything we do. We listen to your dreams, understand your desires, and tailor our projects to exceed your expectations. Your satisfaction is our ultimate goal, and we strive to make every step of your journey with us a delightful experience.</article>

            <div class="row justify-content-center gx-3">
                <div class="col-auto">
                    <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 d-inline-flex text-white px-5 fs-14 fw-500">Enquire now</a>
                </div>

                <div class="col-auto">
                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn border-2 border-purple rounded-1 text-purple px-5 fs-14 fw-500"><?= get_field('phone_number', 'options') ?></a>
                </div>
            </div>
        </div>

        <div id="testimonialSlider" class="py-7">
            <?php for ($i = 0; $i < 10; $i++) : ?>
                <div>
                    <p class="fs-25 fw-500 pb-3">John Doe</p>

                    <svg xmlns="http://www.w3.org/2000/svg" width="171" height="34" viewBox="0 0 171 34" fill="none">
                        <path d="M16.4378 3.17713C16.7371 2.25587 18.0405 2.25586 18.3398 3.17713L20.882 11C21.0159 11.412 21.3998 11.6909 21.833 11.6909L30.0585 11.6912C31.0272 11.6913 31.43 12.9308 30.6463 13.5002L23.9919 18.3353C23.6414 18.59 23.4948 19.0413 23.6286 19.4533L26.1702 27.2764C26.4695 28.1977 25.415 28.9637 24.6313 28.3944L17.9766 23.5598C17.6261 23.3052 17.1515 23.3052 16.801 23.5598L10.1463 28.3944C9.36256 28.9637 8.30814 28.1977 8.60744 27.2764L11.149 19.4533C11.2828 19.0413 11.1362 18.59 10.7857 18.3353L4.13131 13.5002C3.34765 12.9308 3.7504 11.6913 4.71908 11.6912L12.9446 11.6909C13.3778 11.6909 13.7617 11.412 13.8956 11L16.4378 3.17713Z" fill="#69C2DB" />
                        <path d="M50.553 3.17713C50.8524 2.25587 52.1557 2.25586 52.4551 3.17713L54.9972 11C55.1311 11.412 55.515 11.6909 55.9482 11.6909L64.1738 11.6912C65.1424 11.6913 65.5452 12.9308 64.7615 13.5002L58.1071 18.3353C57.7567 18.59 57.61 19.0413 57.7439 19.4533L60.2854 27.2764C60.5847 28.1977 59.5303 28.9637 58.7466 28.3944L52.0918 23.5598C51.7413 23.3052 51.2668 23.3052 50.9163 23.5598L44.2615 28.3944C43.4778 28.9637 42.4234 28.1977 42.7227 27.2764L45.2642 19.4533C45.3981 19.0413 45.2514 18.59 44.901 18.3353L38.2465 13.5002C37.4629 12.9308 37.8656 11.6913 38.8343 11.6912L47.0599 11.6909C47.4931 11.6909 47.877 11.412 48.0109 11L50.553 3.17713Z" fill="#69C2DB" />
                        <path d="M84.6672 3.17713C84.9666 2.25587 86.27 2.25586 86.5693 3.17713L89.1115 11C89.2453 11.412 89.6293 11.6909 90.0625 11.6909L98.288 11.6912C99.2567 11.6913 99.6595 12.9308 98.8758 13.5002L92.2214 18.3353C91.8709 18.59 91.7243 19.0413 91.8581 19.4533L94.3997 27.2764C94.699 28.1977 93.6445 28.9637 92.8608 28.3944L86.2061 23.5598C85.8556 23.3052 85.381 23.3052 85.0305 23.5598L78.3758 28.3944C77.5921 28.9637 76.5376 28.1977 76.8369 27.2764L79.3785 19.4533C79.5123 19.0413 79.3657 18.59 79.0152 18.3353L72.3608 13.5002C71.5771 12.9308 71.9799 11.6913 72.9486 11.6912L81.1741 11.6909C81.6073 11.6909 81.9912 11.412 82.1251 11L84.6672 3.17713Z" fill="#69C2DB" />
                        <path d="M118.782 3.17713C119.081 2.25587 120.384 2.25586 120.684 3.17713L123.226 11C123.36 11.412 123.744 11.6909 124.177 11.6909L132.402 11.6912C133.371 11.6913 133.774 12.9308 132.99 13.5002L126.336 18.3353C125.985 18.59 125.839 19.0413 125.972 19.4533L128.514 27.2764C128.813 28.1977 127.759 28.9637 126.975 28.3944L120.32 23.5598C119.97 23.3052 119.495 23.3052 119.145 23.5598L112.49 28.3944C111.706 28.9637 110.652 28.1977 110.951 27.2764L113.493 19.4533C113.627 19.0413 113.48 18.59 113.129 18.3353L106.475 13.5002C105.691 12.9308 106.094 11.6913 107.063 11.6912L115.288 11.6909C115.722 11.6909 116.105 11.412 116.239 11L118.782 3.17713Z" fill="#69C2DB" />
                        <path d="M152.897 3.17713C153.196 2.25587 154.499 2.25586 154.799 3.17713L157.341 11C157.475 11.412 157.859 11.6909 158.292 11.6909L166.518 11.6912C167.486 11.6913 167.889 12.9308 167.105 13.5002L160.451 18.3353C160.1 18.59 159.954 19.0413 160.088 19.4533L162.629 27.2764C162.928 28.1977 161.874 28.9637 161.09 28.3944L154.436 23.5598C154.085 23.3052 153.611 23.3052 153.26 23.5598L146.605 28.3944C145.822 28.9637 144.767 28.1977 145.066 27.2764L147.608 19.4533C147.742 19.0413 147.595 18.59 147.245 18.3353L140.59 13.5002C139.807 12.9308 140.209 11.6913 141.178 11.6912L149.404 11.6909C149.837 11.6909 150.221 11.412 150.355 11L152.897 3.17713Z" fill="#69C2DB" />
                    </svg>

                    <article class="description text-light-blue lh-1_5 pt-4 fw-300">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </article>
                </div>
            <?php endfor; ?>
        </div>
    </section>

    <section class="gallery" id="gallerySlider">
        <div><img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/iStock-1414164958-1.jpg" alt=""></div>
        <div><img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/iStock-1591189146-1.jpg" alt=""></div>
        <div><img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/iStock-1414164958-1.jpg" alt=""></div>
        <div><img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/iStock-1591189146-1.jpg" alt=""></div>
        <div><img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/iStock-1414164958-1.jpg" alt=""></div>
        <div><img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/iStock-1591189146-1.jpg" alt=""></div>
        <div><img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/iStock-1414164958-1.jpg" alt=""></div>
        <div><img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/iStock-1591189146-1.jpg" alt=""></div>
    </section>
</main>

<?php get_footer(); ?>