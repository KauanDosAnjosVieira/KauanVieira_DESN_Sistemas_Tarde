<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada em PHP</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
        }
        th, td {
            border-style: solid;
            width: 50px;
        }
    </style>
</head>
<body>
    <h1>Kauan Dos Anjos Vieira</h1>

    <table>
        <h2>Tabuada do 1 ao 10</h2>
        <?php
        for ($i = 1; $i <= 10; $i++) 
        {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) 
            {
                $resultado = $i * $j;
                echo "<td> $i x $j = $resultado </td>";
            }
          
        }
    ?>
    </table>

</body>
</html>