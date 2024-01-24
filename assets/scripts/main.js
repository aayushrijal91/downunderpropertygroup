// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                AOS.init({ duration: 1500, });

                $('.homepageProjectsSlider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: true,
                    arrows: false,
                    centerMode: true,
                    infinite: false,
                    initialSlide: 0,
                    draggable: false,
                    focusOnSelect: true,
                    responsive: [
                        {
                            breakpoint: 540,
                            settings: {
                                draggable: true,
                            }
                        }
                    ]
                });

                $('.innerSlider').slick({
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                    draggable: false,
                });

                $('#journey-begins-slider').slick({
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                    centerMode: true,
                    variableWidth: true,
                    autoplay: true,
                    autoplaySpeed: 0,
                    speed: 5000,
                    cssEase: 'linear'
                });

                $("#testimonialSlider").slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false,
                    centerMode: true,
                    centerPadding: "70px",
                    autoplay: true,
                    autoplaySpeed: 3000,
                    speed: 1000,
                    responsive: [
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                centerPadding: "20px"
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerPadding: "20px"
                            }
                        }
                    ]
                })

                $("#gallerySlider").slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: false,
                    centerMode: true,
                    centerPadding: "100px",
                    autoplay: true,
                    autoplaySpeed: 2000,
                    speed: 1000,
                    responsive: [
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                centerPadding: "20px"
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerPadding: "20px"
                            }
                        }
                    ]
                });

                $('.vision-slider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                    autoplay: true,
                })
            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});