<?php
/*
* Template Name: Projects
* The projects page
*/
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="projectsListingPage">
    <?php $introduction = get_field('introduction'); ?>
    <div class="container">
        <section class="mx-auto col-xl-8 text-center">
            <p class="text-primary fs-45 fw-500"><?= $introduction['title'] ?></p>

            <article class="font-century py-4 py-md-5 lh-1_67 description">
                <?= $introduction['description'] ?>
            </article>
        </section>
    </div>

    <section class="pt-5 pt-md-8">
        <div class="container">
            <p class="text-capitalize fs-25 font-bold mb-5 mb-md-8">More Projects You'll Like</p>
        </div>

        <?php get_template_part('parts/section', 'homeprojectsslider'); ?>
    </section>

    <section class="pt-8">
        <div class="container">
            <p class="text-capitalize fs-25 font-bold mb-8">More Projects You'll Like</p>
        </div>

        <?php get_template_part('parts/section', 'homeprojectsslider'); ?>
    </section>

    <section class="pt-8 pb-10">
        <div class="container">
            <p class="text-capitalize fs-25 font-bold mb-8">More Projects You'll Like</p>
        </div>

        <?php get_template_part('parts/section', 'homeprojectsslider'); ?>
    </section>

    <section class="about">
        <?php $about = get_field('about'); ?>
        <div class="container">
            <div class="col-xl-6 pt-6 pt-md-9 pb-10 pb-md-20">
                <p class="text-primary fs-45 fw-500 lh-1"><?= $about['title'] ?></p>

                <article class="py-5 description font-century lh-1_5">
                    <?= $about['description'] ?>
                </article>

                <div class="d-flex">
                    <a href="<?= $about['button']['url'] ?>" target="<?= $about['button']['target'] ?>" class="btn btn-purple rounded-1 text-white px-5 fs-14 fw-500"><?= $about['button']['title'] ?></a>
                </div>
            </div>

        </div>
    </section>

    <div class="bg-blue">
        <?php get_template_part('parts/section', 'commonservices'); ?>
    </div>
    <?php get_template_part('parts/section', 'journeybeginslider'); ?>
    <?php get_template_part('parts/section', 'commonform'); ?>
</main>

<?php get_footer(); ?>