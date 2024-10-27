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
            
            <div class="container_lr_5_ex_1">
                <h1>Лабораторная работа № 5</h1>
                <h2>Вариант 24</h2>
                <h3>Задача 1:</h3>
                <p>Дан массив размера N. Найти количество участков, на которых его элементы убывают.</p>
                <h3>Решение:</h3>
                <form class="container_form_ex_1" action="index_lr_all.php" method="post">
                    <label for="length">Введите длину массива:</label>
                    <input type="number" name="length" id="length" required><br><br>
                    <label for="array">Введите элементы массива через пробел:</label>
                    <input type="text" name="array" id="array" required><br><br>
                    <input type="submit" value="Выполнить">
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Получение данных из формы
                    $n = (int)$_POST['length'];
                    $input = trim($_POST['array']);
                    $arr = explode(" ", $input);

                    // Преобразование элементов массива в числа
                    for ($i = 0; $i < $n; $i++) {
                        $arr[$i] = (int)$arr[$i];
                    }

                    $count = 0;
                    $isDecreasing = false;

                    for ($i = 1; $i < $n; $i++) {
                        if ($arr[$i] < $arr[$i - 1]) {
                            if (!$isDecreasing) {
                                $isDecreasing = true;
                                $count++;
                            }
                        } else {
                            $isDecreasing = false;
                        }
                    }

                    echo "Количество участков, на которых элементы убывают: " . $count . "<BR>";
                }
                ?>

            </div>

            <div class="container_lr_5_ex_2">
                <h3>Задача 2:</h3>
                <p>Дан целочисленный массив размера N. Удалить из массива все одинаковые элементы, оставив их последние вхождения.</p>
                <h3>Решение:</h3>
                <form class="container_form_ex_2" action="index_lr_all.php" method="post">
                    <label for="length">Введите длину массива:</label>
                    <input type="number" name="length" id="length" required><br><br>
                    <label for="array">Введите элементы массива через пробел:</label>
                    <input type="text" name="array" id="array" required><br><br>
                    <input type="submit" value="Выполнить">
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Получение данных из формы
                    $n = (int)$_POST['length'];
                    $input = trim($_POST['array']);
                    $arr = explode(" ", $input);

                    // Преобразование элементов массива в числа
                    for ($i = 0; $i < $n; $i++) {
                        $arr[$i] = (int)$arr[$i];
                    }

                    $lastOccurrences = [];
                    $result = [];

                    // Найти последние вхождения элементов
                    for ($i = 0; $i < $n; $i++) {
                        $lastOccurrences[$arr[$i]] = $i;
                    }

                    // Добавить элементы в результат, если они еще не были добавлены
                    for ($i = 0; $i < $n; $i++) {
                        if ($lastOccurrences[$arr[$i]] === $i) {
                            $result[] = $arr[$i];
                        }
                    }

                    echo "Массив после удаления дубликатов, оставил последние вхождения: ";
                    for ($i = 0; $i < count($result); $i++) {
                        echo $result[$i] . " ";
                    }
                }
                ?>

            </div>

            <div class="container_lr_6_ex_1">
                <h1>Лабораторная работа № 6</h1>
                <h2>Вариант 24</h2>
                <h3>Задача 1:</h3>
                <p>Дана  целочисленная матрица  размера  M * N.  Найти  номер  последней из ее строк, содержащих только четные числа. Если таких строк нет, то вывести 0.</p>
                <h3>Решение:</h3>
                <?php
                // Пример матрицы
                $matrix = [
                    [2, 4, 6, 8, 18],
                    [16, 32, 4, 10, 17],
                    [14, 8, 10, 12, 22],
                    [2, 12, 11, 26, 23],
                    [2, 12, 4, 26, 16]
                ];

                // Размеры матрицы
                $M = count($matrix);
                $N = count($matrix[0]);

                // Переменная для хранения номера последней строки с четными числами
                $lastEvenRow = 0;

                // Проходим по каждой строке матрицы
                for ($i = 0; $i < $M; $i++) {
                    $isEvenRow = true;

                    // Проходим по каждому элементу строки
                    for ($j = 0; $j < $N; $j++) {
                        if ($matrix[$i][$j] % 2 != 0) {
                            $isEvenRow = false;
                            break;
                        }
                    }

                    // Если строка содержит только четные числа, обновляем номер последней строки
                    if ($isEvenRow) {
                        $lastEvenRow = $i + 1; // Номера строк считаются с 1
                    }
                }

                // Выводим результат
                echo "Ответ: Строка номер $lastEvenRow"; 
                ?>

            </div>

            <div class="container_lr_6_ex_2">
                <h3>Задача 2:</h3>
                <p>Дана квадратная матрица порядка M. Обнулить элементы матрицы, лежащие одновременно  ниже главной  диагонали (включая эту  диагональ)  и выше побочной диагонали (также включая эту диагональ). Условный оператор не использовать.</p>
                <h3>Решение:</h3>
                <?php
                // Пример квадратной матрицы
                $matrix = [
                    [11, 2, 3, 56, 28, 1, 94],
                    [5, 6, 2, 7, 65, 23, 37],
                    [2, 10, 11, 36, 9, 92, 28],
                    [29, 42, 3, 71, 34, 8, 39],
                    [29, 42, 3, 29, 17, 27, 13],
                    [19, 32, 3, 49, 7, 27, 64],
                    [5, 6, 2, 7, 65, 23, 37]
                ];

                // Размер матрицы
                $M = count($matrix);

                // Проходим по каждому элементу матрицы
                for ($i = 0; $i < $M; $i++) {
                    for ($j = 0; $j < $M; $j++) {
                        // Обнуляем элементы, лежащие одновременно ниже главной диагонали и выше побочной диагонали
                        $matrix[$i][$j] = ($i >= $j && $i + $j <= $M - 1) ? 0 : $matrix[$i][$j];
                    }
                }

                // Выводим результат в виде матрицы
                echo "<pre>";
                for ($i = 0; $i < $M; $i++) {
                    for ($j = 0; $j < $M; $j++) {
                        echo str_pad($matrix[$i][$j], 3, ' ', STR_PAD_LEFT) . " ";
                    }
                    echo "\n";
                }
                echo "</pre>";
                ?>

            </div>

            <div class="container_lr_7_ex_1">
                <h1>Лабораторная работа № 7</h1>
                <h2>Вариант 24</h2>
                <h3>Задача 1:</h3>
                <p>Написать функцию f(x), проверяющую, является ли число x простым. Если да, то вернуть 1, иначе – 0. Число называется простым, если имеет два делителя – 1 и само себя.</p>
                <h3>Решение:</h3>
                <?php
                // Функция для проверки, является ли число простым
                function isPrime($x) {
                    // Проверка на отрицательные числа и 0
                    if ($x <= 1) {
                        return 0;
                    }

                    // Проверка на делители от 2 до sqrt($x)
                    for ($i = 2; $i * $i <= $x; $i++) {
                        if ($x % $i == 0) {
                            return 0;
                        }
                    }

                    return 1;
                }

                // Функция для проверки, является ли число простым, с использованием ссылки
                function isPrimeByReference(&$x) {
                    // Проверка на отрицательные числа и 0
                    if ($x <= 1) {
                        return 0;
                    }

                    // Проверка на делители от 2 до sqrt($x)
                    for ($i = 2; $i * $i <= $x; $i++) {
                        if ($x % $i == 0) {
                            return 0;
                        }
                    }

                    return 1;
                }

                // Пример использования функции с оператором return
                $number = 248;
                $result = isPrime($number);
                echo "Число $number является простым(return): " . ($result ? '1' : '0') . "<br>";

                // Пример использования функции с ссылкой
                $number = 248;
                $result = isPrimeByReference($number);
                echo "Число $number является простым(ссылка): " . ($result ? '1' : '0') . "<br>";

                // Пример использования функции с указателем 
                function isPrimeByPointer(&$x) {
                    // Проверка на отрицательные числа и 0
                    if ($x <= 1) {
                        return 0;
                    }

                    // Проверка на делители от 2 до sqrt($x)
                    for ($i = 2; $i * $i <= $x; $i++) {
                        if ($x % $i == 0) {
                            return 0;
                        }
                    }

                    return 1;
                }

                $number = 248;
                $result = isPrimeByPointer($number);
                echo "Число $number является простым(указатель): " . ($result ? '1' : '0') . "<br>";
                ?>

            </div>

            <div class="container_lr_7_ex_2">
                <h3>Задача 2:</h3>
                <p>Для  любого  задания  лабораторных  работ №  5  и  №6  реализовать  ввод, формирование/обработку и вывод массивов с применением функций.</p>
                <h3>Решение:</h3>
                <div class="container_form_lr_7_ex_2">
                    <form method="post" action="">
                        <label for="array">Введите элементы массива через запятую:</label><br>
                        <input type="text" id="array" name="array" required><br><br>
                        <input type="submit" value="Отправить">
                    </form>
                </div>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $inputArray = $_POST['array'];
                    $array = explode(',', $inputArray);

                    // Проверка, что все элементы массива являются числами
                    foreach ($array as $element) {
                        if (!is_numeric($element)) {
                            echo "<p>Ошибка: Все элементы массива должны быть числами.</p>";
                            exit;
                        }
                    }

                    // Функция для нахождения количества участков, на которых элементы убывают
                    function countDecreasingSegments($array) {
                        $count = 0;
                        $isDecreasing = false;

                        for ($i = 1; $i < count($array); $i++) {
                            if ($array[$i] < $array[$i - 1]) {
                                if (!$isDecreasing) {
                                    $count++;
                                    $isDecreasing = true;
                                }
                            } else {
                                $isDecreasing = false;
                            }
                        }

                        return $count;
                    }

                    $result = countDecreasingSegments($array);
                    echo "<p>Количество участков, на которых элементы убывают: $result</p>";
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


