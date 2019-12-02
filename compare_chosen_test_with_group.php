<?php
    require "Classes.php";
    session_start();
    echo $_SESSION[ 'user' ]->compareChosenTestWithGroup($_POST[ 'test_number' ], $_POST[ 'group' ]);