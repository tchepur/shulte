<?php
    $result[ 'registration_good' ] = 0;
    $result[ 'error' ] = 'DONT HAVE THIS USER. NEED REGISTRATION';
    if ( isset( $_POST[ 'login_value' ] ) && isset( $_POST[ 'password_value' ] ) ) {
        $descriptor_of_file = fopen("usersDATA/log_pas.txt", "r");
        while ( !feof($descriptor_of_file) ) {
            $str = fgets($descriptor_of_file);
            $str = explode(" ", $str);
            if ( $str[0] == $_POST[ 'login_value' ] && $str[1] == $_POST[ 'password_value' ]) {
                $result[ 'registration_good' ] = 1;
                $result[ 'error' ] = '';
                break;
            }
        }
        fclose($descriptor_of_file);
        echo json_encode($result);
        return 1;
    } else {
        $result[ 'registration_good' ] = 0;
        $result[ 'error' ] = 'DONT TAKE LOGIN OR PASSWORD';
        echo json_encode($result);
        return 0;
    }
