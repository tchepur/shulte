$(document).ready(function($) {
    $('input').on('change', function () {
        if ($(this).val() == 0){
            $(this).attr('value', 1);
            $('input.box').hide();
            $(this).show();
        }
        else {
            $(this).attr('value', 0);
            $('input.box').show();
        }
    });

    $('.my').submit(function () {
        var form = $(this).serializeArray();
        $.ajax({
            url: "show_chosen_results_isp.php",
            method: "POST",
            data: {
                list : form
            },
            beforeSend: function (){
                $( '.general_block' ).html('');
            },
            success: function (data) {
                $( '.general_block' ).html(data);

                $('select').on('change', function () {
                    console.log($(this));
                    var test_number = $(this).val();
                    console.log(test_number);
                    $.ajax({
                        url: "build_result_table_chosen_user.php",
                        method: "POST",
                        data: {
                            test_number : test_number,
                            login : $('input.this').val()
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
            },
            error: function () {
                $( '.result_of_change_group_error' ).show();
            }
        })
    });
});