$(document).ready(function($) {
    $('.change_group').on('click', function () {
        var form = $('.my').serializeArray();
        console.log(form);
        $.ajax({
            url: "set_group.php",
            method: "POST",
            data: form,
            beforeSend: function (){
                $( '.result_of_change_group_good' ).hide();
                $( '.result_of_change_group_error' ).hide();
            },
            success: function (data) {
                $( '.result_of_change_group_good' ).show();
            },
            error: function () {
                $( '.result_of_change_group_error' ).show();
            }
        })
    });
});