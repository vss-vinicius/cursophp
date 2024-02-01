<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de Números Aleatórios</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeroUsuario = isset($_POST["numero"]) ? $_POST["numero"] : 0;
        $antecessor = $numeroUsuario - 1;
        $sucessor = $numeroUsuario + 1;

        echo "<p>O antecessor de $numeroUsuario é: $antecessor</p>";
        echo "<p>O sucessor de $numeroUsuario é: $sucessor</p>";
    }

    if (isset($_POST["gerarNumero"])) {
        $numeroAleatorio = rand(0, 100);
        echo "<p>Número aleatório gerado: $numeroAleatorio</p>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="numero">Escolha um número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Calcular</button>
    </form>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <button type="submit" name="gerarNumero">Gerar Número Aleatório</button>
    </form>
</body>

</html>