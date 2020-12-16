
$(function () {
 
    'use strict';

    $('.username').blur(function () {
       
        if ($(this).val().length<4){
            
            $(this).css('border','2px solid #F00');
            $(this).parent().find('.custom-alert').fadeIn(200);

        } else{
            $(this).css('border','2px solid #080');
            $(this).parent().find('.custom-alert').fadeOut(200);
            

        }

    });

    $('.email').blur(function () {
       
        if ($(this).val().length< 2){

            $(this).parent().find('.custom-alert').fadeIn(200);

        } else{
            $(this).parent().find('.custom-alert').fadeOut(200);

        }

    });

    $('.message').blur(function () {
       
        if ($(this).val().length< 10){

            $(this).parent().find('.custom-alert').fadeIn(200);

        } else{
            $(this).parent().find('.custom-alert').fadeOut(200);

        }

    });

});