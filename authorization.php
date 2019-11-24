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
                    <input type="text" class="text_input_block" name="password_value" required>
                </label>
                <div class="footer_authorization">
                    <div class="authorization_block_error" hidden>Ошибка при авторизации, неверный логин или пароль</div>
                    <button class="button_authorization" type="submit">Войти в учетную запись</button>
                </div>
            </form>
    </body>
</html>