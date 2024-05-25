<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: black;
            color: white;
        }
        h1, h2 {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    <title>Convertido</title>
</head>
<body>
    
    <h1>[TEMPERATURAS CONVERTIDAS]</h1>
    <?php
        require_once 'class.php';
        $t = new Conversor;
        $celsius = (($t->getCelsius() - 32) / 1.8);
        $fahrenheit = (($t->getFahrenheit() * 1.8) + 32);

        echo "<h2><li>". (number_format($t->getCelsius(), 0, ',', '.')) ."°F EM CELSIUS: ". (number_format($celsius, 0, ',', '.')) ."°C</li></h2>";
        echo "<h2><li>". (number_format($t->getFahrenheit(), 0, ',', '.')) ."°C EM FAHRENHEIT: ". (number_format($fahrenheit, 0, ',', '.')) ."°F</li></h2>";
    ?>
</body>
</html>