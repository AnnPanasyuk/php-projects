/**
 * Created by anna on 04.10.17.
 */

$(".containerForForm").fancybox({
    selector : '[data-fancybox="#order, #order0, #order2, #order3, #buttonForBlackContainer", #buttonForBlackContainer2"]',
    loop     : true
});

$.fancybox.defaults.animationEffect = "elastic";

$('.fade').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    prevArrow: '<div class="mPrev"><div class="containerForArrow"><div class="back-containerForArrow back-containerForPrev"></div></div></div>',
    nextArrow: '<div class="mNext"><div class="containerForArrow"><div class="back-containerForArrow back-containerForNext"></div></div></div>',
    autoplay: false,
    autoplaySpeed: 10000,
});

$('.responsive').slick({
    dots: true,
    prevArrow: '<div class="mPrev"><div class="containerForArrow"><div class="back-containerForArrow back-containerForPrev"></div></div></div>',
    nextArrow: '<div class="mNext"><div class="containerForArrow"><div class="back-containerForArrow back-containerForNext"></div></div></div>',
    autoplay: false,
    autoplaySpeed: 10000,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 481,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});
