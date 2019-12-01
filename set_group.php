<?php
    require "Classes.php";
    session_start();
    echo $_SESSION[ 'user' ]->setNewGroup();
