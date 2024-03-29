<?php
/*
* Template Name: About Us
* The about us page
*/
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="aboutUsPage">
    <?php $introduction = get_field('introduction'); ?>
    <div class="container">
        <section class="introduction mx-auto col-xl-8 text-center">
            <?php if (isset($introduction['subtitle'])) : ?>
                <p class="font-century lh-1_5 fs-25 pb-3"><?= $introduction['subtitle'] ?></p>
            <?php endif; ?>
            <p class="text-primary fs-45 fw-500"><?= $introduction['title'] ?></p>

            <article class="description font-century py-5 lh-1_67">
                <?= $introduction['description'] ?>
            </article>

            <div class="row justify-content-center gx-2 gx-lg-4 gy-2 mt-md-4 mt-lg-6">
                <div class="col-12 col-md-4">
                    <div class="introduction-card h-100 w-100 p-3 p-md-4 text-start text-md-center">
                        <div class="row align-items-center">
                            <div class="col-8 col-md-12 order-2 order-md-1">
                                <p class="text-capitalize fs-25">Leaders Of<br class="d-none d-md-block" /> Luxury</p>
                            </div>

                            <div class="col-4 col-md-12 order-1 order-md-2">
                                <div class="image mt-md-5">
                                    <img src="<?= home_url() ?>/wp-content/uploads/2023/12/leaders-of-luxury.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="introduction-card h-100 w-100 p-3 p-md-4 text-start text-md-center">
                        <div class="row align-items-center">
                            <div class="col-8 col-md-12 order-2 order-md-1">
                                <p class="text-capitalize fs-25">Innovation & Quality</p>
                            </div>

                            <div class="col-4 col-md-12 order-1 order-md-2">
                                <div class="image mt-md-5">
                                    <img src="<?= home_url() ?>/wp-content/uploads/2023/12/innovation-quality.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="introduction-card h-100 w-100 px-4 py-3 py-md-4 text-start text-md-center">
                        <div class="row align-items-center">
                            <div class="col-8 col-md-12 order-2 order-md-1">
                                <p class="text-capitalize fs-25">Outstanding Customer Service</p>
                            </div>

                            <div class="col-4 col-md-12 order-1 order-md-2">
                                <div class="image mt-md-5">
                                    <img src="<?= home_url() ?>/wp-content/uploads/2023/12/outstanding-customer-service.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $about = get_field('about'); ?>
        <section class="established py-9">
            <div class="row justify-content-center align-items-center gy-5">
                <div class="col-12 col-md-8 col-xl-4">
                    <article class="description fs-25 fw-500 text-primary text-center"><?= $about['description_1'] ?></article>
                </div>

                <div class="col-12 col-xl-4">
                    <div class="established-image">
                        <img class="h-100 w-100 object-fit-cover" src="<?= $about['hero_image']['url'] ?>" alt="<?= $about['hero_image']['alt'] ?>">
                    </div>
                </div>

                <div class="col-12 col-md-8 col-xl-4">
                    <article class="description font-century fw-300 text-center lh-1_67"><?= $about['description_2'] ?></article>
                </div>
            </div>
        </section>
    </div>

    <?php $vision = get_field('vision'); ?>
    <section class="vision bg-blue">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="px-2 px-md-5 px-lg-3 px-xl-5 bg-teal py-5 py-md-6">
                        <p class="text-black fs-45 fw-500"><?= $vision['title'] ?></p>
                        <p class="fs-25 fw-300 lh-1_5 pt-4 pt-md-5"><?= $vision['subtitle'] ?></p>

                        <article class="description fs-16 fw-300 lh-1_67 pt-4 font-century">
                            <?= $vision['description'] ?>
                        </article>

                        <div class="row g-3 py-5 py-md-6">
                            <div class="col-9 col-md-auto">
                                <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 text-white px-5 fs-14 fw-400">Contact Us</a>
                            </div>

                            <div class="col-9 col-md-auto">
                                <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn border-2 border-white rounded-1 text-white px-5 fs-14 fw-500"><?= get_field('phone_number', 'options') ?></a>
                            </div>
                        </div>

                        <div class="vision-slider">
                            <?php foreach ($vision['gallery'] as $image) : ?>
                                <div>
                                    <img class="h-100 w-100 object-fit-cover" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 py-5">
                    <p class="fs-25 pb-4 pb-md-5">Our Philosophy</p>

                    <?php
                    if (have_rows('philosophy')) :
                        while (have_rows('philosophy')) : the_row();
                    ?>
                            <div class="py-4 border-bottom border-primary">
                                <div class="d-flex gap-4 align-items-center">
                                    <img src="<?= get_sub_field('icon')['url'] ?>" alt="<?= get_sub_field('icon')['alt'] ?>">

                                    <p class="fs-25 fw-500"><?= get_sub_field('title'); ?></p>
                                </div>

                                <p class="font-century text-light-blue pt-3"><?= get_sub_field('description'); ?></p>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="story py-6 py-md-8 py-xl-10">
        <?php $team = get_field('team'); ?>
        <div class="container">
            <div class="mx-auto col-xl-8 text-center">
                <p class="font-century lh-1_5 fs-25 pb-3"><?= $team['subtitle'] ?></p>

                <p class="text-center fs-45 fw-500 text-primary text-capitalize"><?= $team['title'] ?></p>

                <article class="font-century py-5 lh-1_67">
                    <?= $team['description'] ?>
                </article>

                <p class="lh-1_5 fs-25 pb-3">Meet the masterminds of luxury:</p>
            </div>

            <div class="row gx-3 gy-5 pt-5">
                <?php if (have_rows('team')) :
                    while (have_rows('team')) : the_row();
                        if (have_rows('members')) :
                            while (have_rows('members')) : the_row();
                ?>
                                <div class="col-12 col-md-4">
                                    <div class="mastermind-card text-center">
                                        <div class="image">
                                            <?php if (isset(get_sub_field('image')['url'])) : ?>
                                                <img class="w-100 h-100 object-fit-cover" src="<?= get_sub_field('image')['url']; ?>" alt="<?= get_sub_field('image')['alt']; ?>">
                                            <?php endif; ?>
                                        </div>
                                        <p class="fs-25 py-4"><?= get_sub_field('name'); ?></p>
                                        <p class="text-primary"><?= get_sub_field('position'); ?></p>
                                        <hr class="border-primary border-2" />
                                        <p class="font-century lh-1_67 fw-300">
                                            <?= get_sub_field('description'); ?>
                                        </p>
                                    </div>
                                </div>
                <?php
                            endwhile;
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

    <div class="bg-blue">
        <?php get_template_part('parts/section', 'commonservices'); ?>
    </div>

    <?php get_template_part('parts/section', 'whychooseus'); ?>
    <?php get_template_part('parts/section', 'journeybeginslider'); ?>
    <?php get_template_part('parts/section', 'commonform'); ?>
</main>

<?php get_footer(); ?>