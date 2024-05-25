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
    <title>Conversor</title>
</head>
<body>
    <?php
        require_once 'class.php';
        $conversor = new Conversor;
    ?>
    <main>
        <h1>[CONVERSOR DE TEMPERATURAS]</h1>
        <form action="result.php" method="post">
            <li><input  type="number" name="celsius" placeholder="°F to °C"></li><br>
            <li><input type="number" name="fahrenheit" placeholder="°C to °F"></li><br>
            <input type="submit" value="CONVERTER">
            
        </form>
    </main>
</body>
</html>