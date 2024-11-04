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
    <ul>
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <li style="color: <?= $i % 2 == 0 ? 'red' : 'black' ?>">
                <?= $i % 3 == 0 ? '<i>' : ''?>
                    test
                <?= $i % 3 == 0 ? '</i>' : '' ?>
            </li>
        <?php }; ?>
    </ul>
</body>
</html>
