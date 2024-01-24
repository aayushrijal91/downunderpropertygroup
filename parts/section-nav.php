<nav>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-5 col-md-auto">
                <a href="<?= home_url() ?>">
                    <img src="<?= get_field('logo', 'options')['url'] ?>" alt="<?= get_field('logo', 'options')['alt'] ?>" />
                </a>
            </div>

            <div class="col-auto d-none d-lg-block">
                <ul class="d-flex gap-5">
                    <li><a href="<?= home_url() ?>/about-us" class="text-white ">Our Story</a></li>
                    <li><a href="#" class="text-white ">Our Services</a></li>
                    <li><a href="<?= home_url() ?>/projects" class="text-white ">Our Projects</a></li>
                </ul>
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
        </div>
    </div>
</nav>