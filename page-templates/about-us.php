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
                        <img class="h-100 w-100 object-fit-cover" src="http://localhost/downunderpropertygroup/wp-content/uploads/2024/01/established-image.jpg" alt="">
                    </div>
                </div>

                <div class="col-4">
                    <article class="font-century fw-300 text-center lh-1_67">We began with a handful of dedicated individuals who shared a common dream - to craft extraordinary living spaces that exude opulence and modernity. Our journey, while relatively short, has been marked by significant achievements, unwavering commitment, and a relentless pursuit of perfection.</article>
                </div>
            </div>
        </section>
    </div>

    <section class="vision bg-blue">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="px-5 bg-teal py-6">
                        <p class="text-black fs-45 fw-500">Our Vision</p>
                        <p class="fs-25 fw-300 lh-1_5 pt-5">Our story begins with a vison - a vision to create living spaces that are not just structures but art forms, designed to inspire and enhance the quality of life.</p>
                        <p class="fs-16 fw-300 lh-1_67 pt-4 font-century">
                            DownUnder Property Group was founded on the idea that luxury, sophistication, and modern living should be accessible to those who aspire to it. We set out to transform the real estate landscape by setting new standards in luxury property development. Our commitment to this vision has propelled us forward, making us a name synonymous with excellence in the industry.
                        </p>

                        <div class="row gx-3 py-6">
                            <div class="col-auto">
                                <a href="<?= get_field('contact_us_link', 'options')['url'] ?>" target="<?= get_field('contact_us_link', 'options')['target'] ?>" class="btn btn-purple rounded-1 text-white px-5 fs-14 fw-400">Contact Us</a>
                            </div>

                            <div class="col-auto">
                                <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn border-2 border-white rounded-1 text-white px-5 fs-14 fw-500"><?= get_field('phone_number', 'options') ?></a>
                            </div>
                        </div>

                        <div class="vision-slider">
                            <div>
                                <img class="h-100 w-100 object-fit-cover" src="http://localhost/downunderpropertygroup/wp-content/uploads/2024/01/established-image.jpg" alt="">
                            </div>
                            <div>
                                <img class="h-100 w-100 object-fit-cover" src="http://localhost/downunderpropertygroup/wp-content/uploads/2024/01/established-image.jpg" alt="">
                            </div>
                            <div>
                                <img class="h-100 w-100 object-fit-cover" src="http://localhost/downunderpropertygroup/wp-content/uploads/2024/01/established-image.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 py-5">
                    <p class="fs-25 pb-5">Our Philosophy</p>

                    <div class="py-4 border-bottom border-primary">
                        <div class="d-flex gap-4 align-items-center">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="24.2821" cy="23.8466" r="23.8309" fill="#3597AF" fill-opacity="0.2" />
                                <path d="M19.9131 10.8835L24.2823 17.686L28.7371 10.8835H19.9131Z" fill="#69C2DB" />
                                <path d="M23.3531 18.3892L18.5773 10.9917L16.1738 18.3892H23.3531Z" fill="#69C2DB" />
                                <path d="M32.391 18.3892L29.9875 10.9917L25.2117 18.3892H32.391Z" fill="#69C2DB" />
                                <path d="M16.1503 19.7178L23.7892 36.8099L23.7781 19.7178H16.1503Z" fill="#69C2DB" />
                                <path d="M24.7864 19.7178L24.7753 36.8099L32.4142 19.7178H24.7864Z" fill="#69C2DB" />
                                <path d="M10.871 19.4309L22.3655 34.9167L14.6075 19.4309H10.871Z" fill="#69C2DB" />
                                <path d="M26.1989 34.9167L37.6932 19.4309H33.9569L26.1989 34.9167Z" fill="#69C2DB" />
                                <path d="M17.3859 11.261L10.871 18.3887H14.4579L17.3859 11.261Z" fill="#69C2DB" />
                                <path d="M37.6943 18.3887L31.1794 11.261L34.1074 18.3887H37.6943Z" fill="#69C2DB" />
                            </svg>

                            <p class="fs-25 fw-500">Quality is Non-Negotiable</p>
                        </div>

                        <p class="font-century text-light-blue pt-3">Quality is paramount in all our projects, from planning to execution, with a focus on materials and craftsmanship.</p>
                    </div>

                    <div class="py-4 border-bottom border-primary">
                        <div class="d-flex gap-4 align-items-center">
                            <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="24.2821" cy="24.3109" r="23.8309" fill="#3597AF" fill-opacity="0.2" />
                                <path d="M15.5786 28.8018L13.3895 25.39C13.2067 25.1056 13.0899 24.783 13.0467 24.4478L12.5553 20.6246C12.5109 20.2831 12.7775 19.9809 13.1216 19.9809C14.2441 19.9809 15.2129 20.7681 15.4427 21.8664L15.8719 23.9171C16.2795 24.5354 22.4174 26.9632 21.493 32.211C21.4511 32.4472 21.4346 32.6897 21.4638 32.9272L21.9019 36.5497H16.541L16.1982 34.5474C16.122 34.103 15.9163 33.6903 15.6065 33.3627L11.9573 29.5014C10.5059 27.9612 9.7695 25.8966 9.92822 23.799L10.2583 19.407L10.4755 14.2404C10.4882 13.9344 10.7396 13.6931 11.0469 13.6931C12.2557 13.6931 13.227 14.6899 13.1953 15.8974L13.0988 19.9783" fill="#69C2DB" />
                                <path d="M15.5786 28.8018L13.3895 25.39C13.2067 25.1056 13.0899 24.783 13.0467 24.4478L12.5553 20.6246C12.5109 20.2831 12.7775 19.9809 13.1216 19.9809C14.2441 19.9809 15.2129 20.7681 15.4427 21.8664L15.8719 23.9171C16.2795 24.5354 22.4174 26.9632 21.493 32.211C21.4511 32.4472 21.4346 32.6897 21.4638 32.9272L21.9019 36.5497H16.541L16.1982 34.5474C16.122 34.103 15.9163 33.6903 15.6065 33.3627L11.9573 29.5014C10.5059 27.9612 9.7695 25.8966 9.92822 23.799L10.2583 19.407L10.4755 14.2404C10.4882 13.9344 10.7396 13.6931 11.0469 13.6931C12.2557 13.6931 13.227 14.6899 13.1953 15.8974L13.0988 19.9783" stroke="#163F57" stroke-width="0.7" />
                                <path d="M32.983 28.8017L35.172 25.3899C35.3549 25.1055 35.4717 24.783 35.5149 24.4478L36.0062 20.6246C36.0507 20.283 35.784 19.9808 35.4399 19.9808C34.3175 19.9808 33.3487 20.7681 33.1188 21.8664L32.6897 23.917C32.2821 24.5354 26.1442 26.9631 27.0685 32.211C27.1104 32.4472 27.1269 32.6897 27.0977 32.9271L26.6597 36.5497H32.0205L32.3633 34.5473C32.4395 34.1029 32.6452 33.6902 32.9551 33.3626L36.6043 29.5014C38.0581 27.9624 38.7946 25.8978 38.6359 23.8002L38.3057 19.4082L38.0886 14.2416C38.0759 13.9356 37.8245 13.6943 37.5172 13.6943C36.3084 13.6943 35.3371 14.6911 35.3688 15.8986L35.4653 19.9796" fill="#69C2DB" />
                                <path d="M32.983 28.8017L35.172 25.3899C35.3549 25.1055 35.4717 24.783 35.5149 24.4478L36.0062 20.6246C36.0507 20.283 35.784 19.9808 35.4399 19.9808C34.3175 19.9808 33.3487 20.7681 33.1188 21.8664L32.6897 23.917C32.2821 24.5354 26.1442 26.9631 27.0685 32.211C27.1104 32.4472 27.1269 32.6897 27.0977 32.9271L26.6597 36.5497H32.0205L32.3633 34.5473C32.4395 34.1029 32.6452 33.6902 32.9551 33.3626L36.6043 29.5014C38.0581 27.9624 38.7946 25.8978 38.6359 23.8002L38.3057 19.4082L38.0886 14.2416C38.0759 13.9356 37.8245 13.6943 37.5172 13.6943C36.3084 13.6943 35.3371 14.6911 35.3688 15.8986L35.4653 19.9796" stroke="#163F57" stroke-width="0.7" />
                                <path d="M31.8052 12.0703C30.8578 11.1123 29.6059 10.6169 28.3411 10.6169C27.3609 10.6169 26.376 10.9167 25.5234 11.521C25.103 11.8208 24.6872 12.1288 24.2832 12.4497C23.8792 12.1288 23.4634 11.8208 23.043 11.521C22.1905 10.9167 21.2056 10.6169 20.2253 10.6169C18.9606 10.6169 17.7087 11.1123 16.7612 12.0703C15.8138 13.0282 15.3231 14.2954 15.3231 15.5742C15.3231 16.5661 15.6194 17.5616 16.2167 18.4235C16.6043 18.9774 17.0072 19.5197 17.4241 20.0478C18.1408 20.9519 18.9067 21.8138 19.7147 22.6313C20.9959 23.9265 22.3884 25.1105 23.8745 26.168C24.0068 26.264 24.1427 26.3472 24.282 26.4268C24.4226 26.3472 24.5584 26.264 24.6896 26.168C26.1769 25.1093 27.5693 23.9265 28.8493 22.6313C29.6562 21.815 30.4233 20.9519 31.14 20.0478C31.5558 19.5185 31.9598 18.9774 32.3474 18.4235C32.9447 17.5616 33.241 16.565 33.241 15.5742C33.241 14.2954 32.7503 13.0282 31.8029 12.0703H31.8052Z" fill="#69C2DB" />
                            </svg>

                            <p class="fs-25 fw-500">Customer-Centric Approach</p>
                        </div>

                        <p class="font-century text-light-blue pt-3">We engage our clients as partners, valuing their input and aspirations in our property developments.</p>
                    </div>

                    <div class="py-4 border-bottom border-primary">
                        <div class="d-flex gap-4 align-items-center">
                            <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="24.2821" cy="24.7753" r="23.8309" fill="#3597AF" fill-opacity="0.2" />
                                <path d="M22.703 33.8226H28.493C29.0743 33.8226 29.5457 33.3512 29.5457 32.7698V32.2493C29.5457 29.3029 30.9271 26.4372 32.4336 23.9048C33.2735 22.4941 33.7566 20.846 33.7566 19.0845C33.7566 13.4969 28.9199 9.03921 23.2048 9.66967C18.8395 10.1516 15.3211 13.6934 14.8614 18.061C14.6392 20.1782 15.1164 22.169 16.0896 23.8369C17.5891 26.4056 19.0173 29.2772 19.0173 32.2517V32.7698C19.0173 33.3512 19.4887 33.8226 20.07 33.8226H20.5964" fill="#69C2DB" />
                                <path d="M35.9102 19.0847H38.5407" stroke="#69C2DB" stroke-miterlimit="10" />
                                <path d="M10.0234 19.0847H12.654" stroke="#69C2DB" stroke-miterlimit="10" />
                                <path d="M11.1866 23.2956L13.4635 22.2429" stroke="#69C2DB" stroke-miterlimit="10" />
                                <path d="M35.1006 22.2429L37.3774 23.2956" stroke="#69C2DB" stroke-miterlimit="10" />
                                <path d="M35.1006 15.9263L37.3774 14.8735" stroke="#69C2DB" stroke-miterlimit="10" />
                                <path d="M11.1866 14.8735L13.4635 15.9263" stroke="#69C2DB" stroke-miterlimit="10" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.9667 33.8225H20.5977V35.263H27.9667V33.8225ZM27.9667 36.1977H20.5977V36.9807C20.5977 37.562 21.069 38.0334 21.6504 38.0334H26.914C27.4953 38.0334 27.9667 37.562 27.9667 36.9807V36.1977Z" fill="#69C2DB" />
                                <path d="M28.175 16.8469C28.0725 17.9755 27.6418 19.2964 26.8942 20.5858C25.2823 23.3657 22.8064 24.9465 21.3635 24.1176C20.7712 23.7773 20.4456 23.0833 20.3785 22.1917" stroke="#163F57" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M20.3893 21.3223C20.4918 20.1938 20.9225 18.8728 21.6701 17.5834C23.282 14.8036 25.7583 13.2223 27.2008 14.0517C27.801 14.3967 28.1274 15.1041 28.1884 16.013" stroke="#163F57" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M20.3893 16.8469C21.4223 16.3713 22.7865 16.082 24.2822 16.082C27.5061 16.082 30.1194 17.4263 30.1194 19.0846C30.1194 19.7729 29.6689 20.4077 28.9113 20.914" stroke="#163F57" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M28.175 21.322C27.142 21.7976 25.7778 22.0869 24.2822 22.0869C21.0583 22.0869 18.4449 20.7426 18.4449 19.0844C18.4449 18.3934 18.8985 17.757 19.6608 17.2498" stroke="#163F57" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M24.3038 14.625C25.2269 15.2783 26.1518 16.304 26.8938 17.5834C28.5057 20.3633 28.6432 23.2888 27.2004 24.1177C26.6002 24.4628 25.821 24.3906 24.9999 23.9884" stroke="#163F57" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M24.2821 23.5599C23.3521 22.9075 22.4181 21.8758 21.6701 20.5859C20.0585 17.8065 19.921 14.881 21.3635 14.0517C21.9611 13.7079 22.7363 13.7784 23.554 14.1762" stroke="#163F57" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <p class="fs-25 fw-500">Innovation Fuels Creativity</p>
                        </div>

                        <p class="font-century text-light-blue pt-3">We prioritize innovation to create modern, functional, and aesthetically pleasing living spaces.</p>
                    </div>

                    <div class="py-4 border-bottom border-primary">
                        <div class="d-flex gap-4 align-items-center">
                            <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="24.2821" cy="24.2396" r="23.8309" fill="#3597AF" fill-opacity="0.2" />
                                <path d="M30.4555 19.8135H18.1087C16.4518 19.8135 15.1087 21.1566 15.1087 22.8135V33.7862C15.1087 35.4431 16.4518 36.7862 18.1087 36.7862H30.4555C32.1124 36.7862 33.4555 35.4431 33.4555 33.7862V22.8135C33.4555 21.1566 32.1124 19.8135 30.4555 19.8135Z" fill="#69C2DB" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0278 24.0077C25.7982 24.1002 26.4852 24.5344 26.8693 25.1896L27.2485 25.8366L25.9545 26.5952L25.5752 25.9482C25.4224 25.6875 25.1047 25.4893 24.7185 25.4893H23.8198C23.4589 25.4893 23.1289 25.6819 22.9536 25.964C22.9045 26.0434 22.8551 26.1765 22.8327 26.3224C22.827 26.3591 22.8187 26.3953 22.8077 26.4307L22.8072 26.446C22.8068 26.4611 22.8068 26.4772 22.8068 26.5022C22.8068 27.1024 23.2693 27.5497 23.8198 27.5497H24.7185C26.1203 27.5497 27.2488 28.6916 27.2488 30.08C27.2488 30.2592 27.2239 30.4204 27.2076 30.5263L27.2055 30.5397C27.2016 30.565 27.1964 30.5902 27.1899 30.615C27.1264 30.8585 27.0385 31.1036 26.9125 31.344C26.9044 31.3595 26.8957 31.3748 26.8865 31.3897C26.4902 32.0324 25.82 32.495 25.0278 32.5915V33.2947H23.5278V32.5935C22.7272 32.5013 22.0555 32.0338 21.6643 31.3819L21.2784 30.7388L22.5647 29.967L22.9506 30.6101C23.1349 30.9174 23.4518 31.1102 23.8198 31.1102H24.7185C25.0805 31.1102 25.402 30.9236 25.5961 30.6239C25.6497 30.5174 25.6932 30.4013 25.729 30.2717C25.743 30.1788 25.7488 30.1284 25.7488 30.08C25.7488 29.5153 25.2871 29.0497 24.7185 29.0497H23.8198C22.4172 29.0497 21.3068 27.907 21.3068 26.5022L21.3068 26.4863C21.3063 26.4106 21.3052 26.2296 21.36 26.0349C21.4108 25.748 21.5142 25.4393 21.6784 25.1741L21.6788 25.1734C22.0761 24.5334 22.7604 24.0958 23.5278 24.0062V23.27H25.0278V24.0077Z" fill="#163F57" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.2173 16.0713C31.2173 12.2429 28.1062 9.13184 24.2778 9.13184C20.4494 9.13184 17.3383 12.2429 17.3383 16.0713V20.5978H20.2247V16.0714C20.2247 13.8245 22.0395 12.0097 24.2864 12.0097C26.5333 12.0097 28.3481 13.8245 28.3481 16.0714V20.5978H31.2173V16.0713Z" fill="#69C2DB" />
                            </svg>

                            <p class="fs-25 fw-500">Financial Stability</p>
                        </div>

                        <p class="font-century text-light-blue pt-3">Our strong financial stability ensures secure investments for our clients.</p>
                    </div>

                    <div class="py-4 border-bottom border-primary">
                        <div class="d-flex gap-4 align-items-center">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="24.2821" cy="23.9325" r="23.8309" fill="#3597AF" fill-opacity="0.2" />
                                <path d="M34.8271 37.6127C33.97 37.1796 32.9346 36.9256 31.823 36.9256C31.6403 36.9256 31.4597 36.9322 31.2814 36.9468C30.1567 35.3969 27.964 34.3452 25.4428 34.3452C22.9216 34.3452 20.6484 35.4409 19.5456 37.0396C18.9822 36.8198 18.3513 36.6831 17.6704 36.6831C16.424 36.6831 15.3081 37.1015 14.5598 37.7592" stroke="#69C2DB" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M25.5419 18.7956C25.5419 18.7956 26.4894 20.8225 26.8167 22.6996L29.275 21.0797C29.5745 20.8811 29.9799 20.9658 30.1769 21.2653C30.3739 21.5649 30.2909 21.9703 29.9913 22.1673L27.1716 24.0248C27.0967 24.0737 27.0153 24.1046 26.9306 24.1209C26.9127 26.1413 26.3136 28.7901 26.3136 28.7901C27.9595 28.8845 29.9294 28.5866 31.4223 27.0937C34.5302 23.9858 34.5302 16.7329 34.5302 16.7329C34.5302 16.7329 29.0112 16.7329 25.5403 18.7956H25.5419Z" fill="#69C2DB" />
                                <path d="M23.6599 14.1364C23.6599 13.7766 23.9513 13.4852 24.3111 13.4852C24.6709 13.4852 24.9623 13.7766 24.9623 14.1364V17.6106C26.5024 16.3765 29.3026 15.5104 29.3026 15.5104C28.487 11.4664 24.3111 7.29053 24.3111 7.29053C24.3111 7.29053 20.1141 11.4876 19.3147 15.5414C19.3147 15.5414 22.1116 16.5035 23.6615 17.6725V14.1364H23.6599Z" fill="#69C2DB" />
                                <path d="M25.226 29.6025C25.226 31.8443 25.4963 34.3434 25.83 34.3434" stroke="#69C2DB" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M18.9354 23.2466C18.6814 22.9926 18.6814 22.5807 18.9354 22.3251C19.1893 22.0712 19.6012 22.0712 19.8568 22.3251L24.806 27.2727C25.244 25.7587 25.957 22.0923 23.541 19.6763C20.4315 16.5701 13.1786 16.5701 13.1786 16.5701C13.1786 16.5701 13.1786 23.8229 16.2866 26.9308C18.7025 29.3468 22.3689 28.6337 23.8829 28.1958L18.9337 23.2482L18.9354 23.2466Z" fill="#69C2DB" />
                            </svg>

                            <p class="fs-25 fw-500">Business Responsibility</p>
                        </div>

                        <p class="font-century text-light-blue pt-3">We are dedicated to sustainable development and reducing our environmental impact while positively impacting our communities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="story py-10">
        <div class="container">
            <div class="mx-auto col-xl-8 text-center">
                <p class="font-century lh-1_5 fs-25 pb-3">The DownUnder story</p>

                <p class="text-center fs-45 fw-500 text-primary text-capitalize">Our team</p>

                <article class="font-century py-5 lh-1_67">
                    <p>Our journey has been made possible by the unwavering dedication and passion of our team. Our team is a diverse group of professionals who bring a wealth of expertise to the table. From architects and designers to project managers and sales executives, each member of our team plays a crucial role in bringing our projects to life. Our collective commitment to excellence and a shared vision of creating exceptional living spaces unite us in our pursuit of perfection.</p>
                </article>

                <p class="lh-1_5 fs-25 pb-3">Meet the masterminds of luxury:</p>
            </div>

            <div class="row pt-5">
                <div class="col-4">
                    <div class="mastermind-card text-center">
                        <div class="image"></div>
                        <p class="fs-25 py-4">Name Here</p>
                        <p class="text-primary">Name of position</p>
                        <hr class="border-primary border-2" />
                        <p class="font-century lh-1_67 fw-300">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mastermind-card text-center">
                        <div class="image"></div>
                        <p class="fs-25 py-4">Name Here</p>
                        <p class="text-primary">Name of position</p>
                        <hr class="border-primary border-2" />
                        <p class="font-century lh-1_67 fw-300">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mastermind-card text-center">
                        <div class="image"></div>
                        <p class="fs-25 py-4">Name Here</p>
                        <p class="text-primary">Name of position</p>
                        <hr class="border-primary border-2" />
                        <p class="font-century lh-1_67 fw-300">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-blue">
        <?php get_template_part('parts/section', 'commonservices'); ?>
    </div>

    <?php get_template_part('parts/section', 'whychooseus'); ?>
    <?php get_template_part('parts/section', 'journeybeginslider'); ?>
    <?php get_template_part('parts/section', 'homepageform'); ?>
</main>

<?php get_footer(); ?>