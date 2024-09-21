<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Author" lang="ru" content="Сальцевич Денис">
        <meta name="description" content="Линейный вычислительный процесс">
        <title>Лабораторная работа № 3</title>
        <link rel="stylesheet" href="\style_lr_3.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <main>
            <header>
                <div class="site-title"><a href="index.php">LaboTronick</a></div>
                <div class="buttons">
                    <a href="index_lr_3.php">ЛАБА 3</a>
                    <a href="">Страница 2</a>
                    <a href="">Страница 3</a>
                </div>
            </header>
            <div class="background-image"></div>
        </main>

        <div class="container">
            <div class="example_1">
                <h1>Лабораторная работа № 3</h1>
                <h2>Вариант 24</h2>
                <h3>Задача 1:</h3>
                <p>Дано значение угла α в градусах (0 < α < 360). Определить значение этого же угла в радианах, учитывая, что 180 ◦=π радианов. В качестве значения π использовать 3.14.</p>
                <h3>Решение:</h3>

                <?php
                // Значение угла в градусах
                $alpha = 117; // Пример значения угла

                // Значение π
                $pi = 3.14;

                // Преобразование градусов в радианы
                $radians = $alpha * ($pi / 180);

                // Вывод результата
                echo "Ответ: Угол $alpha градусов в радианах: $radians";
                ?>
            </div>

            <div class="example_2">
                <h3>Задача 2:</h3>
                <p>Дано количество миллиметров А и сантиметров В. Вывести число, равное сумме А+В в миллиметрах.</p>
                <h3>Решение:</h3>

                <?php
                // Задаем значения миллиметров (А) и сантиметров (В)
                $millimeters = 582; // Пример значения миллиметров
                $centimeters = 32; // Пример значения сантиметров

                // Преобразование сантиметров в миллиметры
                $totalMillimeters = $millimeters + ($centimeters * 10);

                // Вывод результата
                echo "Ответ: Сумма $millimeters миллиметров и $centimeters сантиметров в миллиметрах равна: $totalMillimeters\n";
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


