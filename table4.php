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
<table>
    <?php
    $randomColumns = 10;
    $randomRows = 9;
    ?>
    <thead>
    <tr>
        <?php for ($i = 1; $i <= $randomColumns; $i++) { ?>
            <th style="font-weight: normal"><?= $i ?></th>
        <?php }?>
    </tr>
    </thead>
    <tbody>
    <?php for ($i = 1; $i <= $randomRows; $i++) { ?>
        <tr>
            <?php for ($j = 1; $j <= $randomColumns; $j++) { ?>
                <td style="color: <?= ($i * 10 + $j) % 2 == 0 ? 'red' : 'black';?>;"><?= $i * 10 + $j ?></td>
            <?php }?>
        </tr>
    <?php }; ?>
    </tbody>
</table>
</body>
</html>
