<?php
require "headers/header_test.php";
?>
    <script src="js/compare_chose_results_isp.js"></script>
<?php
echo ($_SESSION[ 'user' ]->compareUsersTest());
require "footer.php";