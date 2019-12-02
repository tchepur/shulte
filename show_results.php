<?php
    require "headers/header_test.php";
    ?>
    <script src="js/select_reaction.js"></script>
<?php
    echo $_SESSION[ 'user' ]->showHistoryTest();
    require "footer.php";