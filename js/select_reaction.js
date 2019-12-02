$(document).ready(function($) {
    $('.select_test').on('change', function () {
        var test_number = $('.select_test').val();
        $.ajax({
            url: "build_result_table.php",
            method: "POST",
            data: {
                test_number : test_number
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