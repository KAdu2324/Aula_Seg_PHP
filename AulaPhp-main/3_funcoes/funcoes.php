<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcões em PHP</title>
</head>
<body>
    <?php
        function darBoasVindas() {
            print("ola, seja bem vindo(a)");
        }
        
        function darBoasVindas2 ($nome){
            return "ola <br>" . $nome . ", seja bem vindo (a) <br>";
        }




        function calculaAreaTriangulo($base, $altura){
            $area = ($base * $altura) /2;
            return $area;
        }

        echo darBoasVindas();
        echo darBoasVindas();
        echo darBoasVindas();
        echo darBoasVindas();
        echo darBoasVindas();

        echo"<br>";

        $areaTruiangulo = calculaAreaTriangulo(4,8);
        echo "area do triangulo ". $areaTruiangulo;

        echo darBoasVindas2("Mia");
    ?>
    
</body>
</html>