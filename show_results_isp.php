<?php
require "headers/header_test.php";
?>
    <script src="js/show_chose_results_isp.js"></script>
<?php
echo ($_SESSION[ 'user' ]->showUsersHistoryTest());
require "footer.php";