$(document).ready(function () {
    /*Сертификаты*/
    if($('div').hasClass('sertificate-slider')){
        var aboutSlide = $('.sertificate-slider');
        aboutSlide.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
            var i = (currentSlide ? currentSlide : 0) + 1;
            $('.sertificateCounter').html(('0'+i) + ' / ' + ('0'+slick.slideCount).slice(-2));
        });
        aboutSlide.slick({
            fade: false,
            infinite: false,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 5000,
            arrows: true,
            dots: false,
            focusOnSelect: false,
            appendArrows: '.sertificate-nav .arrows',
            cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
            touchThreshold: 100,
            speed: 700, 
            responsive: [
                /*{
                    breakpoint: 1000,
                    settings: {
                        fade: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        adaptiveHeight: true,
                    },
                },*/
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
            ]
        });
    }

    /*About*/
    if($('div').hasClass('impact-slider')){
        var impactSlide = $('.impact-slider');
        impactSlide.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
            var i = (currentSlide ? currentSlide : 0) + 1;
            $('.impactCounter').html(('0'+i) + ' / ' + ('0'+slick.slideCount).slice(-2));
        });
        impactSlide.slick({
            fade: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 5000,
            arrows: true,
            dots: false,
            focusOnSelect: false,
            appendArrows: '.impact-nav .arrows',
            cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
            touchThreshold: 100,
            speed: 700, 
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 1000,
                    settings: {
                        adaptiveHeight: true,
                        arrows: false,
                    },
                },
            ]
        });
    }
    /*История*/
    if($('div').hasClass('history-carousel')){
        $('.history-carousel').slick({
            fade: false,
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 5000,
            arrows: true,
            dots: false,
            focusOnSelect: false,
            // appendArrows: '.history-nav .arrows',
            cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
            touchThreshold: 100,
            speed: 700, 
            touchThreshold: 100,
            responsive: [
                {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 2,
                    },
                },
            ]
        });
    }
    /*Отзывы*/
    if($('div').hasClass('reviews-carousel')){
        var reviewsSlide = $('.reviews-carousel');
        reviewsSlide.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
            var i = (currentSlide ? currentSlide : 0) + 1;
            $('.reviewsCounter').html(('0'+i) + ' / ' + ('0'+slick.slideCount).slice(-2));
        });
        reviewsSlide.slick({
            fade: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 5000,
            arrows: true,
            dots: false,
            focusOnSelect: false,
            appendArrows: '.reviews-nav .arrows',
            cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
            touchThreshold: 100,
            speed: 700, 
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        adaptiveHeight: true,
                    },
                },
            ]
        });
    }
});