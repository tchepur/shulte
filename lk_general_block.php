
<div class="general_block">
    <p>Ваши анкетные данные: </p>
    <table class="info_table">
        <tr> <?php?>
            <td rowspan="7" class="img_td general_td" background = "users_photo/<?php echo $_SESSION['user']->getLogin();?>.png"></td>
            <td class="delimiter_col"> </td>
            <td class="general_td">Фамилия :</td>
            <td class="general_td"> <?php echo $_SESSION[ 'user' ]->getSurname();?> </td>
        </tr>
        <tr>
            <td class="delimiter_col"> </td>
            <td class="general_td">Имя:</td>
            <td class="general_td"> <?php echo $_SESSION[ 'user' ]->getName();?> </td>
        </tr>
        <tr>
            <td class="delimiter_col"> </td>
            <td class="general_td">Отчество:</td>
            <td class="general_td"> <?php echo $_SESSION[ 'user' ]->getPatronymic();?> </td>
        </tr>
        <tr>
            <td class="delimiter_col"> </td>
            <td class="general_td">Пол:</td>
            <td class="general_td"> <?php echo $_SESSION[ 'user' ]->getGender();?> </td>
        </tr>
        <tr>
            <td class="delimiter_col"> </td>
            <td class="general_td">E-mail:</td>
            <td class="general_td"> <?php echo $_SESSION[ 'user' ]->getMail();?> </td>
        </tr>
        <tr>
            <td class="delimiter_col"> </td>
            <td class="general_td">Возраст:</td>
            <td class="general_td"> <?php echo $_SESSION[ 'user' ]->getAge()?> </td>
        </tr>
        <tr>
            <td class="delimiter_col"> </td>
            <td class="general_td">Группа тестирования:</td>
            <td class="general_td"> <?php echo $_SESSION[ 'user' ]->getGroup();?> </td>
        </tr>
    </table>
</div>