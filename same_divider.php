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
        $start = rand(1, 100);
        $end = $start + rand(10, 100);
        echo '<p> Случайные числа: ';
        for ($i = $start; $i <= $end; $i++) {
            echo "$i ";
        }
        echo '</p>';

        echo '<p> Найденные числа: ';
        for ($i = $start; $i <= $end; $i++) {
            $isCorrect = false;
            $stage = 1;

            $current = $i;

            while (true) {
                if ($current < 10) {
                    if ($i % $current == 0) {
                        $isCorrect = true;
                        break;
                    }
                }

                $last = $current % 10;
                $current = (int)$current / 10;

                if ($last == 0 || $i % $last != 0) {
                    break;
                }
            }

            if ($isCorrect) {
                echo "$i ";
            }
        }
        echo '</p>';
    ?>
</body>
</html>
