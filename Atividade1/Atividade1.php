<!DOCTYPE html>
<html>
<head><title>Multiplicar</title></head>
<body>
    <h2>Multiplicar Dois Números</h2>
    <form method="post">
        Número 1: <input type="number" name="num1" required><br>
        Número 2: <input type="number" name="num2" required><br>
        <input type="submit" value="Multiplicar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function multiplicar($a, $b) {
            return $a * $b;
        }

        $resultado = multiplicar($_POST['num1'], $_POST['num2']);
        echo "<p>Resultado: $resultado</p>";
    }
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>

