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
        $n = rand(1, 6);
        $k = rand(1, 15);

        $nStart = pow(10, $n);
        $nEnd = pow(10, $n + 1) - 1;

        $numbers = '';

        for ($i = $nStart; $i <= $nEnd; $i++) {
            $current = $i;
            $result = 0;

            while ($current > 0) {
                $last = (int)$current % 10;
                $current = (int)$current / 10;
                $result += $last;
            }

            if ($result == $k) {
                $numbers .= $i . ' ';
            }
        }
        ?>
    <h2>K случайное: <?= $k ?></h2>
    <h2>N случайное: <?= $n ?></h2>
    <h2>Подходящие: <?= $numbers ?></h2>
</ol>
</body>
</html>
