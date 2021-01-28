<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php

    require_once('functions.php');

    $name = isset($_GET['name']) ? $_GET['name'] : '[Não informado]';
    $age = isset($_GET['age']) ? $_GET['age'] : '[Não informado]';

    echo "Olá $name, $age <br>"; 
    
    // Função de soma
    echo soma(1,2,5) . '<br>';

    // Função de tratamento de strings
    stringTreat('Uma frase qualquer');

  ?>

</body>
</html>