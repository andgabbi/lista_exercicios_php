<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Exercícios </title>
    <link rel="stylesheet" type="text/css" href="../style2.css">
</head>
<body>
<div>
    <?php
    if ($_POST) {
        $valor1_rec = $_POST ['valor1'];
        $valor2_rec = $_POST['valor2'];
        function menorValor($valor1, $valor2)
        {
            if ($valor1 < $valor2) {
                return "Esse é o menor valor digitado: " . $valor1;
            } else {
                return "Esse é o menor valor digitado: " . $valor2;
            }
        }

    echo menorValor($valor1_rec, $valor2_rec );
    }
    ?>
    </br>
    <a href="exercicio1.php"> Voltar </a>
</div>
</body>
</html>