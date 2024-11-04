<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        global $login;
        $director = 'Директор';
        $employee = 'Сотрудник';
        $noLogin = 'Нет логина';
        $hello = 'Привет';
        $welcome = 'Здравстуйте';

        // FIXME на мой скромный взгляд это антипаттерн, тем более довольно сложная группировка у PHP тут =)
        $message = $login == ''
            ? $noLogin
            : (($login == $employee)
                ? $hello
                : (($login == $director)
                    ? $welcome
                    : ''));
    ?>
    <h2>Логин: <?= $login ?></h2>
    <h2>Сообщение: <?= $message ?></h2>
</body>
</html>
