<!DOCTYPE html>
<html>
<head><title>Maior Número</title></head>
<body>
    <h2>Encontrar o Maior de Três Números</h2>
    <form method="post">
        Número 1: <input type="number" name="n1" required><br>
        Número 2: <input type="number" name="n2" required><br>
        Número 3: <input type="number" name="n3" required><br>
        <input type="submit" value="Comparar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function maiorNumero($a, $b, $c) {
            return max($a, $b, $c);
        }

        $maior = maiorNumero($_POST['n1'], $_POST['n2'], $_POST['n3']);
        echo "<p>O maior número é: $maior</p>";
    }
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>
