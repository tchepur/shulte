<?php
    require "Classes.php";
    session_start();
    echo $_SESSION['user']->showTargetResult($_POST['test_number'], $_POST['login']);
