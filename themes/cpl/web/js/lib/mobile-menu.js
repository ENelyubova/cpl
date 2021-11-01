$(document).ready(function () {
    // мобильное меню
    $('.m-menu-open').on("click", function(){
        $('body').addClass('menu_m_visible');
        $('.mobile-menu').addClass('active-menu');
    });

    $('.m-menu-close').on("click", function(){
        if($('body').hasClass('menu_m_visible') == true){
            $('body').removeClass('menu_m_visible');
            $('.mobile-menu').removeClass('active-menu');
        }
        else{
            $('body').addClass('menu_m_visible');
            $('.mobile-menu').addClass('active-menu');
        }
    });

    $('.listItemLink').on( 'click', function(){
        $('.mobile-menu').removeClass('active-menu');
    });

    function removeClasses() {
        $(".mobile-menu ul li").each(function() {
            var custom_class = $(this).find('a').data('class');
            $('body').removeClass(custom_class);
        });
    }

    $('.mobile-menu a').on('click',function(e){
        removeClasses();
        var custom_class = $(this).data('class');
        $('body').addClass(custom_class);
    });

    /*скролл*/
    $('.listItemLink').on( 'click', function(){
        $('body').removeClass('menu_m_visible');
        var el = $(this);
        var dest = el.attr('href');
        if(dest !== undefined && dest !== '') {
            $('html').animate({
                scrollTop: $(dest).offset().top
            }, 1000
            );
        }
        return false;
    });


    $(window).scroll(function() {
        var height = $(window).scrollTop();
        if(height > 100){
            $('.m-menu-open').addClass('fixed');
        } else{
            $('.m-menu-open').removeClass('fixed');
        }
    });
});