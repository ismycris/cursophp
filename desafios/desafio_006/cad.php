<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    //CAPTURANDO DA DADOS DO formulario retroalimentado
    $valor1 =  $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 1;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

        <label for="v1">valor 1</label>
        <input type="number" name="v1" id="v1" min="0" value="<?=$valor1?>">
        <label for="v2">valor 2</label>
        <input type="number" name="v2" id="v2"  min="1"  value="<?=$valor2?>">
        <input type="submit" value="Analisar">

        </form>
    </main>
    <section id="Resultado">
        <h2>Resultado</h2>
        <?php 
        //calculos
            $quociente = intdiv($valor1, $valor2);
            $resto = $valor1 % $valor2;
        ?>


    <table class="divisao">
        <tr>
            <td><?=$valor1?></td>
            <td><?=$valor2?></td>
        </tr>
        <tr>
        <td><?=$resto?></td>
            <td><?=$quociente?></td>
        </tr >
    </table>

    </section>
</body>
</html>