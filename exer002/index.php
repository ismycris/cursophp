<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>exemplo de php</h1>
    <?php 
    date_default_timezone_set("America/Sao_Paulo");//gmt-3
        echo"Hoje e dia ".date("d/M/Y");
        echo "e a hora e " .date("G:i:s T");
    ?>
</body>
</html>