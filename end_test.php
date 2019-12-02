<?php
    require "Classes.php";
    session_start();
    echo($_SESSION[ 'user' ]->endTest(json_decode($_POST['num_mistakes']), json_decode($_POST['each_time_table']), json_decode($_POST['in_time']),$_SESSION['login_value']));