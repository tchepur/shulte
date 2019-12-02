<?php
require "headers/header_test.php";
?>
    <script src="js/select_reaction_compare.js"></script>
<?php
    echo ($_SESSION[ 'user' ]->compareMyTest());
    require "footer.php";