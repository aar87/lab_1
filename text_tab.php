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
    global $baseText;
    $break = 4;
    $current = 0;
    $result = '';
    $length = strlen($baseText);

    for ($i = 0; $i < $length; $i++) {
        if ($baseText[$i] == ' ') {
            continue;
        }

        if ($current == $break) {
            $result .= '    ';
            $current = 0;
        }

        $result .= $baseText[$i];
        $current++;
    }

    ?>
    <h2>Исходный текст: <?= $baseText ?></h2>
    <h2>Разделенный на группы: <?= $result ?></h2>
</body>
</html>
