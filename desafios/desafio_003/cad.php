<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>desafio 03</title>
</head>
<body>
    <main>
        <form action="">
    <?php 
    $cotacao = 4.91 ;

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