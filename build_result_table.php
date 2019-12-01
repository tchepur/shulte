<?php
    require "Classes.php";
    session_start();
    echo $_SESSION['user']->showResultOfChosenTest($_POST['test_number']);