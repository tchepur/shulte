$(document).ready(function($) {
    $('input').on('change', function () {
        if ($(this).val() == 0)
            $(this).attr('value', 1);
        else
            $(this).attr('value', 0);
    });

    $('.my').submit(function () {

        var form = $(this).serializeArray();
        $.ajax({
            url: "compare_chosen_results_isp.php",
            method: "POST",
            data: {
                list : form
            },
            beforeSend: function (){
                $( '.general_block' ).html('');
            },
            success: function (data) {
                $( '.general_block' ).html(data);
            },
            error: function () {
                $( '.result_of_change_group_error' ).show();
            }
        })
    });
});