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
}(jQuery));