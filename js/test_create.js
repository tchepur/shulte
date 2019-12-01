$(document).ready(function($) {
    var sec = -1;
    var prev_sec = 0;
    var mistakes = 0;
    var tables_time = [];

    function end_test(valid_time) {
        $.ajax({
            url: "end_test.php",
            method: "POST",
            data: {
                num_mistakes : mistakes,
                each_time_table : JSON.stringify(tables_time),
                in_time : valid_time
            },
            beforeSend: function (){
                $( '.general_block' ).html( ' ' );
            },
            success: function (data) {
                console.log(data);
                $( '.general_block' ).html( data );
            },
            error: function () {
            }
        })
    }

    function timer_test(){
        $('.timer').html('');
        sec++;
            if( sec < 60 ) {
                if ( sec < 10 )
                    $('.timer').html('00:0' + sec + '</p>');
                else
                    $('.timer').html('<p>00:' + sec + '</p>');
            } else if ( sec >= 60 && sec < 120 ) {
                if ( sec < 70 )
                    $('.timer').html('<p>01:0' + (sec - 60) + '</p>');
                else
                    $('.timer').html('<p>01:' + (sec - 60) + '</p>');
            } else if (sec >=120 && sec < 180 ) {
                if ( sec < 130 )
                    $('.timer').html('<p>02:0' + (sec - 2*60) + '</p>');
                else
                    $('.timer').html('<p>02:' + (sec - 2*60) + '</p>');
            } else if (sec >= 180 && sec < 240) {
                if ( sec < 190 )
                    $('.timer').html('<p>03:0' + (sec - 3*60) + '</p>');
                else
                    $('.timer').html('<p>03:' + (sec - 3*60) + '</p>');
            } else if ( sec >= 240 && sec < 300 ) {
                if ( sec < 250 )
                    $('.timer').html('<p>04:0' + (sec - 4*60) + '</p>');
                else
                    $('.timer').html('<p>04:' + (sec - 4*60) + '</p>');
            } else if (sec >= 300 && sec < 360) {
                if ( sec < 310 )
                    $('.timer').html('<p>05:0' + (sec - 5*60) + '</p>');
                else
                    $('.timer').html('<p>05:' + (sec - 5*60) + '</p>');
            } else if (sec >= 360 && sec < 420){
                if ( sec < 370 )
                    $('.timer').html('<p>06:0' + (sec - 6*60) + '</p>');
                else
                    $('.timer').html('<p>06:' + (sec - 6*60) + '</p>');
            } else if (sec >= 420 &&  sec < 480){
                if ( sec < 430 )
                    $('.timer').html('<p>07:0' + (sec - 7*60) + '</p>');
                else
                    $('.timer').html('<p>07:' + (sec - 7*60) + '</p>');
            } else if (sec >= 480 &&  sec < 540){
                if ( sec < 490 )
                    $('.timer').html('<p>08:0' + (sec - 8*60) + '</p>');
                else
                    $('.timer').html('<p>08:' + (sec - 8*60) + '</p>');
            } else if (sec >= 540 &&  sec < 600){
                if ( sec < 550 )
                    $('.timer').html('<p>09:0' + (sec - 9*60) + '</p>');
                else
                    $('.timer').html('<p>09:' + (sec - 9*60) + '</p>');
            } else if (sec >= 600 &&  sec < 660){
                if ( sec < 610 )
                    $('.timer').html('<p>10:0' + (sec - 10*60) + '</p>');
                else
                    $('.timer').html('<p>10:' + (sec - 10*60) + '</p>');
            } else if (sec >= 660 &&  sec < 720) {
                if ( sec < 670 )
                    $('.timer').html('<p>11:0' + (sec - 11*60) + '</p>');
                else
                    $('.timer').html('<p>11:' + (sec - 11*60) + '</p>');
            } else {
                end_test(false);
            }
    }

    $('.button_start_test').on('click', function () {
    var table_number = 0;

        $.ajax({
            url: "test_create.php",
            method: "POST",
            data: null,
            beforeSend: function (){
                $( '.general_block' ).html( ' ' );
            },
            success: function (data) {
                var data_parsed = JSON.parse(data);
                var correct_number = 1;
                var prev_btn = $(this);
                $( '.general_block' ).html( data_parsed );
                var timer_idf = setInterval( timer_test, 1000 );

                /*tables_time[0] = 30;
                tables_time[1] = 30;
                tables_time[2] = 30;
                tables_time[3] = 30;
                tables_time[4] = 30;
                end_test(true);*/

                $('button').on('click', function(){
                    prev_btn.removeClass("_background-green");
                    prev_btn.removeClass("_background-red");
                    if ( $(this).val() == correct_number ) {
                        if ( correct_number == 25 ) {
                            if ( table_number < 4 ) {
                                correct_number = 1;
                                $('.test_table_' + table_number).hide();
                                $('.test_table_header_' + table_number).hide();
                                table_number++;
                                $('.test_table_' + table_number).show();
                                $('.test_table_header_' + table_number).show();
                                tables_time.push( sec - prev_sec );
                                prev_sec = sec;
                            } else {
                                //завершить тест и показать результаты
                                tables_time.push( sec - prev_sec );
                                end_test(true);
                            }
                        } else {
                            correct_number++;
                            $(this).addClass("_background-green");
                        }
                    } else {
                        mistakes++;
                        $(this).addClass("_background-red");
                    }
                    prev_btn = $(this);
                });
            },
            error: function () {

            }
        })
    });
});