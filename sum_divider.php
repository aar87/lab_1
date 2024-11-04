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
    $m = rand($n, $n + 100);

    $range = range($n, $m);
    $dividerSum = '';

    for ($i = $n; $i < $m; $i++) {
        $sum = 0;
        $current = $i;

        while ($current > 0) {
            $last = (int)$current % 10;
            $current = (int)$current / 10;
            $sum += $last;
        }

        if ($i % $sum == 0) {
            $dividerSum .= $i . ' ';
        }
    }

    ?>
    <h2>N случайное: <?= $n ?></h2>
    <h2>M случайное: <?= $m ?></h2>
    <h2>Подходящие: <?= $dividerSum ?></h2>
</ol>
</body>
</html>
