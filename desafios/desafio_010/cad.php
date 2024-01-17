<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>desafio 10</title>
</head>
<body>
    <?php 
    $atual = date("Y");
    $nasc = $_GET['nasc'] ?? '2000';
    $ano = $_GET['sno'] ?? $atual;
    ?>
    <main>
        <h1>Calculando a idade</h1>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">

            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number"name = "nasc" id="nasc" required min="1900" value="<?=$nasc?>">
            <label for="ano">quer saber sua idade em que ano?</label>
            <input type="number"name = "ano" id="ano"  min="1900" value="<?$ano?>" >

            <input type="submit" value="qual sera minha idade?">
    </form>
    </main>

    <section>
        <?php 
        $idade = $ano - $nasc;
    
        ?>
    <h2>Resultado</h2>
    <p>Quem nasceu em <?=$nasc?> vai ter <strong> <?=$idade?> anos</strong>em <?=$ano?>!</p>

    </section>
</body>
</html>