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
                            <li><a href="" class="text-white text-capitalize font-century">Site Acquisition and due dilegence</a></li>
                            <li><a href="" class="text-white text-capitalize font-century">Strategic Developments advice and feasibility services</a></li>
                            <li><a href="" class="text-white text-capitalize font-century">Development management</a></li>
                            <li><a href="" class="text-white text-capitalize font-century">Luxury New Homes</a></li>
                            <li><a href="" class="text-white text-capitalize font-century">Duplexes & Townhouses</a></li>
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
    </section>
</main>

<?php get_footer(); ?>