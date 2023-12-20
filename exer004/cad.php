<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>resultado</title>
</head>
<body>
    <header>
        <h1>resultado do processamento</h1>
    </header>
    <main>
        <?php 
        //var_dump($_GET)//_REQUEST -> $_GET $_POST $_COOKIES
        $nome = $_GET["nome"] ?? "SEM NOME";
        $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
        echo "<p> é um prazer te conhecer <strong> $nome $sobrenome</strong> ! este é meu site"
        ?>
        <p><a href="javascript:history.go(-1)">voltar para pagina anterior</a></p>

    </main>
    
</body>
</html>