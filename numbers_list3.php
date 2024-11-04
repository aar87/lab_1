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
<ol>
    <?php
    $n = rand(1, 100);

    $dividerSum = 0;
    $dividers = '';

    for ($i = 0; $i < $n; $i++) {
        if ($i == 0 || $i == 1) {
            continue;
        }
        if ($n % $i == 0) {
            $dividerSum += $i;
            $dividers .= $i . ' ';
        }
    }

    ?>
    <h2>N случайное: <?= $n ?></h2>
    <h2>Подходящие: <?= $dividers ?></h2>
    <h2>Характер: <?= $dividerSum == 0 ? 'простое' : 'натуральное число' ?></h2>
</ol>
</body>
</html>
