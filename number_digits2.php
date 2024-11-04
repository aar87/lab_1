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
    $value = rand(10000000, 99999999);

    $current = $value;
    $even = '';
    $odd = '';

    while ($current > 0) {
        $last = (int)$current % 10;
        $current = (int)$current / 10;
        if ($current !== 0) {
            if ($last % 2 === 0) {
                $even .= $last;
            } else {
                $odd .= $last;
            }
        }
    }

    ?>
    <table>
        <tr>
            <th>Случайное число</th>
            <th>Преобразованное число</th>
        </tr>
        <tr>
            <td><?= $value ?></td>
            <td><?= $odd . $even ?></td>
        </tr>
    </table>
</ol>
</body>
</html>
