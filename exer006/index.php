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
    $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

        <label for="v1">valor 1</label>
        <input type="number" name="v1" id="v1" value="<?=$valor1?>">
        <label for="v2">valor 2</label>
        <input type="number" name="v2" id="v2" value="<?=$valor2?>">
        <input type="submit" value="Analisar">

        </form>
    </main>
    <section id="Resultado">
        <h2>Resultado da soma</h2>
        <?php 
        //calculos
            $quociente = intdiv($valor1, $valor2);
            $resto = $valor1 % $valor2;

            echo "<ul>";
            echo "<li>Dividendo: $valor1</li>";
            echo "<li>Divisor: $valor2 </li>";
            echo "<li>Quociente: $quociente</li>";
            echo "<li>Resto: $resto</li>";
            echo "<ul>";


            $soma = $valor1 + $valor2;
            echo"<p> a soma entre os valores $valor1 e $valor2 e igual a $soma </p>";
        ?>
    </section>
</body>
</html>