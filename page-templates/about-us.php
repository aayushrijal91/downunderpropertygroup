<?php
/*
* Template Name: About Us
* The about us page
*/
get_header();
get_template_part('parts/section', 'nav');
get_template_part('parts/section', 'banner');
?>

<main class="aboutUsPage">
    <div class="container">
        <section class="introduction mx-auto col-xl-8 text-center">
            <p class="font-century lh-1_5 fs-25 pb-3">The DownUnder story</p>
            <p class="text-primary fs-45 fw-500">Setting New Standards in Luxury Property Development</p>

            <article class="font-century py-5 lh-1_67">
                At DownUnder Property Group, we believe in the power of exceptional property development to elevate the way people live. With a passion for design, a commitment to quality, and a dedication to making dreams a reality, we have emerged as one of the leading property development companies in the United Kingdom. Our journey is one of innovation, customer-centricity, and a relentless pursuit of excellence.
            </article>

            <div class="row justify-content-center gx-4 mt-6">
                <div class="col-4">
                    <div class="introduction-card h-100 w-100 px-4 pt-4 text-center d-flex flex-column align-items-center">
                        <p class="text-capitalize fs-25">Leaders Of<br /> Luxury</p>

                        <div class="image d-flex align-items-center justify-content-center my-5">
                            <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/leaders-of-luxury.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="introduction-card h-100 w-100 px-4 pt-4 text-center d-flex flex-column align-items-center">
                        <p class="text-capitalize fs-25">Innovation & Quality</p>

                        <div class="image d-flex align-items-center justify-content-center my-5">
                            <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/innovation-quality.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="introduction-card h-100 w-100 px-4 pt-4 text-center d-flex flex-column align-items-center">
                        <p class="text-capitalize fs-25">Outstanding Customer Service</p>

                        <div class="image d-flex align-items-center justify-content-center my-5">
                            <img src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/outstanding-customer-service.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="established py-9">
            <div class="row align-items-center">
                <div class="col-4">
                    <article class="fs-25 fw-500 text-primary text-center">DownUnder Property Group was established in 201X and has steadily grown and evolved, leaving an indelible mark on the property development landscape.</article>
                </div>

                <div class="col-4">
                    <div class="established-image">
                        <img class="h-100 w-100 object-fit-cover" src="http://localhost/downunderpropertygroup/wp-content/uploads/2023/12/established-image.jpg" alt="">
                    </div>
                </div>

                <div class="col-4">
                    <article class="font-century fw-300 text-center lh-1_67">We began with a handful of dedicated individuals who shared a common dream - to craft extraordinary living spaces that exude opulence and modernity. Our journey, while relatively short, has been marked by significant achievements, unwavering commitment, and a relentless pursuit of perfection.</article>
                </div>
            </div>
        </section>
    </div>

    <section class="vision">
        
    </section>
</main>

<?php get_footer(); ?>