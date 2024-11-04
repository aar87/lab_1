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
        global $text;
        $upper = 0;
        $lower = 0;
        $total = 0;

        $length = strlen($text);
        $upperCaseText = mb_strtoupper($text, 'UTF-8');

        for ($i = 0; $i < $length; $i++) {
            $total += 1;

            if ($upperCaseText[$i] == $text[$i]) {
                $upper += 1;
                continue;
            }

            $lower += 1;
        }
    ?>
    <h2><?= $text ?></h2>
    <h2>Всего букв: <?= $total ?></h2>
    <h2>В верхнем регистре: <?= $upper ?></h2>
    <h2>В нижнем регистре: <?= $lower ?></h2>
</body>
</html>
