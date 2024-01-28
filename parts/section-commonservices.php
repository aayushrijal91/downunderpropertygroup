<section class="common-services">
    <div class="container text-center pt-6 pt-lg-10 pt-xl-12 mb-7">
        <p class="text-primary fs-45 fw-500">Explore our services...</p>
        <p class="font-century fs-20 pt-4 pb-5 lh-1_5">Discover elegance redefined: your gateway to luxury living</p>
        <a href="<?= home_url() ?>/projects" class="btn btn-purple rounded-1 d-inline-flex text-white px-4 fs-14 fw-500">View all projects</a>
    </div>

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
        $count = 1;
        while ($the_query->have_posts()) : $the_query->the_post();
    ?>
            <div class="service-fold service-fold-<?= $count ?> <?= $count > 1 ? 'service-fold-negative-margin' : '' ?>">
                <img src="<?= get_field('banner')['hero_image']['url'] ?>" alt="<?= get_field('banner')['hero_image']['alt'] ?>" class="position-absolute top-0 left-0 w-100 h-100 object-fit-cover">

                <div class="overlay position-relative">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-xxl-5">
                                <p class="fs-35 fw-500"><?= get_the_title() ?></p>
                                <a href="<?= get_the_permalink() ?>" class="d-inline-flex mt-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="84" height="85" viewBox="0 0 84 85" fill="none">
                                        <circle cx="42.1597" cy="42.4906" r="41.5659" fill="#B083FB" />
                                        <path d="M44.0879 27.0643L59.5147 42.4911L44.0879 57.9179" stroke="#F3FAFC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M59.5149 42.4909H24.8047" stroke="#F3FAFC" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>

                                <article class="fw-300 font-century description lh-1_5 mt-8">
                                    <p><?= get_field('introduction')['short_description'] ?></p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
            $count++;
        endwhile;
    endif;
    wp_reset_query(); ?>

    <!-- <div class="service-fold service-fold-1">
        <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/service-fold-1.jpg" alt="" class="position-absolute top-0 left-0 w-100 h-100 object-fit-cover">

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
        <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/service-fold-2.jpg" alt="" class="position-absolute top-0 left-0 w-100 h-100 object-fit-cover">

        <div class="overlay position-relative">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-xxl-5">
                        <p class="fs-35 fw-500">Strategic Development Advice & Feasibility Services</p>
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
        <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/service-fold-3.jpg" alt="" class="position-absolute top-0 left-0 w-100 h-100 object-fit-cover">

        <div class="overlay position-relative">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-xxl-5">
                        <p class="fs-35 fw-500">Development Management</p>
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
        <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/service-fold-4.jpg" alt="" class="position-absolute top-0 left-0 w-100 h-100 object-fit-cover">

        <div class="overlay position-relative">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-xxl-5">
                        <p class="fs-35 fw-500">Luxury New Homes</p>
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
        <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/service-fold-5.jpg" alt="" class="position-absolute top-0 left-0 w-100 h-100 object-fit-cover">

        <div class="overlay position-relative">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-xxl-5">
                        <p class="fs-35 fw-500">Duplexes & Townhouses</p>
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
    </div> -->
</section>