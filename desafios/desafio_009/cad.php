<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>desafio 09</title>
</head>
<body>
    <?php 
    $valor1 = $_GET['v1'] ?? '';
    $peso1 = $_GET['p1'] ?? '';
    $valor2 = $_GET['v2'] ?? '';
    $peso2 = $_GET['p2'] ?? '';
    ?>
    <main>
        <h1>Medias aritmeticas</h1>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
    
            <label for="v1">1 valor</label>
            <input type="number"name = "v1" id="v1"  required value="<?=$valor1?>">
            <label for="p1">1 peso</label>
            <input type="number"name = "p1" id="p1" min="1" required value="<?=$peso1?>">

            <label for="p1">2 valor</label>
            <input type="number"name = "v2" id="v2" requiredvalue="<?=$valor2?>">
            <label for="p1">2 peso</label>
            <input type="number"name = "p2" id="p2"  min="1" requiredvalue="<?=$peso2?>">

            <input type="submit" value="Calcular medias">
    </form>
    </main>

    <section>
        <?php 
        $ma = ($valor1 + $valor2) / 2;
        $mp = ($valor1 * $peso1 + $valor2 * $peso2)/($peso1+ $peso2);
        
        ?>
        <h2>Calculo das medias</h2>
        <p>Analisar os valores {} e {}:</p>
        <ul>
            <li>A <strong>media aritimetica simples</strong> entre os valores e igual a {}</li>
            <li>a<strong> media aritimetica ponderada</strong> com pesos {} e {} e igual a {}.</li>
        </ul>

    </section>
</body>
</html>