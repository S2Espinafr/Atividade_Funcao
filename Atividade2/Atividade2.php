<!DOCTYPE html>
<html>
<head><title>Par ou Ímpar</title></head>
<body>
    <h2>Verificar se é Par ou Ímpar</h2>
    <form method="post">
        Número: <input type="number" name="numero" required><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function parOuImpar($n) {
            return ($n % 2 == 0) ? "Par" : "Ímpar";
        }

        echo "<p>O número {$_POST['numero']} é: " . parOuImpar($_POST['numero']) . "</p>";
    }
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>
