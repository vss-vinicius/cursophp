<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo aspas simples e aspas duplas</title>
</head>

<body>
    <?php
    $nome = 'Vinicius';
    $sobrenome = "Soares Santos \u{1F596}";
    echo "$nome $sobrenome";

    /*
        Portanto, essa página PHP exibe o nome "Vinicius" seguido pelo sobrenome "Soares Santos" e um emoji. A utilização de aspas duplas permite a interpolação de variáveis dentro da string, enquanto as aspas simples mantêm o texto literal, sem interpretar variáveis ou caracteres de escape.
    */
    ?>
</body>

</html>