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
        global $x1, $y1, $x2, $y2, $x3, $y3;

        $result = '';

        if (is_null($x1) || is_null($y1) || is_null($x2) || is_null($y2) || is_null($x3) || is_null($y3)) {
            $result = 'Не переданы все координаты';
        } else {
            $x1 = (int)$x1;
            $x2 = (int)$x2;
            $x3 = (int)$x3;
            $y1 = (int)$y1;
            $y2 = (int)$y2;
            $y3 = (int)$y3;

            $AB = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
            $BC = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
            $CA = sqrt(pow($x3 - $x1, 2) + pow($y3 - $y1, 2));

            if ($AB >= ($BC + $CA) || $BC >= ($AB + $CA) || $CA >= ($AB + $BC)) {
                $result = 'Невозможно расчитать';
            } else {
                $perimeter = ($AB + $BC + $CA);
                $square = sqrt(($perimeter - $AB) * ($perimeter - $BC) * ($perimeter - $CA) * $perimeter);

                $result = "<h1>Периметр: $perimeter</h1><h1>Площадь: $square</h1>";
            }
        }
    ?>
    <?= $result ?>
</body>
</html>
