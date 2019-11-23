<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Авторизация в системе</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
            <form class="authorization_block" action="lk.php" method="post">
                <span> Авторизация </span>
                <br><br>
                <label class="label_input_block">Логин &nbsp;
                    <input type="text" class="text_input_block" name="login_value">
                </label>
                <br><br><br>
                <label class="label_input_block">Пароль
                    <input type="text" class="text_input_block" name="password_value">
                </label>
                <button class="button_authorization" type="submit">Войти в учетную запись</button>
            </form>
    </body>
</html>