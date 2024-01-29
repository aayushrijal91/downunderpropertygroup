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
    <?php $introduction = get_field('introduction'); ?>
    <div class="container">
        <section class="introduction mx-auto col-xl-8 text-center">
            <?php if (isset($introduction['subtitle'])) : ?>
                <p class="font-century lh-1_5 fs-25 pb-3"><?= $introduction['subtitle'] ?></p>
            <?php endif; ?>
            <p class="text-primary fs-45 fw-500"><?= $introduction['title'] ?></p>

            <article class="description font-century pt-4 pt-md-5 lh-1_67">
                <?= $introduction['description'] ?>
            </article>

            <div class="row justify-content-center py-4 pt-md-5 gy-2">
                <div class="col-8 col-md-auto">
                    <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 text-white px-5 fs-14 fw-500">Contact Us</a>
                </div>

                <div class="col-8 col-md-auto">
                    <a href="<?= home_url() ?>/projects" class="btn border-2 border-purple rounded-1 text-purple px-4 fs-14 fw-500">Explore our projects</a>
                </div>
            </div>

            <?php if (get_field('display_regulations')) : ?>
                <div class="row justify-content-center gy-3 gy-md-5 gx-2 gx-md-3 pt-5">
                    <?php
                    if (have_rows('regulations')) :
                        $count = 1;
                        while (have_rows('regulations')) : the_row();
                    ?>
                            <div class="col-6 col-md-4">
                                <div class="h-100 d-flex flex-column align-items-center">
                                    <div class="number d-inline-flex mx-auto bg-primary rounded-pill fs-25 fw-500"><?= $count++ ?></div>
                                    <div class="bg-blue p-4 flex-grow-1 w-100 mt-2">
                                        <p class="fs-25 pb-4"><?= get_sub_field('title'); ?></p>
                                        <img src="<?= get_sub_field('icon')['url'] ?>" alt="<?= get_sub_field('icon')['alt'] ?>" />
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            <?php endif; ?>
        </section>
    </div>

    <?php $strategy = get_field('strategy'); ?>
    <div class="container mt-5 mt-md-10">
        <div class="row justify-content-center justify-content-lg-between gx-xl-5 gy-5">
            <div class="col-12 col-md-6">
                <img src="<?= $strategy['image']['url'] ?>" alt="<?= $strategy['image']['alt'] ?>">
            </div>

            <!-- design 1 -->
            <?php if ($strategy['strategy_design'] == 'Design 1') : ?>
                <div class="col-12 col-lg-6 col-xxl-5">
                    <p class="font-century text-center text-md-start lh-1_5 fs-25 pb-3"><?= $strategy['subtitle'] ?></p>
                    <p class="text-primary text-center text-md-start fs-45 fw-500"><?= $strategy['title'] ?></p>

                    <article class="description text-center text-md-start font-century py-4 py-md-5 lh-1_67">
                        <?= $strategy['description'] ?>
                    </article>

                    <?php
                    $number = 1;
                    if (have_rows('strategy')) :
                        while (have_rows('strategy')) : the_row();
                            if (have_rows('list')) :

                                while (have_rows('list')) : the_row();
                    ?>
                                    <div class="d-flex align-items-center gap-4 border-bottom border-grey py-4">
                                        <div class="number rounded-pill fs-25 fw-500 text-primary"><?= $number ?></div>
                                        <p class="lh-1_5 fs-25 fw-300"><?= get_sub_field('title') ?></p>
                                    </div>
                    <?php
                                    $number++;
                                endwhile;
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
            <?php endif; ?>

            <!-- design 2 -->
            <?php if ($strategy['strategy_design'] == 'Design 2') : ?>
                <div class="col-12 col-lg-6">
                    <p class="font-century lh-1_5 fs-25 pb-3"><?= $strategy['subtitle'] ?></p>
                    <p class="text-primary fs-45 fw-500"><?= $strategy['title'] ?></p>

                    <article class="font-century py-4 lh-1_67">
                        <?= $strategy['description'] ?>
                    </article>

                    <?php
                    $number = 1;
                    if (have_rows('strategy')) :
                        while (have_rows('strategy')) : the_row();
                            if (have_rows('list')) :

                                while (have_rows('list')) : the_row();
                    ?>
                                    <article class="accordion bg-blue">
                                        <div class="accordion-head d-flex align-items-center justify-content-between gap-4 p-3 <?= $number > 1 ? 'mt-3' : '' ?>">
                                            <div class="d-flex align-items-center justify-content-between gap-4">
                                                <div class="number rounded-pill fs-25 fw-500 text-primary"><?= $number++ ?></div>
                                                <p class="lh-1_5 fs-25 fw-300"><?= get_sub_field('title') ?></p>
                                            </div>

                                            <button class="btn outline-none">
                                                <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.7207 2.44409L15.7207 28.9417" stroke="#B083FB" stroke-width="3" stroke-linecap="round" />
                                                    <path d="M1.70264 14.9238L28.2002 14.9238" stroke="#B083FB" stroke-width="3" stroke-linecap="round" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="content bg-blue p-3">
                                            <p><?= get_sub_field('description') ?></p>
                                        </div>
                                    </article>
                    <?php
                                endwhile;
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
            <?php endif; ?>

            <!-- design 3 -->
            <?php if ($strategy['strategy_design'] == 'Design 3') : ?>
                <div class="col-12 col-xl-6 pb-md-7 pb-xl-10">
                    <p class="font-century lh-1_5 fs-25 pb-3"><?= $strategy['subtitle'] ?></p>
                    <p class="text-primary fs-45 fw-500"><?= $strategy['title'] ?></p>

                    <article class="font-century py-4 lh-1_67">
                        <?= $strategy['description'] ?>
                    </article>

                    <?php
                    $number = 1;
                    if (have_rows('strategy')) :
                        while (have_rows('strategy')) : the_row();
                            if (have_rows('list')) :

                                while (have_rows('list')) : the_row();
                    ?>
                                    <div class="py-4 border-bottom border-primary">
                                        <div class="d-flex gap-4 align-items-center">
                                            <img src="<?= get_sub_field('icon')['url'] ?>" alt="<?= get_sub_field('icon')['url'] ?>">

                                            <p class="fs-25 fw-500"><?= get_sub_field('title') ?></p>
                                        </div>

                                        <p class="font-century text-light-blue pt-3"><?= get_sub_field('description') ?></p>
                                    </div>
                    <?php
                                    $number++;
                                endwhile;
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php if (get_field('display_steps')) :
        $content = get_field('steps_content');
    ?>
        <div class="container py-6 pt-md-10">
            <section class="process bg-blue py-5 py-md-6">
                <div class="col-11 col-xxl-10 mx-auto">
                    <div class="row justify-content-center justify-content-md-between align-items-center gy-4">
                        <div class="col-12 col-md-6">
                            <p class="text-primary fs-25 font-bold text-center text-md-start"><?= $content['title'] ?></p>
                        </div>
                        <div class="col-8 col-md-auto">
                            <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 text-white px-4 px-xl-5 fs-14 fw-500">Contact Us</a>
                        </div>
                    </div>

                    <?php if (isset($content['description']) && !empty($content['description'])) : ?>
                        <article class="col-12 col-xl-9 font-century lh-1_5 pt-5">
                            <?= $content['description'] ?>
                        </article>
                    <?php endif; ?>

                    <div class="row pt-6 pt-md-9 gy-7 gx-xl-7">
                        <?php
                        $number = 1;
                        if (have_rows('steps')) :
                            while (have_rows('steps')) : the_row();
                        ?>
                                <div class="col-12 col-md-6">
                                    <div class="d-flex justify-content-between flex-column h-100 gap-4">
                                        <div class="order-2 <?= ($number % 2) ? 'pb-4 pb-md-7 order-md-1' : 'pt-md-7 order-md-2' ?>">
                                            <p class="d-inline-flex text-primary rounded-pill step py-2 px-3 fs-25">Step <?= $number < 10 ? 0 : '' ?><?= $number ?></p>
                                            <p class="fs-45 lh-1 fw-500 py-4"><?= get_sub_field('title') ?></p>

                                            <article class="description fw-300 font-century lh-1_67">
                                                <?= get_sub_field('description') ?>
                                            </article>
                                        </div>

                                        <img class="w-100 order-1 <?= ($number % 2) ? 'order-md-2' : 'order-md-1' ?>" src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>">
                                    </div>
                                </div>
                        <?php
                                $number++;
                            endwhile;
                        endif; ?>
                    </div>
                </div>
            </section>
        </div>
    <?php endif; ?>

    <?php if (get_field('display_investment')) :
        $investment = get_field('investment'); ?>

        <div class="container py-6 pb-md-10">
            <div class="bg-primary px-3 px-md-5 py-5 py-md-6">
                <p class="fs-25"><?= $investment['subtitle'] ?></p>

                <div class="row justify-content-around align-items-center pt-4 gy-5">
                    <div class="col-12 col-lg-6 col-xl-5">
                        <img src="<?= $investment['image']['url'] ?>" alt="<?= $investment['image']['alt'] ?>">
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5">
                        <p class="fs-45 text-capitalize fw-500"><?= $investment['title'] ?></p>

                        <article class="description font-century lh-1_67 py-4 py-md-5">
                            <?= $investment['description'] ?>
                        </article>

                        <?php if (isset($investment['button']['url'])) : ?>
                            <div class="d-flex">
                                <a href="<?= $investment['button']['url'] ?>" target="<?= $investment['button']['target'] ?>" class="btn btn-purple rounded-1 text-white px-4 px-xl-5 fs-14 fw-500"><?= $investment['button']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (get_field('display_about')) :
        $about = get_field('about');
    ?>
        <section class="about">
            <div class="container">
                <div class="col-xl-6 pt-9 pb-20">
                    <p class="text-primary fs-45 fw-500 lh-1"><?= $about['title'] ?></p>

                    <article class="py-5 description font-century lh-1_5">
                        <?= $about['description'] ?>
                    </article>

                    <?php if (isset($about['button']) && !empty($about['button']['url'])) : ?>
                        <div class="d-flex">
                            <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 text-white px-5 fs-14 fw-500">Enquire now</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php get_template_part('parts/section', 'whychooseus'); ?>
    <?php get_template_part('parts/section', 'journeybeginslider'); ?>
    <?php get_template_part('parts/section', 'commonform'); ?>
</main>

<?php get_footer(); ?>