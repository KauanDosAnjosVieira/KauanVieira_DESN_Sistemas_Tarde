<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções PHP</title>
</head>
<body>
    <h1>Kauan Dos Anjos Vieira</h1>
    <?php
    $name = "Kauan Dos Anjos Vieira";
    print $name . "<br>";


    $length = strlen($name);
    print "Comprimento: " . $length . "<br>";

    $cmp = strcmp($name, "Brian Le");
    print $cmp ."<br>";

    $index = strpos($name, "e");
    print "Posição da letra 'e': <br>";

    $first = substr($name, 9, 5);
    print "Substring: " . $first . "<br>";

    $name = strtoupper($name);
    print "Nome em maiúsculas: " . $name . "<br>";
    ?>

    <?php
     $cidade = "Joinville";
     $estado = "SC";
     $idade = 174;
     $frase_capital = "A cidade de $cidade é a cidade das flores e das bicicletas, fica no estado de $estado";
     $frase_idade = "$cidade tem mais de $idade anos de história";
    echo "<h3>$frase_capital</h3>";
    echo "<h4>$frase_idade</h4>";
    ?>
</body>
</html>