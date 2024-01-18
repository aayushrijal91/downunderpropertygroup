<section class="homepageform d-flex">
    <div class="col-lg-6">
        <div class="form-first-fold d-flex justify-content-end">
            <div class="col-lg-9 px-8 py-9">
                <p class="fs-45 fw-500 text-deep-blue">Your future home awaits you at a click of a button</p>
                <article class="description fs-20 text-deep-blue py-5">
                    Contact us today to start your extraordinary property journey with DownUnder Property Group.
                </article>

                <a href="tel:<?= get_field('phone_number', 'options') ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 d-inline-flex text-white px-4 fs-14 fw-500"><?= get_field('phone_number', 'options') ?></a>

            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-second-fold">
            <div class="col-lg-11 px-8 py-9">
                <p class="fs-25 fw-500">Fill in your details and we'll get<br /> back to you ASAP!</p>

                <form action="" class="pt-4">
                    <div class="row gy-4">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Your name*" />
                        </div>

                        <div class="col-6">
                            <input type="tel" class="form-control" placeholder="Contact no.*" />
                        </div>

                        <div class="col-6">
                            <input type="email" class="form-control" placeholder="Email address*" />
                        </div>

                        <div class="col-6">
                            <select name="" id="" class="form-control form-select">
                                <option>Select service of interest</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Street address" />
                        </div>

                        <div class="col-12">
                            <textarea rows="5" class="form-control" placeholder="Type your inquiry here..."></textarea>
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="bg-transparent border-0 d-flex align-items-center gap-4 text-white fs-20">
                                <span>Submit</span>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74" fill="none">
                                        <circle cx="37.3743" cy="36.7527" r="36.6258" fill="#B083FB" />
                                        <path d="M39.0732 23.1602L52.6665 36.7534L39.0732 50.3467" stroke="#F3FAFC" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M52.6668 36.7532H22.0819" stroke="#F3FAFC" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>