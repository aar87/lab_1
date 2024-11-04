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
        $randomValue = rand(5, 15);
        for ($i = 1; $i <= $randomValue; $i++) { ?>
            <p style="display: flex; justify-content: center">
                <?php
                    for ($j = 1; $j <= $i; $j++) {
                        echo $i ;
                    }
                ?>
            </p>
        <?php }
    ?>
</ol>
</body>
</html>
