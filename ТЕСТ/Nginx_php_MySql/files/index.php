<!DOCTYPE html>

<html>
<head>
    <title>Версия и настройки PHP</title>
</head>
<body>
    <h1>Информация о версии и настройках PHP</h1>

    <?php
    // Вывод версии PHP
    echo "<p>Версия PHP: " . phpversion() . "</p>";

    // Вывод настроек PHP
    echo "<h2>Настройки PHP</h2>";
    echo "<pre>";
    phpinfo(INFO_ALL);
    echo "</pre>";
    ?>

</body>
</html>
