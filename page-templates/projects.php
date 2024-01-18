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
    <div class="container">
        <section class="mx-auto col-xl-8 text-center">
            <p class="text-primary fs-45 fw-500">Our commitment to quality...</p>

            <article class="font-century py-5 lh-1_67">
                <p>Quality is the cornerstone of everything we do. From the meticulous selection of prime sites to the finest details in our craftsmanship, we spare no effort in delivering uncompromising quality. Every project is a testament to our commitment to excellence.</p>
            </article>
        </section>
    </div>

    <section class="pt-8">
        <div class="container">
            <p class="text-capitalize fs-25 font-bold mb-8">More Projects You'll Like</p>
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

    <section class="introduction">
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

    <div class="bg-blue">
        <?php get_template_part('parts/section', 'commonservices'); ?>
    </div>
    <?php get_template_part('parts/section', 'journeybeginslider'); ?>
    <?php get_template_part('parts/section', 'homepageform'); ?>
</main>

<?php get_footer(); ?>