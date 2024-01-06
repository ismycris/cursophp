<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>desafio 05</title>
</head>
<body>
    <form action="">
    <?php 
    $numero = $_POST["Numero"] ?? 0;
    $parteint = floor($numero);
    $partefrac = fmod($numero, 1);


    echo "Analisando o número $numero informado pelo usuario:</p>";

    echo " -> A parte interira do número é $parteint </p>";
    echo " -> A parte fracionária do número é $partefrac ";

    
    ?>
        <p><a href="javascript:history.go(-1)" class="voltar-link">Voltar</a></p>


    
    </form>
</body>
</html>