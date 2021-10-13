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
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];

        function calculo($alt, $pes){
            $imc = $pes/ ($alt * $alt);
            return $imc;
        }

        function imc($imc){
            if ($imc <= 18.5){
               return "Seu IMC é de $imc, portanto vc está abaixo do peso.";

            } elseif ($imc >= 18.6 && $imc <= 24.9){
                return "Seu IMC é de " .  number_format($imc, 2, '.', ' ') . " , portanto você está em seu peso ideal. Parabéns!";

            } elseif ($imc >= 25 && $imc <= 29.9){
                return "Seu IMC é de " . number_format($imc, 2, '.', ' ') . " , portanto você está levemente acima do peso.";

            } elseif ($imc >= 30 && $imc <= 34.9){
                return "Seu IMC é de " . number_format($imc, 2, ',', ' ') . " , portanto você está em Obesidade grau I.";

            } elseif ($imc >= 35 && $imc <= 39.9){
                return "Seu IMC é de " . number_format($imc, 2, '.', ' ') . " , portanto você está em Obesidade grau II (severa)";

            } elseif ($imc >= 40){
                return "Seu IMC é de " . number_format($imc, 2, '.', ' ') . " , portanto você está em Obesidade grau III (mórbida)";
            }
        }

        echo imc(calculo($altura, $peso));


    }
    ?>
    </br>
    <a href="exercicio5.php"> Voltar </a>
</div>
</body>
</html>