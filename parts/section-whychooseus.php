<?php $why_us = get_field('why_choose_us', 'options'); ?>
<section class="whychooseus bg-blue py-5 py-md-7 py-xl-10">
    <div class="container">
        <div class="row g-2 gy-md-4 gx-xl-4">
            <div class="col-12 col-lg-6 px-xl-5 py-4">
                <p class="fs-45 text-primary fw-500"><?= $why_us['title'] ?></p>

                <p class="font-century py-4">
                    <?= $why_us['description'] ?>
                </p>
                <div class="d-flex">
                    <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 text-white px-5 fs-14 fw-500">Contact Us</a>
                </div>
            </div>

            <?php if (have_rows('why_choose_us', 'options')) :
                while (have_rows('why_choose_us', 'options')) : the_row();
                    if (have_rows('list')) :
                        while (have_rows('list')) : the_row();
            ?>
                            <div class="col-6 col-md-4 col-lg-3">
                                <article class="whychooseus_card bg-primary h-100 p-3 p-md-4">
                                    <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="20.1829" cy="20.2193" r="19.9952" fill="#3597AF" />
                                        <path d="M12.0593 20.8096L17.0814 25.8316L28.3061 14.6069" stroke="#F3FAFC" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="square" />
                                    </svg>

                                    <p class="text-deep-blue fs-25 fw-500 py-4"><?= get_sub_field('title') ?></p>
                                    <p class="text-deep-blue font-century">
                                        <?= get_sub_field('description') ?>
                                    </p>
                                </article>
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