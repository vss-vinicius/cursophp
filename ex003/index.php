<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>

    <?php
    /*
        0x = Hexadecimal 
        0b = Binário
        0 = Octal   

        $num = 010;
        echo "O valor da variável é $num";
    */

    /*
        $v = "Vinicius";
        var_dump($v);

        A função var_dump() no PHP é usada para exibir informações sobre uma ou mais variáveis, incluindo seu tipo e valor. É frequentemente usada para depuração (debugging) e para entender melhor a estrutura e o conteúdo de variáveis complexas.

        Quando você chama var_dump() passando uma ou mais variáveis como argumentos, ela exibirá informações detalhadas sobre essas variáveis, incluindo:

        1. Tipo de dado: Indica o tipo de dado da variável (por exemplo, string, inteiro, array, objeto, etc.).

        2. Tamanho e valor: Para tipos de dados escalares, como inteiros e strings, exibe o valor da variável. Para arrays e objetos, exibe o número de elementos ou propriedades, bem como informações sobre cada elemento ou propriedade.

        3. Estrutura: Mostra a estrutura aninhada de arrays e objetos, facilitando a compreensão da organização dos dados.
    */

    /*
        $num = 3e2; | 3 x 10(2)
        echo "O valor é $num";        
    */

    /*
        $num = (int) 3e2; Coerção
        var_dump($num);
    */

    /*        
        $num = (float) "950";
        var_dump($num);
    */

    /*
        $casado = true;
        var_dump($casado);
        print "O valor para casado é $casado";
    */

    /*
        $vet = [6, 2.5, "Maria", 3, false];
        var_dump($vet);
    */

    /*
        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    */
    ?>
</body>

</html>