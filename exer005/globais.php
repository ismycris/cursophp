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
        <pre>
            <?php 
            echo" <h1> Superglobal Get </h1>";
            var_dump($_GET);

            echo" <h1> Superglobal POST </h1>";
            var_dump($_POST);

            echo"<h1> Seuperglobal REQUEST </h1>";
            var_dump($_REQUEST);
            ?>

        </pre>
    </main>
</body>
</html>