<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>desafio 002</title>
</head>
<body>
    <h2>Sorteador de número</h2>
    <?php 
    $min = 0;
    $max = 100;
    $num = mt_rand($min, $max);

    echo "<p>O número sorteado é: $num</p>";
    ?>

<button onclick="javascript:document.location.reload()">&#x1F504; De novo</button>
</body>
</html>
