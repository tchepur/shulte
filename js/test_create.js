$(document).ready(function($) {
    $('.button_start_test').on('click', function () {

        $.ajax({
            url: "test_create.php",
            method: "POST",
            data: null,
            beforeSend: function (){
                $( '.general_block' ).html( ' ' );
            },
            success: function (data) {
                console.log(data);
            },
            error: function () {

            }
        })
    });
});