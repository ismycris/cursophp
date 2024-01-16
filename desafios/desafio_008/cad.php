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
    $numero = $_GET['nume'] ?? 0;
    

    ?>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <h1>Informe um numero</h1>
        <label for="">Numero:</label>
        <input type="number" name="nume" id="nume" min="0" value="<?=$salario?>"><br>
        <input type="submit" value="Calcular">

        </form>
    </main>
    <section id="Resultado">
    <h2>Resultado final</h2>

    <?php 
    $raizqua = sqrt($numero);
    $raizQuadrada = number_format($raizqua, 3); // Formata para três casas decimais
    $raizcubi = pow($numero, 1/3);
    $raizCubica = number_format($raizcubi, 3); // Formata para três casas decimais
    
    echo"Analisando o numero $numero, temos: </p>";
    echo"* a sua raiz quadrada é $raizQuadrada </p>";
    echo"* a sua raiz cubica é $raizCubica";

    ?>
</section>
</body>
</html>