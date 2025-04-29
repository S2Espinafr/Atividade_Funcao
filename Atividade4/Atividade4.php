<!DOCTYPE html>
<html>
<head><title>Converter para Celsius</title></head>
<body>
    <h2>Converter Fahrenheit para Celsius</h2>
    <form method="post">
        Fahrenheit: <input type="number" name="fahrenheit" required><br>
        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function converterParaCelsius($f) {
            return ($f - 32) * 5 / 9;
        }

        $f = $_POST['fahrenheit'];
        $c = converterParaCelsius($f);
        echo "<p>$f °F = " . round($c, 2) . " °C</p>";
    }
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>
