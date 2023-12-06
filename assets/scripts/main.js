// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                AOS.init({ duration: 1500, });

                $('#homepageProjectsSlider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: true,
                    arrows: false,
                    centerMode: true,
                    infinite: false,
                    initialSlide: 0,
                    draggable: false,
                    focusOnSelect: true,
                });

                $('.innerSlider').slick({
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                    // autoplay: true,
                    draggable: false,
                })
            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});