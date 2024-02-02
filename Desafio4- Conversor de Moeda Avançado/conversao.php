<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        
        $inicio =  date("m-d-Y",strtotime("-7 days"));
        $fim = date("m-d-Y");
        
        #Cotação vinda do Banco Central utilizando API em JSON
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        //var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];


        $real = $_REQUEST["din"] ?? 0;
        $dolar = $real / $cotacao;
        

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus".numfmt_format_currency($padrao,$real,"BRL")." equivalem a <strong>". numfmt_format_currency($padrao, $dolar,"USA")."US</strong> </p>";
        
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>