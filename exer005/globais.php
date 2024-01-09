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

            setcookie("dia-da-semana","SEGUNDA",time()+ 3600);

            session_start();
            $_SESSION["teste"]= "funcionou!";

            echo" <h1> Superglobal Get </h1>";
            var_dump($_GET);

            echo" <h1> Superglobal POST </h1>";
            var_dump($_POST);

            echo"<h1> Seuperglobal REQUEST </h1>";
            var_dump($_REQUEST);

            echo"<h1> Seuperglobal COOKIE </h1>";
            var_dump($_COOKIE);

            echo"<h1> Seuperglobal SESSION </h1>";
            var_dump($_SESSION);

            echo"<h1> Seuperglobal ENV </h1>";
            var_dump($_ENV);
           // foreach(getenv() as $c => $v){
          //      echo"$c -> $v <br>";
          //  }
            echo"<h1> Seuperglobal SERVER </h1>";
            var_dump($_SERVER);

            echo"<h1> Seuperglobal globals </h1>";
            var_dump($GLOBALS);

            ?>

        </pre>
    </main>
</body>
</html>