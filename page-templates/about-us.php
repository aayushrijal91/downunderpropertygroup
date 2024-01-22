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

            <article class="font-century py-5 lh-1_67">
                <?= $introduction['description'] ?>
            </article>

            <div class="row justify-content-center gx-4 mt-6">
                <div class="col-4">
                    <div class="introduction-card h-100 w-100 px-4 pt-4 text-center d-flex flex-column align-items-center">
                        <p class="text-capitalize fs-25">Leaders Of<br /> Luxury</p>

                        <div class="image d-flex align-items-center justify-content-center my-5">
                            <img src="<?= home_url() ?>/wp-content/uploads/2023/12/leaders-of-luxury.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="introduction-card h-100 w-100 px-4 pt-4 text-center d-flex flex-column align-items-center">
                        <p class="text-capitalize fs-25">Innovation & Quality</p>

                        <div class="image d-flex align-items-center justify-content-center my-5">
                            <img src="<?= home_url() ?>/wp-content/uploads/2023/12/innovation-quality.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="introduction-card h-100 w-100 px-4 pt-4 text-center d-flex flex-column align-items-center">
                        <p class="text-capitalize fs-25">Outstanding Customer Service</p>

                        <div class="image d-flex align-items-center justify-content-center my-5">
                            <img src="<?= home_url() ?>/wp-content/uploads/2023/12/outstanding-customer-service.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $about = get_field('about'); ?>
        <section class="established py-9">
            <div class="row align-items-center">
                <div class="col-4">
                    <article class="fs-25 fw-500 text-primary text-center"><?= $about['description_1'] ?></article>
                </div>

                <div class="col-4">
                    <div class="established-image">
                        <img class="h-100 w-100 object-fit-cover" src="<?= $about['hero_image']['url'] ?>" alt="<?= $about['hero_image']['alt'] ?>">
                    </div>
                </div>

                <div class="col-4">
                    <article class="font-century fw-300 text-center lh-1_67"><?= $about['description_2'] ?></article>
                </div>
            </div>
        </section>
    </div>

    <?php $vision = get_field('vision'); ?>
    <section class="vision bg-blue">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="px-5 bg-teal py-6">
                        <p class="text-black fs-45 fw-500"><?= $vision['title'] ?></p>
                        <p class="fs-25 fw-300 lh-1_5 pt-5"><?= $vision['subtitle'] ?></p>

                        <article class="fs-16 fw-300 lh-1_67 pt-4 font-century">
                            <?= $vision['description'] ?>
                        </article>

                        <div class="row gx-3 py-6">
                            <div class="col-auto">
                                <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 text-white px-5 fs-14 fw-400">Contact Us</a>
                            </div>

                            <div class="col-auto">
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
                <div class="col-lg-5 py-5">
                    <p class="fs-25 pb-5">Our Philosophy</p>

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

    <section class="story py-10">
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

            <div class="row pt-5">
                <?php if (have_rows('team')) :
                    while (have_rows('team')) : the_row();
                        if (have_rows('members')) :
                            while (have_rows('members')) : the_row();
                ?>
                                <div class="col-4">
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
    <?php get_template_part('parts/section', 'homepageform'); ?>
</main>

<?php get_footer(); ?>