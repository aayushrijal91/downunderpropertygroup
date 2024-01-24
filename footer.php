<div class="container py-5 py-md-7">
    <p class="text-center fs-45 fw-500 text-primary text-capitalize">Your Luxury lifestyle awaits!</p>
</div>

<div class="container-fluid">
    <section class="bg-blue py-5 py-md-7 rounded-1">
        <div class="container">
            <div class="row gy-5">
                <div class="col-12 col-md-3">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-12">
                            <p class="fs-12 font-century text-primary pb-2">Learn more about us</p>
                            <a href="<?= home_url() ?>/about-us" class="fs-25 fw-500 text-white">Our Story</a>
                        </div>

                        <div class="col-6 col-md-12">
                            <p class="fs-12 font-century text-primary pt-md-5 pb-2">Speak to an expert today!</p>
                            <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" class="fs-25 fw-500 text-white">Contact us</a>
                        </div>

                        <div class="col-8 col-md-12">
                            <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 d-inline-flex text-white px-5 fs-14 fw-500 mt-5">Enquire now</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <p class="fs-12 font-century text-primary pb-2">Explore all we have to offer</p>
                    <p class="fs-25 fw-500">Our Services</p>

                    <ul class="ps-0 pt-4 d-flex flex-column gap-3">
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
                                <li><a href="<?= get_the_permalink() ?>" class="fs-14 text-light-blue fw-300"><?= get_the_title() ?></a></li>
                        <?php endwhile;
                        endif;
                        wp_reset_query(); ?>
                    </ul>
                </div>

                <div class="col-12 col-md-3">
                    <p class="fs-12 font-century text-primary pb-2">Discover our luxury finishes</p>
                    <a href="<?= home_url() ?>/projects" class="fs-25 fw-500 text-white">Our Projects</a>

                    <ul class="ps-0 pt-4 d-flex flex-column gap-3">
                        <li><a href="" class="fs-14 text-light-blue fw-300">Project name 01</a></li>
                        <li><a href="" class="fs-14 text-light-blue fw-300">Project name 02</a></li>
                        <li><a href="" class="fs-14 text-light-blue fw-300">Project name 03</a></li>
                        <li><a href="" class="fs-14 text-light-blue fw-300">Project name 04</a></li>
                        <li><a href="" class="fs-14 text-light-blue fw-300">Project name 05</a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-3">
                    <div class="row">
                        <div class="col-6 col-md-12">
                            <p class="fs-12 font-century pb-2">Find us at</p>
                            <p class="fs-25 fw-500 text-primary"><?= get_field('location', 'options') ?></p>
                        </div>

                        <div class="col-6 col-md-12">
                            <p class="fs-12 font-century pt-md-5 pb-2">We are available during...</p>
                            <article class="fs-25 fw-500 text-primary"><?= get_field('opening_time', 'options') ?></article>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<div class="container">
    <div class="row justify-content-between align-items-center pt-7 pb-5 gy-5 gy-md-7">
        <div class="col-4 col-md-12 text-center order-3 order-md-1">
            <img src="<?= get_field('footer_logo', 'options')['url'] ?>" alt="<?= get_field('footer_logo', 'options')['url'] ?>" />
        </div>

        <div class="col-12 col-md-auto order-2 order-md-2">
            <div class="row gx-2 justify-content-center">
                <?php if (have_rows('socials', 'options')) :
                    while (have_rows('socials', 'options')) : the_row();
                        $icon = get_sub_field('icon');
                        $link = get_sub_field('link');
                ?>
                        <a class="col-auto" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>">
                            <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>" />
                        </a>
                <?php endwhile;
                endif; ?>
            </div>
        </div>

        <p class="col-auto fs-12 fw-300 text-light-blue order-1 order-md-3 text-center">
            Copyright <?= date('Y') ?> <span class="px-5">/</span> <?= bloginfo('name') ?> <span class="px-5">/</span> All Rights Reserved
        </p>

        <div class="col-4 col-md-auto order-4">
            <a href="https://www.aiims.com.au/this-is-us" target="_blank">
                <img src="<?= get_template_directory_uri() ?>/assets/images/lib/aiims-logo.png" alt="Aiims">
            </a>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>