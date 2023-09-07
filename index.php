<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=§, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    for ($i = 33; $i <= 534; $i++) { // hier loop je door 33 t/m 534
    
        if ($i % 5 == 0 && $i % 9 == 0) { // dit kijkt als de getal deelbaar door 5 en 9 
            echo ("Web <br>"); // dit print resultaat
            continue;
        } elseif ($i % 5 == 0) { // dit kijkt als de getal door 5 kan delen
            echo ("Software <br>");
            continue;
        } elseif ($i % 9 == 0) { // dit kijkt als de getal door 9 kan delen
            echo ("<strong> Developer </strong> <br>");
            continue;
        }
        if ($i % 2 == 0) { // dit kijkt als je de getal door 2 kan delen
            echo "<strong> $i </strong> <br>";
            continue;
        }
        if ($i % 2 == 1) { // dit kijkt als de getal oneven is
            echo ("$i <br>");
            continue;
        }

    }
    ?>
</body>

</html>