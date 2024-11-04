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
    <thead>
    <tr>
        <th>Номер строки</th>
        <th>Слово</th>
    </tr>
    </thead>
    <tbody>
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <tr>
                <td><?= $i ?></td>
                <td style="color: <?= $i % 2 == 0 ? 'red' : 'green' ?>">Test</td>
            </tr>
        <?php }; ?>
    </tbody>
</table>
</body>
</html>