<section class="commonform row gx-0">
    <div class="col-lg-6">
        <div class="form-first-fold d-flex justify-content-end">
            <div class="col-xxl-9 px-3 px-md-8 px-lg-4 px-xxl-8 pt-6 pb-20 py-md-9">
                <p class="fs-45 fw-500 text-deep-blue"><?= get_field('form', 'options')['title']; ?></p>
                <article class="description fs-20 text-deep-blue py-4 py-md-5">
                    <?= get_field('form', 'options')['description']; ?>
                </article>

                <a href="tel:<?= get_field('phone_number', 'options') ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 d-inline-flex text-white px-4 fs-14 fw-500"><?= get_field('phone_number', 'options') ?></a>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-second-fold">
            <div class="col-xxl-11 px-3 px-md-8 px-lg-4 px-xxl-8 py-5 py-md-9">
                <p class="fs-25 fw-500 pb-4">Fill in your details and we'll get<br /> back to you ASAP!</p>

                <?= do_shortcode('[contact-form-7 id="e18020b" title="Contact Form"]') ?>
            </div>
        </div>
    </div>
</section>