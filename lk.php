<?php
    session_start();
    global $type, $login_value, $user;
    $type = $_POST[ 'type' ];
    $login_value = $_POST[ 'login_value' ];
    require "Classes.php";
    if ( strcasecmp($_POST[ 'type' ] ,'isp') === 0 ) {
        $user = new Psych($_POST[ 'name' ], $_POST[ 'surname' ], $_POST[ 'patronymic' ], $_POST[ 'age' ],
            $_POST[ 'mail' ], $_POST[ 'gender' ], $_POST[ 'group' ]);
    } else {
        $user = new testedUser($_POST[ 'name' ], $_POST[ 'surname' ], $_POST[ 'patronymic' ], $_POST[ 'age' ],
            $_POST[ 'mail' ], $_POST[ 'gender' ], $_POST[ 'group' ]);
    }
    $_SESSION[ 'user' ] = $user;
    $_SESSION[ 'type' ] = $type;
    require "headers/header.php";
    require "lk_general_block.php";
    require "footer.php";