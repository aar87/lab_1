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
        $result = '';
        $random = rand(10, 20);
        for ($i = 1; $i <= $random; $i++) {
            $result .= "<ul><li> $i .";
        }
        for ($i = 1; $i <= $random; $i++) {
            $result .= "</li></ul>";
        }
    ?>
    <?= $result; ?>
</body>
</html>
