/**
 * Main Javascript.
 * This file is for who want to make this theme as a new parent theme and you are ready to code your js here.
 */

// jQuery(document).ready(function () {
//     $('.categories-list').slick({
//     });
// });

jQuery(function ($) {
    $('.categories-list').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.new-list').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
    });

    $('.product-items-wrapper').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        rows: 2,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    rows: 1
                }
            }
        ]
    });
});