<?php
    require "Classes.php";
    session_start();
    echo $_SESSION[ 'user' ]->compareChosenResultsIsp($_POST[ 'list' ]);
