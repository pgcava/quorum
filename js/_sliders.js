(function($){
    $(document).ready(function(){
        if($(window).width() < 451){
            $('.homeApartments__list').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                variableWidth: true,
                infinite: true,
                dots: false,
            })
        }
    });


    /**
     * Apartments/offices types slider
     */
    $(document).ready(function(){
        $('.nav-btn').eq(0).addClass('active');
        $('.typesInfo__list').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            swipe: false,
            draggable: false,
            variableWidth: false,
            infinite: false,
            arrows: false,
            dots: false,
            responsive: [{
                breakpoint: 991,
                settings:{
                    swipe: true,
                    draggable: true,
                }
            }]
        });

        $('.nav-btn').on('click', function(){
            var value = $(this).attr('value');
            var number = $('.typeSlide[data-value="' + value + '"]').parents('.slick-slide').attr('data-slick-index');
            
            $('.nav-btn').each(function(){
                $(this).removeClass('active');
            });
            $(this).addClass('active');
            
            $('.typesInfo__list').slick('slickGoTo', number);
        });

        $('.typesInfo__list').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            var value = $('.slick-slide[data-slick-index="' + nextSlide + '"]').find('.typeSlide').attr('data-value');

            $('.nav-btn').each(function(){
                $(this).removeClass('active');
            });
            $('.nav-btn[value="' + value + '"]').addClass('active');
        });
    }); 
}(jQuery));