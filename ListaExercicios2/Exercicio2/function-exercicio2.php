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
                $valor1_rec = $_POST['valor1'];
                $valor2_rec = $_POST['valor2'];
                $valor3_rec = $_POST['valor3'];
                $valor4_rec = $_POST['valor4'];
                $valor5_rec = $_POST['valor5'];

                function somaDivisores($valor){
                        $divisores = 0;
                        for( $count=1 ; $count < $valor ; $count++)
                            if($valor % $count == 0)
                                $divisores += $count;
                        return $divisores;
                }

                echo "A soma dos divisores do primeiro número é :  " . somaDivisores($valor1_rec) . "<br />";
                echo  "A soma dos divisores do segundo número é :  " . somaDivisores($valor2_rec). "<br />";
                echo "A soma dos divisores do terceiro número é :  " . somaDivisores($valor3_rec). "<br />";
                echo "A soma dos divisores do quarto número é :  " . somaDivisores($valor4_rec). "<br />";
                echo "A soma dos divisores do quinto número é :  " . somaDivisores($valor5_rec). "<br />";

            }
    ?>
    </br>
    <a href="exercicio2.php"> Voltar </a>
</div>
</body>
</html>