<?php $banner = get_field('banner'); ?>
<section class="banner py-5">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-8">
                <h1 class="fs-45"><?= $banner['title'] ?></h1>
            </div>

            <?php if (isset($banner['next_page_link']) && !empty($banner['next_page_link']['url']) && !empty($banner['link_title'])) : ?>
                <div class="col-auto">
                    <a href="<?= $banner['next_page_link']['url'] ?>" target="<?= $banner['next_page_link']['target'] ?>" class="fs-25 fw-500 d-flex align-items-center gap-3">
                        <span><?= $banner['link_title'] ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="51" height="21" viewBox="0 0 51 21" fill="none">
                            <path d="M40.7861 1.91748L48.9263 10.0576C49.1216 10.2529 49.1216 10.5695 48.9263 10.7648L40.7861 18.9049" stroke="#B083FB" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                            <path d="M1.77911 10.4111L49.2796 10.4111L43.3421 10.4111" stroke="#B083FB" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                        </svg>
                    </a>

                    <p class="font-century text-end fw-300 pt-3"><?= $banner['next_page_link']['title'] ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="container-fluid px-5 py-7">
        <div class="heroImage">
            <img class="h-100 w-100 object-fit-cover" src="<?= $banner['hero_image']['url'] ?>" alt="<?= $banner['hero_image']['alt'] ?>">
        </div>
    </div>
</section>