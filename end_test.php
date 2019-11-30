<?php
    require "Classes.php";
    session_start();
    echo json_encode($_SESSION[ 'user' ]->endTest($_POST['num_mistakes'], json_decode($_POST['each_time_table']), $_POST['in_time']));