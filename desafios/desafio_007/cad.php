<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>desafio 07</title>
</head>
<body>
    <?php 
    $salario = $_GET['sala'] ?? 0;
    $min = 1380.00;

    ?>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <h1>Informe seu salario</h1>
        <label for="">salario (R$):</label>
        <input type="number" name="sala" id="sala" min="0" value="<?=$salario?>"><br>
        <label >*considerando o salario de R$1.380.00</label><br>
        <input type="submit" value="Calcular">

        </form>
    </main>
    <section id="Resultado">
    <h2>Resultado final</h2>

    <?php 
    $tot = intdiv($salario, $min);
    $dif = $salario % $min;
    echo"Quem recebe um salario de $salario ganha $tot salarios minimos + $dif";

    ?>
</section>
</body>
</html>