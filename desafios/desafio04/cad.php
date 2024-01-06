<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>desafio 04</title>
</head>
<body>
    <main>
        <form action="">
    <?php 
    //cotacão vinda da API do banco central
    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");
    
    
    $url= 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
    $dados = json_decode(file_get_contents($url), true);
    
    //ar_dump($dados);
    
    $cotacao = $dados["value"][0]["cotacaoCompra"];

    $real = $_REQUEST["din"] ?? 0;
    
    $dolar = $real / $cotacao;


    $real_formatado = number_format($real, 2, ',', '.');
    $dolar_formatado = number_format($dolar, 2, ',', '.');

    echo " R$ $real_formatado reais é equivalente a $dolar_formatado dólares com a taxa de câmbio de $cotacao.";
    ?>
</form>
    </main>
</body>
</html>