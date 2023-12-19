<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipos primitivos em php</title>
</head>
<body>
    <h1>teste de tipos primitivos</h1>
    <?php 
    //0x = hexadecimal
    //0b = binario
    //0 = octal
    //$num = 010;
    //echo "o valor da variavel é $num";

    //$v ="gustavo";
    //var_dump($v); -> string(7) "gustavo"

    //$num = (int)3e2; //3 x 10(2) coerção
    //echo" o valor de é $num";
    //var_dump($num);

    //$num = (float)"950";
  //  var_dump($num);

   // $casado = true;
  //  var_dump($casado);
  //  print "o valor para casado e $casado";
  
    //$vet = [6, 2.5, "maria", 3,false];
   // var_dump($vet)

    class pessoa{
        private string $nome;
    }
    $p = new pessoa;
    var_dump($p);


    ?>
</body>
</html>