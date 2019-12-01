<?php
require "headers/header_test.php";
?>
    <script src="js/select_reaction_create_group.js"></script>
<?php
    /*echo*/ var_dump($_SESSION[ 'user' ]->createGroup()); exit(0);
    require "footer.php";