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
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];



        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        echo 'Sua média é de: ' . $media;

        if ($media >= 7){
            echo '</br> Você foi aprovado! Parabéns!';
        } else {
            echo '</br> Você foi reprovado! Estude mais na próxima!';
        }

    }
    ?>
    </br>
    <a href="exercicio5.php"> Voltar </a>
</div>
</body>
</html>
