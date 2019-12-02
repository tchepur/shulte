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
    <p> <?php if ( strcasecmp($_SESSION[ 'type' ],'isp') === 0 ) echo "Испытуемый: "; else echo "Психолог: ";?> <?php echo $_SESSION[ 'user' ]->getSurname()?> <?php echo $_SESSION[ 'user' ]->getName()?> </p>
</div>
<form class="menu" method="post" action="lk.php">
    <div class="menu_lk">
        <h3 class="menu_title"> Выберите одно из доступных действий</h3>
        <ul class="menu_list">
            <li><a class="testing" href="../testing.php">Пройти тестирование</a></li>
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
        <input class="user_type" type="text" name="type" value="<?php echo $_SESSION[ 'type' ]?>" hidden>
        <input class="user_surname" type="text" name="surname" value="<?php echo $_SESSION[ 'user' ]->getSurname() ?>" hidden>
        <input class="user_name" type="text" name="name" value="<?php echo $_SESSION[ 'user' ]->getName() ?>" hidden>
        <input class="user_patronymic" type="text" name="patronymic" value="<?php echo $_SESSION[ 'user' ]->getPatronymic() ?>" hidden>
        <input class="user_mail" type="text" name="mail" value="<?php echo $_SESSION[ 'user' ]->getMail() ?>" hidden>
        <input class="user_gender" type="text" name="gender" value="<?php echo $_SESSION[ 'user' ]->getGender() ?>" hidden>
        <input class="user_age" type="text" name="age" value="<?php echo $_SESSION[ 'user' ]->getAge() ?>" hidden>
        <input class="user_group" type="text" name="group" value="<?php echo $_SESSION[ 'user' ]->getGroup() ?>" hidden>
        <input class="user_num_test" type="text" name="num_test" value="<?php echo $_SESSION[ 'user' ]->getNumTest() ?>" hidden>
        <input class="user_login" type="text" name="login_value" value="<?php echo $_SESSION[ 'user' ]->getLogin();?>" hidden>
        <button type="submit" class="back_lk" >Вернуться в личный кабинет</button>
    </div>
</form>
