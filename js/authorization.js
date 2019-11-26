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
                    $('.user_type').val(data_parsed[ 'type' ]);
                    $('.user_surname').val(data_parsed[ 'surname' ]);
                    $('.user_name').val(data_parsed[ 'name' ]);
                    $('.user_mail').val(data_parsed[ 'mail' ]);
                    $('.user_age').val(data_parsed[ 'age' ]);
                    $('.user_group').val(data_parsed[ 'group' ]);
                    $('.user_gender').val(data_parsed[ 'gender' ]);
                    $('.user_patronymic').val(data_parsed[ 'patronymic' ]);
                    setTimeout(function(){
                        $('.button_authorization').trigger('click');
                    }, 100);
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