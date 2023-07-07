$('.banner-section').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    arrows: false,
    cssEase: 'linear',
    centerMode: true,
    centerPadding: '60px',
    autoplay: true,
    autoplaySpeed: 1500,
    slidesToShow: 1,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});

$('.best-deal-product').slick({
    dots: false,
    infinite: true,
    speed: 500,
    // fade: true,
    arrows: true,
    // cssEase: 'linear',
    // centerMode: true,
    // centerPadding: '60px',
    autoplay: true,
    autoplaySpeed: 1500,
    slidesToShow: 5,
    prevArrow: ".slick-prev",
    nextArrow: ".slick-next",
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});

$('.second-banner-slider').slick({
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    // vertical: true,
    infinite: true,
    // verticalSwiping: true,
    speed: 500,
    fade: false,
    // cssEase: 'linear',
    // centerMode: true,
    // centerPadding: '60px',
    autoplay: true,
    autoplaySpeed: 1500,
    slidesToShow: 1,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});