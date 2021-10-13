<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Exercícios </title>
    <link rel="stylesheet" type="text/css" href="../style3.css">
</head>
<body>
<div>
    <?php
    if ($_POST) {
        $r_dia = $_POST ['dia'];
        $r_mes = $_POST ['mes'];
        $r_ano = $_POST ['ano'];

        function confirm_date($mes, $dia, $ano){
            if (checkdate($mes, $dia, $ano)){
                setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                return 'Data válida. <br />' . 'O dia da semana é ' . strftime('%A');

            } else {
                return 'Data Inválida';
            }
        }
        echo confirm_date($r_mes, $r_dia,  $r_ano);
    }
    ?>
    </br>
    <a href="exercicio2.php"> Voltar </a>
</div>
</body>
</html>