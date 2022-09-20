<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desvio condicional</title>
</head>
<body>
    <?php
     /*
      * O desvio condicional nada mais é do que a
      * alteração em runtime (em tempo de execução)
      * do fluxo normal de execução de nosso código, 
      * baseado em uma condição "booleana" (verdadeira ou 
      * falsa)
      * .... OU SEJA....
      *   SE (<CONDIÇÃO BOOLEANA>) {
      *      se der verdadeiro, este bloco será
      *      executado
      *  } SENÃO {
      *      se der falso, este bloco será executado
      *  }
      * 
      *  No PHP, fica assim: 
      *  if(<condição>) {
      *   //true 
      *  } else {
      *   //false
      *  }
      */
 
      /**
       * 
       *  Dentro da condição booleana, o PHP suporta
       * operações lógicas... as principais são:
       *     ==   -> Comparação entre valores. Ex: 2 == 2 -> Verdadeiro
       *     !=   -> Diferente. Ex: 2 != 5 -> Verdadeiro
       *     < ou >   -> menor ou maior. Ex: 2 > 5  -> Falso
       *     ===     -> Verifica se são iguais E do mesmo TIPO. Ex: "2" === 2  -> Falso
       *     !==     -> Verifica se são difernetes e de TIPOS diferentes
       *     ... vamos praticar...  
       */
       
       $x = 35; //x e uma variavael do tipo "intteira"
       $y = "35"; //y e uma variavele do tipo "textetual"
        $z=21;
       $fumante = false;
       
       if($fumante) {
        echo 'È fumante..!';
       } else{
        echo ' Não é fumante';
       }
        echo '<br>';

        if($x == $z){
            echo 'ah! x e ingual a z';

        }else {
            echo'puxa x e diferente de z';
        }

    ?>
</body>
</html>