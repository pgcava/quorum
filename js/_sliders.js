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
}(jQuery));