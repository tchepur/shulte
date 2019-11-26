<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Авторизация в системе</title>
        <link rel='stylesheet' href='style.css'>
        <script src="js/jquery-3.3.1.min.js"> </script>
        <script src="js/authorization.js"> </script>
    </head>
    <body>
            <form class="authorization_block" action="javascript:0" method="post">
                <span> Авторизация </span>
                <br><br>
                <label class="label_input_block">Логин &nbsp;
                    <input type="text" class="text_input_block" name="login_value" required>
                </label>
                <br><br><br>
                <label class="label_input_block">Пароль
                    <input type="password" class="text_input_block" name="password_value" required>
                </label>
                <div class="footer_authorization">
                    <div class="authorization_block_error" hidden>Ошибка при авторизации, неверный логин или пароль</div>
                    <button class="button_authorization" type="submit">Войти в учетную запись</button>
                </div>
                <input class="user_type" type="text" name="type" hidden>
                <input class="user_surname" type="text" name="surname" hidden>
                <input class="user_name" type="text" name="name" hidden>
                <input class="user_patronymic" type="text" name="patronymic" hidden>
                <input class="user_mail" type="text" name="mail" hidden>
                <input class="user_gender" type="text" name="gender" hidden>
                <input class="user_age" type="text" name="age" hidden>
                <input class="user_group" type="text" name="group" hidden>
            </form>
    </body>
</html>