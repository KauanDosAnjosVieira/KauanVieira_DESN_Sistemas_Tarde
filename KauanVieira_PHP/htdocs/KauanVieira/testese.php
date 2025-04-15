<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste SE em PHP</title>
</head>
<body>
    <h1>Kauan Dos Anjos Vieira</h1>
    <?php
       //Declara variável númerica
       $umidade = 91;
       // Testa de $umidade maior que 90. Retorna um boolean
       $vaiChover = ($umidade > 90);
       // Testa se $vaiChover é verdadeiro
       if ($vaiChover) {
           echo "Vai chover com toda certeza absoluta da terra!";
       } 
    ?>

    <br><br>
    <h2>IF ELSE</h2>
    <?php
      $a = 17;
      if ($a > 17)
      print "Maior de idade.<br>";
        else
      print "Menor de idade.<br>";
    ?>
    
</body>
</html>