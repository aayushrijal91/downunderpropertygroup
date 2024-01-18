<?php
/*
* Template Name: Front Page
* The front page
*/
get_header();
get_template_part('parts/section', 'nav');
?>

<section class="homeBanner">
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

<main class="frontpage mt-0">
    <div class="container py-10">
        <div class="mx-auto col-xl-7 text-center">
            <p class="text-primary fs-45 fw-500">Discover a world of luxury, sophistication, & modern living.</p>
            <p class="pt-5 fs-25">We're not just another property development company.</p>

            <article class="font-century py-5 lh-1_67">
                Welcome to DownUnder Property Group, where luxury, sophistication, and modern living converge to create extraordinary properties that redefine the art of living. We are not just another property development company; we are visionaries who breathe life into dreams, architects of luxury, and creators of exceptional living spaces. Our unwavering commitment to quality, innovation, and customer-centricity sets us apart in the world of property development.
            </article>

            <div class="col-auto row justify-content-center gx-3">
                <div class="col-auto">
                    <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 text-white px-5 fs-14 fw-500">Contact Us Today</a>
                </div>

                <div class="col-auto">
                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn border-2 border-purple rounded-1 text-purple px-5 fs-14 fw-500"><?= get_field('phone_number', 'options') ?></a>
                </div>
            </div>
        </div>
    </div>

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

        <?php get_template_part('parts/section', 'homeprojectsslider'); ?>
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

        <?php get_template_part('parts/section', 'commonservices'); ?>
    </section>

    <?php get_template_part('parts/section', 'journeybeginslider'); ?>
    <?php get_template_part('parts/section', 'homepageform'); ?>

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