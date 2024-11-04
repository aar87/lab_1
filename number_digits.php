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
    $value = rand(10000, 99999);

    $current = $value;
    $result = '';

    while ($current > 0) {
        $last = (int)$current % 10;
        $current = (int)$current / 10;
        if ($current !== 0) {
            $result = 9 - $last . $result;
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
            <td><?= $result ?></td>
        </tr>
    </table>
</ol>
</body>
</html>
