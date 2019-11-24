$(document).ready(function($) {
    $('.button_authorization').on('click', function () {
        const formData = $('.authorization_block').serializeArray();
        $('.authorization_block').removeProp('action');

        $.ajax({
            url: "check_registration.php",
            method: "POST",
            data: formData,
            beforeSend: function (){
                $('.authorization_block').find('.authorization_block_error').hide();
            },
            success: function (data) {
                var data_parsed = JSON.parse(data);
                console.log( data_parsed );
                if ( data_parsed[ 'registration_good' ] === 1 ) {
                    $('.authorization_block').prop('action', 'lk.php');
                    setTimeout(function(){
                        $('.button_authorization').trigger('click');
                    }, 1);
                } else {
                    $('.authorization_block').find('.authorization_block_error').show();
                }
            },
            error: function () {
                $('authorization_block').find('.authorization_block_error').show();
            }
        })
    });
});