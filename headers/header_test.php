<?php
    require "Classes.php";
    session_start();?>

<html lang="ru">
<head>
    <meta charset="utf-8" http-equiv="Cache-Control" content="no-cache">
    <title>Личный кабинет</title>
    <link rel='stylesheet' href='../style.css'>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"> </script>
</head>
<body>
<div class="header_lk">
    <p> Добро пожаловать, <?php echo $_SESSION[ 'user' ]->getName()?> <?php echo $_SESSION[ 'user' ]->getSurname()?>. Вы авторизировались
        как <?php if ( strcasecmp($_SESSION[ 'type' ],'isp') === 0 ) echo "испытуемый!"; else echo "психолог!";?></p>
</div>
<div class="menu_lk">
    <h3 class="menu_title"> Выберите одно из доступных действий</h3>
    <ul class="menu_list">
        <li><a class="testing" href="#">Пройти тестирование</a></li>
        <?php if ( strcasecmp($_SESSION[ 'type' ] ,'isp') === 0 ) { ?>
            <li><a href="../show_results.php" class="show_results">Посмотреть результаты предыдущих тестирований</a></li>
            <li><a href="../compare_results.php" class="compare_results">Сравнить результаты тестирования относительно группы</a></li>
        <?php } else { ?>
            <li><a href="../show_results.php" class="show_results">Посмотреть результаты своих тестирований</a></li>
            <li><a href="../create_group.php" class="create_group">Сформировать группу испытуемых</a></li>
            <li><a href="../show_results_isp.php" class="show_results_isp">Посмотреть результаты тестирований испытуемых</a></li>
            <li><a href="../compare_results_isp.php" class="compare_results_isp.php">Сравнить результаты тестирования испытуемых</a></li>
        <?php } ?>
    </ul>
</div>
