<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nowdoc</title>
</head>

<body>
    <?php
    $canal = "Curso em Vídeo";
    $ano =  date('Y');
    echo <<< 'TESTE'
            Olá galera do $canal!
                    Tudo bem com vocês?
                Como está sendo esse ano de $ano?
            Abraços! \u{1F596}
        TESTE;
    ?>
</body>

</html>