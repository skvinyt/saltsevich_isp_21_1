<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Author" lang="ru" content="Сальцевич Денис">
        <meta name="description" content="Линейный вычислительный процесс">
        <title>LaboTronick</title>
        <link rel="stylesheet" href="./style_lr_all.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <main>
            <header>
                <div class="site-title"><a href="index.php">LaboTronick</a></div>
                <div class="buttons">
                    <a href="index_lr_all.php">ЛАБЫ</a>
                    <a href="">Страница 2</a>
                    <a href="">Страница 3</a>
                </div>
            </header>
            <div class="background-image"></div>
        </main>

        <div class="container">
            <div class="examplelr3_1">
                <h1>Лабораторная работа № 3</h1>
                <h2>Вариант 24</h2>
                <h3>Задача 1:</h3>
                <p>Дано значение угла α в градусах (0 < α < 360). Определить значение этого же угла в радианах, учитывая, что 180 ◦=π радианов. В качестве значения π использовать 3.14.</p>
                <h3>Решение:</h3>
                <?php
                // Значение угла в градусах
                $alpha = 53.5; // Пример значения угла

                // Значение π
                $pi = 3.14;

                // Преобразование градусов в радианы
                $radians = $alpha * ($pi / 180);

                // Вывод результата
                echo "Ответ: Угол $alpha градусов в радианах: $radians";
                ?>
            </div>

            <div class="examplelr3_2">
                <h3>Задача 2:</h3>
                <p>Дано количество миллиметров А и сантиметров В. Вывести число, равное сумме А+В в миллиметрах.</p>
                <h3>Решение:</h3>
                <?php
                // Задаем значения миллиметров (А) и сантиметров (В)
                $millimeters = 627; // Пример значения миллиметров
                $centimeters = 9; // Пример значения сантиметров

                // Преобразование сантиметров в миллиметры
                $totalMillimeters = $millimeters + ($centimeters * 10);

                // Вывод результата
                echo "Ответ: Сумма $millimeters миллиметров и $centimeters сантиметров в миллиметрах равна: $totalMillimeters\n";
                ?>
            </div>

            <div class="examplelr4_1">
                <h1>Лабораторная работа № 4</h1>
                <h2>Вариант 24</h2>
                <h3>Задача 1:</h3>
                <p>Даны числа x, y. Проверить истинность высказывания: «Точка с координатами (x, y) лежит в первой или третьей координатной четверти».</p>
                <h3>Решение:</h3>
                <?php
                // Значения для координат
                $x = 9;
                $y = -12;

                // Проверка и вывод результата
                if (($x > 0 && $y > 0) || ($x < 0 && $y < 0)) {
                    echo "TRUE <BR>";
                } else {
                    echo "FALSE <BR>";
                }
                ?>
            </div>

            <div class="examplelr4_2">
                <h3>Задача 2:</h3>
                <p>Дано целое число. Вывести его строку-описание вида «отрицательное четное число», «нулевое число», «положительное нечетное число» и т. д.</p>
                <h3>Решение:</h3>
                <?php
                // Пример значения для числа
                $number = 328;

                // Проверка и вывод строки-описания
                if ($number == 0) {
                    echo "Число $number нулевое число";
                } elseif ($number > 0) {
                    if ($number % 2 == 0) {
                        echo "Число $number положительное четное число <BR>";
                    } else {
                        echo "Число $number положительное нечетное число <BR>";
                    }
                } else {
                    if ($number % 2 == 0) {
                        echo "Число $number отрицательное четное число <BR>";
                    } else {
                        echo "Число $number отрицательное нечетное число <BR>";
                    }
                }
                ?>

            </div>

            <div class="examplelr4_3">
                <h3>Задача 3:</h3>
                <p>Вычислить значение функции y=f(x) при произвольных значениях x.</p>
                <img class="image_example3" src="./example3.png">
                <h3>Решение:</h3>
                <?php
                // Исходные данные
                $a = 4.9;
                $b = 1.3;

                // Значения x
                $x1 = 4.27;
                $x2 = 8.5;
                $x3 = -1.48;

                // Вычисление и вывод результатов для x1
                if ($x1 > 2 && $x1 < 7) {
                    $y1 = exp($b * $x1 + 1);
                } elseif ($x1 >= 7) {
                    $y1 = 1 / (($a * pow($x1, 3)) + 1);
                } elseif ($x1 <= 2) {
                    $y1 = log(sqrt(1 + pow($a * $x1, 2)));
                }
                echo "Значение функции f($x1) = $y1 <BR>";

                // Вычисление и вывод результатов для x2
                if ($x2 > 2 && $x2 < 7) {
                    $y2 = exp($b * $x2 + 1);
                } elseif ($x2 >= 7) {
                    $y2 = 1 / (($a * pow($x2, 3)) + 1);
                } elseif ($x2 <= 2) {
                    $y2 = log(sqrt(1 + pow($a * $x2, 2)));
                }
                echo "Значение функции f($x2) = $y2 <BR>";

                // Вычисление и вывод результатов для x3
                if ($x3 > 2 && $x3 < 7) {
                    $y3 = exp($b * $x3 + 1);
                } elseif ($x3 >= 7) {
                    $y3 = 1 / (($a * pow($x3, 3)) + 1);
                } elseif ($x3 <= 2) {
                    $y3 = log(sqrt(1 + pow($a * $x3, 2)));
                }
                echo "Значение функции f($x3) = $y3 <BR>";
                ?>

            </div>

            <div class="examplelr4_4">
                <h3>Задача 4:</h3>
                <p>Вычислить значение функции y=f(x) при произвольных значениях x. Для вычисления значения функции использовать оператор switch.</p>
                <img class="image_example4" src="./example4.png">
                <h3>Решение:</h3>
                <?php
                // Исходные данные
                $a = 4.9;
                $b = 1.3;

                // Значения x
                $x_values = [7, 11, 1, 2];

                // Вычисление и вывод результатов
                foreach ($x_values as $x) {
                    switch ($x) {
                        case 11:
                            $y = exp($b * $x + 1);
                            break;
                        case 1:
                            $y = 1 / (($a * pow($x, 3)) + 1);
                            break;
                        case 2:
                            $y = log(sqrt(1 + pow($a * $x, 2)));
                            break;
                        default:
                            $y = "Значение функции не определено для x = $x";
                            break;
                    }
                    echo "Значение функции f($x) = $y <BR>";
                }
                ?>
            </div>
        

            <footer>
                <div class="footer">
                    <div class="row">
                        <a href="#"><i class="fa fa-telegram"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-vk"></i></a>
                        <a href="#"><i class="fa fa-github"></i></a>
                    </div>
                </div>
            </footer>

        </div>

    </body>
</html>


