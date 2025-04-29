<!DOCTYPE html>
<html>
<head><title>Validar Idade</title></head>
<body>
    <h2>Verificar Categoria de Idade</h2>
    <form method="post">
        Idade: <input type="number" name="idade" required><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function validarIdade($idade) {
            if ($idade < 18) return "Menor de idade";
            elseif ($idade >= 60) return "Idoso";
            else return "Adulto";
        }

        echo "<p>Com idade de {$_POST['idade']}, a pessoa é: " . validarIdade($_POST['idade']) . "</p>";
    }
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>
