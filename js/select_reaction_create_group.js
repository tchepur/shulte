$(document).ready(function($) {

    $('input').on('change', function () {
        $(this).attr('value', $(this).val());
    });

    $('.my').submit(function () {

        var form = $(this).serializeArray();
        $.ajax({
            url: "set_group.php",
            method: "POST",
            data: {
                list : form
            },
            beforeSend: function (){
                $( '.result_of_change_group_good' ).hide();
                $( '.result_of_change_group_error' ).hide();
            },
            success: function (data) {
                alert("Изменения успешно выполнены!");
            },
            error: function () {
                $( '.result_of_change_group_error' ).show();
            }
        })
    });
});