<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <?php 
    $numero = $_POST["numero"] ?? "Sem número";

    echo "o numero digitado foi: $numero ". "<br>";
    echo "Antecessor: " . ($numero - 1) . "<br>";
    echo "Sucessor: " . ($numero + 1);
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</body>
</html>
