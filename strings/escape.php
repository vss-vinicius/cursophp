<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de aspas e sequência de escape</title>
</head>

<body>
    <?php
    /*
        \n - Nova linha
        \t - Tabulação horizontal
        \\ - Barra invertida
        \$ - Sinal de cifrão
        \u{} - Codepoint Unicode
    */

    $nome = "Vinicius";
    $sobrenome = "Soares";
    $apelido = "V1N1";
    echo "$nome \"$apelido\" $sobrenome";
    ?>
</body>

</html>