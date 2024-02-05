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
    // Verifica se o formulário foi enviado usando o método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o número do usuário do formulário (se existir), caso contrário, define como 0
        $numeroUsuario = isset($_POST["numero"]) ? $_POST["numero"] : 0;

        // Calcula o antecessor e o sucessor do número fornecido pelo usuário
        $antecessor = $numeroUsuario - 1;
        $sucessor = $numeroUsuario + 1;

        // Exibe os resultados na página
        echo "<p>O antecessor de $numeroUsuario é: $antecessor</p>";
        echo "<p>O sucessor de $numeroUsuario é: $sucessor</p>";
    }

    // Verifica se o botão "Gerar Número Aleatório" foi pressionado
    if (isset($_POST["gerarNumero"])) {
        // Gera um número aleatório entre 0 e 100
        $numeroAleatorio = rand(0, 100);

        // Exibe o número aleatório gerado na página
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