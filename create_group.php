<?php
require "headers/header_test.php";
?>
    <script src="js/select_reaction_create_group.js"></script>
<?php
    echo ($_SESSION[ 'user' ]->createGroup());
    require "footer.php";