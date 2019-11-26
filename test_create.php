<?php
    require "Classes.php";
    session_start();
    echo json_encode($_SESSION[ 'user' ]->startTest());

