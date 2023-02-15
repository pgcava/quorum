(function($){

    /**
     * Scroll to top
     */
    $(document).ready(function(){
        if ($(document).scrollTop() >= 800) {
            $('#scrollTop').addClass('visible');
        } else {
            $('#scrollTop').removeClass('visible');
        }

        $(document).scroll(function() {
            if ($(document).scrollTop() >= 800) {
                $('#scrollTop').addClass('visible');
            } else {
                $('#scrollTop').removeClass('visible');
            }
        });
    });

    $('#scrollTop').on('click', function(){
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });

    /**
     * Smooth scroll to anchor
     */
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
    
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });
    
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
            $('.featuredlist .pos').removeClass('active');

            if($(this).find('.pos__content').hasClass('active')){
                $(this).removeClass('active');
                $(this).find('.pos__content').removeClass('active').slideUp();  
            }else{
                $(this).addClass('active');
                $('.featuredlist').find('.pos__content').removeClass('active').slideUp();
                $(this).find('.pos__content').addClass('active').slideDown();   
            }
        });
    });

    /**
     * Home Overview - video
     */
    $(document).ready(function(){

        // Open
        $('.image__play').on('click', function(){
            var video = $(this).parents('.homeOverview').find('.homeOverview__video');
            
            video.addClass('ready');
            setTimeout(function(){
                video.addClass('active');
            }, 300);
        });

        // Close
        $(document).mouseup(function(e){
            var container = $('.videoWrap');
            if (!container.is(e.target) && container.has(e.target).length === 0){
                if($('.homeOverview__video').hasClass('active')){
                    $('.homeOverview__video').removeClass('active');

                    // Stop video
                    $('.video iframe').each(function(){
                        var video = $(this);
                        var src = video.attr('src');

                        video.attr('src', '*');
                        setTimeout(function(){
                            video.attr('src', src);
                        }, 300);
                    });
                    
                    setTimeout(function(){
                        $('.homeOverview__video').removeClass('ready');
                    }, 300);
                }
            }
        });
    });

    /**
     * Apartments/offices page - overview
     */
    $(document).ready(function(){
        $('.apOverview__content').each(function(){
            var info = $(this).find('.info');

            if(info.length){
                $(this).css('padding-bottom', info.outerHeight() + 'px');
            }
        });

        // Video open / close
        // Open
        $('.image__play').on('click', function(){
            var video = $(this).parents('.apOverview').find('.apOverview__video');
            
            video.addClass('ready');
            setTimeout(function(){
                video.addClass('active');
            }, 300);
        });

        // Close
        $(document).mouseup(function(e){
            var container = $('.videoWrap');
            if (!container.is(e.target) && container.has(e.target).length === 0){
                if($('.apOverview__video').hasClass('active')){
                    $('.apOverview__video').removeClass('active');

                    // Stop video
                    $('.video iframe').each(function(){
                        var video = $(this);
                        var src = video.attr('src');

                        video.attr('src', '*');
                        setTimeout(function(){
                            video.attr('src', src);
                        }, 300);
                    });

                    $('video-js video').each(function(){
                        var video = $(this);
                        var src = video.attr('src');

                        video.attr('src', '*');
                        setTimeout(function(){
                            video.attr('src', src);
                        }, 300);
                    });
                    
                    setTimeout(function(){
                        $('.apOverview__video').removeClass('ready');
                    }, 300);
                }
            }
        });

        // Contact form
        function clearNotices(form){
            $(form).find('.notices').html('');
        }
        function clearForm(form){
            var inputs = $(form).find('input').not('input[type="radio"]');

            $(inputs).each(function(){
                $(this).val('');
            });
        }
        function insertNotice(text, type, form){
            var html = '<div class="notices__notice notices__notice--' + type + '"><p>' + text + '</p></div>';
            $(form).find('.notices').html(html);
        }
        function validateForm(form){
            var inputs = $(form).find('input').not('input[type="radio"]');
            var status = true;

            $(inputs).each(function(){
                if($(this).val() === ''){
                    status = false;
                }
            });

            return status;
        }

        $('.visitForm').on('submit', function(e){
            e.preventDefault();
            var form = $(this);

            clearNotices();

            var validate = validateForm(form);
            if(validate == true){
                var data = {
                    action: 'send_contact_form',
                    name: form.find('input[name="visitName"]').val(),
                    mail: form.find('input[name="visitEmail"]').val(),
                    phone: form.find('input[name="visitPhone"]').val(),
                    type: form.find('input[name="visitType"]').val(),
                }
                $.ajax({
                    type: 'POST',
                    url: quorum.ajaxurl,
                    data: data,
                    beforeSend: function(){
                        form.addClass('loading');
                    },
                    success: function(response){
                        console.log(response);
                        form.removeClass('loading');

                        if(response == '1'){
                            insertNotice('Formularz został prawidłowo wysłany.', 'success', form);
                            clearForm(form);
                        }else{
                            insertNotice('Wystąpił błąd podczas wysyłania formularza. Spróbuj ponownie później', 'error', form);
                        }
                    }
                });
            }else{
                insertNotice('Uzupełnij prawidłowo wszystkie wymagane pola aby móc wysłać wiadomość.', 'error', form);
            }
        });
    });
}(jQuery));