<div class="container py-7">
    <p class="text-center fs-45 fw-500 text-primary text-capitalize">Your Luxury lifestyle awaits!</p>
</div>

<div class="container-fluid">
    <section class="bg-blue py-7 rounded-1">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <p class="fs-12 font-century text-primary pb-2">Learn more about us</p>
                    <a href="#" class="fs-25 fw-500 text-white">Our Story</a>

                    <p class="fs-12 font-century text-primary pt-5 pb-2">Speak to an expert today!</p>
                    <a href="#" class="fs-25 fw-500 text-white">Contact us</a>

                    <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 d-inline-flex text-white px-5 fs-14 fw-500 mt-5">Enquire now</a>
                </div>

                <div class="col-3">
                    <p class="fs-12 font-century text-primary pb-2">Explore all we have to offer</p>
                    <a href="#" class="fs-25 fw-500 text-white">Our Services</a>

                    <ul class="ps-0 pt-4 d-flex flex-column gap-3">
                        <li><a href="" class="fs-14 text-light-blue fw-300">Site Acquisition and due diligence</a></li>
                        <li><a href="" class="fs-14 text-light-blue fw-300">Strategic Developments advice & feasibility services</a></li>
                        <li><a href="" class="fs-14 text-light-blue fw-300">Development management</a></li>
                        <li><a href="" class="fs-14 text-light-blue fw-300">Luxury New Homes</a></li>
                        <li><a href="" class="fs-14 text-light-blue fw-300">Duplexes & Townhouses</a></li>
                    </ul>
                </div>

                <div class="col-3">
                    <p class="fs-12 font-century text-primary pb-2">Discover our luxury finishes</p>
                    <a href="#" class="fs-25 fw-500 text-white">Our Projects</a>

                    <ul class="ps-0 pt-4 d-flex flex-column gap-3">
                        <li><a href="" class="fs-14 text-light-blue fw-300">Project name 01</a></li>
                        <li><a href="" class="fs-14 text-light-blue fw-300">Project name 02</a></li>
                        <li><a href="" class="fs-14 text-light-blue fw-300">Project name 03</a></li>
                        <li><a href="" class="fs-14 text-light-blue fw-300">Project name 04</a></li>
                        <li><a href="" class="fs-14 text-light-blue fw-300">Project name 05</a></li>
                    </ul>
                </div>

                <div class="col-3">
                    <p class="fs-12 font-century pb-2">Find us at</p>
                    <p class="fs-25 fw-500 text-primary"><?= get_field('location', 'options') ?></p>

                    <p class="fs-12 font-century pt-5 pb-2">We are available during...</p>
                    <article class="fs-25 fw-500 text-primary"><?= get_field('opening_time', 'options') ?></article>
                </div>
            </div>
        </div>
    </section>

    <div class="py-7 text-center">
        <img src="<?= get_field('footer_logo', 'options')['url'] ?>" alt="<?= get_field('footer_logo', 'options')['url'] ?>" />
    </div>
</div>

<div class="container">
    <div class="row justify-content-between align-items-center py-5">
        <div class="col-auto">
            <div class="row gx-2">
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

        <p class="col-auto fs-12 fw-300 text-light-blue">
            Copyright <?= date('Y') ?> <span class="px-5">/</span> <?= bloginfo('name') ?> <span class="px-5">/</span> All Rights Reserved
        </p>

        <div class="col-auto">
            <a href="" class="">
                <img src="<?= get_template_directory_uri() ?>/assets/images/lib/aiims-logo.png" alt="Aiims">
            </a>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>