<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="/src/router.php?r=login" method="post">
        <label for="login">Логин</label><input type="text" name="login" id="login">
        <label for="password">Пароль</label><input type="password" name="password" id="password">
        <input type="hidden" name="form" value="<?= uniqid('form', true); ?>">
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>