$(document).ready(function () {
    // фунция определения длины текста, если много добавляем кнопку
    function getMoreReview() {
        if($('div').hasClass('js-reviews-item')){
            $('.js-reviews-item').each(function () {
                var desc = $(this).find('.js-reviews-desc').height();
                var text = $(this).find('.js-reviews-text').height();
                if(text >= desc) {
                    $(this).find('.js-reviews-more').show();
                } else {
                    $(this).find('.js-reviews-more').hide();
                }
            });
        }
    }
    getMoreReview();

    // Клик по кнопке читать весь отзыв
    $(document).delegate('.js-reviews-more', 'click', function(){
        var modal = $('.js-reviewsModal');
        var content = $(this).parents('.js-reviews-item').html();
        modal.find('.reviews-box').html(content);
        modal.modal('show');
        return false;
    });
});