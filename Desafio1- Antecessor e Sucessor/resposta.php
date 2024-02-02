<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
            $n = $_REQUEST["num"] ?? 0;
            $antecessor = $n -1;
            $sucessor = $n + 1;
            echo "O numero escolhido foi <strong>$n </strong>";
            echo "<br> O seu <em>antecessor</em> é $antecessor";
            echo "<br> O seu <em>sucessor</em> é $sucessor";
            
            ?>
        </p>
        <button onclick="javacript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>