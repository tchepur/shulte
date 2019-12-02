$(document).ready(function($) {
    $('.select_test').on('change', function () {
        var test_number = $('.select_test').val();
        $.ajax({
            url: "compare_chosen_test_with_group.php",
            method: "POST",
            data: {
                test_number : test_number,
                group : $('.user_group').val()
            },
            beforeSend: function (){
                $( '.results_of_testing' ).html( ' ' );
            },
            success: function (data) {
                $( '.results_of_testing' ).html( data );
            },
            error: function () {
            }
        })
    });
});