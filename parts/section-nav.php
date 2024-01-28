<nav>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-5 col-md-auto">
                <a href="<?= home_url() ?>">
                    <img src="<?= get_field('logo', 'options')['url'] ?>" alt="<?= get_field('logo', 'options')['alt'] ?>" />
                </a>
            </div>

            <div class="col-auto d-none d-xl-block">
                <?php wp_nav_menu(array(
                    'menu' => 'Primary Menu',
                    'item_class' => 'nav-item py-2',
                    'link_class' => 'text-white',
                    'menu_class' => 'd-flex flex-wrap gap-5'
                )); ?>
            </div>

            <div class="col-auto d-none d-md-block">
                <div class="row justify-content-center gx-3">
                    <div class="col-auto">
                        <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn border-2 border-purple rounded-1 text-purple px-5 fs-14 fw-500"><?= get_field('phone_number', 'options') ?></a>
                    </div>

                    <div class="col-auto">
                        <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 text-white px-5 fs-14 fw-500">Contact Us</a>
                    </div>
                </div>
            </div>

            <div class="col-auto d-md-none">
                <button type="button" class="btn p-0" id="show-sliding-menu">
                    <svg width="35" height="21" viewBox="0 0 35 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.847656" y="0.860352" width="34.1523" height="2.3637" rx="1.18185" fill="#F3FAFC" />
                        <rect x="0.847656" y="9.47949" width="34.1523" height="2.3637" rx="1.18185" fill="#F3FAFC" />
                        <rect x="0.847656" y="18.0986" width="34.1523" height="2.3637" rx="1.18185" fill="#F3FAFC" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<section class="sliding-menu py-4" id="sliding-menu">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-5 col-md-auto">
                <a href="<?= home_url() ?>">
                    <img src="<?= get_field('logo', 'options')['url'] ?>" alt="<?= get_field('logo', 'options')['alt'] ?>" />
                </a>
            </div>

            <div class="col-auto d-md-none">
                <button type="button" class="btn p-0" id="hide-sliding-menu">
                    <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.179199" y="24.8433" width="34.1523" height="2.3637" rx="1.18185" transform="rotate(-45 0.179199 24.8433)" fill="#F3FAFC" />
                        <rect x="1.85059" y="0.693848" width="34.1523" height="2.3637" rx="1.18185" transform="rotate(45 1.85059 0.693848)" fill="#F3FAFC" />
                    </svg>
                </button>
            </div>
        </div>

        <?php wp_nav_menu(array(
            'menu' => 'Mobile Menu',
            'item_class' => 'nav-item py-2',
            'link_class' => 'text-white fs-25 fw-500',
            'menu_class' => 'ps-0 mt-5'
        )); ?>

        <p class="pt-4 fs-25 fw-500">Our Services</p>

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
                    <li><a href="<?= get_the_permalink() ?>" class="text-white text-capitalize font-century opacity-70"><?= get_the_title() ?></a></li>
            <?php endwhile;
            endif;
            wp_reset_query(); ?>
        </ul>

        <div class="d-flex pt-5">
            <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 text-white px-5 fs-14 fw-500">Enquire now</a>
        </div>

        <div class="row gx-2 pt-5">
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
</section>