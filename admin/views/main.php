<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактировать главную</title>
</head>
<body>
    <form action="/src/router.php?r=editmain" method="post">
        <label for="header">Заголовок</label><input type="text" name="header" id="header">
        <label for="text">Текст</label><textarea name="text" id="text" cols="30" rows="100"></textarea>
        <input type="hidden" name="form" value="<?= uniqid('form', true); ?>">
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>