<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>

    <?php 
    // CAPTURING DATA FROM THE FORM
    $divi =  $_GET['divi'] ?? 0;
    $dendo = $_GET['dendo'] ?? 0;
    ?>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

    <label for="dendo">dividendo</label>
        <input type="number" name="dendo" id="dendo" value="<?= $dendo ?>">

        <label for="divi">divisor</label>
        <input type="number" name="divi" id="divi" value="<?= $divi ?>">


        <input type="submit" value="Divide">
    </form>


    </main>
    <section id="Resultado">
        <h2>Result of the division</h2>
        <?php 
            // CHECK IF VALUES ARE NOT ZERO BEFORE DIVISION
            if ($dendo != 0) {
                $divisao = $dendo /  $divi;
                echo $divisao;
            } else {
                echo "Cannot divide by zero.";
            }
        ?>
    </section>
    
</body>
</html>
