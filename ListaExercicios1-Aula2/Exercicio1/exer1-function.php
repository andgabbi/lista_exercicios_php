<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Exercícios </title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <div>
        <?php

            if ($_POST) {
                $ano = $_GET['ano'];
        
                if ($ano % 4 == 0 && $ano % 100 != 0 || $ano % 400 == 0) {
                    echo "Esse ano é bissexto";
                } else {
                    echo "Esse ano não é bissexto";
                }
            }
            
        ?>

        </br>
        <a href="Exercicio1.php"> Voltar </a>
    </div>
</body>

</html>