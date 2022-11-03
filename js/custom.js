(function($){
    
    /**
     * Radio inputs engine
     */
    $('.radioEngine').each(function(){
        var input = $(this).find('input[type="radio"]');
        
        input.on('click', function(){
            var family = $(this).attr('name');

            if($(this).is(':checked')){
                $('input[name="' + family + '"]').parents('.radioEngine').removeClass('checked');
                $(this).parents('.radioEngine').addClass('checked');
            }
        });
    }); 

    /**
     * homeFeatured accordion
     */
    $(document).ready(function(){
        $('.featuredlist .pos').on('click', function(){
            if($(this).find('.pos__content').hasClass('active')){
                // $('.content[data="maincontent"]').slideDown();
                $(this).find('.pos__content').removeClass('active').slideUp();  
            }else{
                $('.featuredlist').find('.pos__content').removeClass('active').slideUp();
                $(this).find('.pos__content').addClass('active').slideDown();   
            }
        });
    });
}(jQuery));