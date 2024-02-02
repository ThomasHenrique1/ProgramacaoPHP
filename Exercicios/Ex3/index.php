<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal , 0b = binary , 0 = Octal
        //$num = 300;
        //echo "o valor da viriavel é $num";

        //$v = 300;
        //var_dump($v);// Vizualiza que tipo de variavel é string, flot, int etc.
        
        //$nome = "Thomas";
        //var_dump($nome);
        
        //$casado = true;
        //print "O valor para casado é $casado";

        //$vet =  [6,2,9,3,5]; 
        // É possivel adicionar mais elementos como "false" ou até mesmo nomes no meio de numeros.
        //var_dump($vet);

        class Pessoa{
            private string $nome;
        }
        $p = new Pessoa();
        var_dump($p);
    ?>
</body>
</html>